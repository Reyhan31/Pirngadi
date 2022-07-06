@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/businessapp.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex align-items-center" id="businessapp">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white mt-5">Business Application Services</h1>
            <h5 class="text-white my-3 fw-normal">Delivering speed, agility, and business-aligned innovation</h5>
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
            <h2 class="text-danger mb-3">Alignment of business and IT needs to drive your digital business transformation.</h2>
            <h1></h1>
            <p>
                As organisations evolve into digital businesses, you can no longer depend on the past as a guide for the future. Our IT transformation services help you to bring your technology and business priorities together. By working with you to define your strategy, we can accelerate your business transformation. Facilitated by our industry-aligned enterprise architects, our workshops enable you to address IT and business alignment through agreement on key objectives, roadmap, and action plan. Our consultants will assist you to identify the best-fit technology and delivery model for your environment, improving time-to-value for implementation, and mitigating transformation and deployment risks.
            </p>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 68.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Business Process Application</h5>
              <hr />
              <div class="list-unstyled mb-4">Efficient business processes provide the insights needed to gain the competitive edge.</div>
              <a href="/businessappprocess" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 67.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Customer Relationship Management</h5>
              <hr />
              <div class="list-unstyled mb-4">Giving you a clear overview of your customers. You can see everything in one place.</div>
              <a href="/businessappcrm" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 66.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Customer Experience Journey</h5>
              <hr />
              <div class="list-unstyled mb-4">Take advantage of the opportunity created by your digital strategy</div>
              <a href="/businessappcustjourney" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 65.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Business Service Management</h5>
              <hr />
              <div class="list-unstyled mb-4">Increase Efficiency, Minimum Down Time, and Sustainability on your Business</div>
              <a href="/businessappmanageservice" class="btn btn-danger">See More</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card-effect rounded border border-danger text-center">
              <img src="img/Group 64.jpg" class="img-fluid rounded" alt="responsive image" />
              <h5 class="mt-5 mb-1 text-center">Enterprise Resource Planning</h5>
              <hr />
              <div class="list-unstyled mb-4">Streamline your enterprise business processes with Enterprise Resource Planning Cloud.</div>
              <a href="/businessappenterprise" class="btn btn-danger">See More</a>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!-- Description -->
@endsection