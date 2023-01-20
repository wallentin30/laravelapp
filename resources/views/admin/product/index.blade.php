@extends('layouts.admin')

@section('content')
<div class="  container-fluid py-4  ">
    <div class="row justify-content-center">
      <div class="col-11">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Pachete mentenanță active</h6>
            </div>
          </div>
          <div class="card-body ">
            
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class=" text-center text-uppercase  font-weight-bolder ">ID</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Nume</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Preț</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Descriere</th>
                    <th class=" text-center text-uppercase  font-weight-bolder ">Acțiuni</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $item )
                    <tr>
                        <td>    
                            <h6 class="text-center font-weight-bold mb-0">{{ $item->id }}</h6>
                       </td>
                        <td>    
                             <h6 class="text-center  font-weight-bold mb-0">{{ $item->title }}</h6>
                        </td>
                        <td>
                            <p class="text-center  font-weight-bold mb-0">{{ $item->price }} RON</p>                 
                        </td> 
                        <td>
                            <span class="text-center text-xs font-weight-bold mb-0 ">{!! $item->description !!}</span>                 
                        </td> 
                        <td class="d-flex justify-content-center">
                          <span>
                            <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-dark">Editează</a><br>
                            <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger w-100"> Șterge </a>
                          </span>
                            
                        </td> 
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection