@extends('front.recharge.recharge-layout')
@section('recharge-service')
    <div class="col-lg-4 col-xxl-5">
        <h2 class="text-4 mb-3">DTH Recharge</h2>
        <form id="dthRechargeBill" method="post">
            <div class="mb-3">
                <select class="form-select" id="operator" required="" name="operator">
                    @foreach ($operator_list as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" data-bv-field="number" id="cardNumber" required=""
                    placeholder="Enter Your Card Number">
            </div>
            <div class="input-group mb-3"> <span class="input-group-text">$</span> <a href="#"
                    data-bs-target="#view-plans" data-bs-toggle="modal" class="view-plans-link">View Plans</a>
                <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
            </div>
            <div class="d-grid"><a class="btn btn-primary" href="recharge-order-summary.html">Continue to Recharge</a></div>
        </form>
    </div>
@endsection
