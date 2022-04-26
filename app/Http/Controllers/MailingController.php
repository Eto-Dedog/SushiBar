<?php

namespace App\Http\Controllers;

use App\Mailing;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        $mailings = Mailing::paginate(10);

        if (\Auth::user()->role != '404'){
            return redirect()->route('index.index');
        }

        return view('mailer', compact('mailings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $mailing = new Mailing();

        $mailing->mailing_email = $request->mailing_email;

        $mailing->save();

        return back()->with('success', 'Просьба на рассылку успешно отправлено!');
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $mailing = Mailing::find($id);

        $mailing->delete();

        return back()->with('success', 'Просьба на рассылку успешно удалена!');
    }
}
