<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $data = $request->only('email');
        $data['active'] = 1;
        $save = Newsletter::create($data);

        if ($save) {
            return redirect()->back()->with('success', 'Mensagem enviada com sucesso.');
        } else {
            return redirect()->back()->with('fail', 'Um erro impediu o cadastro.');
        }
    }
}
