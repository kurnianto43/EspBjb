@extends('Layouts.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
	            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h1>Welcome {{Auth::user()->name}}</h1>
                      <p>Semoga hari ini lebih baik dari hari kemarin</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
             </div>
            </div>
@endsection

@section('script')
	

@endsection



