@extends('admin.layout')
@section('title', 'Blog Category')
@section('page-title', 'Blog Category')

@section('body')

    <div class="">
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
                                        Category Name
                                    </th>
                                    <th>
                                        Slug
                                    </th>
                                    <th>
                                        Description
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
                                            {{ $data->cat_name }}
                                        </td>
                                        <td>
                                            {{ $data->cat_slug }}
                                        </td>
                                        <th>
                                            {!! $data->cat_description !!}
                                        </th>

                                        <td>
                                            <a class="px-2" href="{{ url('editBlogCat?cat_id=' . $data->cat_id) }}"
                                                type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <span class="delcat" data-id="{{ $data->cat_id }}"><i
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
    </div>

@endsection

@section('custom-js')
    <script>
        $('document').ready(function() {
            $('.delcat').click(function() {
                var id = $(this).data('id');
                 // alert(id);
                var result = confirm("Do you want to delete this data?");
                if (result) {
                    $.ajax({
                        url: "{{ url('/delete-blog-cat') }}",
                        type: 'post',
                        data: {
                            _token: "{{ csrf_token() }}",
                            cat_id: id,
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
