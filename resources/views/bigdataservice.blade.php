@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/bigdataservice.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex align-items-center" id="bigdataservice">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white mt-5">Big Data Services</h1>
            <h5 class="text-white my-3 fw-normal">Delivering the right people with the right skill-set to help you succeed</h5>
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
              Most organizations deal with a flood of data and must figure out an information management strategy that could accelerate the flow of insights. Big data services is not about using every bit of data originating from every source, it's about making the smart decisions that accelerate business growth.  </p>
              <p>Pirngadi Teberau Karya Big Data services enable organizations to conceptualize and implement a big data program  across multiple domains and focus areas. We help our clients account for scale and platform readiness while developing Big Data Service capabilities to drive business goal. Our big data services enable organizations to:    </p>
              <p>· Find the right approach to collecting and connecting with data.</p>
              <p>· Connect the dots across data silos for generating actionable insights.</p>
              <p>· Develop and implement big data solutions across all business verticals.</p>
              <p>· Identify and resolve big data security risks ahead of time.</p>
              <p>· Maintain and manage big data services with ease.</p>
              <p>Our Big Data experts are always ready to help you navigate all stages on your big data journey, from strategy road map, technical evaluation, and proof of concept to platform customization and implementation.</p>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 28.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Big Data and Analytics Consulting</h5>
              <hr />
              <div class="list-unstyled mb-4">Focus more on your business Big Data and Analytics consulting from MII</div>
              <a href="/bigdatananalytcons" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 29.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Oracle to Hadoop Data Migration</h5>
              <hr />
              <div class="list-unstyled mb-4">Help increasing your efficiency with oracle to Hadoop Data Migration Services</div>
              <a href="oracletohadoop" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 26.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">SAP Data Offloading & Archiving to Hadoop</h5>
              <hr />
              <div class="list-unstyled mb-4">Get more benefit from your SAP investment with big-data integration</div>
              <a href="sapdataoffload" class="btn btn-danger">See More</a>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!-- Description -->
@endsection