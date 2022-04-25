<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Categories::all();
        $products = Products::all();

        return view('products', compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create()
    {
        $categorie = Categories::all();

        if (\Auth::user()->role != '404'){
            return redirect()->route('index.index');
        }

        return view('c-categories', compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $categorie = new Categories();

        $categorie->categories_name = $request->categories_name;

        if ($request->file('categories_img')) {
            $path = Storage::putFile('public', $request->file('categories_img'));
            $url = Storage::url($path);
            $categorie->categories_img = $url;
        }

        $categorie->save();

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        $categories = Categories::find($id);

        if (\Auth::user()->role != '404'){
            return redirect()->route('index.index');
        }

        return view('e-categories', compact('categories'));
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
        $categorie = Categories::find($id);

        $categorie->categories_name = $request->categories_name;

        if ($request->file('categories_img')) {
            $path = Storage::putFil('public', $request->file('categories_img'));
            $url = Storage::url($path);
            $categorie->categorie_img = $url;
        }

        $categorie->update();
        $id = $categorie->categories_id;

        return redirect()->route('categories.index', compact('id'));
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
