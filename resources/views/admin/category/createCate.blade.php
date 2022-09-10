@extends('layout.admin')
@section('title', 'Thêm mới danh mục')
@section('title', 'Chỉnh sửa danh mục')
@section('content-title', isset($categories)? 'Chỉnh sửa thông tin' : 'Tạo mới danh mục')

@section('content')
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form
        action="{{ isset($categories) ? route('category.createCate', $categories->id) : route('category.storeCate')}}"
        method="POST"
        enctype="multipart/form-data"
        >
        @if (isset($categories))
             @method('PUT')
        @endif
@csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
        <input type="name" name="name" class="form-control"
        value="{{isset($categories) ? $categories->name : old('name')}}"            >
    </div>

    <button type="submit" class="btn btn-primary">submit</button>
  </form>
  @endsection
