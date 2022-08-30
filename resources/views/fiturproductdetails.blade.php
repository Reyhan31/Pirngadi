@extends('layout.master')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/product.css'); }}" />
@endpush

@section('content')
<section>
  <div class="container fluid">
    <div class="main-content row mt-4 gx-4 mx-auto">
        <div class="left-content col-md-4 ">
            <div class="zoom rounded ">
                <div class="kotak">
                    <img id="detailPreviewImg"src="" style="width: 90%;" alt="productImage">
                </div>
            </div>
            <div class="container overflow-hidden mx-auto">
                <div class="detailImg row gx-5">
                    <img src="{{ URL::asset($product->image); }}" class="col-md-3 p-3 detailimg" id="detailImg1" alt="" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)">
                    {{-- <img src="img/contractor.png" class="col-md-3 p-3 detailimg" alt="detailImg2" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)">
                    <img src="img/contractor.png" class="col-md-3 p-3 detailimg" alt="detailImg3" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)">
                    <img src="img/contractor.png" class="col-md-3 p-3 detailimg" alt="detailImg4" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)"> --}}
                </div>
            </div>
        </div>
        <div class="middle-content col-md-4 mx-auto ">
            <h5 class="fw-bolder">{{$product->name}}</h5>
            <p class="border-bottom border-2"> Details</p>
            @if($product->partModelNo)
            <p>Part/Model No: {{$product->partModelNo}}</p>
            @endif
            @if($product->partNo)
            <p>Part No: {{$product->partNo}}</p>
            @endif
            @if($product->UNSPSC)
            <p>UNSPSC: {{$product->UNSPSC}}</p>
            @endif
            @if($product->modelNo)
            <p>Model No: {{$product->modelNo}}</p>
            @endif
            @if($product->type)
            <p>Type: {{$product->type}}</p>
            @endif
            @if($product->contractorType)
            <p>Contractor Type: {{$product->contractorType}}</p>
            @endif
            @if($product->brandName)
            <p>Mfr/Brand Name: {{$product->brandName}}</p>
            @endif
            @if($product->rollSlideFixed)
            <p>Roll-In/Slide-In/Fixed: {{$product->rollSlideFixed}}</p>
            @endif
            @if($product->primaryVoltage)
            <p>Primary Voltage (AC): {{$product->primaryVoltage}}</p>
            @endif
            @if($product->amps)
            <p>Amps: {{$product->amps}}</p>
            @endif
            @if($product->controlVoltage)
            <p>Control Voltage: {{$product->controlVoltage}}</p>
            @endif
            @if($product->desc)
            <p>Description: {{$product->desc}}</p>
            @endif
            @if($product->additionalKeywords)
            <p>Additional Keywords: {{$product->additionalKeywords}}</p>
            @endif
            @if($product->price)
            <p>Price: {{$product->price}}</p>
            @endif
            @if($product->shippingWeight)
            <p>Shipping Weight: {{$product->shippingWeight}}</p>
            @endif
        </div>
        <div class="right-content justify-content-center col col-md-3 mb-4">
            <div class="container mt-3 border border-dark rounded pb-4">
                <form method="POST" action="/addCart">
                    @csrf
                <h5 class="fw-bolder text-center row mx-auto pt-4 mb-4 ">Request Quotation</h5>
                <div class="d-flex justify-content-center row mb-5">
                  <button type="button" class="btn btn-outline-danger col-2" id="minusbutton" onclick="minus()">-</button>
                  <input type="value" class="col-6 text-center " id="quantity" name="quantity" value="0">
                  <button type="button" class="btn btn-outline-danger col-2 " id="plusbutton" onclick="plus()">+</button>
                </div>
                <input type="hidden" id="id" name="id" value={{$product->id}}>
                <button type="submit" class="btn text-center mx-auto row col-12 quotebtn" style="background-color: #A72B30; color: white;">Quote</button>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom-content row"></div>
</div>
@if(Session::has('cart'))
  <div class="fixed-btn">
    <button type="button" class="btn btn-danger rounded position-relative">
      <a href="/fiturproductcart"><i class='bx bx-cart' style='color:#ffffff'  ></i>
        <span style='color:#ffffff'  >Quotes Cart</span>
      <span class="position-absolute top-0 start-100 translate-middle badge border rounded-pill bg-danger">
        {{ count(Session::get('cart')) }}
        <span class="visually-hidden">unread messages</span>
      </span>
      </a>
    </button>
  </div>
@endif
</section>
<!-- End main -->
@endsection
@push('script')
<script src="{{ URL::asset('js/script.js'); }}"></script>
@endpush