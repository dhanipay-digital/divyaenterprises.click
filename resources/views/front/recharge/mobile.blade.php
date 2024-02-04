@extends('front.recharge.recharge-layout')
@section('recharge-service')
    <!-- Mobile Recharge
            ============================================= -->
    <div class="col-lg-4 col-xxl-5">
        <h2 class="text-4 mb-3">Mobile Recharge or Bill Payment</h2>
        <form id="recharge-bill" method="post" action="{{ url()->current() }}">
            @csrf
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input id="prepaid" name="rechargeBillpayment" class="form-check-input" checked="" required=""
                        type="radio" value="prepaid">
                    <label class="form-check-label" for="prepaid">Prepaid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="postpaid" name="rechargeBillpayment" class="form-check-input" required="" type="radio" value="postpaid">
                    <label class="form-check-label" for="postpaid">Postpaid</label>
                </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required=""
                    placeholder="Enter Mobile Number">
            </div>
            <div class="mb-3">
                <select class="form-select" id="operator" required="" name="operator">
                    @foreach ($operator_list as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3"> <span class="input-group-text">$</span> <a href="#"
                    data-bs-target="#view-plans" data-bs-toggle="modal" class="view-plans-link">View Plans</a>
                <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text" name="amount">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Recharge</button>
            </div>
        </form>
    </div>
    <!-- Mobile Recharge end -->
@endsection
