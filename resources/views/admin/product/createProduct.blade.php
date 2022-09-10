@extends('layout.admin')
@section('title', 'Thêm mới sản phẩm')
@section('content-title', isset($product)? 'Chỉnh sửa thông tin' : 'Tạo mới sản phẩm')

@section('content')
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form
        action="{{ isset($product) ? route('admin.update', $product->id) : route('admin.store')}}"
        method="POST"
        enctype="multipart/form-data"
        >
        @if (isset($product))
             @method('PUT')
        @endif
@csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
        <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        value="{{isset($product) ? $product->name : old('name')}}"            >


    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
      <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
      value="{{isset($product) ? $product->price : old('price')}}"            >

    </div>
    <div>
    <label class="form-label" for="form3Example1">Danh Mục</label>
                    <select name="category_id" class="form-control" id=""
                    value="{{isset($product) ? $product->category_id : old('category_id')}}"            >
>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}"> {{ $item->name }} </option>
                        @endforeach
                    </select>
                </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Ảnh sản phẩm</label>
        <input type="file" name="avatar"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @if (isset($user))
        <img src="{{asset($product->avatar)}}" alt="{{$product->name}}" width="100">

    @endif
    </div>
      <div class="form-group">
        <label for="">Mô tả sản phẩm</label> <br>
        <textarea name="desc" id="" cols="50" rows="5"> {{isset($product) ? $product->desc : old('desc')}} </textarea>
    </div>

    <button type="submit" class="btn btn-primary">submit</button>
  </form>
  @endsection
