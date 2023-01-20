@extends('layouts.app')

@section('content')
<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('session'))
            <div class="alert alert-success" role="alert">
                {{ session('session') }}
                {{ Session::forget('session') }}   
            </div>
             @endif
            <div class="card">
                <div class="card-header">{{ __('Profilul meu') }}</div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nume') }}</label>

                            <div class="col-md-3 mt-3">
                                <span ><strong>{{ Auth::user()->name }}</strong></span>                             
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresă de email') }}</label>

                            <div class="col-md-6 mt-3">
                                <span ><strong>{{ Auth::user()->email }}</strong></span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Număr de telefon') }}</label>
                            <div class="col-md-6 mb-1">
                                <span class="mt-2"><strong>{{ Auth::user()->phone }}</strong></span>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ url('profile') }}" class="btn btn-primary">
                                    {{ __('Modificare date') }}
                                </a><br>
                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
