@extends('admin.layout')
@section('title', 'Add Career')
@section('page-title', 'Add Career')

@section('body')
    <form action="{{ url('/add-career') }}" id="addCareer" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card p-5">
            <div class="row">
                <div class="col-8">
                    <h4 class="text-primary" id="">Add Career</h4>

                </div>
                <div class="col-md-6 pb-2">
                    <label for="link" class="form-label">Data Target <span class="text-danger">
                            *</span></label>
                    <input type="text" id="" name="target" class="form-control"
                        placeholder="Enter Data target">
                </div>
                <div class="col-md-6 pb-2">
                    <label for="link" class="form-label">Title <span class="text-danger">
                            *</span></label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter title">
                </div>
                <div class="col-md-6 pb-2" style="width: 100%">
                    <label for="url" class="form-label">Description <span class="text-danger">
                            *</span></label>
                    <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
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
            $('#addCareer').submit(function(e) {

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
                            window.location.replace("{{ url('/view-career') }}");
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
