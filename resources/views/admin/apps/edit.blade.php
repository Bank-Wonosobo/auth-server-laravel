@extends('layouts.app')

@section('content')
<div class="row my-4">
    <div class="col-md-6">
        <div class="card border-0 shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Apps</h6>
            </div>
            <div class="card-body">
            <form action="{{ route('apps.update', ['id' => $app->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Apps Name</label>
                    <input type="text" name="name" value="{{ $app->name }}" class="form-control" placeholder="App Name">
                </div>
                <div class="form-group">
                    <label>Alias</label>
                    <input type="text" name="alias" value="{{ $app->alias }}" class="form-control" placeholder="Alias">
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" value="{{ $app->link }}"  class="form-control" placeholder="Link">
                </div>
                <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" value="{{ $app->icon }}"  class="form-control" placeholder="Icon">
                </div>
                <div class="mb-3">
                    <label class="form-label">Permission</label>
                    <select name="permission" class="form-control select2" style="width: 100%;">
                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->name }}" class="font-weight-bold" @if ($app->permission == $permission->name)
                                selected
                            @endif>{{ $permission->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"> Edit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
