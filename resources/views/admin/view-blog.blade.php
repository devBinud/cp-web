@extends('admin.layout')
@section('title', 'View Blog')
@section('page-title', 'View Blog')

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
                                        Author
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Slug
                                    </th>
                                    {{-- <th>
                                        Published At
                                    </th> --}}
                                    <th>Status</th>
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
                                            {{-- <img style="width: 100px; max-height:100px; overflow:auto"
                                                src="{{ asset('assets/uploads/blog/feature-image') . '/' . $data->blog_img }}"
                                                alt=""> --}}
                                            {{ $data->author }}
                                        </td>
                                        <th>
                                            {{ $data->blog_title }}
                                        </th>
                                        <th>{{ $data->slug }}</th>
                                        {{-- <td>
                                            {{ $data->created_at }}
                                        </td> --}}
                                        <td>
                                            @if($data->is_published == 0)
                                            <span class="badge bg-success">Saved as Draft</span>
                                            @else
                                            <span class="badge bg-success">Published</span>
                                            @endif
                                        </td>
                                        <td>
                                             <a class="px-2" href="{{ url('publish-blog-admin?blog_id=' . $data->id) }}"
                                                type="button"><i class="fa fa-file" aria-hidden="true"></i></a>
                                            <a class="px-2" href="{{ url('edit-blog-admin?blog_id=' . $data->id) }}"
                                                type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                            <span class="delblog" data-id={{ $data->id }}><i
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
            $('.delblog').click(function() {
                var id = $(this).data('id');
                // alert(id);
                var result = confirm("Do you want to delete this data?");
                if (result) {
                    $.ajax({
                        url: "{{ url('/delete-blog') }}",
                        type: 'post',
                        data: {
                            _token: "{{ csrf_token() }}",
                            blog_id: id,
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
