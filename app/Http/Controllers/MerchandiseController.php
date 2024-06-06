<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        $cat = Merchandise::orderBy('brand_name')->get();

        return view('merchandise.index', ['merchandises' => $cat]);
    }
}
