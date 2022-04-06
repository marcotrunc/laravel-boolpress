<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Data Array
        $data = $request->all();

        // Validation
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'message' => 'required',
        ], [
            'email.required' => 'E\' richiesta la mail',
            'email.email' => 'Inserire un indirizzo mail valido',
            'message.required' => 'Insersci il testo del messaggio'
        ]);

        //Check if fails
        if ($validator->fails()) return response()->json(['errors' => $validator->errors()]);

        // Send Mail
        $email = new ContactMail($data);
        Mail::to(env('MAIL_ADMIN_ADDRESS'))->send($email);



        // Save on db
        $message = new Message();
        $message->fill($data);
        $message->save();

        return response('Message received', 201);
    }
}
