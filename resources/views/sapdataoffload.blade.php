@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/bigdatananalytcons.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="sapdataoffload">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 d-flex align-items-center">
              <div>
              <h1 class="display-4 text-white">SAP Data offloading and Archiving to Hadoop</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Gain more benefits</li>
                <li><i class="bx bxs-check-circle"></i> Reduce SAP Costs</li>
                <li><i class="bx bxs-check-circle"></i> Using Hadoop technology</li>
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
        <section class="container">
            <div class="hdr text-center mb-5">
                <h1>Features</h1>
            </div>
            
  <div class="d-flex justify-content-evenly">
  
      <div class="col-lg-3">
          <div class="upper mb-5">
              <img src="img/Group 26.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">TCO Reduction</h5>
        <p class="text-center"> Offloading (or archiving) aged SAP data is a smart way to reduce the costs of SAP
          systems by simply storing SAP data on a cheaper technology in Hadoop.</p>
  
      </div>
      <div class="col-lg-3 ">
          <div class="upper  mb-5">
              <img src="img/Group 26.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3"> Integrated Data</h5>
        <p class="text-center"> SAP data can offer treasures for data scientists when integrated into Big Data              scenarios. Think fraud detection, predictive maintenance, anomaly detection, machine learning              to optimize production, customer 360 degree anaysis.</p>
  
      </div>
     
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection