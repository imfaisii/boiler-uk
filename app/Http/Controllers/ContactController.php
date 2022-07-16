<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact');
    }

    public function send(ContactFormRequest $request)
    {
        try {
            Mail::to(config('app.admin.emails'))->send(new ContactMail($request->validated()));

            return back()->withStatus("Email sent successfully.");
        } catch (Exception $exception) {
            return back()->withError($exception->errorInfo[2] ?? $exception->getMessage());
        }
    }
}
