@extends('front.recharge.recharge-layout')
@section('recharge-service')
<div class="col-lg-4 col-xxl-5">
    <h2 class="text-4 mb-3">DataCard Recharge or Bill Payment</h2>
    <form id="datacardRechargeBill" method="post">
      <div class="mb-3">
        <div class="form-check form-check-inline">
          <input id="prepaid" name="rechargeBillpayment" class="form-check-input" checked="" required="" type="radio">
          <label class="form-check-label" for="prepaid">Prepaid</label>
        </div>
        <div class="form-check form-check-inline">
          <input id="postpaid" name="rechargeBillpayment" class="form-check-input" required="" type="radio">
          <label class="form-check-label" for="postpaid">Postpaid</label>
        </div>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" data-bv-field="number" id="dataCardNumber" required="" placeholder="Enter DataCard Number">
      </div>
      <div class="mb-3">
        <select class="form-select" required="">
          <option value="">Select Your Operator</option>
          <option>1st Operator</option>
          <option>2nd Operator</option>
          <option>3rd Operator</option>
          <option>4th Operator</option>
          <option>5th Operator</option>
          <option>6th Operator</option>
          <option>7th Operator</option>
        </select>
      </div>
      <div class="input-group mb-3"> <span class="input-group-text">$</span> <a href="#" data-bs-target="#view-plans" data-bs-toggle="modal" class="view-plans-link">View Plans</a>
        <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
      </div>
      <div class="d-grid"><a class="btn btn-primary" href="recharge-order-summary.html">Continue to Recharge</a></div>
    </form>
  </div>
@endsection
