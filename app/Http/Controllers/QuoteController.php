<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Mail\QuoteMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function index()
    {
        return view('front.get-a-quote');
    }
    public function submit(QuoteRequest $request)
    {
        try {
            Mail::to(config('app.admin.emails'))->send(new QuoteMail($request->validated()));

            return back()->withStatus("Email sent successfully.");
        } catch (Exception $exception) {
            return back()->withError($exception->errorInfo[2] ?? $exception->getMessage());
        }
    }
}
