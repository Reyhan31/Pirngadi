<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function index(Request $request){

        if(!session()->get('cart')){
            return back()->with('Error', 'No product found');
        }

        $details = [
                'firstName' => $request->quotationDetailsFirstName,
                'lastName' => $request->quotationDetailsLastName,
                'email' => $request->quotationDetailsEmailAddress,
                'phoneNumber' => $request->quotationDetailsPhoneNumber,
                'companyName' => $request->quotationDetailsCompanyName,
                'cart' => session()->get('cart'),
            ];


            try {
                \Mail::to('reyhan.nathanael@yahoo.com')->send(new \App\Mail\sendMail($details));
                \Mail::to('reyhannathanael1@gmail.com')->send(new \App\Mail\sendMail($details));
                session()->forget('cart');
                // dd("Success");
                return back()->with('success', 'Email has been sent!');
            } catch (Exception $ex) {
                // Debug via $ex->getMessage();
                return back()->with('Error', 'Error occured. Please try again');
            }
    }

    public function email(Request $request){
        $details = [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        \Mail::to('reyhan.nathanael@yahoo.com')->send(new \App\Mail\serviceMail($details));
        return back()->with('success', 'Email has been sent!');
    }
}
