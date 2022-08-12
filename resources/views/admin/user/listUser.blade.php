@extends('layout.admin')
@section('title', 'Quản lý người dùng')
@section('content-title', 'Quản lý người dùng')
@section('content')
    <div>
        <a href="{{route('admin.createUser')}}">
        <button class="btn-btn-success">Tạo mới</button>
    </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>

                <th>avatar</th>
                <th>Email</th>

                <th>Quyền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    {{-- <td>{{$item->username}}</td> --}}
                    <td><img src="{{asset($item->avatar)}}" alt="" width="100" ></td>
                    <td>{{$item->email}}</td>
                    
                    <td>{{$item->role ?: 'NA' }}</td>
                    <td>
                        <a href="{{route('admin.editUser', $item->id)}}">
                            <button class="btn btn-warning">Sửa</button>
                        </a>

                        <form
                                action="{{route('admin.deleteUser', $item->id)}}"
                                method="POST"
                            >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<div>
    {{$user_list->links()}}
</div>
@endsection
