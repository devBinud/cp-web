@extends('admin.layout')
@section('title', 'Case Study')
@section('page-title', 'Case Study')

@section('body')
    <form action="{{ url('/addCaseStudy') }}" id="addCaseStudy" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card p-5">
            <div class="row">
                <div class="col-8">
                    <h4 class="text-primary" id="">Add Case Study</h4>

                </div>
                <div class="col-md-6 pb-2" id="fieldList">
                    <div class="col-md-12 pb-2">
                        <label for="image" class="form-label">Tech Icon<span class="text-danger">
                                *</span></label>
                        <input type="file" name="techIcon[]" class="form-control">
                    </div>
                    <div class="col-md-12 pb-2">
                        <label for="link" class="form-label">Tech Used <span class="text-danger">
                                *</span></label>
                        <input type="text" name="techUsed[]" class="form-control" placeholder="Enter Tech">
                    </div>
                    <span id="addMore" class="btn btn-primary"> + Add More</span>

                </div>
                <div class="row">
                    <div class="col-md-6 pb-2">
                        <label for="image" class="form-label">Image <span class="text-danger">
                                *</span></label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="col-md-6 pb-2">
                        <label for="link" class="form-label">Title <span class="text-danger">
                                *</span></label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter title">
                    </div>

                    <div class="col-md-12 pb-2">
                        <label for="link" class="form-label">Slug <span class="text-danger">
                                *</span></label>
                        <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter slug">
                    </div>
                    <div class="col-md-6 pb-2" style="width: 100%">
                        <label for="url" class="form-label">Description <span class="text-danger">
                                *</span></label>
                        <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 pb-2">
                            <label for="link" class="form-label">Meta Title <span class="text-danger">
                                    *</span></label>
                            <input type="text" id="metaTitle" name="metaTitle" class="form-control"
                                placeholder="Enter Title">
                        </div>
                        <div class="col-md-6 pb-2">
                            <label for="link" class="form-label">Meta Description <span class="text-danger">
                                    *</span></label>
                            <input type="text" id="metaDescription" name="metaDescription" class="form-control"
                                placeholder="Enter Description">
                        </div>

                        <div class="col-md-6 pb-2">
                            <label for="link" class="form-label">Meta Keywords <span class="text-danger">
                                    *</span></label>
                            <input type="text" id="metaKeywords" name="metaKeywords" class="form-control"
                                placeholder="Enter Keywords">
                        </div>
                        <div class="col-md-12 pb-2">
                            <label for="link" class="form-label">Meta Header <span class="text-danger">
                                    *</span></label>
                            <textarea type="text" id="metaHeader" name="metaHeader" class="form-control" placeholder="Enter Header"
                                rows="3"></textarea>
                        </div>
                        <div class="col-md-12 pb-2">
                            <label for="link" class="form-label">Meta Footer <span class="text-danger">
                                    *</span></label>
                            <textarea type="text" id="metaFooter" name="metaFooter" class="form-control" placeholder="Enter Footer"
                                rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" id="">Submit</button>
                </div>
            </div>
        </div>
    </form>

@endsection
<div class="d-none">
    <div class="col-md-6 pb-2" id="tableData">
        <div class="col-md-12 pb-2">
            <label for="image" class="form-label">Tech Icon<span class="text-danger">
                    *</span></label>
            <input type="file" name="techIcon[]" class="form-control">
        </div>
        <div class="col-md-12 pb-2">
            <label for="link" class="form-label">Tech Used <span class="text-danger">
                    *</span></label>
            <input type="text" name="techUsed[]" class="form-control" placeholder="Enter Tech">
        </div>
        <button class="delButton" type="button">Delete</button>
    </div>
</div>
@section('custom-js')
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
            $("select").tagsinput('items');

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

            $(document).on('click', '.edit-blog', function() {
                var id = $(this).data('id');
                var image = $(this).data('img');
                var title = $(this).data('title');
                var desc = $(this).data('desc');



                // alert(id);
                $('#blogId').val(id);
                $('#title1').val(title);
                $('#summary-ckeditor1').insertHtml(desc);

            });


            $('#addCaseStudy').submit(function(e) {

                e.preventDefault();
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
                            // window.location.replace;
                            window.location.replace("{{ url('/viewCaseStudy') }}");
                        }
                    },
                    complete: function() {
                        submit.attr('disabled', false).html('Save');
                    }
                });
            });
        });

        $(document).on('click', '.delete-blog', function() {
            var id = $(this).data('id');

            var con = confirm("Are you sure!");

            if (con) {
                $.ajax({
                    url: "{{ url('delete-blog') }}",
                    type: "POST",
                    data: {
                        blog_id: id,
                        _token: "{{ csrf_token() }}",
                    },

                    success: function(data) {
                        if (!data.success) {
                            alert(data.message);
                        } else {
                            alert(data.message);
                            window.location.reload();
                        }
                    }
                });
            }
        })
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
