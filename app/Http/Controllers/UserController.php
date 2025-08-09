<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    // public function excel(){
    //     return Excel::download(new UserExport, 'users.xlsx');
    // }
}
