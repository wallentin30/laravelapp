@extends('layouts.front')

@section('title')
    Finalizare comanda
@endsection

@section('content')
<div class="container">  
    <div class="section-header container-sm">
          <h3 class="text-center textx">Finalizare comandă</h3>
        </div>
      </div>
<div class="container bg-light d-md-flex align-items-center">
  <div class="card box1 shadow-sm p-md-5 p-md-5 p-4">
      <h5 class="text-white">Detalii comandă</h5>
      <div class="border-bottom mb-4"></div>
      
      <div class="d-flex flex-column">
          <div class="d-flex align-items-center justify-content-between text"> <span class="">Ați ales pachetul <b class="textx">{{ $products->title }}</b> </span>  </div><br>
         
          <div class="d-flex flex-column mb-4"><span class="ps-3"></span> </span><span class="ps-3 product">{!! $products->description !!}</span> </div>
          <div class="d-flex flex-column "> <span class="fas fa-receipt text"><span class="ps-2">Total:</span> <span class="ps-1">{{ $products->price }} </span>RON</span>  </div>
         <div class="d-flex flex-column"> <br>
            <span class="text">Plata se poate face pe 6 luni sau 1 an, vă rugam să cereți infomații pe email.
            </span>
         </div>
          <div class="d-flex align-items-center justify-content-between text mt-2">
              <div class="d-flex flex-column text"> <span>Aveți întrebări ?</span><a class="text-white" href="mailto:contact@valentincojocaru.com"> <span>contact@valentincojocaru.com</span> </a> </div>
              <div class="btn btn-primary rounded-circle "><a class="textx"  href="mailto:contact@valentincojocaru.com"><span class="fas fa-comment-alt textx"></a></span></div>
          </div>
      </div>
  </div>
  <div class="card box2 shadow-sm">
      <div class="px-md-5 px-4 mb-4 d-flex align-items-center">
      </div>
     
      <form
           role="form"
           action="{{ route('stripe.post') }}"
           method="post"
           class="require-validation"
           data-cc-on-file="false"
           data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
           id="payment-form">
           @csrf
           <div class="col-12">
               <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Numele dvs.</span>
                   <div class="inputWithIcon"> <input required class="form-control px-2" name="name" type="text" value="{{ Auth::user()->name }}"> <span class="fas fa-user"></span> </div>
               </div>
           </div>
           <div class="col-12">
               <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Adresă de email</span>
                   <div class="inputWithIcon"> <input class="form-control px-2" name="email" type="email" value="{{ Auth::user()->email }}"> <span class="fas fa-at"></span> </div>
               </div>
           </div>
           <div class="col-12">
               <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Telefon</span>
                   <div class="inputWithIcon"> <input class="form-control  px-2" name="phone" type="text" value="{{ Auth::user()->phone }}"> <span class="fas fa-phone"></span> </div>
               </div>
           </div>
           <div class="col-12">
               <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Notă comandă</span>
                <span class="text">( numele webiste-ului dvs./ datele de logare in cPanel, panoul de administrator )</b> </span>
                   <div class="inputWithIcon"> <span class="fas fa-file-alt"></span> <textarea rows="4" cols="45"  class=" px-2 border" name="note" value="test"></textarea></div>
               </div> 
           </div>
           <input type="hidden" name="product_id" value="{{ $products->id }}" />
           <input type="hidden" name="title" value="{{ $products->title }}" />
           <input type="hidden" name="price" value="{{ $products->price }}" />


                      
           <ul class="nav nav-tabs mb-3 px-md-4 px-2">
               <li class="nav-item"> <a class="nav-link px-2 active" aria-current="page" href="#">  Credit Card</a> </li>
               
           </ul>
          <div class="row">

           <div class="col-12">
               <div class="d-flex flex-column px-md-5 px-4 mb-4 required"> <span>Numele dvs.</span>
                   <div class="inputWithIcon"> <input class="form-control  px-2" type="text" value=" Cojocaru Valentin"> <span class="far fa-user"></span> </div>
               </div>
           </div>

              <div class="col-12">
                  <div class="d-flex flex-column px-md-5 px-4 mb-4 card required"> <span>Număr card</span>
                      <div class="inputWithIcon"> <input class="form-control card-number px-2" type="text"  value="4242 4242 4242 4242"> <span class="far fa-credit-card"></span></div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4 expiration required"> <span>Luna</span>
                    <div class="inputWithIcon"> <input type="text" class="form-control card-expiry-month px-2" value="05"> <span class="fas fa-calendar-alt"></span> </div>
                </div>
                </div>
              <div class="col-md-4">
                  <div class="d-flex flex-column ps-md-4 px-md-4 px-4 mb-4 expiration required"> <span>An</span>
                      <div class="inputWithIcon"> <input type="text" class="form-control card-expiry-year px-2" value="2022"> <span class="fas fa-calendar-alt"></span> </div>
                  </div>
              </div>
              
              <div class="col-md-4">
                  <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4"> <span>Cod CVV</span>
                      <div class="inputWithIcon"> <input type="text" class="form-control card-cvc px-2" value="123"> <span class="fas fa-lock"></span> </div>
                  </div>
              </div>
             
              <div class="col-12 px-md-5 px-4 mt-3">
               <button type="submit" class="  btn btn-primary"> <span class="d-inline"> <i class="fas fa-lock d-inline"></i> Plătește ( {{ $products->price}} RON )</span></button>
              </div>
              
          </div>
      </form>
      <br>
  </div>
</div> 
</div>
@endsection
