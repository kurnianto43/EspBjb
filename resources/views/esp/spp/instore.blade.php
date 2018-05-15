@extends('Layouts.master')


@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Spare Part <small>Data Instore Spare Part</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Instore Spare Part 6A <small>{{Auth::user()->role->name}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Data instore spare part 6A. <br> Masukan data sesuai dengan yang ada di sistem coca-cola.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
					        <th>Nomor Part</th>
                  <th style="width: 250px">Nama Part</th>
					        <th>Qty</th>
					        <th>Tanggal Terima</th>
                  <th style="width: 200px;">Action</th>
					        <!-- <th>Action</th> -->
					    </tr>
                      </thead>


                      <tbody>
            @foreach( $parts as $part )
            <tr>
              <td>{{ $part->no_part }}</a></td>
              <td>{{ $part->nama_part }}</td>
              <td>{{ $part->qty }}</td>
              <td>{{ $part->tgl_terima }}</td>
              <td>
                <form action="{{ route('part.destroy', $part) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-default btn-xs"><i class="fa fa-info"></i> Detail</a>
                  <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                </form>
                
              </td>
            </tr>
            @endforeach
                      </tbody>
                    </table>
                                      <!-- Small modal -->
               

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Detail Gdm</h4>
                        </div>
                        <div class="modal-body">
                          <h4></h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>


        <!-- /page content -->

@endsection
