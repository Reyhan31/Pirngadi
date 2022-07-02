@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/consulting.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex align-items-center" id="consultingservice">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white mt-5">Business Consulting</h1>
            <h5 class="text-white my-3 fw-normal">Guiding your business outcomes through technology</h5>
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
            <h2 class="text-danger mb-3">Align your people, strategies, processes, and deployments.</h2>
            <h1></h1>
            <p>
                With our advisory services, you gain access to our real-world knowledge and expertise as well as industry best practices. We help you navigate your transformational journey to address the business challenges you face using technology. Our consulting services span the entire business lifecycle and encompass people, processes, and technology offerings to provide strategic clarity, process optimisation, organisational readiness, and governance support.
            </p>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 73.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Financial Services</h5>
              <hr />
              <div class="list-unstyled mb-4">Enabling responsiveness to digital transformation in the financial markets.</div>
              <button class="btn btn-danger">See More</button>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 72.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Consulting and Advisory Services</h5>
              <hr />
              <div class="list-unstyled mb-4">Assist your business needs with our experts</div>
              <button class="btn btn-danger">See More</button>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!-- Description -->
@endsection