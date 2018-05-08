@extends('layouts.master')

@section('title')

	Dashboard

@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1 id="welcome-text">Selamat Datang {{Auth::user()->name}}</h1>

		</div>
	</div>

@endsection