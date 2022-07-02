@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/digitalworkspace.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="dwvirtualizedapp">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Virtualized Apps and Desktop to any Devices</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Deliver virtual app to any device</li>
              <li><i class="bx bxs-check-circle"></i> Flexibility</li>
              <li><i class="bx bxs-check-circle"></i> Centralized management</li>
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
            <img src="img/virtuallinkdevices.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Virtually hosted</h5>
      <p class="text-center"> With virtualized or hosted desktops and applications can be delivered through a single platform to end users.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/virtuallinkdevices.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Virtualized tools</h5>
      <p class="text-center"> These desktop and application services including RDS hosted apps, packaged apps with ThinApp, SaaS apps, and even virtualized apps from other vendor can all be accessed from one unified workspace to provide end users with all of the resources they want, at the speed they expect, with the efficiency business demands.
    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/virtuallinkdevices.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">One to all</h5>
      <p class="text-center"> Delivered Through a Single Platform while still providing consistent & great experience across devices, locations, media, and connections.</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection