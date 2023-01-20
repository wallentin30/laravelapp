@extends('layouts.admin')

@section('title')
    Comenzi finalizate
@endsection

@section('content')
<div class="container-fluid py-4  ">
    <div class="row justify-content-center">
      <div class="col-11">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Comenzi finalizate</h6>
              <a href="{{ 'orders' }}" class="btn btn-dark float-end pb-3">Comenzi noi</a>
            </div>
          </div>
          <div class="card-body ">
            
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class=" text-center text-uppercase  font-weight-bolder ">Data</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Număr comandă</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Pachet</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Preț</th>
                    <th class=" text-center text-uppercase  font-weight-bolder ">Status</th>
                    <th class=" text-center text-uppercase  font-weight-bolder ">Acțiuni</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $item )
                    <tr>
                        <td>    
                            <h6 class="text-center text-xs font-weight-bold mb-0">{{ date("d-m-Y", strtotime($item->created_at)) }}</h6>
                       </td>
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
                            <p class="text-center text-xs font-weight-bold mb-0">{{ $item->status == '0' ? 'in asteptare' : 'in progres' }}</p>                 
                        </td> 
                        <td class="d-flex justify-content-center">
                            <a href={{ url("admin/view-order/".$item->id) }} class="text-center text-xs font-weight-bold mb-0  btn btn-dark">Vizualizare</a>                 
                        </td> 
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection