<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function export(UsersExport $usersExport)
    {

//        return $usersExport->download('users.xlsx'); // Bajar

//        $usersExport->store('users.csv', 'public'); // Guardar en disco
//        return "listo";

//        return new UsersExport; // Usando implements Responsable
    }
}
