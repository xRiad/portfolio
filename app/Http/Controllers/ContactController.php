<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function createMessage (Request $request) {
        $validated = $request->validate([
          'name' => 'string|max:10',
          'email' => 'string|email|max:30',
          'message' => 'string|max:300'
        ]);

        ContactMessage::create($validated);

        return  redirect()->back()->withInput();    
    }
}
