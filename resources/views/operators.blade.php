@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                Tambah Operator
              </button>
            </div>
            
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Formulir Operator</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form method="POST" action="/admin/addOperator">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password Minimal 8 Character">
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
                <div class="card-header">{{ __('Operators') }}</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">UserID</th>
                            <th scope="col">Nama</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($operators as $operator)
                            <tr>
                              <th scope="row">{{$operator->uid}}</th>
                              <td>{{$operator->name}}</td>
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