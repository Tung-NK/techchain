<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private function uploadImage($image)
    {
        if ($image) {
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStore = 'image/admin/user/';
            $image->move(public_path($linkStore), $newName);
            return $linkStore . $newName;
        } else {
            return null;
        }
    }

    public function listUser()
    {
        $listUser = User::select('id', 'name', 'email', 'image', 'role', 'created_at')->get();
        return view('admin.user.list-user')->with([
            'listUser' => $listUser
        ]);
    }

    public function addUser(AdminLoginRequest $req)
    {

        $linkImage = $this->uploadImage($req->file('image'));

        $newUser = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role' => $req->role,
            'image' => $linkImage,
        ];

        $check = User::where('email', $req->email)->exists();
        if (!$check) {
            User::create($newUser);
        } else {
            return redirect()->back()->with([
                'mess' => 'Email đã tồn tại'
            ]);
        }

        return redirect()->back()->with([
            'mess' => 'Thêm mới thành công'
        ]);
    }

    public function deleteUser(Request $req)
    {
        $req->validate([
            'id' => 'required'
        ]);
        User::where('id', $req->id)->delete();
        return redirect()->back()->with([
            'mess' => 'Xoá thành công'
        ]);
    }

    public function detailUser(Request $req)
    {
        $user =  User::where('id', $req->id)->select('id', 'name', 'email', 'role', 'image')->first();

        return json_decode($user);
    }

    public function updateUser(Request $req)
    {
        $req->validate([
            'idUser' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        $user = User::where('id', $req->idUser);

        if ($user->exists()) {
            $linkImage = $this->uploadImage($req->file('image'));
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'role' => $req->role,
                'image' => $linkImage,
            ];
            $user->update($data);
        }
        return redirect()->back()->with([
            'mess' => 'Sửa thành công'
        ]);
    }
}
