<?php

namespace App\Http\Controllers;

use App\Models\BookCatalogs;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneralController extends Controller
{
    public function index()
    {
        return Inertia::render('YourComponent', [
            'data' => BookCatalogs::all(),
        ]);
    }
}
