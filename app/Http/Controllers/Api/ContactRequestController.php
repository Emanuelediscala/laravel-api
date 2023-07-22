<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use App\Models\ContactRequest;
use GrahamCampbell\ResultType\Success;

class ContactRequestController extends Controller
{
    public function store(Request $request) {
        $data=$request->all();
        $validator = Validator::make(
            $data,
            [
                "name" =>"required",
                "email"=>"required|email",
                "message" =>"required"
            ]
            );
            // IN CASO DI ERRORI SI SPACCA
            if($validator->fails()) {
                return response()->json([
                    "success" => false,
                    "errors" => $validator->errors()
                ]);
            }
            // SALVATAGGIO DB
            $newContactRequest = new ContactRequest();
            $newContactRequest->fill($data);
            $newContactRequest->save();
            // Invio Mail
            $newMail = new NewContact($data);
            Mail::to("info@miosito.it")->send($newMail);

            return response()->json([
                "success"=> true
            ]);
    }
}
