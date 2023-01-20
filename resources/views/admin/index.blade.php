@extends('layouts.admin')

@section('content')

@if (session('session'))
      <div class="container py-5">
        <div id="message" class="alert alert-success text-center" role="alert">
           {{ session('session') }}
          {{ Session::forget('session') }}
        </div>
      </div>
    @endif
<div class="container-fluid py-5">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Panou administrtor</h6>
            </div>  
          </div>
          <div class="row ">
            <div class="col mt-4">
              <div class="card">
                <div class="card-header pb-0 px-3">
                  <h6 class="mb-0 text-center">Statistici</h6>
                </div>
                <div class="card-body pt-4 p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Membri</h6>
                        <span class="mb-2 text-xs">Utilizatori înregistrați: <span class="text-dark font-weight-bold ms-sm-2">{{ count($users) }}</span></span>
                      </div>
                      
                    </li>
                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Comenzi</h6>
                        <span class="mb-2 text-xs">Comenzi în așteptare: <span class="text-dark font-weight-bold ms-sm-2">{{ count($orders) }}</span></span>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Pachete de mentenanță</h6>
                        <span class="mb-2 text-xs">Pachete active: <span class="text-dark font-weight-bold ms-sm-2">{{ count($products) }}</span></span>
                      </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
    
@endsection