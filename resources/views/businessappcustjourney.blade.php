@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/businessapp.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="businesscustjourney">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Customer Experience Journey</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Digital strategy</li>
              <li><i class="bx bxs-check-circle"></i> Plan Outcomes</li>
              <li><i class="bx bxs-check-circle"></i> Experienced experts</li>
            </ul>
            </div>
        </div>
        <div class="col-lg-5 ms-auto">
            <div class="card-effect rounded border border-danger">
                <form action="/send-mail-contact" method="POST" class="row g-3 justify-content-center">
              @csrf
              <div class="col-md-10 mb-2 mt-5">
                  <h5 class="fw-normal">Full name</h5>
                  <input type="text" name="fullName" class="form-control border rounded" placeholder="Ex: John Doe" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">E-mail</h5>
                <input type="text" name="email" class="form-control border rounded" placeholder="example@example.com" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Subject</h5>
                <input type="text" name="subject" class="form-control border rounded" placeholder="Enter Subject here" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Message</h5>
                <textarea name="message" id="" cols="30" rows="5" class="form-control border rounded" placeholder="Enter Message here"></textarea>
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
            <img src="img/Group 67.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Deliver smooth omnichannels experience</h5>
      <p class="text-center">Omnichannel customer experience designs and delivers seamless customer journeys for organisations with multiple points of contact with their customers. By understanding your business requirements, we help you to build a blueprint for change which will enable achievement of your business objectives. Working with your technology, new and old, our global team of customer experience experts will enable your evolving channels to work in the most optimal, customer-centric way.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Group 67.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Use customer data insights to drive your business outcomes</h5>
      <p class="text-center"> Customer Analytics uses the dynamic, intelligent application of data to deliver a world-class customer experience across multiple touchpoints. Using data collected from your voice and digital channels, we equip you to understand your customer’s needs and behaviour. We help you provide better service, and to improve and enhance productivity. Insights gathered from the application of your existing data is used to adapt your products and go-to-market model to address your customers’ needs. We work with you to align your customer analytics strategy to your business requirements and transform your customer journey into a personalised, predictable, and more efficient customer experience.</p>

    </div>
  
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection