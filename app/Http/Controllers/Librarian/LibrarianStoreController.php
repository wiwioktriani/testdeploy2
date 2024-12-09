<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibrarianStoreController extends Controller
{
    //
    public function index(){
        return view('librarian.store.create');
    }
    public function manage(){
        return view('librarian.store.manage');
    }
}

