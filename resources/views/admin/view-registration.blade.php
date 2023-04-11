@extends('admin.layout')
@section('title', 'Registration')
@section('page-title', 'Registration')

@section('body')

    <!-- Content wrapper -->

    <!-- Content -->

    <div class=" dashboard">
        <div class="row text-center">
            <div class="col-md-12 mt-5">
                <table class="table table-bordered table-hover mt-2">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Designation
                            </th>
                            <th>
                                Organisation
                            </th>
                            <th>
                                Query
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                            <tr>
                                <td>
                                    {{ $sn++ }}
                                </td>
                                <td>
                                    {{ $datas->name }}
                                </td>
                                <td>
                                    {{ $datas->phone }}
                                </td>
                                <td>
                                    {{ $datas->email }}
                                </td>
                                <td>
                                    {{ $datas->designation }}
                                </td>
                                <td>
                                    {{ $datas->organisation }}
                                </td>
                                <td>
                                    {{ $datas->query }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- / Content -->
@endsection
