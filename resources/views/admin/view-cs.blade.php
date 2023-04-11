@extends('admin.layout')
@section('title', 'View Blog')
@section('page-title', 'View Blog')

@section('body')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 table-responsive">

                    <table class="table table-bordered table-hover mt-3">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Published At
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
                                        {{ $data->cs_title }}
                                    </td>
                                    <th>
                                        {{ $data->created_at }}
                                    </th>
                                    <td>
                                        <a class="px-2" href="{{ url('edit-cs?cs_id=' . $data->id) }}" type="button"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <span class="delcs" data-id={{ $data->id }}><i
                                                class='bx bx-trash text-danger'></i></span>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div id="paginationBox" class="my-5"></div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        $('document').ready(function() {
            $('.delcs').click(function() {
                var id = $(this).data('id');
                // alert(id);
                var result = confirm("Do you want to delete this data?");
                if (result) {
                    $.ajax({
                        url: "{{ url('/delete-cs') }}",
                        type: 'post',
                        data: {
                            _token: "{{ csrf_token() }}",
                            cs_id: id,
                        },
                        success: function(data) {
                            if (data.success) {
                                alert(data.message);
                                location.reload();
                            } else {
                                alert(data.message);
                            }
                        }

                    });
                }
            });
        });
    </script>

@endsection
