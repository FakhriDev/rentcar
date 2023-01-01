@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('success') !!}</strong>
                  </div>
                @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="container">
                    <div class="row">
                        <b>Permission</b>
                      <div class="col-sm-3">
                        <div class="card-body">
                            <div class="card text-white bg-secondary mb-1" style="width: 15rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">Pemesanan Kendaraan</h5>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card-body">
                            <div class="card text-white bg-secondary mb-1" style="width: 15rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">Pengembalian Kendaraan</h5>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <b>Inventory</b>
                      <div class="col-sm-3">
                        <div class="card-body">
                            <div class="card text-white bg-secondary mb-1" style="width: 15rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">Drivers</h5>
                                <a href="/admin/drivers" class="btn btn-dark">Tambah Driver</a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card-body">
                            <div class="card text-white bg-secondary mb-1" style="width: 15rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">Operators</h5>
                                <a href="/admin/operators" class="btn btn-dark"></i>Tambah Operator</a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card-body">
                            <div class="card text-white bg-secondary mb-1" style="width: 15rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">Transportations</h5>
                                <a href="/admin/transportations" class="btn btn-dark">Tambah Transport</a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection