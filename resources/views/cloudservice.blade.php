@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/cloudservicestyle.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex align-items-center" id="cloudservice">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white mt-5">Cloud Service</h1>
            <h5 class="text-white my-3 fw-normal">Enable business agility with cloud services</h5>
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
            <h2 class="text-danger mb-3">Our Offers</h2>
            <h1></h1>
            <p>
              Our cloud services meet today’s business and IT challenges, speed up development and transformation, and lower costs. They also mitigate business risks by providing secure, responsive, high-availability infrastructure which
              can respond to unexpected demand or market downturns. We deliver our cloud services on our fully managed delivery platform. Hosted within your data centre or ours, the Managed Cloud Platform comprises industry-leading hardware
              and software, coupled with virtualisation technology, operating system software, and CloudControl. CloudControl is our cloud management system which provides operational control and automation of cloud resource provisioning,
              orchestration, administration, and billing.
            </p>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/cloudmigra.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Cloud Migration and Provisioning Services</h5>
              <hr />
              <div class="list-unstyled mb-4">Helps you to succesfully adopt cloud solution for your modern data center</div>
              <a href="/cloudmigrationnprov" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/topimage.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Modern Workplace Adpotion Services</h5>
              <hr />
              <div class="list-unstyled mb-4">Leading expert in adopting modern workplace and office mobility for your organization</div>
              <a href="/modernworkspaceandadop" class="btn btn-danger">See More</a>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!-- Description -->
@endsection