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
    		return view('esp.spp.instore', compact('parts'));
    	}

    public function create()
    	{
        	return view('esp.spp.inputData');
    	}

    public function store()
        {
    	   Part::create([
    		  'no_part'=>request('no_part'),
    		  'nama_part'=>request('nama_part'),
    		  'qty'=>request('qty'),
              'tgl_terima'=>request('tgl_terima'),
              'catatan'=>request('catatan'),
    		  'foto_spp'=>request('foto_spp'),
    		  
    	   ]);

            return redirect()->route('part.instore');
        }

    public function destroy(Part $part)
        {
            $part->delete();

            return redirect()->route('part.instore');
        }
}