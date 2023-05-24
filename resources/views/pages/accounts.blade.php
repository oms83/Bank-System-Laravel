@extends('layouts.master')

@section('title', 'Bank Accounts')

@section('content')

<div class="row">
    <div class="col-md-12 h6">
        Accounts
        <button type="button" data-toggle="modal" data-target="#addBankAccountModal" class="btn btn-primary float-right"> Add Bank Account </button>
    </div>

    <div class="col-md-12" >
        <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="border-radius:10px !important">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div>Bank Name.</div>
                                    <div class="h6">Ziraat Bankasi</div>

                                    <br/>

                                    <div>Account Name.</div>
                                    <div class="h6">6465465464</div>

                                    <div>Account No.</div>
                                    <div class="h6">Omer MEMES</div>

                                </div>
                                <div class="col-sm-12 col-md-5 text-right">
                                        <img src="https://www.ziraatbank.com.tr/SiteAssets/images/fb-logo.jpg" alt="" class="rounded-circle" width="50" height="50">
                                    <br/>
                                    <br/>

                                    <div>Ledger Balance.</div>
                                    <div class="h6 text-muted">$5500</div>

                                    <div>Available Balance.</div>
                                    <div class="h6">$15800</div>
                                </div>
                            </div>
                        </div>

                        <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card-footer text-right">

                            <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button"  class="edit-bank-account btn btn-xs btn-info"> <i class="fa fa-edit"></i> Edit </button>
                                        <a href="#" class="btn btn-xs btn-secondary text-white"> <i class="fa fa-trash"></i> Restore </a>
                                        <a href="#" class="btn btn-xs btn-danger text-white"> <i class="fa fa-trash"></i> Delete </a>
                            </div>
                            <a href="#" class="btn btn-xs btn-primary"><i class="mdi mdi-cards"></i> Transactions </a>
                        </div>
                    </div>
                </div>
        </div>
</div>

<div class="col-md-12" >
        <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="border-radius:10px !important">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div>Bank Name.</div>
                                    <div class="h6">Ziraat Bankasi</div>

                                    <br/>

                                    <div>Account Name.</div>
                                    <div class="h6">6465465464</div>

                                    <div>Account No.</div>
                                    <div class="h6">Omer MEMES</div>

                                </div>
                                <div class="col-sm-12 col-md-5 text-right">
                                        <img src="https://www.ziraatbank.com.tr/SiteAssets/images/fb-logo.jpg" alt="" class="rounded-circle" width="50" height="50">
                                    <br/>
                                    <br/>

                                    <div>Ledger Balance.</div>
                                    <div class="h6 text-muted">$5500</div>

                                    <div>Available Balance.</div>
                                    <div class="h6">$15800</div>
                                </div>
                            </div>
                        </div>

                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card-footer text-right">

                            <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button"  class="edit-bank-account btn btn-xs btn-info"> <i class="fa fa-edit"></i> Edit </button>
                                        <a href="#" class="btn btn-xs btn-secondary text-white"> <i class="fa fa-trash"></i> Restore </a>
                                        <a href="#" class="btn btn-xs btn-danger text-white"> <i class="fa fa-trash"></i> Delete </a>
                            </div>
                            <a href="#" class="btn btn-xs btn-primary"><i class="mdi mdi-cards"></i> Transactions </a>
                        </div>
                    </div>
                </div>
        </div>
</div>

@endsection
