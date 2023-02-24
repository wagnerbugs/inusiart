<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use stdClass;

class PanelController extends Controller
{
    protected $admin;

    protected $user;

    public function __construct(Admin $admin, User $user)
    {
        $this->middleware('auth');
        $this->admin = $admin;
        $this->user = $user;
    }

    /**
     * Função que retorna a página inicial do painel de controle administrativo
     *
     * @return view
     */
    public function index()
    {
        //totalizadores para estatística
        $counters = new stdClass();
        $counters->allAdmins = $this->admin->all()->count();
        $counters->allAdminsOnline = $this->admin->where('online', 1)->count();
        $counters->allPosts = Post::count();
        $counters->allUsers = User::count();
        $counters->activeContacts = Contact::where('active', 1)->count();

        $adminsOnline = Admin::with('level')->where('online', 1)->get();
        $contacts = Contact::where('active', 1)->orderByDesc('id')->get();

        return view('admin.dashboard', compact('counters', 'adminsOnline', 'contacts'));
    }
}
