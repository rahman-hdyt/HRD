<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MasterDimensi;
use App\Models\MasterJabatan;
use Illuminate\Http\Request;

class DimensiController extends Controller
{
    public function index()
    {
        $jabatans = MasterJabatan::all();

        return view('master.dimensi.index', compact('jabatans'));
    }
}
