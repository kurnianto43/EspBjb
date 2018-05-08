@extends('layouts.pdf')

@section('content')

<style type="text/css">
                .tabel{
                	border-collapse:collapse;
                	border-spacing:0;
                	border-color:#ccc;
                	width: 100%;
                	}
                .tabel td{
                	font-family:Arial;
                	font-size:12px;
                	padding:10px 5px;
                	border-style:solid;
                	border-width:1px;
                	overflow:hidden;
                	word-break:normal;
                	border-color:#ccc;
                	color:#333;
                	background-color:#fff;}
                .tabel th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tabel .tb-head{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                
                .tabel .tb-body{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>

<div style="text-align: center;" class="kop">
	<h3>Cv. Dzaki Usaha Mandiri</h3>
	<h4>Esp partner of The Coca Amatil Indonesia</h4>
	<h4>Jl. Taruna Praja Rt.01 Rw.01 No.11 Banjarbaru, Tlp. 085751738501</h4>
	<hr>
</div>

<div style="margin-left: 150px; margin-top: 50px;" class="tabel">
	 <table>
			    <thead>
			      <tr>
			        <th class="tb-head">Nomor Asset</th>
			        <th class="tb-head">Id Asset</th>
			        <th class="tb-head">Tipe</th>
			        <th class="tb-head">Kondisi</th>
			        <th class="tb-head">Tanggal Masuk</th>
			        <th class="tb-head">Catatan</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach( $gdms as $gdm )
			      <tr>
			        <td class="tb-body">{{ $gdm->no_asset }}</td>
			        <td class="tb-body">{{ $gdm->no_id }}</td>
			        <td class="tb-body">{{ $gdm->tipe->tipe }}</td>
			        <td class="tb-body">{{ $gdm->kondisi->kondisi }}</td>
			        <td class="tb-body">{{ $gdm->tgl_masuk_wh }}</td>
			        <td class="tb-body">{{ $gdm->catatan }}</td>
			      </tr>
			      @endforeach
			    </tbody>
			  </table>

</div>
	
@endsection