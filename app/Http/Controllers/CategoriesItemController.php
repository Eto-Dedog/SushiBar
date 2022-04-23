<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Comments;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriesItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $products = Products::join('categories','categories_id','=','productCategory_id')->get();
        $comments = Comments::join('users','user_id','=','commentUser_id')->get();

        return view('product', compact('products', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Categories::all();
        $product = Products::all();

        return view('c-product', compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $products = new Products();

        $products->productCategory_id = $request->productCategory_id;
        $products->products_name = $request->products_name;
        $products->products_desc = $request->products_desc;
        $products->products_price = $request->products_price;
        $products->productSet_id = $request->productSet_id;

        if ($request->file('products_img')) {
            $path = Storage::putFile('public', $request->file('products_img'));
            $url = Storage::url($path);
            $products->products_img = $url;
        }

        $products->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $products = Products::where('product_id', '=', $id)->join('categories','categories_id','=','productCategory_id')->get();
        $comments = Comments::where('commentProduct_id', '=', $id)->join('users','user_id','=','commentUser_id')->get();
        return view('product', compact('products','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $products = Products::join('categories','categories_id','=','productCategory_id')->find($id);
        $categories = Categories::all();

        return view('e-product', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->productCategory_id = $request->productCategory_id;
        $products->products_name = $request->products_name;
        $products->products_desc = $request->products_desc;
        $products->products_price = $request->products_price;
        $products->productSet_id = $request->productSet_id;

        if ($request->file('products_img')) {
            $path = Storage::putFile('public', $request->file('products_img'));
            $url = Storage::url($path);
            $products->products_img = $url;
        }

        $products->update();
        $id = $products->product_id;

        return redirect()->route('product.index', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
