<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{

    public function __construct()
        {
            $this->middleware('web');
        }

	public function index()
	{
        return view('esp.service.service');
	}

    public function create()
    {
    	return view('esp.service.inputService');
    }

    public function store()
    {
        Service::create([

            'no_dok'=>request('no_dok'),
              'no_outlet'=>request('no_outlet'),
              'nama_outlet'=>request('nama_outlet'),
              'alamat_outlet'=>request('alamat_outlet'),
              'no_asset'=>request('no_asset'),
              'model'=>request('model'),
              'kerusakan'=>request('kerusakan'),
              'no_part'=>request('no_part'),
              'nama_part'=>request('nama_part'),
              'jumlah'=>request('jumlah'),
              'aktifitas'=>request('aktifitas'),
              'teknisi'=>request('teknisi'),
              'tgl_fin'=>request('tgl_fin'),
              'catatan'=>request('catatan')
        ]);
    	return redirect()->route('service.report');
    }

    public function report()
    {
        $services = Service::all();
        return view('esp.service.reportService', compact('services'));
    }
}