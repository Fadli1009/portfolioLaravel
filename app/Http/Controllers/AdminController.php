<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Contact::paginate(2);
        return view('admin.partials.navbar', compact('data'));
    }
    public function count()
    {
        $count = Contact::where('status', 1)->count();
        $get = Contact::where('status', 1)->get();
        return response()->json(['count' => $count, 'get' => $get]);
    }
    public function inbox($id)
    {
        $inbox = Contact::find($id);
        $inbox->update(['status' => 0]);
        return view('admin.pages.inbox.index', compact('inbox'));
    }
}
