@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-2 col-md--offset-1">
			<img src="/images/uploads/avatar/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; " alt="">
			
		</div>
		<div class="col-md-6">
			<h2>{{ $user->role->name }} Profile</h2>
			<hr size="10px" style="border-top-color: #65535394;">
			<div class="row">
				<div class="col-md-4">
					<label for="">Nama</label>
					<br>
					<label style="margin-top: 30px;" for="">Jabatan</label>
					<br>
					<label style="margin-top: 30px;" for="">Tempat, tanggal lahir</label>
					<br>
					<label style="margin-top: 30px;" for="">Alamat</label>
					<br>
					<label style="margin-top: 30px;" for="">Nomor telepon</label>
					<br>
					<label style="margin-top: 30px;" for="">Email : </label>
				</div>
				<div class="col-md-6">
					<label for="">{{ $user->name }}</label>
					<br>
					<label style="margin-top: 30px;" for="">Admin</label>
					<br>
					<label style="margin-top: 30px;" for="">Suryakanta, 15 Januari 1993</label>
					<br>
					<label style="margin-top: 30px;" for="">Jl. Intan sari 2 Banjarbaru</label>
					<br>
					<label style="margin-top: 30px;" for="">085751738501</label>
					<br>
					<label style="margin-top: 30px;" for="">yanuarkurnianto1@gmail.com</label>


				</div>
			</div>
		</div>
	</div>

	<a href="{{ route('profile.set') }}" class="btn btn-secondary mr-2">Edit</a>
@endsection