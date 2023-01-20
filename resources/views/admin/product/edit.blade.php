
   
@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
      <div class="card my-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Editare pachet</h6>
        </div>
        </div>
        <div class="card-body ">
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <div  class=" w-60">
                <div class="col-md-6 mb-3 ">
                    <label for="title">Nume</label>
                    <input type="text"  value='{{ $products->title }}' name="title" required>
                </div>

                    <div class="col-md-6 mb-3" >
                    <label class="form-label" for="price">Pret</label>
                    <input type="number" class="form-control border  p-2" value='{{ $products->price }}' name="price" required>
                </div>

                <div class="col-md-6 mb-3 ">
                    <label for="description">Descriere</label>
                   
                    <textarea name="description" id="" cols="70" rows="10" required> {{ $products->description }} </textarea>

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

</body>
</html>
