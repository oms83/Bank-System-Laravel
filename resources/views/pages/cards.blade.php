@extends('layouts.master')

@section('title', 'Credit Cards')


@section('custom-style')

<style>

    .flip-container {
        perspective: 1000px;
    }

    .flip-container:hover .flipper, .flip-container.hover .flipper {
        transform: rotateY(180deg);
    }

    .flip-container, .front, .back {
        width: 100%;
        height: 300px;
    }

    .flipper {
        transition: 0.6s;
        transform-style: preserve-3d;

        position: relative;
    }

    .front, .back {
        backface-visibility: hidden;

        position: absolute;
        top: 0;
        left: 0;
    }

    .front {
        z-index: 2;
        transform: rotateY(0deg);

    }

    .back {
        transform: rotateY(180deg);
    }


    .bg-card{
        background: #4CA1AF;  
        background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);  
        background: linear-gradient(to right, #C4E0E5, #4CA1AF); 
    }

    .bg-card-mastercard{
        background: #f46b45;  
        background: -webkit-linear-gradient(to right, #eea849, #f46b45); 
        background: linear-gradient(to right, #eea849, #f46b45); 
        color: white;
    }

    .bg-card-visa{
        background: #1e3c72;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color: white;
    }

</style>

@endsection

@section('content')

<div class="row">
    <div class="col-md-12 h6">
        Cards
            <button type="button" data-toggle="modal" data-target="#addCardModal" class="btn btn-primary float-right"> Add Card </button>
    </div>


    <div class="col-md-12">
        <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">

                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <!-- front content -->
                                <div class="card bg-card-mastercard" style="border-radius:10px !important">
                                    <div class="card-body">
                                        {{-- Card Balance --}}
                                        <div class="text-right h5 mt-2"> $5000 $18092</div>
                                        {{-- Card Number Part --}}
                                        <div class="text-center h5 m-4 mt-5" style="letter-spacing: 5px;"> 646546644654 </div>
                                        <div class="m-4 mt-5 mb-2">
                                            {{-- Bottom Part of the card --}}
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <p class="font-weight-lighter align-middle small">VALID<br/>TILL</p>
                                                        </div>
                                                        <div class="col-10 font-weight-bold">
                                                            07/28
                                                        </div>
                                                    </div>
                                                    <p class="h5" style="letter-spacing: 5px;">Omer MEMES</p>
                                                </div>
                                                <div class="col-2">
                                                    <img src="https://1000logos.net/wp-content/uploads/2017/03/Mastercard-logo-640x360.png" class="img-thumbnail" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="back">

                                <!-- back content -->

                                <div class="card bg-card-mastercard" style="border-radius:10px !important">
                                    <div class="card-body">
                                        {{-- Card Balance --}}
                                        <div class="text-right h5 mt-2"> &nbsp; </div>
                                        {{-- Card Number Part --}}
                                        <div class="m-4 mt-2">
                                            <p class="text-right text-white small mr-4">CVV</p>
                                            <div class="card rounded p-2">
                                                <div class="row">
                                                    <div class="text-muted col-10"> MasterCard </div>
                                                    <div class="text-dark font-weight-bold col-2"> 737 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-4 mt-5 mb-2">
                                            {{-- Bottom Part of the card --}}
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <p class="font-weight-lighter align-middle small"> &nbsp; </p>
                                                        </div>
                                                        <div class="col-10 font-weight-bold">
                                                                &nbsp;
                                                        </div>
                                                    </div>
                                                    <p class="h5" style="letter-spacing: 5px;"> &nbsp; </p>
                                                </div>
                                                <div class="col-2">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" value="#" class="edit-card btn btn-xs btn-info"> <i class="fa fa-edit"></i> Edit </button>
                                <a href="#" class="btn btn-xs btn-secondary text-white"> <i class="fa fa-trash"></i> Restore </a>
                                <a href="#" class="btn btn-xs btn-danger text-white"> <i class="fa fa-trash"></i> Delete </a>
                        </div>
                        <a href="#" class="btn btn-sm btn-primary rounded">Transactions</a>
                    </div>
                </div>
        </div>
    </div>
</div>
<!--Add-->
<div class="modal fade" id="addCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <form method="POST" action="">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">




                    {{-- Card Name and Number --}}
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="transactionCodeInput">Card Owner's Name</label>
                                <input type="text" class="form-control" id="transactionCodeInput" aria-describedby="transactionCodeInputHelp" name="name" required value="" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="transactionNarrationInput">Card Number</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="number" required value="" />
                            </div>
                        </div>

                    </div>

                    {{-- Card expiry month,year, cvv and zip code --}}
                    <div class="row">

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">Month</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="month" required value="" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">Year</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="year" required value="" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">CVV</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="cvv" required value="" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">Zip Code</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="zip_code" required value="" />
                            </div>
                        </div>

                    </div>

                    {{-- Card Billing Address --}}
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Billing Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="billing_address"></textarea>
                    </div>

                    {{-- Card Balance --}}
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Available Balance</label>
                                <input type="number" class="form-control" name="available_balance" required value="6353" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Ledger Balance</label>
                                <input type="number" class="form-control" name="ledger_balance" required value="222" />
                            </div>
                        </div>

                    </div>


                    {{-- Card Type and Currncies --}}
                    <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">Card Type</label>
                                    <select class="form-control" id="cardsControlSelect" name="card_type_id">

                                        <option value="1"> master card </option>
                                        <option value="1"> paypal card </option>
                                        <option value="1"> vize card </option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">Card Currency</label>
                                    <select class="form-control" id="currenciesControlSelect" name="currency_id">

                                            <option value="1"> TL </option>
                                            <option value="2"> TL </option>
                                            <option value="4"> TL </option>

                                    </select>
                                </div>
                            </div>

                        </div>


                        {{-- User and Status --}}
                        <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="usersFormControlSelect">User</label>
                                        <select class="form-control" id="usersControlSelect" name="user_id">
                                            <option value="1"> Omer MEMES - Admin </option>
                                            <option value="2"> Ali MEMES - Customer </option>
                                            <option value="3"> Osman MEMES - Customer </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="usersFormControlSelect">Status</label>
                                        <select class="form-control" id="usersControlSelect" name="status">
                                            <option value="good"> Good </option>
                                            <option value="frozen"> Frozen </option>
                                            <option value="terminated"> Terminated </option>
                                        </select>
                                    </div>
                                </div>

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
