@extends('layouts.app')

@section('content')

<div class="row my-4">
    <div class="col-md-8">
        <a href="{{ route('clients.index') }}" class="btn btn-success mb-2">Kembali</a>
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Buat User</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Redirect</label>
                        <input type="text" class="form-control" name="redirect" value="{{ old('redirect') }}"></input>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Client</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
