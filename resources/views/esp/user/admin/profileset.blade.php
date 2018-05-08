@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-10 col-md--offset-1">
			<img src="/images/uploads/avatar/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; " alt="">
			<h2>Profil {{ $user->name }}</h2>
			<form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="POST">
				<label for="">Update Profil Image</label>
				<input type="file" name="avatar">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" class="pull-right btn btn-primary btn-sm">
			</form>
		</div>
	</div>
@endsection