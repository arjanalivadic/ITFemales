@extends('layouts.master')
@section('content')

<div class="row">
    <div type="text"  margin-left="200px">
    <div class="col-lg-10 ml-auto">
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="service h-100">
            <h3>Dizajn</h3>
            <p>Dizajniranje web stranica za naše klijente.</p>
            <p><a href="{{ route('desing') }}" class="readmore">Nešto više</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="service h-100">
            <h3>Razvoj</h3>
            <p>Razvoj projekata što za naš i za naše klijente. Razvoj određenih aplikacija.</p>
            <p><a href="{{ route('development') }}" class="readmore">Nešto više</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="service h-100">
            <h3>Usluge</h3>
            <p>Pružanje usluga našim klijentima u sektorima marketinga, menadžmenta i IT usluga.</p>
            <p><a href="{{ route('services') }}" class="readmore">Nešto više</a></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="service h-100">
            <h3>Historija</h3>
            <p>Sami početak Informacionih Tehnologija i ulazak ženske populacije u taj dio sektora.</p>
            <p><a href="{{ route('history') }}" class="readmore">Nešto više</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="service h-100">
            <h3>Edukacija</h3>
            <p>Organizacija nudi obuke za određene skupine žena koje bi željele da se bave IT-jem a naroćito sektorom dizajna i razvoja web stranica.</p>
            <p><a href="{{ route('education') }}" class="readmore">Nešto više</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="service h-100">
            <h3>Projekti</h3>
            <p>Projekti su bazirani na sistemu edukacije i najuspješniji projekti se prestavljaju.</p>
            <p><a href="{{route('portfolio')}}" class="readmore">Nešto više</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div> <!-- END .site-section -->
@stop
