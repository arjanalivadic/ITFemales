@extends('layouts.master')
@section('content')

<div class="site-section" id="contact-section">
    <div class="container">
      <form action="{{route('send-message')}}" method="post" class="contact-form">
          @csrf
        <div class="section-title text-center mb-5">
          <span class="sub-title mb-2 d-block">Registracija</span>
          <h2 class="title text-primary">Kontaktirajte nas</h2>
        </div>

        <div class="row mb-4">
          <div class="col-md-6 mb-4 mb-md-0">
            <input type="text" name="name"  class="form-control" placeholder="Ime">
          </div>
          <div class="col-md-6">
            <input type="text"  name="firstname"  class="form-control" placeholder="Prezime">
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-12">
            <input type="text" name="email" class="form-control" placeholder="E-mail">
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-12">
            <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Poruka"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-md">Pošalji</button>
          </div>
        </div>

      </form>
    </div>
</div> <!-- END .site-section -->
@stop
