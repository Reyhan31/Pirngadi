@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/businessapp.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="businessappcrm">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Customer Relationship Management</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Important insights</li>
              <li><i class="bx bxs-check-circle"></i> Improve profitabilities</li>
              <li><i class="bx bxs-check-circle"></i> Clear sales vision</li>
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
            <img src="img/Group 66.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Identify and categorize leads</h5>
      <p class="text-center"> One of the main benefits of a CRM system is that it can help you to identify and add new leads easily and quickly and categorise them accurately. You can create customised pitch documents in less time, cutting down on response time and enabling sales teams to move on to the next opportunity. With complete, accurate, centrally held information about clients and prospects, sales staff can focus their attention and energy on the right clients and gain a competitive advantage.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Group 66.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Increase referrals</h5>
      <p class="text-center"> By understanding your customers better, cross-selling and up-selling opportunities become clear – giving you the chance to win new business from existing customers. With better information you'll also be able to keep your customers happy with better service. Happy customers are likely to become repeat customers, and repeat customers spend more – up to 33% more according to some studies.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 66.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Improve products & service</h5>
      <p class="text-center"> An often overlooked benefit of CRM software is that it will gather information from a huge variety of sources across your business. This gives you unprecedented insights into how your customers feel and what they are saying about your organisation – so you can improve what you offer, spot problems early and identify gaps.</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection