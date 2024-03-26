@extends('layouts.app')

@section('title', 'List Hak Akses')

@section('content')
<div class="row my-4">
    <div class="col-md-12">
        <div class="card border-0 shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Apps</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('apps.create') }}" class="btn btn-sm btn-primary mb-3">Add App</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">App Name</th>
                                <th scope="col">Alias</th>
                                <th scope="col">Link</th>
                                <th scope="col">Permission</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($apps as $app)
                                <tr>
                                    <th scope="row">#</th>
                                    <td>{{ $app->name }}</td>
                                    <td>{{ $app->alias }}</td>
                                    <td>{{ $app->link }}</td>
                                    <td>{{ $app->permission }}</td>
                                    <td>{{ $app->icon }}</td>
                                    <td>
                                        <a href="{{ route('apps.edit', ['id' => $app->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('script')
    <!-- jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2({
                width: 'resolve' // need to override the changed default
            });
        });
    </script>
@endsection
