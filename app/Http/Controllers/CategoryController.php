<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\CateRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('admin.category.listCate', ['categories'=>$categories]);
    }

    public function createCate()
    {
        return view('admin.category.createCate');
    }

    public function storeCate(CateRequest $request)
    {

        $categories = new Category();
        $categories->fill($request->all());
        $categories->save();
        return redirect()->route('category.listCate');
    }

    public function editCate($id)
    {
        $categories = Category::find($id);
        return view('admin.category.createCate', ['categories'=>$categories]);
    }

    public function updateCate(CateRequets $request, $id)
    {
        $categories = Category::find($id);
        $categories->fill($request->except(['_method', '_token']));
        $categories->update();
        return redirect()->route('category.listCate');
    }

    public function deleteCate($id)
    {
        $category = Category::find($id);
        $products = Product::where('id', '=', $category->id)->get();
        $productIds = $products->pluck('id');
        Product::whereIn('id', $productIds)->update(['category_id' => 0]);
        $category->delete();
        return redirect()->route('category.listCate');
    }
}
