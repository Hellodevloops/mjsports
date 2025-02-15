<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormSubmitted;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Orchid\Support\Facades\Alert;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::first();
        return view('contact', compact('contacts'));
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
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string',
            // 'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        try {
            // Save data to the database
            $contact = new Contact();
            $contact->first_name = $validatedData['first_name'];
            $contact->last_name = $validatedData['last_name'];
            $contact->email = $validatedData['email'];
            $contact->phone = $validatedData['phone'];
            $contact->message = $validatedData['message'];
            $contact->save();

            // Send email
            $mailcontroller = new MailController;
            $mailcontroller->send_contact_email($validatedData['email'], $validatedData['first_name']);

            // Send notification using Orchid
            Alert::info('Thank you for contacting us! Your message has been successfully submitted.');

            // Redirect to success page with success message
            return back()->with('success', 'Thank you for contacting us!');
        } catch (\Exception $e) {
            // Redirect back with error message
            Alert::error('Error: ' . $e->getMessage());
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
