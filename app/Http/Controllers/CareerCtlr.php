<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use App\Utils\RegexUtil;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerCtlr extends Controller
{
    private $career;
    public function __construct()
    {
        $this->career = new Career();
    }

    public function addCareer(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.add-career')->with([
                'page' => 'add-career',
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $userId = $request->session()->get('id', 0) ?? '1';
            $target = $request->get('target') ?? '';
            $title = $request->get('title') ?? '';
            $description = $request->get('description') ?? '';
            // dd($description);

            if (empty($target) || $target == "") {
                return JsonUtil::getResponse(false, "Data target cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif (!RegexUtil::isAlphaOnly($target)) {
                return JsonUtil::getResponse(false, "Cannot be Number or have Spaces!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            if (empty($title) || $title == "") {
                return JsonUtil::getResponse(false, "Title cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            if (empty($description) || $description == "") {
                return JsonUtil::getResponse(false, "Description cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $values = [
                'data_target' => $target,
                'title' => $title,
                'description' => $description,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $userId,
            ];
            try {
                $this->career->insertCareer($values);
                return JsonUtil::getResponse(true, "Career saved successfully!", JsonUtil::$_STATUS_OK);
                // DB::commit();
            } catch (Exception $e) {
                // DB::rollBack();
                return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function viewCareer()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $this->career->getAllCareer();
            return view('admin.view-career')->with([
                'page' => 'view-career',
                'data' => $data,
                'sn' => $data == null ? 0 : ($data->currentPage() - 1) * $data->perPage(),
            ]);
        }
    }

    public function editCareer(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $careerId = $request->get('career_id') ?? '';
            if (empty($careerId) || $careerId == "") {
                return abort(404);
            } elseif (!RegexUtil::isNumeric($careerId)) {
                return abort(404);
            }
            $careerData = $this->career->getSingleCareer($careerId);
            // dd($catData);
            return view('admin.edit-career')->with([
                'page' => 'edit_career',
                'careerData' => $careerData,
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $careerId = $request->get('career_id') ?? '';
            $target = $request->get('target') ?? '';
            $title = $request->get('title') ?? '';
            $description = $request->get('description') ?? '';
            // dd($catId);
            if (empty($target) || $target == "") {
                return JsonUtil::getResponse(false, "Data target cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif (!RegexUtil::isAlphaOnly($target)) {
                return JsonUtil::getResponse(false, "Cannot be Number or have Spaces!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            if (empty($title) || $title == "") {
                return JsonUtil::getResponse(false, "Title cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            if (empty($description) || $description == "") {
                return JsonUtil::getResponse(false, "Description cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
        }

        $values = [
            'data_target' => $target,
            'title' => $title,
            'description' => $description,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => 1,

        ];
        try {
            $this->career->updateCareer($careerId, $values);

            return JsonUtil::getResponse(true, "Career updated successfully!", JsonUtil::$_STATUS_OK);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteCareer(Request $request)
    {
        $careerId = $request->get('career_id') ?? '';
        if (!$this->career->isCareerIdValid($careerId)) {
            return JsonUtil::getResponse(false, "Invalid Career", JsonUtil::$_BAD_REQUEST);
        }

        try {
            $this->career->deleteCareerData($careerId);
            return JsonUtil::getResponse(true, "Career deleted successfully!", JsonUtil::$_STATUS_OK);
        } catch (Exception $e) {
            return JsonUtil::$_INTERNAL_SERVER_ERROR;
        }
    }
}
