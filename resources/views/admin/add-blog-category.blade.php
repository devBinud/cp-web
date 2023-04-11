@extends('admin.layout')
@section('title', 'Add Blog Category')
@section('page-title', 'Add Blog Category')

@section('body')

    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" id="AddBlogCat">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 pb-2">
                            <label for="link" class="form-label">Category Name <span class="text-danger">
                                    *</span></label>
                            <input type="text" id="catname" name="catName" class="form-control" value=""
                                placeholder="Enter Name">
                        </div>
                        <div class="col-md-6 pb-2">
                            <label for="link" class="form-label">Slug <span class="text-danger">
                                    *</span></label>
                            <input type="text" id="slug" name="catslug" class="form-control" value=""
                                placeholder="Enter Slug">
                        </div>
                        <div class="col-md-6 pb-2" style="width: 100%">
                            <label for="url" class="form-label">Description <span class="text-danger">
                                    *</span></label>
                            <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 m-2">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" id="editBlog1">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection

@section('custom-js')
    {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}

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


            $('#catname').keyup(function() {
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

            $('#AddBlogCat').submit(function(e) {

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
                            window.location.replace("{{ url('/viewBlogCat') }}");
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
