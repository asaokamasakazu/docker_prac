<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Department;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::with('department')->get()->sortByDesc('contact_id');;
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::select('id', 'name')->get();
        return view('contacts.create', compact('departments'));
    }

    public function confirm(ContactRequest $request, Contact $contact)
    {
        $form = $request->all();
        unset($form['_token']);
        $contact->fill($form);
        return view('contacts.confirm', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request, Contact $contact)
    {
        if($request->input('back') == 'back') {
            return redirect()->route('contacts.create')->withInput();
        }

        $form = $request->all();
        unset($form['_token']);
        $contact->fill($form)->save();
        return view('contacts.complete');
    }
}
