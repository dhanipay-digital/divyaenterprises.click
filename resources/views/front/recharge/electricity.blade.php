@extends('front.recharge.recharge-layout')
@section('recharge-service')
<div class="col-lg-4 col-xxl-5">
    <h2 class="text-4 mb-3">Pay your Electricity Bill</h2>
    <form id="electricityBill" method="post">
      <div class="mb-3">
        <select class="form-select" id="operator" required="">
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
      <div class="mb-3">
        <select class="form-select" id="yourState" required="">
          <option value="">Select Your State</option>
          <option>1st State</option>
          <option>2nd State</option>
          <option>3rd State</option>
          <option>4th State</option>
          <option>5th State</option>
          <option>6th State</option>
          <option>7th State</option>
          <option>8th State</option>
          <option>9th State</option>
          <option>10th State</option>
          <option>11th State</option>
          <option>12th State</option>
          <option>13th State</option>
          <option>14th State</option>
        </select>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" data-bv-field="number" id="serviceNumber" required="" placeholder="Enter Service Number">
      </div>
      <div class="input-group mb-3"> <span class="input-group-text">$</span>
        <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
      </div>
      <div class="d-grid">
        <button class="btn btn-primary" type="submit">Continue</button>
      </div>
    </form>
  </div>
@endsection
