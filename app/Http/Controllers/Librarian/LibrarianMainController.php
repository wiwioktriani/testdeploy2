<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibrarianMainController extends Controller
{
    //
    public function index(){
        return view("librarian.dashboard");
    }
    public function orderHistory(){
        return view("librarian.orderhistory");
    }
}
