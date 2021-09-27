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
      <li class="breadcrumb-item"><a href="javascript:void(0)">Components</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Sweet Alert</a></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Wrong</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Message</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-info btn sweet-message">Sweet Message</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Text</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-primary btn sweet-text">Sweet Text</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Success</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-success btn sweet-success">Sweet Success</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Confirm</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Confirm Or Cancel</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-warning btn sweet-success-cancel">Sweet Confirm Or
              Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Image Message</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-info btn sweet-image-message">Sweet Image
              Message</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet HTML</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-primary btn sweet-html">Sweet HTML</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Auto Close</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-danger btn sweet-auto">Sweet Auto Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Prompt</h4>
          <div class="card-content">
            <div class="sweetalert mt-5">
              <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sweet Ajax</h4>
          <div class="card-content"></div>
          <div class="sweetalert mt-4">
            <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection