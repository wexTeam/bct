@extends('front-end.layouts.master')
@section('content')
  <div class="buttons_bar">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="employee.html" class="mx-2 my-2 btn-group btn-group-custom btn-group-custom-dark align-items-center">
                            <span class="btn-group-custom-left">
                                <span class="d-flex  mb-1">Employee Version</span>
                                <span class="d-flex subtitle">Click here to order now</span>
                            </span>
            <span class="btn-group-custom-right">$10</span>
          </a>
          <a href="employee.html" class="mx-2 my-2 btn-group btn-group-custom btn-group-custom-dark align-items-center">
                            <span class="btn-group-custom-left">
                                <span class="d-flex  mb-1">Supervisor Version</span>
                                <span class="d-flex subtitle">Click here to order now</span>
                            </span>
            <span class="btn-group-custom-right">$17</span>
          </a>
          <a href="employee.html" class="mx-2 my-2  btn-group btn-group-custom btn-group-custom-dark align-items-center">
                            <span class="btn-group-custom-left">
                                <span class="d-flex  mb-1">Company Tracking</span>
                                <span class="d-flex subtitle">Click for details</span>
                            </span>
            <span class="btn-group-custom-right">FREE</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="advantages">
    <div class="container">
      <div class="row">
        <div class="col-md-4 advantage-item">
          <img class="mb-3" alt="Instant Certificate" src="{{ asset('assets/front/images/degree.png') }}" width="200"/>
          <h4>Instant Certificate</h4>
          <p>Instant printable certificate download to your computer immediately after courcse completeion.</p>
        </div>
        <div class="col-md-4 advantage-item">
          <img class="mb-3" alt="Court Acceptance Guarantee" src="{{ asset('assets/front/images/badge.png') }}" width="200"/>
          <h4>Court Acceptance Guarantee</h4>
          <p>If our course fails to satisfy a court or legal requirement, we weill refund your money in full when presented with written proof of its decline by  the state or county official in charge.</p>
        </div>
        <div class="col-md-4 advantage-item">
          <img class="mb-3" alt="Online and Convenient" src="{{ asset('assets/front/images/devices.pn') }}g" width="200"/>
          <h4>Online and Convenient</h4>
          <p>Access to our course is 24/7 for 90 days from any internet enabled device. Leave and return to where you left off.</p>
        </div>
      </div>
    </div>
  </div>
@endsection