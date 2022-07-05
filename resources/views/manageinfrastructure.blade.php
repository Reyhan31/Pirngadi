@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/manageservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="manageinfrastructure">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">Managed Infrastructure Services</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Support IT Infrastructure</li>
                <li><i class="bx bxs-check-circle"></i> Manage infrastructure with our expertise</li>
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
              <img src="img/ManagedInfra.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Help IT environment operation</h5>
        <p class="text-center">  We provide you with technical expertise, service consistency, and flexibility across multiple vendors, technologies, and geographies. Reduce your overheads and improve efficiency by leveraging our scale, methodologies, and high levels of standardization.</p>
  
      </div>
      <div class="col-sm-3">
          <div class="upper  mb-5">
              <img src="img/ManagedInfra.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Supported roles</h5>
        <p class="text-center"> By professional hiring and bootcamp program, our personnel is obtained, developed, and release to our customer. Here are some roles that currently supported: IT Service Desk, IT Support, IT Infrastructure Services, Data Center Operator, Application Support, Developer, Techincal Writter, and Database Administrator. </p>
  
      </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection