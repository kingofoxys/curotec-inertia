<?php

namespace App\Http\Controllers;

use App\Models\BookCatalogs;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneralController extends Controller
{
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        return Inertia::render('Pages/BookCatalog/Index', [
            'bookCatalogs' => BookCatalogs::all(),
        ]);
    }
}
