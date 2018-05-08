<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;

class PartController extends Controller
{

    public function __construct()
    	{
    		$this->middleware('web');
    	}

    public function index()
    	{
            $parts = Part::all();
    		return view('esp.spp.dataSpp', compact('parts'));
    	}

    public function create()
    	{
        	return view('esp.spp.inputSpp');
    	}

    public function store()
        {
    	   Part::create([
    		  'no_part'=>request('no_part'),
    		  'nama_part'=>request('nama_part'),
    		  'jumlah'=>request('jumlah'),
    		  'stok_min'=>request('stok_min'),
    		  'catatan'=>request('catatan')
    	   ]);

            return redirect()->route('spp.index');
        }
}