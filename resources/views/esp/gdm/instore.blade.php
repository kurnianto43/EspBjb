@extends('layouts.master')


@section('content')
	
	<div>
		<div class="row">
			<div class="col-md-9">
				<a id="add" href="{{ route('gdm.create') }}" class="btn btn-primary btn-md" style="margin-bottom: 5px;"><i class="fa fa-plus" aria-hidden="true"></i> Tambah data</a>
		  	<a href="{{ route('gdm.pdf') }}" style="margin-bottom: 5px;" id="print" class="btn btn-success btn-md"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>

			</div>
			<div  class="col-md-3">
				<form  class="">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
			</div>
		</div>
		  				<div class="card">
                <div class="card-body">
                		       <h5 class="card-title mb-4">Data Instore Gdm 6A</h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
			  
			    <thead>
			      <tr>
			        <th>Nomor Asset</th>
			        <th>Id Asset</th>
			        <th>Tipe</th>
			        <th>Kondisi</th>
			        <th>Tanggal Masuk</th>
			        <th>Catatan</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach( $gdms as $gdm )
			      <tr>
			        <td>{{ $gdm->no_asset }}</td>
			        <td>{{ $gdm->no_id }}</td>
			        <td>{{ $gdm->tipe->tipe }}</td>
			        <td>{{ $gdm->kondisi->kondisi }}</td>
			        <td>{{ $gdm->tgl_masuk_wh }}</td>
			        <td>{{ $gdm->catatan }}</td>
			        <td>
			        	<form action="{{ route('gdm.destroy', $gdm) }}" method="post">
			        		{{ csrf_field() }}
			        		{{ method_field('DELETE') }}
			        	<a id="edit" href="{{ route('gdm.edit', $gdm) }}" class="btn btn-dark btn-sm"><i class="fa fa-pencil-square-o"></i> Edit</a>
			        		<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
			        	</form>
			        	
			        </td>
			      </tr>
			      @endforeach
			    </tbody>
			  </table>
			                </div>
            </div>
	</div>

@endsection