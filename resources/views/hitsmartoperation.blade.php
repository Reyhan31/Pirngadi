@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/hit.css'); }}" />
@endpush

@section('content')
<!-- HERO -->
<div class="hero h-auto d-flex justify-content-center " id="hitsmartoperation">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 pt-5">
          <div class="">
          <h1 class="display-4 text-white">Smart Operation</h1>
          <ul class="list-unstyled">
            <li><i class="bx bxs-check-circle"></i> Easier monitoring</li>
            <li><i class="bx bxs-check-circle"></i> Quicker troubleshooting</li>
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
          <img src="img/Group 57.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Smart Operation</h5>
    <p class="text-center">  provide easier monitoring and quicker troubleshooting to allow your IT staff to be more productive and to focus on higher-level projects versus troubleshooting day-to-day operations. With an integrated and simplified set of tools, IT can plan, monitor, and resolve issues faster and with greater competence than before.</p>

  </div>
</div>


</div>
    </section>
    <!-- End Features -->
@endsection