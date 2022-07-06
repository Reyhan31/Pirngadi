@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/digitalworkspace.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex align-items-center" id="digitalworkspace">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white mt-5">Digital Workspace</h1>
            <h5 class="text-white my-3 fw-normal">Empower Your Workforce Productivity with Digital Workspace</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- //HERO -->

    <!-- Description -->
    <section class="bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-10 mx-auto text-start">
            <h2 class="text-danger mb-3">A Common Platform, designed to give access to any application from any type of device under automated and granular policy control, for better employee engagement</h2>
            <h1></h1>
            <p>
                These days, business users’ leverage a portfolio of heterogeneous devices and applications through wireless networks and unpredictable security environments, today’s mobile-cloud era is rapidly rendering the previously dominant client-server model obsolete.

                The digital workspace is the new defining model for end-user computing in the mobile cloud era, emerging as the new end-user computing platform, securely delivering anytime, anywhere access to all apps, services and resources across all devices.
                
                Digital Workspace transforms & brings these values to your company.
            </p>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/EMM.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Enterprise Mobility Management</h5>
              <hr />
              <div class="list-unstyled mb-4">Manage & Secure Proliferation of End User Devices & Apps</div>
              <a href="/dwenterprisemob" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/virtuallinkdevices.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Virtualized Apps and Desktop to Any Devices</h5>
              <hr />
              <div class="list-unstyled mb-4">All EMM Added with Secure to Windows App Across Devices</div>
              <a href="/dwvirtualizedapp" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Modernworkplace.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Modern Workplace</h5>
              <hr />
              <div class="list-unstyled mb-4">Assist your business needs with our experts with years of experience</div>
              <a href="/dwmodernworkplace" class="btn btn-danger">See More</a>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!-- Description -->
@endsection