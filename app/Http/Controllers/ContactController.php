<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $products = DB::table('products')->pluck('title', 'id');
        View::share('products', $products);
    }
    public function index()
    {
        return view('pages.contact-us');
    }
    public function submitContactForm(Request $request)
    {
        $validator = Validator::make(
            [
                'name' => $request->post('name'),
                'phone' => $request->post('phone'),
                'email' => $request->post('email'),
                'subject' => $request->post('subject'),
                'message' => $request->post('message'),
            ],
            [
                'name' => 'required|max:255',
                'phone' => 'required',
                'email' => 'required|max:255|email',
                'subject' => 'required|max:255',
                'message' => 'max:500',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $contact = new Contact();

        $contact->name = $request->post('name');
        $contact->phone = $request->post('phone');
        $contact->email = $request->post('email');
        $contact->subject = $request->post('subject');
        $contact->message = $request->post('message');

        $contact->save();
        return redirect()->back()->withSuccess("Submit Successfully");
    }
}
