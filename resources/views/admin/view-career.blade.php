@extends('admin.layout')
@section('title', 'View Career')
@section('page-title', 'View Career')

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
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>
                                        {{ ++$sn }}
                                    </td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        <a class="px-2" href="{{ url('edit-career?career_id=' . $item->id) }}"
                                            type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <span class="delcareer" data-id={{ $item->id }}><i
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
            $('.delcareer').click(function() {
                var id = $(this).data('id');
                // alert(id);
                var result = confirm("Do you want to delete this data?");
                if (result) {
                    $.ajax({
                        url: "{{ url('/delete-career') }}",
                        type: 'post',
                        data: {
                            _token: "{{ csrf_token() }}",
                            career_id: id,
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
