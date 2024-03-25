@extends('layouts.app')

@section('title', 'List Hak Akses')

@section('content')
<div class="row my-4">
    {{-- @can('add-role') --}}
    @include('admin.roles.add-role')
    <div class="col-md-5">
        <div class="card border-0 shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Permission</h6>
            </div>
            <div class="card-body">
            <form action="{{ route('roles.add-permission') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Permission Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Role Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Roles</label>
                    <select multiple name="roles[]" class="form-control select2" style="width: 100%;">
                        @foreach ($roles as $item)
                            <option value="{{ $item->id }}" class="font-weight-bold">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"> Tambah</button>
            </form>
            </div>
        </div>
    </div>
    {{-- @endcan --}}
</div>
<div class="row my-4">
    <div class="col-md-7">
        <div class="card border-0 shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Role</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Role Name</th>
                                <th scope="col">Label Role</th>
                                <th scope="col">Permission</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">#</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ strtoupper($item->label) }}</td>
                                    <td>
                                        @foreach($item->permissions as $permission)
                                            <span class="badge badge-light">{{ $permission->name }} </span><br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop{{ $item->id }}">
                                            Grant Permission
                                        </button>
                                        @include('admin.roles.grant-permission')
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
    <div class="col-md-5">
        <div class="card border-0 shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Permission</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Permission Name</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $item)
                            <tr>
                                <th scope="row">#</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ strtoupper($item->label) }}</td>
                                <td>
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
