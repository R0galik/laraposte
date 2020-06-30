<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePasteRequest;
use App\Paste;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PasteController extends Controller
{
    public function index()
    {
        $pastes = Paste::orderBy('id', 'desc')->paginate(10);
        return view('paste.paste_list', ['PASTES' => $pastes]);

    }

    public function createView()
    {
        return view('paste.create_paste');
    }

    public function create(CreatePasteRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user() ? Auth::user()->id : null ;

        Paste::create($data);

        return Redirect::route('paste.list');
    }

    public function show(Paste $paste)
    {
        return view('paste.paste_detail', ['PASTE' => $paste]);
    }
}
