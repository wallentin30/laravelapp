@extends('layouts.front')

@section('title')
    Istoric comenzi
@endsection

@section('content')
<div class="container-fluid py-4 ">
    <div class="row justify-content-center">
      <div class="col-7">
        <div class="card my-4 ">
          <div class="card-header p-0 position-relative  bg-dark mt-n4 mx-3 z-index-2">
            <div class=" shadow-primary bg-dark border-radius-lg pt-4 pb-4">
              <h5 class="text-white textx text-center bg-dark ps-3">Comenzile mele</h5>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class=" text-center text-uppercase  font-weight-bolder ">Număr comandă</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Pachet</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Preț</th>
                    <th class=" text-center text-uppercase  font-weight-bolder ">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $item )
                    <tr>
                        <td>    
                             <h6 class="text-center text-xs font-weight-bold mb-0">{{ $item->tracking }}</h6>
                        </td>
                        <td>
                            <p class="text-center text-xs font-weight-bold mb-0">{{ $item->title }}</p>                 
                        </td> 
                        <td>
                            <p class="text-center text-xs font-weight-bold mb-0">{{ $item->price }}</p>                 
                        </td> 
                        <td>
                            <p class="text-center text-xs font-weight-bold mb-0">{{ $item->status == '0' ? 'în așteptare' : 'în progres' }}</p>                 
                        </td> 
                        
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