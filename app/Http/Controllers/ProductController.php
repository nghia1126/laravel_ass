<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function productClient()
    {

        $products = DB::table('products')
        ->join('category', 'products.category_id', '=', 'category.id')
        ->select('products.*', 'category.name AS cate')
        ->orderBy('products.id', 'ASC')
        ->get();

        // $products = DB::table('products')->select('*');

        return view('client.product', compact('products'));
    }
    public function productDetail ($id)
    {
        $product= Product::find($id);
        return view('client.product-detail',['product'=> $product]);
    }

    public function index()
    {
        // $categories = Category::all();
        $productsPaginate = Product::join('category', 'products.category_id', '=', 'category.id')

        ->select('products.*', 'category.name AS cate')
        ->orderBy('products.id', 'ASC')->Paginate(6);
        //dd(request()->key);
        // $productsPaginate =DB::table('products')->select('products.*', 'category.name')
        //     ->join('category', 'products.category_id', '=', 'category->id')
        //     ->paginate(5);
        // dd($productsPaginate);
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
        $categories = Category::all();
       return view('admin.product.createProduct', compact('categories'));
    }

    public function store(ProductUpdateRequest $request)
    {


       $product = new Product();
       //cách 1
            // $product->name= $request->name;
            // $product->price= $request->price;
            // $product->category_id= $request->category_id;
            // $product->desc= $request->desc;
       //cách 2
       $product->fill($request->all());
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
        $categories = Category::all();
        return view('admin.product.createProduct', [
            'product'=> $product,
            'categories' => $categories,
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
