<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        return'Obteniendo lista de estudiantes desde los controlles';
    }
}
