<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        //lấy ra toàn boojbanr ghi
        // $users= User::all();
        // $users = User::select('id', 'name', 'username', 'email', 'role', 'avatar')
        // ->where('id', 5)
        // ->get();

        $usersPaginate =User::select('id', 'name',   'avatar', 'email', 'role')
            ->paginate(5);
        // dd($usersPaginate);
        return view('admin.user.listUser', ['user_list' => $usersPaginate]);
    }


    public function deleteUser(User $user)
    {
        // cách 1
        if($user){

            $user->delete();

            return redirect()->back();
        }
    }

    public function createUser()
    {
       return view('admin.user.createUser');
    }

    public function storeUser(Request $request)
    {


       $user = new User();
       //cách 1
            //$user->name= $request->name;
       //cách 2
       $user->fill($request->all());
       //kiểm tra file và lưu
       if ($request->hasFile('avatar')) {
        // 2.1 Xử lý tên file

        $avatar = $request->avatar;
        $avatarHasName = $avatar->hashName();
        $avatarName = $request->username . '_' . $avatarHasName;
        // 2.2 Lưu file vào trong bộ nhớ
        // dd($avatar->storeAs('users/avatar', $avatarName));
        // 2.3 Lấy đường dẫn file vừa lưu gán vào cho $user
        $user->avatar = $avatar->storeAs('images/users', $avatarName);
        // Lưu vào thư mục storages/app/images/users

        // chạy lệnh php artisan storage:link để link thư mục
    } else {
        $user->avatar = '';
    }
       $user->save();
       return redirect()->route('admin.listUser');
    }

    public function editUser(User $user)
    {
        return view('admin.user.createUser', [
            'user'=> $user
        ]);
    }

    public function updateUser(UserUpdateRequest $request, $id)
    {

        $user = User::find($id);

        $user->fill($request->except(['_method', '_token']));
        //kiểm tra file và lưu
        if ($request->hasFile('avatar')) {
         // 2.1 Xử lý tên file

            $file= 'images/users' . $user->avatar;
            if(File::exists($file))
            {
                File::delete($file);
            }

         $avatar = $request->avatar;
         $avatarHasName = $avatar->hashName();
         $avatarName = $request->username . '_' . $avatarHasName;

         $user->avatar = $avatar->storeAs('images/users', $avatarName);
         // Lưu vào thư mục storages/app/images/users

         // chạy lệnh php artisan storage:link để link thư mục
     } else {
         $user->avatar = '';
     }
     if($request->password){
        $user->password= hash($user->password);
     }

        $user->update();
        return redirect()->route('admin.listUser');
}
}
