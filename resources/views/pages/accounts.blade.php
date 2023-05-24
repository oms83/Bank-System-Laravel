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


<!-- Add New Bank Account -->
    <div class="modal fade" id="addBankAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <form method="POST" action="">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Bank Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-5">

                        <div class="form-group">
                            <label for="transactionCodeInput">Account Name</label>
                            <input type="text" class="form-control" id="transactionCodeInput" aria-describedby="transactionCodeInputHelp" name="name" required value="Omer Memes" />
                        </div>

                        <div class="form-group">
                            <label for="transactionNarrationInput">Account Number</label>
                            <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="number" required value="56546543" />
                        </div>

                        <div class="form-group">
                            <label>Available Balance</label>
                            <input type="number" class="form-control" name="available_balance" required value="1000" />
                        </div>

                        <div class="form-group">
                            <label>Ledger Balance</label>
                            <input type="number" class="form-control" name="ledger_balance" required value="550" />
                        </div>

                        <div class="form-group">
                            <label for="usersFormControlSelect">User</label>
                            <select class="form-control" id="usersControlSelect" name="user_id">

                                <option value="1"> a </option>
                                <option value="2"> b </option>
                                <option value="3"> c </option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="usersFormControlSelect">Bank Name</label>
                            <select class="form-control" id="banksControlSelect" name="bank_id">

                                <option value="1"> n </option>
                                <option value="2"> m </option>
                                <option value="3"> l </option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="usersFormControlSelect">Bank Branch Location</label>
                            <select class="form-control" id="bankLocationsControlSelect" name="bank_location_id">
                                <option value="1"> x </option>
                                <option value="2"> y </option>
                                <option value="3"> z </option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Save </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
