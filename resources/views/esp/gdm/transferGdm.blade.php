@extends('layouts.master')

@section('content')
	
		<div class="panel panel-default">
		  <div class="panel-heading">Data Transfer Gdm</div>
		  <div class="panel-body table-responsive">
		  	<a id="transfer" class="btn btn-primary btn-md" style="margin-bottom: 5px;"><i class="fa fa-exchange" aria-hidden="true"></i> Transfer Gdm</a>
		  	<a href="#" style="margin-bottom: 5px;" id="print" class="btn btn-success btn-md"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>

		  	<input style="border-radius: 5px; padding-right: 10px; padding-left: 10px;" type="text" class="pull-right" placeholder="Search">
			  <table id="table-force-off"">
			    <thead>
			      <tr>
			      	<th>Nomor Dokumen</th>
			        <th>Lokasi Tujuan</th>
			        <th>Tanggal Transfer</th>
			        <th>Catatan</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>6AT00000111</td>
			        <td>3N</td>
			        <td>17-08-2018</td>
			        <td>Tidak ada</td>
			        <td>
			        	<a id="edit" class="btn btn-dark btn-xs"><i class="fa fa-info" aria-hidden="true"></i> Details</a>
			        </td>
			      </tr>
			    </tbody>
			  </table>
		  </div>
			

		</div>

		<i  class="fa fa-bug"> Maaf menu ini masih belum berfungsi</i>
		<!-- <script>
			$('#add').on('click', function(){
				$('#tambahdata').modal('show');
			})
		</script>
		<script>
			$('#edit').on('click', function(){
				$('#editdata').modal('show');
			})
		</script> -->

	</div>

@endsection