@extends('admin.layout')
@section('title', 'Edit Career')
@section('page-title', 'Edit Career')

@section('body')

    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" id="editCareer">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="cat_id" value="{{ $careerData->id }}">
                        <div class="col-md-6 pb-2">
                            <label for="link" class="form-label">Data Target <span class="text-danger">
                                    *</span></label>
                            <input type="text" id="" name="target" class="form-control"
                                value="{{ $careerData->data_target }}" placeholder="Enter Name">
                        </div>
                        <div class="col-md-6 pb-2">
                            <label for="link" class="form-label">Title <span class="text-danger">
                                    *</span></label>
                            <input type="text" id="catname" name="title" class="form-control"
                                value="{{ $careerData->title }}" placeholder="Enter Name">
                        </div>

                        <div class="col-md-6 pb-2" style="width: 100%">
                            <label for="url" class="form-label">Description <span class="text-danger">
                                    *</span></label>
                            <textarea class="form-control" id="summary-ckeditor" name="description">{{ $careerData->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 m-2">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" id="">Update</button>
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
            $('#editCareer').submit(function(e) {

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
