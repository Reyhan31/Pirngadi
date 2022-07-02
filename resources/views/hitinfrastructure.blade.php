@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/hit.css'); }}" />
@endpush

@section('content')
<!-- HERO -->
<div class="hero h-auto d-flex align-items-center" id="hitinfrastructure">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto text-center pt-5">
          <h1 class="display-4 text-white">Hybrid IT Infrastructure Services</h1>
          <h5 class="text-white my-3 fw-normal">Enable IT Infrastructure in traditional Data Center and Cloud.</h5>
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
          <h2 class="text-danger mb-3">Defining the right mix of infrastructure: Traditional, Private and Public.</h2>
          <h1></h1>
          <p>
              The data center has always been a somewhat complex place, with a mixed of options from which to choose how you want to operate workloads. The chosen path is generally selected after careful consideration of the costs and outcomes related to each approach from On-Premise Data Center, Hosting colocation, Managed Service Providers and Cloud environment.

              So, which should you choose? The answer is that you should choose both and then leverage both sides of the equation when it makes sense. You might run particularly sensitive and latency‐sensitive applications on‐premises and then choose to move certain workloads into the cloud. For every workload in your portfolio, you need to develop a routine process that analyzes the need for that application and that helps you to decide where to run that application.
              
              Hybrid IT combines the right mix of traditional IT, private cloud, and public cloud to meet your business and IT goals, so you can integrate new technologies where needed and maintain legacy systems where appropriate.
          </p>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 55.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Back-up and Recovery</h5>
            <hr />
            <div class="list-unstyled mb-4">A backup system that can capture systems, programs, and data from physical and virtual machines and any hypervisor prevents lock-in to a particular style. </div>
            <button class="btn btn-danger">See More</button>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 58.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Virtualization</h5>
            <hr />
            <div class="list-unstyled mb-4">An approach to pooling and sharing technology resources to simplify management and increase asset use so that IT resources can more readily meet business demand.</div>
            <button class="btn btn-danger">See More</button>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 57.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Smart Operation</h5>
            <hr />
            <div class="list-unstyled mb-4">Provide easier and quicker process that allow your IT staff to be more productive and focus on priority projects rather than troubleshooting daily operations.</div>
            <button class="btn btn-danger">See More</button>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 56.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Infrastructure Automation</h5>
            <hr />
            <div class="list-unstyled mb-4"> Being a solution for everything from the mumps to inconsistent application deployments, it really is about one thing: going fast.</div>
            <button class="btn btn-danger">See More</button>
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <!-- Description -->
@endsection