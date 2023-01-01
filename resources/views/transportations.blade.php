@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                Tambah Transportatiton
              </button>
            </div>
            
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Form Transportation</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form method="POST" action="/admin/addTrans">
                      @csrf
                      <div class="row">
                        <div class="col">
                          <label for="exampleInputEmail1">Nama Kendaraan</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Kendaraan">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="exampleInputEmail1">Plat Nomor Kendaraan</label>
                          <input type="text" name="noPlat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Plat Nomor Kendaraan">
                        </div>
                        <div class="col">
                          <label for="inputState">Jenis Kendaraan</label>
                          <select id="inputState" class="form-control" name="type">
                            <option value="Mini Bus">Mini Bus</option>
                            <option value="Truk">Truk</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="exampleInputEmail1">Volume Bensin</label>
                          <input type="text" name="vCar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Volume Bensin">
                        </div>
                        <div class="col">
                          <label for="exampleInputEmail1">Bensin Tersisa</label>
                          <input type="text" name="vCarNow" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jumlah bensin yang tersedia">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="exampleInputEmail1">Pemilik Kendaraan</label>
                          <input type="text" name="owner" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jumlah bensin yang tersedia">
                        </div>
                      </div>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </form>
                </div>
              </div>
            </div>

        </div>
        
        <div class="col-md-12">
          @if (Session::has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{!! Session::get('success') !!}</strong>
            </div>
          @endif
            <div class="card">
                <div class="card-header">{{ __('Transportatitons') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nama Kendaraan</th>
                            <th scope="col">Jenis Kendaraan</th>
                            <th scope="col">No Plat</th>
                            <th scope="col">Volume Bensin</th>
                            <th scope="col">Bensin Tersisa</th>
                            <th scope="col">Pemilik</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($transportations as $transportation)
                            <tr>
                              <th scope="row">{{$transportation->name}}</th>
                              <td>{{$transportation->type}}</td>
                              <td>{{$transportation->noPlat}}</td>
                              <td>{{$transportation->vCar}} Liter</td>
                              <td>{{$transportation->vCarNow}} Liter</td>
                              <td>{{$transportation->owner}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection