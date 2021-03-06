{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <!-- Add Order -->
  <div class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Event</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label class="text-black font-w500">Event Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Event Date</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Description</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)"> Plugins</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Light Gallery</a></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Light Gallery</h4>
        </div>
        <div class="card-body pb-1">
          <div id="lightgallery" class="row">
            <a href="{{ asset('images/big/img1.jpg') }}" data-exthumbimage="{{ asset('images/big/img1.jpg') }}" data-src="{{ asset('images/big/img1.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img1.jpg') }}" alt="" style="width:100%;"/>
            </a>
            <a href="{{ asset('images/big/img2.jpg') }}" data-exthumbimage="{{ asset('images/big/img2.jpg') }}" data-src="{{ asset('images/big/img2.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img2.jpg') }}"  alt="" style="width:100%;" />
            </a>
            <a href="{{ asset('images/big/img3.jpg') }}" data-exthumbimage="{{ asset('images/big/img3.jpg') }}" data-src="{{ asset('images/big/img3.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img3.jpg') }}"  alt="" style="width:100%;" />
            </a>
            <a href="{{ asset('images/big/img4.jpg') }}" data-exthumbimage="{{ asset('images/big/img4.jpg') }}" data-src="{{ asset('images/big/img4.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img4.jpg') }}"  alt="" style="width:100%;" />
            </a>
            <a href="{{ asset('images/big/img5.jpg') }}" data-exthumbimage="{{ asset('images/big/img5.jpg') }}" data-src="{{ asset('images/big/img5.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img5.jpg') }}"  alt="" style="width:100%;"/>
            </a>
            <a href="{{ asset('images/big/img6.jpg') }}" data-exthumbimage="{{ asset('images/big/img6.jpg') }}" data-src="{{ asset('images/big/img6.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img6.jpg') }}"  alt="" style="width:100%;" />
            </a>
            <a href="{{ asset('images/big/img7.jpg') }}" data-exthumbimage="{{ asset('images/big/img7.jpg') }}" data-src="{{ asset('images/big/img7.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img7.jpg') }}"  alt="" style="width:100%;" />
            </a>
            <a href="{{ asset('images/big/img8.jpg') }}" data-exthumbimage="{{ asset('images/big/img8.jpg') }}" data-src="{{ asset('images/big/img8.jpg') }}" class="col-lg-3 col-md-6 mb-4">
              <img src="{{ asset('images/big/img8.jpg') }}"  alt="" style="width:100%;" />
            </a>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
  </div>
</div>

@endsection