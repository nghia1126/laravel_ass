@extends('layout.admin')
@section('title', 'Tạo mới người dùng')
@section('content-title', isset($user)? 'Chỉnh sửa thông tin' : 'Tạo mới người dùng')
@section('content')
    <div>
        @if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
    </div>
    <form
        action="{{ isset($user) ? route('admin.editUser', $user->id) : route('admin.storeUser')}}"
        method="POST"
        enctype="multipart/form-data"
    >
    @if (isset($user))
            @method('PUT')
        @endif
    @csrf
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control"
            value="{{isset($user) ? $user->name : old('name')}}"            >
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control"
            value="{{isset($user) ? $user->email : old('email')}}"   >
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" {{old('password')}}
           >
        </div>

        <div class="form-group">
            <label for="">Ảnh đại diện</label>
            <input type="file" name="avatar" class="form-control" >
                @if (isset($user))
                    <img src="{{asset($user->avatar)}}" alt="{{$user->name}}" width="100">

                @endif

        </div>
        <div class="form-group">
            <label for="">Phân quyền</label>
            <input type="radio" name="role" value="1" {{isset($user) && $user->role == 1 ? 'checked' : ''}} >Admin
            <input type="radio" name="role" value="0" {{isset($user) && $user->role == 0 ? 'checked' : ''}} >User
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <input type="radio" name="status" value="1" {{isset($user) && $user->role == 1 ? 'checked' : ''}} >kích hoạt
            <input type="radio" name="status" value="0" {{isset($user) && $user->role == 0 ? 'checked' : ''}} >không kích hoạt
        </div>
        <div>
            <button class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
    </form>
@endsection
