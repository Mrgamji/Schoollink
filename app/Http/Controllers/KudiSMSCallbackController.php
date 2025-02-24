<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KudiSMSCallbackController extends Controller
{
    public function handleCallback(Request $request)
    {
        // Log the received callback data
        Log::info('KudiSMS Callback Data:', $request->all());

        // Extract callback details
        $status = $request->input('status'); // e.g., "Delivered", "Failed"
        $phone = $request->input('recipient'); // Recipient number
        $messageId = $request->input('message_id'); // Unique message ID
        $error = $request->input('error'); // Error details if failed

        // Process the callback (store in database, update status, etc.)
        if ($status === 'Delivered') {
            // Example: Update message status in database
            // Message::where('message_id', $messageId)->update(['status' => 'Delivered']);
            Log::info("SMS delivered to $phone (Message ID: $messageId)");
        } else {
            // Handle failed messages
            Log::error("SMS Failed for $phone (Message ID: $messageId): $error");
        }

        // Respond to KudiSMS that the callback was received
        return response()->json(['message' => 'Callback received successfully']);
    }
}
