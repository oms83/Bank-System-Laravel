@extends('layouts.master')

@section('title', 'Account Transactions')

@section('content')

<div class="row">              
    <div class="col-md-12 h6">
        
    </div>      
    <div class="col-md-12">
        <div class="row"> 
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card" style="border-radius:10px !important">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Account Details
                                </button>
                                </h5>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-7">
                                                    <div>Bank Name.</div>
                                                    <div class="h6">Ziraat Bankasi Turkey</div>
                    
                                                    <div>Account Name.</div>
                                                    <div class="h6">65465454865456</div>
                                                    
                                                    <div>Account No.</div>
                                                    <div class="h6">Ziraat</div>
                    
                                                </div>
                                                <div class="col-sm-12 col-md-5 text-right">
                                                        <img src="https://www.ziraatbank.com.tr/SiteAssets/images/fb-logo.jpg" alt="" class="rounded-circle" width="50" height="50">
                    
                                                    <br/>
                                                    <br/>
                    
                                                    <div>Ledger Balance.</div>
                                                    <div class="h6 text-muted">65165</div>
                    
                                                    <div>Available Balance.</div>
                                                    <div class="h6">54561</div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"> 
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card" style="border-radius:10px !important">
                    {{-- Transaction Table --}}
                    
                    <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Transactions 
                                        <button type="button" data-toggle="modal" data-target="#addTransactionModal" class="btn btn-primary float-right"> Add Transaction </button> 
                                    </h4>

                                    <h6 class="card-subtitle">&nbsp;</h6>
                                
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Transaction Code</th>
                                                    <th scope="col">Narration</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        1
                                                    </td>

                                                    <td>
                                                        27.05.2023
                                                    </td>
    
                                                    <td>$56564</td>
                                                    
                                                    <td>vsdv6vds</td>
                                                    
                                                    <td>1</td>
                                                    
                                                    <td>
                                                        <span class="btn btn-sm btn-success"> <i class="mdi mdi-debug-step-into"></i> credit </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-warning"> <i class="mdi mdi-clock"></i> pending </span>
                                                    </td>
                                                </tr>
                                        </tbody>
    

                                        <tbody>

                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    27.05.2023

                                                </td>

                                                <td>$56564</td>
                                                
                                                <td>vsdv6vds</td>
                                                
                                                <td>1</td>
                                                
                                                <td>
                                                    <span class="btn btn-sm btn-success"> <i class="mdi mdi-debug-step-into"></i> credit </span>
                                                </td>
                                                <td>
                                                    <span class="text-danger"> <i class="mdi mdi-close"></i> feild </span>
                                                </td>
                                            </tr>
                                    </tbody>

                                    <tbody>

                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                27.05.2023
                                            </td>

                                            <td>$56564</td>
                                            
                                            <td>vsdv6vds</td>
                                            
                                            <td>1</td>
                                            
                                            <td>
                                                <span class="btn btn-sm btn-danger"> <i class="mdi mdi-debug-step-out"></i> debit </span>
                                            </td>
                                            <td>
                                                <span class="text-success"> <i class="mdi mdi-check-all"></i> successfully </span>
                                            </td>
                                        </tr>
                                </tbody>

                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    


<!-- add -->
<div class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <form method="POST" action="">
            @csrf
            <input type="hidden" value="" name="bank_account_id" />

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Bank Transaction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                
                    <div class="form-group">
                        <label for="transactionCodeInput">Transaction Code</label>
                        <input type="text" class="form-control" id="transactionCodeInput" aria-describedby="transactionCodeInputHelp" name="transaction_code" required />
                        <small id="transactionCodeInputHelp" class="form-text text-muted"><b>NB:</b> Must Important Part Of Every Transaction</small>
                    </div>

                    <div class="form-group">
                        <label for="transactionNarrationInput">Narration</label>
                        <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="narration" required />
                        <small id="transactionNarrationInputHelp" class="form-text text-muted"><b>NB:</b> Narration For Transaction should be added to make the transaction legit. Describe the Transaction</small>
                    </div>

                    <div class="form-group">
                        <label for="transactionAmountInput">Amount</label>
                        <input type="number" class="form-control" id="transactionAmountInput" aria-describedby="transactionAmountInputHelp" name="amount" required />
                    </div>

                    <div class="form-group">
                        <label for="transactionDateInput">Transaction Date</label>
                        <input type="date" class="form-control" id="transactionDateInput" aria-describedby="transactionDateInputHelp" name="date" required />
                    </div>


                    <label for="transactionAmountInput">Transaction Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="debit" >
                        <label class="form-check-label" for="exampleRadios1">
                            Debit
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="credit" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            Credit
                        </label>
                    </div>

                    <p class="mt-4">Charge Transaction From</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="balance" id="chargeRadios1" value="ledger_balance" checked>
                        <label class="form-check-label" for="chargeRadios1">
                            Ledger Balance
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="balance" id="chargeRadios2" value="available_balance">
                        <label class="form-check-label" for="chargeRadios2">
                            Available Balance
                        </label>
                    </div>

                    <p class="mt-4">Transaction Status</p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="statusRadios3" value="successful" checked>
                        <label class="form-check-label" for="statusRadios3">
                            Successful
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="statusRadios1" value="pending">
                        <label class="form-check-label" for="statusRadios1">
                            Pending
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="statusRadios2" value="failed">
                        <label class="form-check-label" for="statusRadios2">
                            Failed
                        </label>
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
