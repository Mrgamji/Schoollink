<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    protected $apiUrl = "https://my.kudisms.net/api/sms";
    protected $apiKey = "3J7Kx2DEaMUBue9tlHnZITForyzRksjNGiC164WLXvQOh58VmpSfcAwY0dPgqb"; // Replace with your actual API key
    protected $senderID = "SchoolLink"; // Replace with your approved sender ID

    public function sendSignupSMS(Request $request)
    {
        $recipients =$request->phone;
        $message = $request->message;

        $response = Http::get($this->apiUrl, [
            'token' => $this->apiKey,
            'senderID' => $this->senderID,
            'recipients' => $recipients,
            'message' => $message,
            'gateway' => '2'
        ]);

        return response()->json($response->json());
    }
}
