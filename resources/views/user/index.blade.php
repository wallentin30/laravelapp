@extends('layouts.front')

@section('title')
    Servicii mentenanta web
@endsection

@section('content')

@if (session('session'))
      <div class="container py-5">
        <div id="message" class="alert alert-success text-center" role="alert">
           {{ session('session') }}
          {{ Session::forget('session') }}
        </div>
      </div>
    @endif
<button type="button" class="btn textx btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>
<header class="bgcolor py-5">
  <div class="container-xxl">
      <div class="row gx-5 align-items-center justify-content-center">
          <div class="col-lg-8 col-xl-7 col-xxl-6">
              <div class="my-5 text-center text-xl-start">
                  <h1 class="display-5 fw-bolder text-dark mb-2">Servicii complete de mentenanță pentru website-ul tău.</h1>
                  <p class="lead fw-normal text-dark-50 mb-4">Ai nevoie de cineva care să aibă grijă de website-ul tău? <br>
                    Dacă raspunsul tău este <b>DA</b>, înseamna ca ai ajuns unde trebuie.</p>
                  <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    <a href="#packages">
                      <button class=" btn-primary btn-dark btn-lg text-none textx" > Vezi pachetele </button>
                    </a>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 col-xl-5 "><img class="img-fluid rounded-3 my-5" src={{ asset("/assets/images/social_middle.png") }} alt="..." /></div>
      </div>
  </div>
</header>
    <div class="container-sm mt-5 mb-5">   
      <div id="about" class="section-header container">
        <div class="row">
          <h3 class="text-center fw-bold textx fw-bold ">Ce facem pentru tine ?</h3>
        </div>
      </div>
      <div class="desc">
          <p class=" container-sm text-white text-center text fs-6">Serviciile oferite de noi te ajută să îți menții site-ul actualizat și securizat. <br> Deoarece suntem în secolul "vitezei" tehnologia avansează
            foarte repede, <br> iar actualizările de module sau platformă apar zilnic.</p>
      </div> 
      <div class=" mb-4"></div>
      <div class="row">
          <div class="col-md-4 ">
              <div class="col max-mb-30 aos-init aos-animate borderx" data-aos="fade-up"> <a href="#" class="icon-box text-center" data-bg-color="#fff" style="background-color: rgb(255, 255, 255);" data-abc="true">
                      <div class="icon "> <img src="assets/images/1.png" width="240"> </div>
                      <div class="content">
                          <h3 class="title fz-10 fw-bold">Actualizări periodice</h3>
                          <div class="border-bottom mb-4"></div>
                          <div class="desc">
                              <p class="text-dark text fs-6">Site-ul tău va fi actualizat periodic (module, platformă, temă). Ne vom asigura permanent de buna performanță și viteza site-ului</p>
                          </div> 
                      </div>
                  </a> </div>
          </div>
          <div class="col-md-4">
              <div class="col max-mb-30 aos-init aos-animate borderx" data-aos="fade-up"> <a href="#" class="icon-box text-center" data-bg-color="#fff" style="background-color: rgb(255, 255, 255);" data-abc="true">
                      <div class="icon"> <img src="assets/images/2.png" width="220" alt=""> </div>
                      <div class="content">
                          <h3 class="title fz-10 fw-bold">Monitorizare</h3>
                          <div class="border-bottom mb-4"></div>
                          <div class="desc text fs-6">
                              <p>Monitorizăm în permanență site-ul tău și intervenim în cazul erorilor aparute din cauza actualizărilor automate.</p>
                          </div> 
                      </div>
                  </a> </div>
          </div>
          <div class="col-md-4">
              <div class="col max-mb-30 aos-init aos-animate borderx" data-aos="fade-up"> <a href="#" class="icon-box text-center" data-bg-color="#fff" style="background-color: rgb(255, 255, 255);" data-abc="true">
                      <div class="icon"> <img src="assets/images/3.png" width="220" alt=""> </div>
                      <div class="content">
                          <h3 class="title fz-10 fw-bold">Securitate</h3>
                          <div class="border-bottom mb-4"></div>
                          <div class="desc text fs-6">
                              <p>Implementare soluții de securitate sporită pentru a evita "infiltrarea" persoanelor rău intenționate, indifernt de platforma utilizată</p>
                          </div> 
                      </div>
                  </a> </div>
          </div>
      </div>
  </div>
  <section id="packages" class="pricex py-3">
    <div class="container-xxl">
      <div class="section-header container">
        <div class="row">
          <h3 class="text-center fw-bold textx fw-bold ">Pachete mentenanță </h3>
        </div>
      </div>
        <div class="row gx-5 align-items-center justify-content-center pb-5">
          @foreach ($index_products as $item)
          <div class="col-lg-3 ">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center"><b>{{ $item->title }}</b></h5>
                <h6 class="card-price text-center"><b>{{ $item->price }}</b><span class="period"> RON / lunar</span></h6>
                <hr>
                <ul class="fa-ul d-grid gap-2 list-group">
                  {!! $item->description !!}
                </ul>
                <br>
                <div class="d-grid">
                  <a href="{{ url('checkout/'.$item->id) }}" class="btn btn-primary ">Cumpără acum!</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
  </section>
<div id="faq" class="container w-50 mt-0 mb-5">
      <div class="section-header container">
        <div class="row">
          <h3 class="text-center fw-bold textx fw-bold ">Întrebări frecvente</h3>
        </div>
      </div>
  <div class="accordion">
    <div class="accordion-item">
      <a>Cum cumpăr ?</a>
      <div class="content">
        <p>Poți cumpăra un produs cu ajutorul butonului ”Cumpără acum!” aflat pe fiecare tabelă cu pachetele de mentenanță, singura condiție este să aveți deja un cont de client, în caz că nu aveți îl puteți crea ușor prin intermediul formularului de înregistrare.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Ce înseamnă - Modificări în site ?</a>
      <div class="content">
        <p>Cu această opțiune beneficiați de modificări la nivel de site, atât la coținut cât si pe parte de design (adăugare link-uri/modificare texte, etc.)</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Ce înseamnă - Modificări extra ( 50RON/1h ) ?</a>
      <div class="content">
        <p>Cu opțiunea Modificările în site aveți inclusă o ora pentru modificări în site, după care veți fi taxat cu 50 RON / oră.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Ce înseamnă - Administrare cPanel ?</a>
      <div class="content">
        <p>Vă oferim suport pentru crearea adreselor de email , conturilor FTP, creare forward email, etc.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Ce înseamnă - Modificări zonă DNS ?</a>
      <div class="content">
        <p>Fie că aveți nevoie sa pointați domeniul principal către un alt IP,gomag,shopify sau implentare mailuri la google/icloud, adăugare record-uri noi in zona DNS.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Ce înseamnă - Migrare website ?</a>
      <div class="content">
        <p>Migrăm website-ul de la un provider de găzduire la altul, fie că este migrare manuală sau automată cu downtime minim (5 min).</p>
      </div>
    </div>
  </div>
</div>
<div class="container-contact pricex " id="contact">
    <span class="contact-form-title mt-0">
      <div class="section-header ">
        <div class="row">
          <h3 class="text-center fw-bold textx fw-bold mt-0">Contactează-ne</h3>
        </div>
      </div>
    </span>
    <div class="wrap-contact ">
      <form class="contact-form mt-0 validate-form" method="post" action="{{route('form.contact')}}">
        @csrf
        <div class="wrap-input100 validate-input bg1" >
          <span class="label-input100">Numele dvs. <span class="text-danger">*</span></span>
          <input class="input100" type="text" name="name" required>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
          <span class="label-input100">Adresa de email <span class="text-danger">*</span></span>
          <input class="input100" type="text" name="email" required>
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Telefon (optional)</span>
          <input class="input100" type="text" name="phone" >
        </div>

        <div class="wrap-input100 validate-input bg0 rs1-alert-validate">
          <span class="label-input100">Mesaj <span class="text-danger">*</span></span>
          <textarea class="input100" name="message" required></textarea>
        </div>

        <div class="container-contact-form-btn">
          <button class="btn btn-primary w-150">
            <span>
              Trimite mesajul!
            </span>
          </button>
        </div>
        <p class="text">Câmpurile marcate cu <span class="text-danger">*</span> sunt obligatorii.</p>
      </form>
  </div>  
</div>


<script>
  const items = document.querySelectorAll(".accordion a");

    function toggleAccordion(){
      this.classList.toggle('active');
      this.nextElementSibling.classList.toggle('active');
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));

    const mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if ( document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>

</div>

@endsection