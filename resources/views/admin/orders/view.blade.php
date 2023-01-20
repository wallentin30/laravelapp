@extends('layouts.admin')

@section('title')
      Detalii comandă
@endsection

@section('content')
<div class="container-fluid py-4  ">
    <div class="row justify-content-center">
      <div class="col-11">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Detalii comandă</h6>
            </div>
          </div>
          <div class="card-body ">
            @foreach ($orders as $item )
              <div class="row">
                  <div class="col=md-6">
                    
                    <label class="d-inline" for="">Nume:</label>
                    <div class=" d-inline fw-bold"> {{ $item->name }} </div><br>

                    <label for="">Adresă de email:</label>
                    <div class=" d-inline fw-bold">{{ $item->email }}</div><br>

                    <label for="">Notă coamndă:</label>
                    <div class=" d-inline fw-bold text-danger">test {{ $item->note }}</div><br>

                    <label for="">Pachet ales:</label>
                    <div class=" d-inline fw-bold">{{ $item->title }}</div><br>

                    <label for="">Preț achitat:</label>
                    <div class="d-inline fw-bold">{{ $item->price }}</div><br>

                    <div class="mt-5">
                    <label for="">Status comandă</label><br>
                    <form action="{{ url('update-order/'.$item->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <select class="custom-select" name="order_status">
                        <option selected>Alege...</option>
                        <option {{ $item->status == '0' ? 'selected' : '' }} value="0">în așteptare</option>
                        <option {{ $item->status == '1' ? 'selected' : '' }} value="1">în progres</option>
                      </select><br><br>
                      <button type="submit" class="btn btn-dark mt-3">Actualizează</button>
                    </form>
                  </div>
                  </div>    
                </div>   
                  @endforeach
               
                  
            </div>
          
        </div>
      </div>
    </div>
@endsection