@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('error'))
        <div class=" container-sm alert alert-danger">
            {{ session('error') }}
            {{ session()->forget('error') }}
        
        </div>
        <br>
    @endif  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">    
                <div class="card-header bg-dark text-white">{{ __('Resetare parolă') }}</div>

                <div class="card-body">
                
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresă email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control px-2" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Trimite-mi link-ul') }}
                                </button>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
