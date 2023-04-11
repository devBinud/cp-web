@extends('admin.layout')
@section('title', 'Edit Case Study')
@section('page-title', 'Edit Case Study')

@section('body')

    <div class="card p-5">
        <form action="{{ url('/edit-cs') }}" id="editCaseStudy" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="cs_id" value="{{ $csData->id }}">
            <div class="row">
                <div class="col-8">
                    <div class="col-8" id="fieldList">
                        @foreach (explode(',', $csData->tech_used) as $key => $value)
                            <div>
                                <div class="col-md-12 pb-2">
                                    <label for="link" class="form-label">Tech Used <span class="text-danger">
                                            *</span></label>
                                    <input type="text" name="techUsed[]" class="form-control"
                                        value="{{ explode(',', $csData->tech_used)[$key] }}" placeholder="Enter Tech">
                                </div>
                                <div class="col-12 p-2">
                                    <input type="file" class="form-control" name="techIcon[]">
                                    <input type="hidden" name="prv_icon[]" id=""
                                        value="{{ explode(',', $csData->tech_icon)[$key] }}">
                                </div>
                                <button class="delButton" type="button">Delete</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <center> <span id="addMore" class="btn btn-primary w-25 "> + Add More</span></center>
            <div class="col-4">
                <div class="card p-2">
                    <div class="card-header text-center">
                        <h5 class="text-dark">Set image:</h5>
                        <p class="card-text"><a href="#" data-toggle="tooltip"
                                title="Only jpg, jpeg, png format accepted">
                            </a></p>
                    </div>
                    <div class="card-body text-center">
                        <div class="mb-2" id="imgHolder" style="min-height: 150px;">
                            <input type="hidden" name="preImageName" value="{{ $csData->cs_image }}">
                            <img src="{{ asset('assets/uploads/casestudy/feature-image/' . $csData->cs_image) }}"
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
    </div>

    <div class="row">
        <div class="col-md-6 pb-2">
            <label for="link" class="form-label">Title <span class="text-danger">
                    *</span></label>
            <input type="text" id="title" name="title" value="{{ $csData->cs_title }}" class="form-control"
                placeholder="Enter title">
        </div>

        <div class="col-md-6 pb-2">
            <label for="link" class="form-label">Slug <span class="text-danger">
                    *</span></label>
            <input type="text" id="slug" name="slug" value="{{ $csData->slug }}" class="form-control"
                placeholder="Enter slug">
        </div>

        <div class="col-md-6 pb-2" style="width: 100%">
            <label for="url" class="form-label">Description <span class="text-danger">
                    *</span></label>
            <textarea class="form-control" id="description" name="summary-ckeditor">{{ $csData->cs_description }}</textarea>
        </div>
        <div class="col-md-6 pb-2">

            <label for="link" class="form-label">Meta Title <span class="text-danger">
                    *</span></label>
            <input type="text" id="metaTitle" value="{{ $csData->meta_title }}" name="metaTitle" class="form-control"
                placeholder="Enter Title">
        </div>
        <div class="col-md-6 pb-2">
            <label for="link" class="form-label">Meta Keywords <span class="text-danger">
                    *</span></label>
            <input type="text" id="metaKeywords" value="{{ $csData->meta_keywords }}" name="metaKeywords"
                class="form-control" placeholder="Enter Keywords">
        </div>
        <div class="col-md-12 pb-2">
            <label for="link" class="form-label">Meta Description <span class="text-danger">
                    *</span></label>
            <input type="text" id="metaDescription" name="metaDescription" class="form-control"
                placeholder="Enter Description" value="{{ $csData->meta_description }}">
        </div>
        <div class="col-md-12 pb-2">
            <label for="link" class="form-label">Meta Header <span class="text-danger">
                    *</span></label>
            <textarea type="text" id="metaHeader" name="metaHeader" class="form-control" placeholder="Enter Header"
                rows="3">{{ $csData->meta_header }}</textarea>
        </div>
        <div class="col-md-12 pb-2">
            <label for="link" class="form-label">Meta Footer <span class="text-danger">
                    *</span></label>
            <textarea type="text" id="metaFooter" name="metaFooter" class="form-control" placeholder="Enter Footer"
                rows="3">{{ $csData->meta_footer }}</textarea>
        </div>
    </div>

    </div>

    <input type="file" accept='image/jpeg,image/gif,image/png' class="d-none" name="img_file" id="imgFile">
    <input type="hidden" name="img_text" id="imgText">
    <div class="col-md-12 mt-5">
        <div class="text-center">
            <button type="submit" class="btn btn-primary" id="">Update</button>
        </div>
    </div>

    </form>
    </div>

@endsection
<div class="d-none">
    <div class="col-8" id="tableData">
        <div class="col-md-12 pb-2">
            <input type="file" class="form-control" name="techIcon[]">
            <input type="hidden" name="prv_icon[]" id="" value="">
        </div>
        <div class="col-md-12 pb-2">
            <label for="link" class="form-label">Tech Used <span class="text-danger">
                    *</span></label>
            <input type="text" name="techUsed[]" class="form-control" value="" placeholder="Enter Tech">
        </div>
        <button class="delButton" type="button">Delete</button>
    </div>
</div>
@section('custom-js')
    {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}

    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
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

            $('#editCaseStudy').submit(function(e) {

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
                            if (data.data != null) {
                                $.each(data.data, function(id, error) {
                                    $('#' + id).text(error);
                                });
                            } else {
                                alert(data.message);
                            }

                        } else {
                            alert(data.message);
                            window.location.replace("{{ url('/viewCaseStudy') }}");
                        }
                    },
                    complete: function() {
                        submit.attr('disabled', false).html('Save');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#addMore").click(function() {

                var fieldData = $('#tableData').html();

                $('#fieldList').append("<div>" + fieldData + "</div>");

            });

            $(document).on("click", '.delButton', function() {

                $(this).parent().remove();
            });

        });
    </script>
@endsection
