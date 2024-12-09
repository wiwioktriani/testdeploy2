<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibrarianProductController extends Controller
{
    //
    public function index(){
        return view('librarian.product.create');
    }
    public function manage(){
        return view('librarian.product.manage');
    }
}
