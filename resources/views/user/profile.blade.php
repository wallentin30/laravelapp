@extends('layouts.app')

@section('content')
<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editare profil') }}</div>
                <div class="card-body ">
                    <form action="{{ url('profile/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="col-md-6 mb-3 ">
                            <label class="form-label" for="name">Nume</label>
                            <input type="text" class="form-control border p-1" value=' {{ Auth::user()->name }}' name="name" required>
                        </div>
                        <div class="col-md-6 mb-3" >
                            <label class="form-label" for="email">Adresă de email</label>
                            <input type="text" name="email" class="form-control border  p-1" value='{{ Auth::user()->email }}' name="price" required>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="form-label" for="phone">Număr de telefon</label>
                            <input type="number" class="form-control border  p-1"  name="phone" required value='{{ Auth::user()->phone }}' >
                        </div>
                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn btn-dark">Salvează</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

