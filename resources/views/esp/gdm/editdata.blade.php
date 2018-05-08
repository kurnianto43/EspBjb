@extends('layouts.master')


@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="card">
                <div class="card-body">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div id="titel" class="form-title">
									<h4>Input Data Gdm</h4>
								</div>
								<div class="form-body">
									<form action="{{ route('gdm.update', $gdm) }}" method="POST">
								          	{{csrf_field()}}
								          	{{ method_field('PATCH') }}
											  <div class="form-group">
											  	<label for="no_asset">Nomor Asset</label>
											    <input type="text" class="form-control p-input" name="no_asset" id="no_asset" value="{{ $gdm->no_asset }}" placeholder="No asset" autofocus required>
											  </div>
											  <div class="form-group">
											  	<label for="no_id">Id Gdm</label>
											    <input type="text" class="form-control p-input" value="{{ $gdm->no_id }}" id="no_id" name="no_id" placeholder="Id asset">
											  </div>
											  <div class="row">
											  		<div class="col-md-6">
														  <div class="form-group">
															  <label for="tipe_id">Tipe Gdm</label>
															  <select name="tipe_id" class="form-control p-input" id="tipe">
															    
															    @foreach($tipes as $tipe)
															    	<option value="{{ $tipe -> id }}">{{ $tipe -> tipe }}</option>
															    @endforeach
															  </select>
														  </div>
													</div>
													<div class="col-md-6">
														  <div class="form-group">
															  <label for="sel1">Kondisi</label>
															  <select name="kondisi_id" class="form-control p-input" id="sel1">
																
															  	@foreach($kondisis as $kondisi)
															    	<option value="{{ $kondisi -> id }}">{{ $kondisi -> kondisi }}</option>
															    @endforeach

															  </select>
														  </div>
											  		</div>
											  </div>
											  <div class="form-group">
											  	<label for="tgl_masuk_wh">Tanggal Masuk Warehouse</label>
											    <input required="" type="text" value="{{ $gdm->tgl_masuk_wh }}" name="tgl_masuk_wh" class="form-control p-input" placeholder="Tanggal Masuk Warehouse" onfocus="(this.type='date')"/>
											  </div>
											  <div class="form-group">
											  	<label for="catatan">Catatan</label>
											    <textarea style="padding-left: 10px; padding-right: 10px;" name="catatan" class="form-control p-input" id="catatan" value="" cols="10" rows="3" placeholder="Catatan">{{ $gdm->catatan }}</textarea>
											  </div>
								        </div>
								        
										  <button type="submit" class="btn btn-primary mr-2">Simpan</button>
								        
									</form>	

									</div>
						</div>
		</div>
	</div>
</div>
</div>
	</div>
@endsection
