@extends('layout.admin')
@section('title', 'Sản phẩm')
@section('content-title', 'Sản phẩm')
@section('content')

<form action=""  class="form-inline" >
  <div class="form-group">
    <input placeholder="Tìm kiếm..." class="form-control" name="key" id="">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<div>
<h1>Danh sách user</h1>
</div>
<div>
  <a href="{{route('admin.create')}}">
  <button class="btn-btn-success">Tạo mới</button>
</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Danh mục</th>
        <th>Ảnh sản phẩm</th>
        <th>Tình trạng</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td> {{$item['name']}} </td>
            <td> {{$item['price']}} </td>

            <td>{{$item->cate}}</td>
            <td><img src="{{asset($item->avatar)}}" alt="" width="100" ></td>

            {{-- <td>@if($item->status == 2)
              <form action="{{ route('products.completedUpdate', $item->id) }}" method="POST">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-success" name="changeStatus" value="0">Active</button>
              </form>
          @else
              <form action="{{ route('products.completedUpdate', $item->id) }}" method="POST">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-default" name="changeStatus" value="2">Inactive</button>
              </form>
          @endif
      </td> --}}

            <td>{{$item['desc']}}</td>
            <td>
                <a href="{{route('admin.edit', $item->id)}}">
                    <button class="btn btn-warning">Sửa</button>
                </a>
               <form
              action="{{route('admin.delete', $item->id)}}"
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
    {{$products->links()}}
</div>
@endsection

