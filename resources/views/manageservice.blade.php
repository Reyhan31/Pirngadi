@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/manageservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex align-items-center" id="manageservice">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center">
              <h1 class="display-4 text-white mt-5">Managed Services</h1>
              <h5 class="text-white my-3 fw-normal">Establish since 1996, with our experience, scale, and quality, we take over your IT operations, Leveraging best practices, Improving efficiency and Delivering business outcomes</h5>
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
              <h2 class="text-danger mb-3">As a Service is our Way of Working</h2>
              <h1></h1>
              <p>
                  Our managed services help you with the operations of your information technology environments. We provide you with technical expertise, service consistency, and flexibility across multiple vendors, technologies, and geographies. Reduce your overheads and improve efficiency by leveraging our scale, methodologies, and high levels of standardisation.
  
              </p>
            </div>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-sm-6">
              <div class="card-effect rounded border border-danger text-center">
                <img src="img/Appdevservice.jpg" class="img-fluid rounded" alt="responsive image" />
                <h5 class="mt-5 mb-1 text-center">Application and Developement Services</h5>
                <hr />
                <div class="list-unstyled mb-4">Support and maintenance to enhance your Application Performance and Efficiency</div>
                <a href="/manageappndev" class="btn btn-danger">See More</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card-effect rounded border border-danger text-center">
                <img src="img/DesktopManagementService.jpg" class="img-fluid rounded" alt="responsive image" />
                <h5 class="mt-5 mb-1 text-center">Desktop Management Services</h5>
                <hr />
                <div class="list-unstyled mb-4">Provides end-to-end solution that enables a stable and secure working environment.</div>
                <a href="/managedesktop" class="btn btn-danger">See More</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card-effect rounded border border-danger text-center">
                <img src="img/ManagedInfra.jpg" class="img-fluid rounded" alt="responsive image" />
                <h5 class="mt-5 mb-1 text-center">Managed Infrastructure Services</h5>
                <hr />
                <div class="list-unstyled mb-4">Help you to have the right solution to support your IT Infrastructure environment.</div>
                <a href="/manageinfrastructure" class="btn btn-danger">See More</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card-effect rounded border border-danger text-center">
                <img src="img/Serviceprovider.jpg" class="img-fluid rounded" alt="responsive image" />
                <h5 class="mt-5 mb-1 text-center">Managed Service Provider</h5>
                <hr />
                <div class="list-unstyled mb-4">Focus on your IT Strategic Business, take care your whole IT Operation in one solution.</div>
                <a href="/manageprovider" class="btn btn-danger">See More</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card-effect rounded border border-danger text-center">
                <img src="img/PrintService.jpg" class="img-fluid rounded" alt="responsive image" />
                <h5 class="mt-5 mb-1 text-center">Managed Print Services</h5>
                <hr />
                <div class="list-unstyled mb-4">Maintain Company Printing Environment to be more productive and efficient.</div>
                <a href="/manageprint" class="btn btn-danger">See More</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card-effect rounded border border-danger text-center">
                <img src="img/Testod.jpg" class="img-fluid rounded" alt="responsive image" />
                <h5 class="mt-5 mb-1 text-center">On Demand Testing Services</h5>
                <hr />
                <div class="list-unstyled mb-4">Deliver Testing Activity By Request.</div>
                <a href="/manageondemandtest" class="btn btn-danger">See More</a>
              </div>
            </div>
          
          </div>
        </div>
      </section>
      <!-- Description -->
@endsection