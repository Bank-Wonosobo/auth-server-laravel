<?php

namespace App\Http\Controllers;

use App\Http\Requests\Apps\AppStoreRequest;
use App\Http\Requests\Apps\AppUpdateRequest;
use App\Models\App;
use App\Models\Permission;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        $apps = App::all();
        return view('admin.apps.index', compact('apps'));
    }

    public function create() {
        $permissions = Permission::orderBy('name')->get();
        return view('admin.apps.create', compact('permissions'));
    }

    public function store(AppStoreRequest $request)
    {
        $data = $request->validated();

        $app = new App();
        $app->name = $data['name'];
        $app->alias = $data['alias'];
        $app->link = $data['link'];
        $app->icon = $data['icon'];
        $app->permission = $data['permission'];
        $app->save();

        return redirect()->route('apps.index')->with('success', 'Berhasil menambah apps');
    }

    public function edit($id) {
        $app = App::find($id);
        $permissions = Permission::orderBy('name')->get();

        return view('admin.apps.edit', compact('app', 'permissions'));
    }

    public function update(AppUpdateRequest $request, $id) {

        $data = $request->validated();

        $app = App::find($id);
        $app->name = $data['name'];
        $app->alias = $data['alias'];
        $app->link = $data['link'];
        $app->icon = $data['icon'];
        $app->permission = $data['permission'];
        $app->save();

        return redirect()->route('apps.index')->with('success', 'Berhasil mengubah apps');
    }
}
