@extends('front.recharge.recharge-layout')
@section('recharge-service')
<div class="col-lg-4 col-xxl-5">
    <h2 class="text-4 mb-3">Pay your Landline Bill</h2>
    <form id="landlineBill" method="post">
      <div class="mb-3">
        <select class="form-select" id="operator" required="" name="operator">
          @foreach ($operator_list as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
      </select>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" data-bv-field="number" id="telephoneNumber" required="" placeholder="Enter Telephone Number">
      </div>
      <div class="input-group mb-3"> <span class="input-group-text">$</span>
        <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
      </div>
      <div class="d-grid">
        <button class="btn btn-primary" type="submit">Continue to Pay Bill</button>
      </div>
    </form>
  </div>
@endsection
