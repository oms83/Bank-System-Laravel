
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ url('') }}/css/login_util.css">
<link rel="stylesheet" type="text/css" href="{{ url('') }}/css/login_main.css">
<!--===============================================================================================-->
{{-- <style>
    .div{

        background: -webkit-linear-gradient(-135deg, #008080, #4d194d);
        background: -o-linear-gradient(-135deg, #008080, #4d194d);
        background: -moz-linear-gradient(-135deg, #008080, #4d194d);
        background: linear-gradient(-135deg, #008080, #4d194d);
    }
</style> --}}
@extends('layouts.master')


@section('title', 'Dashboard')
@section('content')

<div class="row" >
    <div class="col-md-12 h6">
        Banks
    </div>
    <div class="col-md-12" >
        <div  class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card" style="border-radius:10px !important">
                    {{-- <div style="background: linear-gradient(-135deg, #008080, #4d194d) " class="rounded" class="card-body"> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                <div>Bank Name.</div>
                                <div class="h6"> Ziraat Bankasi Turkey Trabzon </div>

                                <br/>

                                <div>Account Name.</div>
                                <div class="h6"> Omer MEMES </div>

                                <div>Account No.</div>
                                <div class="h6">655454564352165</div>

                            </div>
                            <div class="col-sm-12 col-md-5 text-right">
                                <img src="https://www.ziraatbank.com.tr/SiteAssets/images/fb-logo.jpg" alt="" class="rounded-circle" width="50" height="50">

                                <br/>
                                <br/>

                                <div>Ledger Balance.</div>
                                <div class="h6 text-muted">5500TL</div>

                                <div>Available Balance.</div>
                                <div class="h6">16700TL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
