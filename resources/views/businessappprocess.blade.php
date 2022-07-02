@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/businessapp.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="businessappprocess">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Business Process Application</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Important insights</li>
              <li><i class="bx bxs-check-circle"></i> Capabilities to help</li>
              <li><i class="bx bxs-check-circle"></i> All about interaction</li>
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
            <img src="img/Group 68.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Content and Marketing</h5>
      <p class="text-center"> We build digital channels for you, maintaining your corporate brand integrity in the ‘look and feel’ of your front-end, while integrating into your business back-ends to provide a seamless experience.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Group 68.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Design and Experience</h5>
      <p class="text-center"> With our custom development services, we design, build, implement, and manage software solutions that help you engage with your stakeholders effectively. </p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 68.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Portals and Collaboration for Intranet Portal</h5>
      <p class="text-center"> We enable business productivity by implementing Microsoft solutions and integrating them with offerings from key partners, increasing your collaboration and ultimately your work output.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 68.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Enterprise Mobile Applications</h5>
      <p class="text-center"> We design, build, deliver, implement, manage, and support mobile solutions for a wide variety of vertical industries, offering you a strategic approach to delivering enterprise mobility.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 68.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Mobile Solutions</h5>
      <p class="text-center"> The potential of mobile applications to transform and accelerate business processes hinges not only on the speed and convenience of mobility itself, but also on the ability of end-user devices to sense, respond to, deliver, and capture information in real time.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 68.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Data Services</h5>
      <p class="text-center"> Your organisation collects large amounts of data on a daily basis. This data can be turned into useful intelligence to help you drive sales, develop new products, and reach new markets. We provide you with the right database administration, helping you to avoid losing money, wasting time, and putting your customer relationships in jeopardy.</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection