@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-11">
      <div class="card my-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Adaugă pachet nou</h6>
          </div>
        </div>
        <div class="card-body">
            <form class="row g-1" action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div  class=" w-60">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="title">Nume pachet</label>
                        <input type="text" class="form-control border px-2 " name="title" required>
                    </div>
           
               
                
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="price">Pret</label>
                        <input type="number" class="form-control border  px-2" name="price" required>
                   
                    </div>

                
                    <div class=" col-md-6 mb-3">
                        <label class="form-label" for="description">Descriere</label><br>
                        <textarea  rows = "5" cols = "42"  class="form border  px-2"  name="description" required></textarea>
                    </div>
                  

                <div class="col-md-6 mb-3">
                <button type="submit" class="btn btn-dark">Salvează</button>
                </div>
                </div>
                

             </form>
        </div>
      </div>
    </div>
</div>

@endsection