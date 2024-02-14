<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ApplicationMail;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applicants = Application::get();
        return view('adminBase.applicants.index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $application = new Application;
        $application->name = $request->name;
        $application->email = $request->email;
        $application->subject= $request->subject;
        $application->message = $request->message;
        $application->save();

        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('dimitimanharrison@gmail.com')->send(new ApplicationMail($mailData));
        return redirect()->back()->with('success', 'Thank you for contact us. We will contact you shortly.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        return view('adminBase.applicants._show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
