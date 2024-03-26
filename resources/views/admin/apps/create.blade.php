@extends('layouts.app')

@section('title', 'Tambah Hak Akses')

@section('content')
<div class="row my-4">
    <div class="col-md-7">
        <div class="card border-0 shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Apps</h6>
            </div>
            <div class="card-body">
            <form action="{{ route('apps.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Apps Name</label>
                    <input type="text" name="name" class="form-control" placeholder="App Name">
                </div>
                <div class="form-group">
                    <label>Alias</label>
                    <input type="text" name="alias" class="form-control" placeholder="Alias">
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control" placeholder="Link">
                </div>
                <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" class="form-control" placeholder="Icon">
                </div>
                <div class="mb-3">
                    <label class="form-label">Permission</label>
                    <select name="permission" class="form-control select2" style="width: 100%;">
                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->name }}" class="font-weight-bold">{{ $permission->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"> Tambah</button>
            </form>
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
