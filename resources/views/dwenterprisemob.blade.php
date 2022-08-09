@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/digitalworkspace.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="dwenterprisemob">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Enterprise Mobility Management</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Secure end user devices & apps</li>
              <li><i class="bx bxs-check-circle"></i> Advanced unified end poin management</li>
            </ul>
            </div>
        </div>
        <div class="col-lg-5 ms-auto">
            <div class="card-effect rounded border border-danger">
                <form action="/send-mail-contact" method="POST" class="row g-3 justify-content-center">
              @csrf
              <div class="col-md-10 mb-2 mt-5">
                  <h5 class="fw-normal">Full name</h5>
                  <input type="text" name="fullName" class="form-control border rounded" placeholder="Ex: John Doe" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">E-mail</h5>
                <input type="text" name="email" class="form-control border rounded" placeholder="example@example.com" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Subject</h5>
                <input type="text" name="subject" class="form-control border rounded" placeholder="Enter Subject here" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Message</h5>
                <textarea name="message" id="" cols="30" rows="5" class="form-control border rounded" placeholder="Enter Message here"></textarea>
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
            <img src="img/EMM.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Identity management</h5>
      <p class="text-center"> Which decouples users from their credentials for individual services and provides single sign-on (SSO) to all services from any device.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/EMM.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Service catalog</h5>
      <p class="text-center">  Exposes available services to the user. The service catalog is shown as two tabs in a browser window; one for all applications available and the other for those activated for the user account.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/EMM.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Extensible policy engine</h5>
      <p class="text-center">Controlling which services are made available to each user and applying rules of contextual access (for example, if access to some services is locked from specific locations or adapted for certain device categories).</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection