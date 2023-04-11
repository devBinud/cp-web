<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use App\Utils\RegexUtil;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CaseStudyCtlr extends Controller
{
    private $casestudy;
    public function __construct()
    {
        $this->casestudy = new CaseStudy();
    }

    public function addCaseStudy(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.casestudy-admin')->with([
                'page' => 'casestudy',
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $userId = $request->session()->get('id', 0) ?? '1';
            $image = $request->file('image') ?? null;
            if (empty($image) || $image == "") {
                return JsonUtil::getResponse(false, "Image cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $title = $request->get('title') ?? '';
            if (empty($title) || $title == "") {
                return JsonUtil::getResponse(false, "Title cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $slug = $request->get('slug') ?? '';
            if (empty($slug) || $slug == "") {
                return JsonUtil::getResponse(false, "Slug cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->casestudy->isSlugAvailable($slug)) {
                return JsonUtil::getResponse(false, "Slug is already available.Please change the slug!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $techIcon = $request->file('techIcon') ?? [];
            if (empty($techIcon) || $techIcon == "") {
                return JsonUtil::getResponse(false, "Tech Icon cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $techUsed = $request->get('techUsed') ?? [];
            if (empty($techUsed) || $techUsed == "") {
                return JsonUtil::getResponse(false, "Tech Used Icon cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $description = $request->get('summary-ckeditor') ?? '';
            if (empty($description) || $description == "") {
                return JsonUtil::getResponse(false, "Description cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $metaTitle = $request->get('metaTitle') ?? '';
            $metaDescription = $request->get('metaDescription') ?? '';
            $metaHeader = $request->get('metaHeader') ?? '';
            $metaFooter = $request->get('metaFooter') ?? '';
            $metaKeywords = $request->get('metaKeywords') ?? '';

            $ext = $image->getClientOriginalExtension();
            $csFilename = 'bImage' . uniqid() . $userId . '.' . $ext;

            if ($image->getSize() > (1024 * 1024 * 2)) {
                return JsonUtil::getResponse(false, "Maximum file size 6mb", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } else {
                try {
                    $image->storeAs('/casestudy/feature-image', $csFilename);
                } catch (Exception $e) {
                    return $e->getMessage();
                    return JsonUtil::getResponse(false, "can't upload", JsonUtil::$_UNPROCESSABLE_ENTITY);
                }
            }

            $techIconNames = [];

            foreach ($techUsed as $key => $value) {
                if (empty($techUsed[$key])) {
                    return JsonUtil::getResponse(false, "Tech Used Name is required " . $key + 1, JsonUtil::$_UNPROCESSABLE_ENTITY);
                }

                if (empty($techIcon[$key])) {
                    return JsonUtil::getResponse(false, "Please upload Icon" . $key + 1, JsonUtil::$_UNPROCESSABLE_ENTITY);
                } else {
                    $ext1 = $techIcon[$key]->getClientOriginalExtension();
                    $iconFilename = 'bImage' . uniqid() . $key . $userId . '.' . $ext1;

                    // return $blogFilename;

                    if ($techIcon[$key]->getSize() > (1024 * 1024 * 2)) {
                        return JsonUtil::getResponse(false, "Maximum file size 6mb", JsonUtil::$_UNPROCESSABLE_ENTITY);
                    } else {
                        try {
                            $techIcon[$key]->storeAs('/techicon/icons', $iconFilename);
                        } catch (Exception $e) {
                            return $e->getMessage();
                            return JsonUtil::getResponse(false, "can't upload", JsonUtil::$_UNPROCESSABLE_ENTITY);
                        }
                    }
                }

                array_push($techIconNames, $iconFilename);
            }

            $values = [
                'cs_image' => $csFilename,
                'cs_title' => $title,
                'slug' => $slug,
                'cs_description' => $description,
                'tech_used' => implode(',', $techUsed),
                'tech_icon' => implode(',', $techIconNames),
                'meta_title' => $metaTitle,
                'meta_description' => $metaDescription,
                'meta_header' => $metaHeader,
                'meta_footer' => $metaFooter,
                'meta_keywords' => $metaKeywords,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $userId,
            ];


            try {
                $this->casestudy->insertCs($values);
                return JsonUtil::getResponse(true, "Case Study saved successfully!", JsonUtil::$_STATUS_OK);
                // DB::commit();
            } catch (Exception $e) {
                // DB::rollBack();
                return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function viewCaseStudy()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $this->casestudy->getAllCs();
            return view('admin.view-cs')->with([
                'page' => 'viewCasestudy',
                'datas' => $data,
                'sn' => $data == null ? 0 : ($data->currentPage() - 1) * $data->perPage(),
            ]);
        }
    }

    public function editCsAdmin(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $csId = $request->get('cs_id') ?? '';
            if (empty($csId) || $csId == "") {
                return abort(404);
            } elseif (!RegexUtil::isNumeric($csId)) {
                return abort(404);
            }
            $csData = $this->casestudy->getSingleCs($csId);
            // dd($csData);

            return view('admin.edit-cs')->with([
                'page' => 'editcs',
                'csData' => $csData,

            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            // "tech_used": "html,css,java"
            // +"tech_icon": "bImage63182d6bf344600.png,bImage63182d6c490d610.png,bImage63182d6c49d7b20.png"

            $userId = $request->session()->get('id', 0) ?? '1';
            $csId = $request->get('cs_id') ?? '';
            $preImageName  = $request->get('preImageName');
            $image = $request->file('img_file') ?? null;
            $title = $request->get('title') ?? '';
            $slug = $request->get('slug') ?? '';
            $techIcon = $request->file('techIcon') ?? [];
            $preIconeName =  $request->get('prv_icon') ?? [];

            // dd($preIconeName);
            $techUsed = $request->get('techUsed') ?? [];
            // dd($techUsed);

            $description = $request->get('summary-ckeditor') ?? '';
            $metaTitle = $request->get('metaTitle') ?? '';
            $metaDescription = $request->get('metaDescription') ?? '';
            $metaHeader = $request->get('metaHeader') ?? '';
            $metaFooter = $request->get('metaFooter') ?? '';
            $metaKeywords = $request->get('metaKeywords') ?? '';

            $imageName = "";

            if ($image == null || empty($image)) {
                $imageName = $preImageName;

                // $errorMsg['imgErr'] = "Featured image is required";
            } else {
                $ext = $image->getClientOriginalExtension();

                $imageSize = getimagesize($image);
                // $width = $imageSize[0];
                // $height = $imageSize[1];

                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    return JsonUtil::getResponse(false, "Supported file formats are - png, jpg, jpeg!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                } elseif ($image->getSize() > (1024 * 1000 * 2)) {
                    return JsonUtil::getResponse(false, "Maximum supported file size is 2 MB!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                }
                $csData = $this->casestudy->getSingleCs($csId);
                $csImage = $csData->cs_image;

                if (File::exists(base_path("assets/uploads/casestudy/feature-image/" . '/' . $csImage))) {
                    File::delete(base_path("assets/uploads/casestudy/feature-image/" . '/' . $csImage));
                }
                // Upload Profile Img
                // DB::beginTransaction();
                $imageName = 'akib_' . '_' . time() . '.' . $image->getClientOriginalExtension();

                try {
                    $upload = $image->storeAs('/casestudy/feature-image', $imageName);
                    // if (!$upload) {
                    //     return JsonUtil::serverError();
                    // }
                } catch (Exception $e) {
                    return $e->getMessage();
                    return JsonUtil::serverError();
                }
            }

            $techIconNames = [];


            foreach ($techUsed as $key => $value) {
                if (empty($techUsed[$key])) {
                    return JsonUtil::getResponse(false, "Tech Used Name is required " . $key + 1, JsonUtil::$_UNPROCESSABLE_ENTITY);
                }

                if (empty($techIcon[$key])) {

                    $iconFilename =  $preIconeName[$key];
                    // return JsonUtil::getResponse(false, "Please upload Icon" . $key + 1, JsonUtil::$_UNPROCESSABLE_ENTITY);
                } else {
                    $ext1 = $techIcon[$key]->getClientOriginalExtension();
                    $iconFilename = 'bImage' . uniqid() . $key . $userId . '.' . $ext1;

                    // return $blogFilename;

                    if ($techIcon[$key]->getSize() > (1024 * 1024 * 2)) {
                        return JsonUtil::getResponse(false, "Maximum file size 6mb", JsonUtil::$_UNPROCESSABLE_ENTITY);
                    } else {
                        try {
                            $techIcon[$key]->storeAs('/techicon/icons', $iconFilename);
                        } catch (Exception $e) {
                            return $e->getMessage();
                            return JsonUtil::getResponse(false, "can't upload", JsonUtil::$_UNPROCESSABLE_ENTITY);
                        }
                    }
                }

                array_push($techIconNames, $iconFilename);
            }

            // dd($techIconNames);


            try {
                $values = [
                    'cs_image' => $imageName,
                    'cs_title' => $title,
                    'slug' => $slug,
                    'cs_description' => $description,
                    'tech_used' => implode(',', $techUsed),
                    'tech_icon' => implode(',', $techIconNames),
                    'meta_title' => $metaTitle,
                    'meta_description' => $metaDescription,
                    'meta_header' => $metaHeader,
                    'meta_footer' => $metaFooter,
                    'meta_keywords' => $metaKeywords,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => $userId,
                ];

                $this->casestudy->updateCS($csId, $values);
                return JsonUtil::getResponse(true, "Case Studey updated successfully!", JsonUtil::$_STATUS_OK);
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
                return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_INTERNAL_SERVER_ERROR);
            }
        }
    }

    public function deleteCsAdmin(Request $request)
    {
        $csId = $request->get('cs_id') ?? '';
        if (!$this->casestudy->isCsIdValid($csId)) {
            return JsonUtil::getResponse(false, "Invalid Case Study", JsonUtil::$_BAD_REQUEST);
        }

        $csData = $this->casestudy->getSingleCs($csId);
        $csImage = $csData->cs_image;

        // dd(File::exists(base_path("assets/uploads/blog/" . '/' . $blogImage)));
        DB::beginTransaction();
        try {


            if (File::exists(base_path("assets/uploads/casestudy/feature-image/" . '/' . $csImage))) {
                File::delete(base_path("assets/uploads/casestudy/feature-image/" . '/' . $csImage));
            } else {
                return JsonUtil::serverError();
            }

            $this->casestudy->deleteCsData($csId);
            DB::commit();
            return JsonUtil::getResponse(True, "Case Study Deleted Successfully", JsonUtil::$_BAD_REQUEST);
        } catch (Exception $e) {
            DB::rollBack();
            return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_BAD_REQUEST);
            return JsonUtil::serverError();
        }
    }
}
