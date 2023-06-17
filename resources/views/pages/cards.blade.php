@extends('layouts.master')

@section('title', 'Credit Cards')


@section('custom-style')

<style>

            /* entire container, keeps perspective */
    .flip-container {
        perspective: 1000px;
    }

    /* flip the pane when hovered */
    .flip-container:hover .flipper, .flip-container.hover .flipper {
        transform: rotateY(180deg);
    }

    .flip-container, .front, .back {
        width: 100%;
        height: 300px;
    }

    /* flip speed goes here */
    .flipper {
        transition: 0.6s;
        transform-style: preserve-3d;

        position: relative;
    }

    /* hide back of pane during swap */
    .front, .back {
        backface-visibility: hidden;

        position: absolute;
        top: 0;
        left: 0;
    }

    /* front pane, placed above back */
    .front {
        z-index: 2;
        /* for firefox 31 */
        transform: rotateY(0deg);

    }

    /* back, initially hidden pane */
    .back {
        transform: rotateY(180deg);
    }


    .bg-card{
        background: #4CA1AF;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #C4E0E5, #4CA1AF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .bg-card-mastercard{
        background: #f46b45;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #eea849, #f46b45);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #eea849, #f46b45); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
        @can('add-card')
            <button type="button" data-toggle="modal" data-target="#addCardModal" class="btn btn-primary float-right"> Add Card </button>
        @endcan
    </div>


    <div class="col-md-12">
        <div class="row">
            @foreach ($cards as $card)

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">

                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <!-- front content -->
                                <div class="card {{ $card->card_type->style }}" style="border-radius:10px !important">
                                    <div class="card-body">
                                        {{-- Card Balance --}}
                                        <div class="text-right h5 mt-2"> {{ $card->currency->symbol." ".$card->available_balance }}</div>
                                        {{-- Card Number Part --}}
                                        <div class="text-center h5 m-4 mt-5" style="letter-spacing: 5px;"> {!! $card->formatednumber !!}</div>
                                        <div class="m-4 mt-5 mb-2">
                                            {{-- Bottom Part of the card --}}
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <p class="font-weight-lighter align-middle small">VALID<br/>TILL</p>
                                                        </div>
                                                        <div class="col-10 font-weight-bold">
                                                            {{ $card->month." / ".$card->year }}
                                                        </div>
                                                    </div>
                                                    <p class="h5" style="letter-spacing: 5px;">{{ strtoupper($card->name) }}</p>
                                                </div>
                                                <div class="col-2">
                                                    <img src="{{ $card->card_type->picture }}" class="img-thumbnail" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="back">

                                <!-- back content -->

                                <div class="card {{ $card->card_type->style }}" style="border-radius:10px !important">
                                    <div class="card-body">
                                        {{-- Card Balance --}}
                                        <div class="text-right h5 mt-2"> &nbsp; </div>
                                        {{-- Card Number Part --}}
                                        <div class="m-4 mt-2">
                                            <p class="text-right text-white small mr-4">CVV</p>
                                            <div class="card rounded p-2">
                                                <div class="row">
                                                    <div class="text-muted col-10"> {{ $card->card_type->name }} </div>
                                                    <div class="text-dark font-weight-bold col-2"> {{ $card->cvv }} </div>
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

                            @can('edit-card')
                                <button type="button" value="{{ $loop->iteration-1 }}" class="edit-card btn btn-xs btn-info"> <i class="fa fa-edit"></i> Edit </button>
                            @endcan

                            @if(!empty($card->deleted_at))

                                @can('restore-card')
                                    <a href="{{ route('restore_card', $card->id ) }}" class="btn btn-xs btn-secondary text-white"> <i class="fa fa-trash"></i> Restore </a>
                                @endcan

                            @else

                                @can('delete-card')
                                    <a href="{{ route('delete_card', $card->id ) }}" class="btn btn-xs btn-danger text-white"> <i class="fa fa-trash"></i> Delete </a>
                                @endcan

                            @endif


                        </div>

                        <a href="{{ route('card_transactions', $card->id) }}" class="btn btn-sm btn-primary rounded">Transactions</a>


                    </div>

                </div>

            @endforeach
        </div>
        <div class="float-right">
            {{ $cards->links() }}
        </div>
    </div>
</div>





@can('add-card')

{{-- Add The Model for the transaction adding --}}

<!-- Modal -->
<div class="modal fade" id="addCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <form method="POST" action="{{ route('card') }}">
            @csrf

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
                                <input type="text" class="form-control" id="transactionCodeInput" aria-describedby="transactionCodeInputHelp" name="name" required value="{{ old('name') }}" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="transactionNarrationInput">Card Number</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="number" required value="{{ old('number') }}" />
                            </div>
                        </div>

                    </div>

                    {{-- Card expiry month,year, cvv and zip code --}}
                    <div class="row">

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">Month</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="month" required value="{{ old('month') }}" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">Year</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="year" required value="{{ old('year') }}" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">CVV</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="cvv" required value="{{ old('cvv') }}" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="usersFormControlSelect">Zip Code</label>
                                <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="zip_code" required value="{{ old('zip_code') }}" />
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
                                <input type="number" class="form-control" name="available_balance" required value="{{ old('available_balance') }}" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Ledger Balance</label>
                                <input type="number" class="form-control" name="ledger_balance" required value="{{ old('ledger_balance') }}" />
                            </div>
                        </div>

                    </div>


                    {{-- Card Type and Currncies --}}
                    <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">Card Type</label>
                                    <select class="form-control" id="cardsControlSelect" name="card_type_id">

                                        @foreach($cardTypes as $cardType)
                                            <option value="{{ $cardType->id }}"> {{ $cardType->name }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">Card Currency</label>
                                    <select class="form-control" id="currenciesControlSelect" name="currency_id">

                                        @foreach($currencies as $currency)
                                            <option value="{{ $currency->id }}"> {{ $currency->name }} </option>
                                        @endforeach

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

                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}"> {{ $user->first_name }} [{{ $user->description }}] </option>
                                            @endforeach

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

@endcan


@can('edit-card')

{{-- Edit Bank Account --}}

<!-- Modal -->
<div class="modal fade" id="editCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <form method="POST" id="updateCard">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Card</h5>
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
                                    <input type="text" class="form-control" id="ed_account_name" aria-describedby="transactionCodeInputHelp" name="name" required value="{{ old('name') }}" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="transactionNarrationInput">Card Number</label>
                                    <input type="text" class="form-control" id="ed_account_number" aria-describedby="transactionNarrationInputHelp" name="number" required value="{{ old('number') }}" />
                                </div>
                            </div>

                        </div>

                        {{-- Card expiry month,year, cvv and zip code --}}
                        <div class="row">

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">Month</label>
                                    <input type="text" class="form-control" id="ed_month" aria-describedby="transactionNarrationInputHelp" name="month" required value="{{ old('month') }}" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">Year</label>
                                    <input type="text" class="form-control" id="ed_year" aria-describedby="transactionNarrationInputHelp" name="year" required value="{{ old('year') }}" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">CVV</label>
                                    <input type="text" class="form-control" id="ed_cvv" aria-describedby="transactionNarrationInputHelp" name="cvv" required value="{{ old('cvv') }}" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="usersFormControlSelect">Zip Code</label>
                                    <input type="text" class="form-control" id="ed_zip_code" aria-describedby="transactionNarrationInputHelp" name="zip_code" required value="{{ old('zip_code') }}" />
                                </div>
                            </div>

                        </div>

                        {{-- Card Billing Address --}}
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Billing Address</label>
                            <textarea class="form-control" id="ed_billing_address" rows="3" name="billing_address"></textarea>
                        </div>

                        {{-- Card Balance --}}
                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Available Balance</label>
                                    <input type="number" class="form-control" id="ed_available_balance" name="available_balance" required value="{{ old('available_balance') }}" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Ledger Balance</label>
                                    <input type="number" class="form-control" id="ed_ledger_balance" name="ledger_balance" required value="{{ old('ledger_balance') }}" />
                                </div>
                            </div>

                        </div>


                        {{-- Card Type and Currncies --}}
                        <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="usersFormControlSelect">Card Type</label>
                                        <select class="form-control" id="ed_cardTypesControlSelect" name="card_type_id">



                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="usersFormControlSelect">Card Currency</label>
                                        <select class="form-control" id="ed_currenciesControlSelect" name="currency_id">

                                        </select>
                                    </div>
                                </div>

                            </div>


                            {{-- User and Status --}}
                            <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="usersFormControlSelect">Status</label>
                                            <select class="form-control" id="ed_StatusControlSelect" name="status">
                                            </select>
                                        </div>
                                    </div>

                                </div>





                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Update </button>
                </div>
            </div>

        </form>

    </div>
</div>

@endcan

@endsection

@section('custom-script')

<script>

        $( document ).ready(function() {

            var cards = {!! json_encode($cards->toArray(), JSON_HEX_TAG) !!};
            var cardTypes = {!! json_encode($cardTypes->toArray(), JSON_HEX_TAG) !!};
            var currencies = {!! json_encode($currencies->toArray(), JSON_HEX_TAG) !!};
            var selectedCard;





            $(".edit-card").click(function(){

                var position = $(this).val();
                selectedCard = cards['data'][position];

                var updateRoute = route('update_card', selectedCard['id'] );
                $('#updateCard').attr('action', ''+updateRoute+'');

                $("#ed_account_name").val(selectedCard['name']);
                $("#ed_account_number").val(selectedCard['number']);
                $("#ed_available_balance").val(selectedCard['available_balance']);
                $("#ed_ledger_balance").val(selectedCard['ledger_balance']);

                $("#ed_month").val(selectedCard['month']);
                $("#ed_year").val(selectedCard['year']);
                $("#ed_cvv").val(selectedCard['cvv']);
                $("#ed_zip_code").val(selectedCard['zip_code']);

                $("#ed_billing_address").val(selectedCard['billing_address']);

                $("#ed_available_balance").val(selectedCard['available_balance']);
                $("#ed_ledger_balance").val(selectedCard['ledger_balance']);




                $('#ed_cardTypesControlSelect').html('');
                $.each(cardTypes, function (index, value) {

                    if( cardTypes[index]['id'] != selectedCard['card_type_id'] ){
                        $('#ed_cardTypesControlSelect').append('<option value="' + cardTypes[index]['id'] + '">' + cardTypes[index]['name'] + '</option>');
                    }else{
                        $('#ed_cardTypesControlSelect').append('<option value="' + cardTypes[index]['id'] + '" selected >' + cardTypes[index]['name'] + '</option>');
                    }

                });


                $('#ed_currenciesControlSelect').html('');
                $.each(currencies, function (index, value) {

                    if( currencies[index]['id'] != selectedCard['currency_id'] ){
                        $('#ed_currenciesControlSelect').append('<option value="' + currencies[index]['id'] + '">' + currencies[index]['name'] + '</option>');
                    }else{
                        $('#ed_currenciesControlSelect').append('<option value="' + currencies[index]['id'] + '" selected >' + currencies[index]['name'] + '</option>');
                    }

                });


                var cardStatus = ['good','frozen','terminated'];
                $.each(cardStatus, function (index, value) {

                    var status = cardStatus[index];
                    var capitalizedStatus = status.charAt(0).toUpperCase() + status.substr(1).toLowerCase();

                    if( status != selectedCard['status'] ){
                        $('#ed_StatusControlSelect').append('<option value="' + status + '">' + capitalizedStatus + '</option>');
                    }else{
                        $('#ed_StatusControlSelect').append('<option value="' + status + '" selected >' + capitalizedStatus + '</option>');
                    }

                });

                $('#editCardModal').modal('toggle')

            });







        });


    </script>
@routes

@endsection
