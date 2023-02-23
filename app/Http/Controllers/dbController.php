<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class dbController extends Controller
{
    public function students(): \Illuminate\Database\Eloquent\Collection
    {
        //return Game::select('*')->get();
        return Student::all();
    }
}
