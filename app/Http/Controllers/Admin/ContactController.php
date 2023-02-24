<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::where('active', 1)->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show()
    {
        $contacts = Contact::where('active', 0)->get();

        return view('admin.contacts.inactive', compact('contacts'));
    }

    public function active(Request $request, $contact)
    {
        if (! $save = Contact::find($contact)) {
            return redirect()->back()->with('fail', 'Registro não foi atualizado.');
        }

        $data = $request->only('active');
        $save->update($data);

        return redirect()->back()->with('success', 'Registro atualizado com sucesso.');
    }

    public function destroy(Contact $contact)
    {
        if ($contact->delete()) {
            return redirect()->route('admin.contacts.index')->with('success', 'Registro excluído com sucesso.');
        } else {
            return redirect()->route('admin.contacts.index')->with('fail', 'Um erro ocorreu na tentativa de exclusão');
        }
    }
}
