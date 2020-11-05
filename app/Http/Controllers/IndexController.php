<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('index')->with('vacancies', $vacancies);
    }
}