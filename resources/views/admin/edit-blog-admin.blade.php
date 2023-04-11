@extends('admin.layout')
@section('title', 'Edit Blog')
@section('page-title', 'Edit Blog')
<style>
    /* Bootstrap TagsInput */
    .bootstrap-tagsinput {
        display: inline-block;
        vertical-align: middle;
        width: 100%;
        border: 1px solid;
    }

    .bootstrap-tagsinput input {
        direction: ltr;
        border: 0;
        outline: 0;
        background-color: transparent;
        padding: 7px 0;
        margin-top: 3px;
        margin-bottom: 3px;
        width: auto !important;
        min-width: 100px;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .bootstrap-tagsinput input:focus {
        border: none;
        box-shadow: none;
    }

    .bootstrap-tagsinput .twitter-typeahead {
        width: auto;
    }

    .bootstrap-tagsinput .tt-dropdown-menu {
        margin-top: 5px;
        min-width: 200px;
    }

    .bootstrap-tagsinput .tag {
        margin-top: 3px;
        margin-bottom: 3px;
        margin-right: 6px;
        border: 0;
        border-radius: 100px;
        padding: 7px 14px;
        padding-right: 33px;
        float: left;
        font-size: 12px;
        line-height: 1.6666667;
        font-weight: 400;
        text-transform: none;
        position: relative;
    }

    .bootstrap-tagsinput .tag:not([class*=bg-]) {
        background-color: #03A9F4;
        color: #fff;
    }

    .bootstrap-tagsinput .tag [data-role="remove"] {
        cursor: pointer;
        position: absolute;
        top: 50%;
        right: 14px;
        line-height: 1;
        margin-top: -5.5px;
        opacity: 0.7;
        filter: alpha(opacity=70);
    }

    .bootstrap-tagsinput .tag [data-role="remove"]:hover {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .bootstrap-tagsinput .tag [data-role="remove"]:after {
        font-family: "Font Awesome 5 Free";
        content: "\f00d";
        font-weight: 900;
        font-size: 11px;
        color: #fff;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    /* Twitter Typeahead */
    .twitter-typeahead {
        width: 100%;
    }

    .typeahead,
    .tt-query,
    .tt-hint {
        outline: 0;
    }

    .tt-hint {
        color: #999;
    }

    .tt-menu {
        width: 100%;
        margin-top: 1px;
        min-width: 180px;
        padding: 8px 0;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 3px;
        max-height: 300px;
        overflow-y: auto;
        -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }

    .typeahead-scrollable .tt-menu {
        max-height: 250px;
    }

    .typeahead-rtl .tt-menu {
        text-align: right;
    }

    .tt-suggestion {
        padding: 8px 15px;
        cursor: pointer;
    }

    .tt-suggestion:hover,
    .tt-suggestion:focus,
    .tt-suggestion.tt-cursor {
        background-color: #f5f5f5;
    }

    .tt-dataset-group .tt-suggestion {
        padding-left: 32px;
        padding-right: 32px;
    }

    .tt-heading {
        font-size: 11px;
        line-height: 1.82;
        padding: 8px 15px;
        text-transform: uppercase;
        display: block;
        font-weight: 700;
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .typeahead-template .empty-message {
        padding: 8px 15px;
        text-align: center;
    }
</style>
@section('body')

    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" id="editBlog">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Title <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $blogData->blog_title }}" placeholder="Enter title">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Slug <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="slug" name="slug" class="form-control"
                                        value="{{ $blogData->slug }}" placeholder="Enter Slug">
                                </div>
                                <div class="col-md-6 pb-2" style="width: 100%">
                                    <label for="url" class="form-label">Description <span class="text-danger">
                                            *</span></label>
                                    <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor">{{ $blogData->blog_description }}</textarea>
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Author <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="metaTitle" name="author" class="form-control"
                                        value="{{ $blogData->author }}" placeholder="Enter Title">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Meta Title <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="metaTitle" name="metaTitle" class="form-control"
                                        value="{{ $blogData->blog_meta_title }}" placeholder="Enter Title">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Meta Description <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="metaDescription" name="metaDescription" class="form-control"
                                        placeholder="Enter Description" value="{{ $blogData->meta_description }}">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Meta og:url <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="" name="metaurl" class="form-control"
                                        placeholder="Enter URL" value="{{ $blogData->meta_url }}">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Twitter:card <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="" name="twitterCard" class="form-control"
                                        placeholder="Enter Twitter:card content" value="{{ $blogData->twitter_card }}">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Twitter:site <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="" name="twitterSite" class="form-control"
                                        placeholder="Enter Twitter:site content" value="{{ $blogData->twitter_site }}">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Twitter:title <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="" name="twitterTitle" class="form-control"
                                        placeholder="Enter Twitter:title content" value="{{ $blogData->twitter_title }}">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Twitter:description <span
                                            class="text-danger">
                                            *</span></label>
                                    <input type="text" id="" name="twitterDescription" class="form-control"
                                        placeholder="Enter Twitter:description content"
                                        value="{{ $blogData->twitter_description }}">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Twitter:image <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="" name="twitterImage" class="form-control"
                                        placeholder="Enter Twitter:image content" value="{{ $blogData->twitter_image }}">
                                </div>
                                <div class="col-md-6 pb-2">
                                    <label for="link" class="form-label">Meta Keywords <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="metaKeywords" name="metaKeywords" class="form-control"
                                        placeholder="Enter Keywords" value="{{ $blogData->meta_keywords }}">
                                </div>

                                <div class="col-md-12 pb-2">
                                    <label for="link" class="form-label">Blog Tags <span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="metaTags" name="blogTags[]" class="form-control"
                                        data-role="tagsinput" placeholder="Enter Tags"
                                        value="{{ $blogData->blog_tags }}">
                                </div>
                                <div class="col-md-12 pb-2">
                                    <label for="link" class="form-label">Meta Header <span class="text-danger">
                                            *</span></label>
                                    <textarea type="text" id="metaHeader" name="metaHeader" class="form-control" placeholder="Enter Header"
                                        value="{{ $blogData->meta_header }}" rows="3">{{ $blogData->meta_header }}</textarea>
                                </div>
                                <div class="col-md-12 pb-2">
                                    <label for="link" class="form-label">Meta Footer <span class="text-danger">
                                            *</span></label>
                                    <textarea type="text" id="metaFooter" name="metaFooter" class="form-control" placeholder="Enter Footer"
                                        value="{{ $blogData->meta_footer }}" rows="3">{{ $blogData->meta_footer }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card p-2">
                                        <div class="card-header text-center">
                                            <h5 class="text-dark">Set image:</h5>
                                            <p class="card-text"><a href="#" data-toggle="tooltip"
                                                    title="Only jpg, jpeg, png format accepted">
                                                </a></p>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="mb-2" id="imgHolder" style="min-height: 150px;">
                                                <input type="hidden" name="preImageName"
                                                    value="{{ $blogData->blog_img }}">
                                                <img src="{{ asset('assets/uploads/blog/feature-image/' . $blogData->blog_img) }}"
                                                    style="width: 250px;" alt="">
                                            </div>

                                            <div class="col-md-12 pl-md-1 mt-2 mt-lg-0">
                                                <button class="btn btn-success" id="btnUploadImg" type="button">
                                                    Upload image</button>

                                            </div>
                                            <span class="error text-danger text-center" id="imgErr"></span>
                                        </div>
                                    </div>
                                </div>

                                <input type="file" accept='image/jpeg,image/gif,image/png' class="d-none"
                                    name="img_file" id="imgFile">
                                <input type="hidden" name="img_text" id="imgText">
                                <div class="col-12 mt-5">
                                    <label for="link" class="form-label">Categories <span class="text-danger">
                                            *</span></label>
                                    @foreach ($blogCat as $cat)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="categories[]"
                                                value="{{ $cat->cat_name }}"
                                                @if (in_array($cat->cat_name, explode(',', $blogData->cat_names))) checked @endif id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $cat->cat_name }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 m-2">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" id="editBlog1">Update</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection

@section('custom-js')
    {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
    <script src="js/bootstrap-tagsinput.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#summary-ckeditor'), {
                // ckfinder: {
                //     // Upload the images to the server using the CKFinder QuickUpload command.
                //     uploadUrl: '{{ url('sna/activities/ck-image-upload') . '?_token=' . csrf_token() }}'
                // }
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#summary-ckeditor1'), {
                // ckfinder: {
                //     // Upload the images to the server using the CKFinder QuickUpload command.
                //     uploadUrl: '{{ url('sna/activities/ck-image-upload') . '?_token=' . csrf_token() }}'
                // }
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });
    </script>
    <script>
        $(document).ready(function() {

            $('#btnUploadImg').click(function() {
                $('#imgFile').click();
            });
            const width = 320;
            const height = 240;

            // check max upload file size
            function isValidFileSize(target) {

                var maxUploadSize = "{{ Config::get('constants.max_upload_file_size.in_byte', 2048000) }}";
                var maxUploadSizeMB = "{{ Config::get('constants.max_upload_file_size.in_mb', 2) }}";

                if (target.files[0].size > maxUploadSize) {
                    target.value = "";
                    alert("Maximum file size supported is " + maxUploadSizeMB + " MB");
                    return false;
                };

                return true;
            }
            // image preview
            $('#imgFile').change(function() {
                if (!isValidFileSize(this)) {
                    return;
                }
                var src = URL.createObjectURL(this.files[0]);
                $('#imgHolder').html('<img src="' + src + '" style="max-width: ' + width +
                    'px; max-height: ' + height + 'px;"/>');
            });

            $('#title').keyup(function() {
                var title = $(this).val();
                // alert(title);
                var slug = $('#slug');
                // alert(slug);
                if (title.length > 0) {
                    $.get("{{ url('/generate-slug') }}", {
                        title: title,
                    }).done(function(data) {
                        slug.val(data);
                    });
                } else {
                    slug.val("");
                }
            });

            $('#editBlog').submit(function(e) {

                e.preventDefault();
                // CKEDITOR.instances['summary-ckeditor'].updateElement();

                var formData = new FormData(this);
                var error = $('.error');
                var submit = $("#submit");

                // clear all error message
                error.text('');

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        submit.attr('disabled', true).html('wait..');
                    },
                    success: function(data) {
                        if (!data.success) {
                            alert(data.message);
                        } else {
                            alert(data.message);
                            // window.location.reload();
                            window.location.replace("{{ url('/viewBlog') }}");
                        }
                    },
                    complete: function() {
                        submit.attr('disabled', false).html('Save');
                    }
                });
            });
        });
    </script>

@endsection
