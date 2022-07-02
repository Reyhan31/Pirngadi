@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/hit.css'); }}" />
@endpush

@section('content')
<!-- HERO -->
<div class="hero h-auto d-flex justify-content-center " id="hitinfrastructureauto">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 pt-5">
          <div class="">
          <h1 class="display-4 text-white">Infrastructure Automation</h1>
          <ul class="list-unstyled">
            <li><i class="bx bxs-check-circle"></i> Automation systems</li>
            <li><i class="bx bxs-check-circle"></i> Eliminate Variability</li>
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
          <img src="img/Group 56.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Save time</h5>
    <p class="text-center">Decrease the amount of time it takes to provision and configure new infrastructure</p>

  </div>
  <div class="col-sm-3">
      <div class="upper  mb-5">
          <img src="img/Group 56.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Eliminate Variability</h5>
    <p class="text-center">  Decrease or eliminate variability in new infrastructure. If someone does change something, automation will put it back where it belongs.</p>

  </div>
  <div class="col-lg-3 col-sm-3">
      <div class="upper mb-5">
          <img src="img/Group 56.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Demands to do more with less</h5>
    <p class="text-center"> significantly decrease the management overhead required to maintain complex environments. Instead of staffing up to remediate a security vulnerability, you can simply write the requisite code and then execute it. Now your small team can manage many thousands of nodes with no more effort than managing 100.</p>

  </div>

</div>


</div>
    </section>
    <!-- End Features -->
@endsection