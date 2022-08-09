<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function index(Request $request){

        $details = [
                'title' => 'Mail from ItSolutionStuff.com',
                'body' => 'This is for testing email using smtp',
                'firstName' => $request->quotationDetailsFirstName,
                'lastName' => $request->quotationDetailsLastName,
                'email' => $request->quotationDetailsEmailAddress,
                'phoneNumber' => $request->quotationDetailsPhoneNumber,
                'companyName' => $request->quotationDetailsCompanyName
            ];

            try {
                \Mail::to('reyhan.nathanael@yahoo.com')->send(new \App\Mail\sendMail($details));
                \Mail::to('reyhannathanael1@gmail.com')->send(new \App\Mail\sendMail($details));
            
                dd("Success");
            } catch (Exception $ex) {
                // Debug via $ex->getMessage();
                dd("Fail");
            }
    }

    public function email(Request $request){
        $details = [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        dd($details);
    }
}
