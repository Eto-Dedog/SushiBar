<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Reviews;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Posts::all();

        return view('blog', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create()
    {
        $posts = Posts::all();

        if (\Auth::user()->role != '404'){
            return redirect()->route('index.index');
        }

        return view('c-post', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $post = new Posts();

        $post->post_name = $request->post_name;
        $post->post_text = $request->post_text;
        $post->postUser_id = Auth::user()->user_id;

        if ($request->file('post_img')) {
            $path = Storage::putFile('public', $request->file('post_img'));
            $url = Storage::url($path);
            $post->post_img = $url;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Пост успешно создан!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        $post = Posts::where('post_id', '=', $id)->join('users','user_id','=','postUser_id')->get();

        $reviews = Reviews::where('reviewPost_id', '=', $id)->join('users','user_id','=','reviewUser_id')->get();
        $posts = Posts::join('users','user_id','=','postUser_id')->limit(3)->orderByRaw("RAND()")->get();

        return view('post', compact('post','posts', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Posts::find($id);

        if (\Auth::user()->role != '404'){
            return redirect()->route('index.index');
        }

        return view('e-post', compact('post'));
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
        $post = Posts::find($id);

        $post->post_name = $request->post_name;
        $post->post_text = $request->post_text;
        $post->postUser_id = Auth::user()->user_id;

        if ($request->file('post_img')) {
            $path = Storage::putFile('public', $request->file('post_img'));
            $url = Storage::url($path);
            $post->post_img = $url;
        }

        $post->update();
        $id = $post->post_id;

        return redirect()->route('posts.index', compact('id'))->with('success', 'Пост успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $reviews = Reviews::where('reviewPost_id', '=', $id)->get();

        foreach ($reviews as $review) {
            $review->delete();
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Пост успешно удалён!');
    }
}
