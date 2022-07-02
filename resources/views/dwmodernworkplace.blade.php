@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/digitalworkspace.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="dwmodernworkplace">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Modern Workplace</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Enabled modern workplace with office</li>
              <li><i class="bx bxs-check-circle"></i> Intelligent security</li>
              <li><i class="bx bxs-check-circle"></i> Seamless integration with windows</li>
            </ul>
            </div>
        </div>
        <div class="col-lg-5 ms-auto">
            <div class="card-effect rounded border border-danger">
                <form action="" class="row g-3 justify-content-center">
                <div class="col-md-10 mb-2 mt-5">
                    <h5 class="fw-normal">Full name</h5>
                    <input type="text" class="form-control border rounded" placeholder="Ex: John Doe" />
                </div>
            <div class="col-md-10 mb-2">
                <h5 class="fw-normal">E-mail</h5>
              <input type="text" class="form-control border rounded" placeholder="example@example.com" />
            </div>
            <div class="col-md-10 mb-2">
                <h5 class="fw-normal">Subject</h5>
              <input type="text" class="form-control border rounded" placeholder="Enter Subject here" />
            </div>
            <div class="col-md-10 mb-2">
                <h5 class="fw-normal">Message</h5>
              <textarea name="" id="" cols="30" rows="5" class="form-control border rounded" placeholder="Enter Message here"></textarea>
            </div>
            <div class="col-md-10 mb-5 d-grid">
              <button class="btn btn-danger rounded">Contact</button>
            </div>
          </form>
        </div>
        </div>
    </div>
</div>
</div>
      </div>
    </div>
    <!-- //HERO -->

      <!-- Features -->
      <section class="container-fluid">
          <div class="hdr text-center mb-5">
              <h1>Features</h1>
          </div>
          
<div class="d-flex justify-content-evenly row">

    <div class="col-sm-3">
        <div class="upper mb-5">
            <img src="img/Modernworkplace.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Lead to expert</h5>
      <p class="text-center"> Changing organizational cultures, behavior and people mindset are challenging for IT department alone to be dealt with rather than changing IT policy. Therefore, we can help you to introduce and guide your employees to be more productive as ever by fully using productivity and collaboration on tools available.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Modernworkplace.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Welcome modern workplace</h5>
      <p class="text-center"> We conducted many  workshops and trainings to a small group of key people / leader on our customers organization; so they can learn, product tools and services feature in real case scenarios, and (later on) inspire their colleagues or teams in the next daily job tasks.</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection