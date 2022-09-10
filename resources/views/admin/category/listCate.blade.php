@extends('layout.admin')
@section('title', 'Danh mục')
@section('content-title', ' Danh mục sản phẩm')
@section('content')

<form action=""  class="form-inline" >
  <div class="form-group">
    <input placeholder="Tìm kiếm..." class="form-control" name="key" id="">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<div>

</div>
<div>
  <a href="{{route('category.createCate')}}">
  <button class="btn-btn-success">Tạo mới</button>
</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $item)
        <tr>
            <td> {{$item['id']}} </td>
            <td> {{$item['name']}} </td>


            <td>
                <a href="{{route('category.editCate', $item->id)}}">
                    <button class="btn btn-warning">Sửa</button>
                </a>
               <form
              action="{{route('category.deleteCate', $item->id)}}"
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
    {{-- {{$categories->links()}} --}}
</div>
@endsection

