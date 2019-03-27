<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\Reply;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function viewLists()
    {
        $contacts = Contact::all();
        return view('admin.contact',['contacts' => $contacts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'content' => 'required|string'
        ]);
        Contact::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'content' => $request->input('content')
        ]);
        return back()->with(['success'=>'your message was sent with success']);
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    public function reply($id,Request $request)
    {
        $request->validate([
           'reply' => 'required'
        ]);
        $contact = Contact::find($id);

        Mail::to($contact->email)->send(new Reply($request->input('reply')));
        Contact::where('id',$id )->update([
            'reply' => 1
        ]);

        return back()->with(['success' => 'reply sent with success']);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
