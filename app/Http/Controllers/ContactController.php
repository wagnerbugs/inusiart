<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->only('name', 'email', 'phone', 'message');
        $data['active'] = 1;
        $save = Contact::create($data);

        if ($save) {
            return redirect()->back()->with('success', 'Mensagem enviada com sucesso.');
        } else {
            return redirect()->back()->with('fail', 'Um erro impediu o cadastro.');
        }
    }
}
