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

									<form action="{{ route('gdm.store') }}" method="POST">
								          	{{csrf_field()}}
											  <div class="form-group">
											  	<label for="no_asset">Nomor Asset</label>
											    <input type="text" class="form-control p-input"name="no_asset" id="no_asset" placeholder="" autofocus required>
											  </div>
											  <div class="form-group">
											  	<label for="no_id">Id Gdm</label>
											    <input type="text" class="form-control p-input" id="no_id" name="no_id" placeholder="">
											  </div>
											  <div class="form-group">
											  	<div class="row">
											  		<div class="col-md-6">
											  			<label for="tipe_id">Tipe Gdm</label>
											  			<select name="tipe_id" class="form-control p-input" id="tipe_id">
												    <option value="" selected disabled>Model</option>
												    @foreach($tipes as $tipe)
												    	<option value="{{ $tipe -> id }}">{{ $tipe -> tipe }}</option>
												    @endforeach
												  </select>
											  		</div>
											  		<div class="col-md-6">
											  			<label for="kondisi_id">Kondisi</label>
											  			<select name="kondisi_id" class="form-control p-input" id="kondisi_id">
													<option value="" selected disabled>Kondisi</option>
												  	@foreach($kondisis as $kondisi)
												    	<option value="{{ $kondisi -> id }}">{{ $kondisi -> kondisi }}</option>
												    @endforeach

												  </select>
											  		</div>
											  	</div>
											  </div>
							
											  <div class="form-group">
											  	<label for="tgl_masuk_wh">Tanggal Masuk Warehouse</label>
											    <input required="" type="text"  name="tgl_masuk_wh" class="form-control p-input" placeholder="" onfocus="(this.type='date')"/>
											  </div>
											  <div class="form-group">
											  	<label for="catatan">Catatan</label>
											    <textarea style="padding-left: 10px; padding-right: 10px;" class="form-control p-input" name="catatan" id="catatan" cols="12" rows="3" placeholder=""></textarea>
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

	
