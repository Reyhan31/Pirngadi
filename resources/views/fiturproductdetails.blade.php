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
                    <img src="img/contractor.png" class="col-md-3 p-3 detailimg" id="detailImg1" alt="" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)">
                    <img src="img/contractor.png" class="col-md-3 p-3 detailimg" alt="detailImg2" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)">
                    <img src="img/contractor.png" class="col-md-3 p-3 detailimg" alt="detailImg3" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)">
                    <img src="img/contractor.png" class="col-md-3 p-3 detailimg" alt="detailImg4" onmouseleave="unpreviewImage(this)" onmouseover="previewImage(this)" onclick="previewImage(this)">
                </div>
            </div>
        </div>
        <div class="middle-content col-md-4 mx-auto ">
            <h5 class="fw-bolder">Nama Product</h5>
            <p class="border-bottom border-2"> Details</p>
            <p>Part No: </p>
            <p>UNSPSC: </p>
            <p>Model No:</p>
            <p>Contractor Type: </p>
            <p>Mfr/Brand Name: </p>
            <p>Roll-In/Slide-In/Fixed: </p>
            <p>Primary Voltage (AC): </p>
            <p>Amps: </p>
            <p>Control Voltage: </p>
            <p>Description: </p>
            <p>Additional Keywords: </p>
            <p>Qty in Stock: </p>
            <p>Price: </p>
            <p>Etc: </p>
        </div>
        <div class="right-content justify-content-center col col-md-3 mb-4">
            <div class="container mt-3 border border-dark rounded pb-4">
                <h5 class="fw-bolder text-center row mx-auto pt-4 mb-4 ">Request Quotation</h5>
                <div class="d-flex justify-content-center row mb-5">
                    <button class="btn btn-outline-danger col-2" id="minusbutton" onclick="minus()">-</button>
                    <input type="value" class="col-6 text-center "id="quantity" value="0">
                    <button class="btn btn-outline-danger col-2 " id="plusbutton" onclick="plus()">+</button>
                </div>
                <button class="btn text-center mx-auto row col-12 quotebtn" style="background-color: #A72B30; color: white;">Quote</button>
            </div>
        </div>
    </div>
    <div class="bottom-content row"></div>
</div>
<div class="fixed-btn">
  <button type="button" class="btn btn-danger rounded position-relative">
    <a href="#"><i class='bx bx-cart' style='color:#ffffff'  ></i></a>
    Quotes Cart
    <span class="position-absolute top-0 start-100 translate-middle badge border rounded-pill bg-danger">
      99+
      <span class="visually-hidden">unread messages</span>
    </span>
  </button>
</div>
</section>
<!-- End main -->
@endsection