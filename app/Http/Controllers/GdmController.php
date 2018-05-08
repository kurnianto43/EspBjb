<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gdm;
use App\Kondisi;
use App\Tipe;
use PDF;

class GdmController extends Controller
{
    public function __construct()
    	{
    		$this->middleware('web');
    	}

    public function index()
    	{
            
            $kondisis = Kondisi::all();
            $tipes = Tipe::all();
            $gdms = Gdm::all();
            return view('esp.gdm.instore', compact('kondisis', 'tipes', 'gdms', 'gdm'));
    	}

    public function create()
        {
            $kondisis = Kondisi::all();
            $tipes = Tipe::all();

            return view('esp.gdm.inputdata', compact('kondisis', 'tipes'));
        }


    public function store()
    	{
            Gdm::create([
                'no_asset' => request('no_asset'),
                'no_id' => request('no_id'),
                'tipe_id' => request('tipe_id'),
                'kondisi_id' => request('kondisi_id'),
                'tgl_masuk_wh' => request('tgl_masuk_wh'),
                'catatan' => request('catatan'),
            ]);

            return redirect()->route('gdm.instore');
    	}

    public function edit(Gdm $gdm)
        {
            $kondisis = Kondisi::all();
            $tipes = Tipe::all();

            return view('esp.gdm.editdata', compact('gdm','kondisis','tipes'));
        }


    public function update(Gdm $gdm)
        {
            $gdm->update([
                'no_asset' => request('no_asset'),
                'no_id' => request('no_id'),
                'tipe_id' => request('tipe_id'),
                'kondisi_id' => request('kondisi_id'),
                'tgl_masuk_wh' => request('tgl_masuk_wh'),
                'catatan' => request('catatan'), 
            ]);

            return redirect()->route('gdm.instore');
        }


    public function destroy(Gdm $gdm)
        {
            $gdm->delete();

            return redirect()->route('gdm.instore');
        }

    public function downloadPdf()
        {

            $gdms = Gdm::all();
            $pdf = PDF::loadview('esp.gdm.instorePdfView', compact('gdms'));
                return $pdf->download('instore.pdf', compact('gdms'));
        }   

    public function transfer()
    {
        return view('esp.gdm.transferGdm');
    }


    public function coba()
    {
        return view('layouts.master');
    }
}

