<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            \Illuminate\Support\Facades\Mail::to('info@eresa.id')->send(new \App\Mail\ContactFormMail($validated));
            return response()->json(['status' => 'success', 'message' => 'Pesan Anda berhasil dikirim!']);
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Error sending contact email: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.'], 500);
        }
    }
}
