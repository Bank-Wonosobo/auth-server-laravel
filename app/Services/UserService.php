<?php

namespace App\Services;

use App\Http\Requests\Users\UserAddRequest;
use App\Http\Requests\Users\UserChangePasswordRequest;
use App\Http\Requests\Users\UserCreatePasswordRequest;
use App\Http\Requests\Users\UserUpdateRequest;

interface UserService
{
    function add(UserAddRequest $request);
    function createPassword(UserCreatePasswordRequest $request, int $id);
    function generatePassword(int $id);
    function changePassword(int $id, UserChangePasswordRequest $request);
    function update(UserUpdateRequest $request, $id);
    function destroy($id);

}
