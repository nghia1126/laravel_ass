<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function productClient()
    {
        $products = DB::table('products')->select('*');
        $products = $products->get();
    }

    public function index()
    {

        //dd(request()->key);
        $productsPaginate =Product::select('id', 'name', 'price',  'avatar', 'desc')
            ->paginate(5);

        if($key=request()->key ){
            $productsPaginate =Product::select('id', 'name', 'price',  'avatar', 'desc')
            ->where( 'name', 'like', '%'.$key.'%')

            ->paginate(5);

        }
        // dd($productsPaginate);
        return view('admin.product.listProduct', ['products' => $productsPaginate]);
    }

    public function create()
    {
       return view('admin.product.createProduct');
    }

    public function store(ProductUpdateRequest $request)
    {
// định nghĩa các đk validate
        // $request->validate([
        //     'name'=> 'required|min:6|max:50',
        //     'email'=> 'required|min:6|email',
        //     'password'=> 'required|min:6|max:50'
        // ]);

//nếu các đk ở trên thỏa mãn thì chạy xuống

       $product = new Product();
       //cách 1
            $product->name= $request->name;
            $product->price= $request->price;
            $product->desc= $request->desc;
       //cách 2
    //    $product->fill($request->all());
       //kiểm tra file và lưu
       if ($request->hasFile('avatar')) {
        // 2.1 Xử lý tên file

        $avatar = $request->avatar;
        $avatarHasName = $avatar->hashName();
         $avatarName = $request->name . '_' . $avatarHasName;

        $product->avatar = $avatar->storeAs('images/products', $avatarName);

    } else {
        $product->avatar = '';
    }
       $product->save();
       return redirect()->route('admin.list');
    }

    public function delete(Product $product)
    {
        if($product){

            $product->delete();

            return redirect()->back();
        }
    }

    public function edit(Product $product)
    {
        return view('admin.product.createProduct', [
            'product'=> $product
        ]);
    }

    public function update(ProductUpdateRequest $request, $id)
    {

        $product = Product::find($id);

        $product->fill($request->except(['_method', '_token']));

        //kiểm tra file và lưu
        if ($request->hasFile('avatar')) {
         // 2.1 Xử lý tên file

            // $file= 'img/products' . $product->avatar;
            // if(File::exists($file))
            // {
            //     File::delete($file);
            // }

         $avatar = $request->avatar;
         $avatarHasName = $avatar->hashName();
         $avatarName = $request->username . '_' . $avatarHasName;

         $product->avatar = $avatar->storeAs('images/products', $avatarName);
         // Lưu vào thư mục storages/app/images/products

         // chạy lệnh php artisan storage:link để link thư mục
     } else {
         $product->avatar = '';
     }
        $product->update();
        return redirect()->route('admin.list');
}
}
