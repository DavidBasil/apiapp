<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ApiContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$contacts = Contact::all();
			return $contacts;
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$contact = new Contact();
			$contact->name = request('name');
			$contact->address = request('address');
			$contact->phone = request('phone');
			$contact->save();
			return response()->json($contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$contact = Contact::findOrFail($id);
			return $contact;
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
			$contact = Contact::findOrFail($id);
			$contact->name = request('name');
			$contact->address = request('address');
			$contact->phone = request('phone');
			$contact->save();
			return $contact;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$contact = Contact::findOrFail($id);
			$contact->delete();
			return "Contact $contact->name destroyed";
    }
}
