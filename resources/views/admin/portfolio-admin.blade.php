@extends('admin.layout')
@section('title', 'Portfolio')
@section('page-title', 'Portfolio')

@section('body')
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                            Add Portfolio
                        </button>
                        <table class="table table-bordered table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Link Name
                                    </th>
                                    <th>
                                        Url
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>
                                            {{ ++$sn }}
                                        </td>
                                        <td>
                                            <div style="height:200px; width:300px; overflow:auto;">
                                                <img style="width: 100%;"
                                                    src="{{ asset('assets/uploads/portfolio') . '/' . $data->p_image }}"
                                                    alt="">
                                            </div>
                                        </td>
                                        <th>
                                            {{ $data->link }}
                                        </th>
                                        <td>
                                            {{ $data->url }}
                                        </td>
                                        <td>
                                            <span class="edit-portfolio btn btn-xs btn-link" data-id={{ $data->id }}
                                                data-img="{{ $data->p_image }}" data-link="{{ $data->link }}"
                                                data-url="{{ $data->url }}" id="editPortfolio"> <i
                                                    class='bx bx-edit-alt text-warning'></i>&nbsp;
                                            </span>
                                            <span class="delete-portfolio" data-id={{ $data->id }}><i
                                                    class='bx bx-trash text-danger'></i></span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="paginationBox" class="my-5"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modals --}}
    <!-- Modal 1 -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
        <form action="{{ url('/addPortfolioAdmin') }}" id="addPortfolio" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="text-primary" id="">Add Portfolio</h4>

                            </div>
                            <div class="col-4 text-end">
                                <span class="btn" style="position: relative;bottom: 40%;right: -10%;"
                                    data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="top" title="Close">
                                    <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                </span>
                            </div>
                            <hr>
                            <div class="col-md-6 pb-2">
                                <label for="image" class="form-label">Image <span class="text-danger">
                                        *</span></label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="col-md-6 pb-2">
                                <label for="link" class="form-label">LINK <span class="text-danger">
                                        *</span></label>
                                <input type="text" id="link" name="link" class="form-control"
                                    placeholder="Enter Link">
                            </div>
                            <div class="col-md-6 pb-2">
                                <label for="url" class="form-label">URL <span class="text-danger">
                                        *</span></label>
                                <input type="text" id="url" name="url" class="form-control"
                                    placeholder="Enter url">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="editport" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="edit-portfolio" action="{{ url('/edit-portfolio') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-8">
                                <h4 class="text-primary" id="">Edit Portfolio</h4>

                            </div>

                            <div class="col-md-6 pb-2">
                                <label for="image" class="form-label">Image <span class="text-danger">
                                        *</span></label>
                                <input type="hidden" name="pre_image" id="preImage" value="">
                                <input type="hidden" name="portfolio_id" id="portfolioId" value="">
                                <input type="file" name="image" id="image1" class="form-control">
                            </div>
                            <div class="col-md-6 pb-2">
                                <label for="link" class="form-label">LINK <span class="text-danger">
                                        *</span></label>
                                <input type="text" id="link1" name="link" class="form-control"
                                    placeholder="Enter Link" value="">
                            </div>
                            <div class="col-md-6 pb-2">
                                <label for="url" class="form-label">URL <span class="text-danger">
                                        *</span></label>
                                <input type="text" id="url1" name="url" class="form-control"
                                    placeholder="Enter url" value="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" id="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script>
        $("#paginationBox").pxpaginate({
            currentpage: {{ $datas->currentPage() }},
            totalPageCount: {{ ceil($datas->total() / $datas->perPage()) }},
            maxBtnCount: 10,
            align: "center",
            nextPrevBtnShow: true,
            firstLastBtnShow: true,
            prevPageName: "<",
            nextPageName: ">",
            lastPageName: "<<",
            firstPageName: ">>",
            callback: function(pagenumber) {
                var url = "{{ url('portfolioAdmin?page=') }}" + pagenumber;


                window.location.replace(url);
            },
        });
        $(document).ready(function() {
            // $('#submit').click(function(){
            //   $('#edit-des').submit();
            // })
            $('#addPortfolio').submit(function(e) {

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
                            window.location.replace("{{ url('/portfolioAdmin') }}");
                        }
                    },
                    complete: function() {
                        submit.attr('disabled', false).html('Save');
                    }
                });
            });
            $(document).on('click', '#editPortfolio', function() {
                var id = $(this).data('id');
                // alert(id);
                var image = $(this).attr('data-img');
                var link = $(this).attr('data-link');
                var url = $(this).attr('data-url');
                $('#editport').modal('show');

                // alert(id);
                $('#portfolioId').val(id);
                $('#preImage').val(image);
                $('#link1').val(link);
                $('#url1').val(url);
            });
            $('#edit-portfolio').submit(function(e) {

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
                            window.location.replace("{{ url('/portfolioAdmin') }}");
                        }
                    },
                    complete: function() {
                        submit.attr('disabled', false).html('Save');
                    }
                });
            })
        });

        $(document).on('click', '.delete-portfolio', function() {
            var id = $(this).data('id');
            // alert(id);
            var con = confirm("Are you sure!");

            if (con) {
                $.ajax({
                    url: "{{ url('delete-portfolio') }}",
                    type: "POST",
                    data: {
                        p_id: id,
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
@endsection
