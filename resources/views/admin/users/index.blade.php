@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
  <div class="col-11">
    <div class="card my-5">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Utilizatori înregistrați</h6>
            </div>
          </div>
          <div class="card-body ">
            
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class=" text-center text-uppercase  font-weight-bolder ">ID</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Nume</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Adresă de email</th>
                    <th class="text-center text-uppercase  font-weight-bolder ">Telefon</th>
                    <th class=" text-center text-uppercase  font-weight-bolder ">Funcție</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $item )
                    <tr>
                        <td>    
                            <h6 class="text-center text-xs font-weight-bold mb-0">{{ $item->id }}</h6>
                       </td>
                        <td>    
                             <h6 class="text-center text-xs font-weight-bold mb-0">{{ $item->name }}</h6>
                        </td>
                        <td>
                            <p class="text-center text-xs font-weight-bold mb-0">{{ $item->email }}</p>                 
                        </td> 
                        <td>
                            <p class="text-center text-xs font-weight-bold mb-0">{{ $item->phone }}</p>                 
                        </td> 
                        <td >
                            {{ $item->role_as == '0' ? 'Client' : 'Administrator' }}
                        </td> 
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
@endsection