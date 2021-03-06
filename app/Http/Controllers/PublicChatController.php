<?php

namespace App\Http\Controllers;

use App\PublicChat;
use Illuminate\Http\Request;

class PublicChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = PublicChat::all();
        return view('chatPublic',['chats' => $chats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'sex' => 'required|in:male,female',
            'level' => 'required|in:Beginner,Intermediate,Pro',
            'country' => 'required|string',
            'messanger' => 'nullable',
            'instagram' => 'nullable',
            'skype' => 'nullable',
            'topic' => 'required'
        ]);

        PublicChat::create($data);
        return back()->with(['success' => 'your information was saved with success you can chat now']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PublicChat  $publicChat
     * @return \Illuminate\Http\Response
     */
    public function show(PublicChat $publicChat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PublicChat  $publicChat
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicChat $publicChat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PublicChat  $publicChat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicChat $publicChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PublicChat  $publicChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicChat $publicChat)
    {
        //
    }
}
