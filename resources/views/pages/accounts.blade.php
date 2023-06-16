@extends('layouts.master')

@section('title', 'Bank Accounts')

@section('content')

<div class="row">
    <div class="col-md-12 h6">
        Accounts

        @can('add-account')
            <button type="button" data-toggle="modal" data-target="#addBankAccountModal" class="btn btn-primary float-right"> Add Bank Account </button>
        @endcan
    </div>

    <div class="col-md-12">
        <div class="row">
            @foreach ($bankAccounts as $bankAccount)

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="border-radius:10px !important">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div>Bank Name.</div>
                                    <div class="h6">{{ $bankAccount->bank->name }} {{ $bankAccount->bank_location->name }}</div>

                                    <br/>

                                    <div>Account Name.</div>
                                    <div class="h6">{{ $bankAccount->number }}</div>

                                    <div>Account No.</div>
                                    <div class="h6">{{ $bankAccount->name }}</div>

                                </div>
                                <div class="col-sm-12 col-md-5 text-right">
                                    @if(!empty($bankAccount->bank->picture))
                                        <img src="{{ $bankAccount->bank->picture }}" alt="{{ $bankAccount->bank->name }}" class="rounded-circle" width="50" height="50">
                                    @endif

                                    <br/>
                                    <br/>

                                    <div>Ledger Balance.</div>
                                    <div class="h6 text-muted">{{ $bankAccount->bank_location->currency->symbol }} {{ $bankAccount->ledger_balance }}</div>

                                    <div>Available Balance.</div>
                                    <div class="h6">{{ $bankAccount->bank_location->currency->symbol }} {{ $bankAccount->available_balance }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="progress" style="height: 3px;">
                            @if(!empty($bankAccount->deleted_at))
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            @else
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            @endif
                        </div>
                        <div class="card-footer text-right">

                            <div class="btn-group" role="group" aria-label="Basic example">
                                @can('edit-account')
                                    <button type="button" value="{{ $loop->iteration-1 }}" class="edit-bank-account btn btn-xs btn-info"> <i class="fa fa-edit"></i> Edit </button>
                                @endcan

                                @if(!empty($bankAccount->deleted_at))

                                    @can('restore-account')
                                        <a href="{{ route('restore_account', $bankAccount->id ) }}" class="btn btn-xs btn-secondary text-white"> <i class="fa fa-trash"></i> Restore </a>
                                    @endcan

                                @else

                                    @can('delete-account')
                                        <a href="{{ route('delete_account', $bankAccount->id ) }}" class="btn btn-xs btn-danger text-white"> <i class="fa fa-trash"></i> Delete </a>
                                    @endcan

                                @endif


                            </div>

                            <a href="{{ route('account_history',$bankAccount->id) }}" class="btn btn-xs btn-primary"><i class="mdi mdi-cards"></i> Transactions </a>

                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        <div class="float-right">
            {{ $bankAccounts->links() }}
        </div>
    </div>
</div>



@can('add-account')

{{-- Add The Model for the transaction adding --}}

<!-- Modal -->
<div class="modal fade" id="addBankAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <form method="POST" action="{{ route('account') }}">
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
                        <input type="text" class="form-control" id="transactionCodeInput" aria-describedby="transactionCodeInputHelp" name="name" required value="{{ old('name') }}" />
                    </div>

                    <div class="form-group">
                        <label for="transactionNarrationInput">Account Number</label>
                        <input type="text" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="number" required value="{{ old('number') }}" />
                    </div>

                    <div class="form-group">
                        <label>Available Balance</label>
                        <input type="number" class="form-control" name="available_balance" required value="{{ old('available_balance') }}" />
                    </div>

                    <div class="form-group">
                        <label>Ledger Balance</label>
                        <input type="number" class="form-control" name="ledger_balance" required value="{{ old('ledger_balance') }}" />
                    </div>

                    <div class="form-group">
                        <label for="usersFormControlSelect">User</label>
                        <select class="form-control" id="usersControlSelect" name="user_id">

                            @foreach($users as $user)
                                <option value="{{ $user->id }}"> {{ $user->first_name }} [{{ $user->description }}] </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="usersFormControlSelect">Bank Name</label>
                        <select class="form-control" id="banksControlSelect" name="bank_id">

                            @foreach($banks as $bank)
                                <option value="{{ $bank->id }}"> {{ $bank->name }} </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="usersFormControlSelect">Bank Branch Location</label>
                        <select class="form-control" id="bankLocationsControlSelect" name="bank_location_id">

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

@endcan


@can('edit-account')

{{-- Edit Bank Account --}}

<!-- Modal -->
<div class="modal fade" id="editBankAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <form method="POST" action="" id="updateBankAccount">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Bank Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">

                    <div class="form-group">
                        <label for="transactionCodeInput">Account Name</label>
                        <input type="text" id="ed_account_name" class="form-control" id="transactionCodeInput" aria-describedby="transactionCodeInputHelp" name="name" required value="{{ old('name') }}" />
                    </div>

                    <div class="form-group">
                        <label for="transactionNarrationInput">Account Number</label>
                        <input type="text" id="ed_account_number" class="form-control" id="transactionNarrationInput" aria-describedby="transactionNarrationInputHelp" name="number" required value="{{ old('number') }}" />
                    </div>

                    <div class="form-group">
                        <label>Available Balance</label>
                        <input type="number" id="ed_available_balance" class="form-control" name="available_balance" required value="{{ old('available_balance') }}" />
                    </div>

                    <div class="form-group">
                        <label>Ledger Balance</label>
                        <input type="number" id="ed_ledger_balance" class="form-control" name="ledger_balance" required value="{{ old('ledger_balance') }}" />
                    </div>

                    <div class="form-group">
                        <label for="usersFormControlSelect">Bank Name</label>
                        <select class="form-control" id="banksControlSelect1" name="bank_id">

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="usersFormControlSelect">Bank Branch Location</label>
                        <select class="form-control" id="bankLocationsControlSelect1" name="bank_location_id">

                        </select>
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

        var bankAccounts = {!! json_encode($bankAccounts->toArray(), JSON_HEX_TAG) !!};
        var banks = {!! json_encode($banks->toArray(), JSON_HEX_TAG) !!};
        var selectedBankAccount;

        //alert(banks[0]['location']);
        //$("#bankLocationsControlSelect").html();
        populateBankLocations(0);

        $("#banksControlSelect").change(function(){
            var selectedIndex = $("#banksControlSelect option:selected").index();
            populateBankLocations(selectedIndex)
        });


        function populateBankLocations(bank_id){

            $('#bankLocationsControlSelect').html('');

            $.each(banks[bank_id]['location'], function (index, value) {
                $('#bankLocationsControlSelect').append('<option value="' + banks[bank_id]['location'][index]['id'] + '">' + banks[bank_id]['location'][index]['name'] + '</option>');
            });

        }






        $(".edit-bank-account").click(function(){

            var position = $(this).val();
            var selectBankLocationPostion = 0;
            selectedBankAccount = bankAccounts['data'][position];

            var updateRoute = route('update_account', selectedBankAccount['id'] );
            $('#updateBankAccount').attr('action', ''+updateRoute+'');

            $("#ed_account_name").val(selectedBankAccount['name']);
            $("#ed_account_number").val(selectedBankAccount['number']);
            $("#ed_available_balance").val(selectedBankAccount['available_balance']);
            $("#ed_ledger_balance").val(selectedBankAccount['ledger_balance']);

            $('#banksControlSelect1').html('');
            $.each(banks, function (index, value) {

                if( banks[index]['id'] != selectedBankAccount['bank_id'] ){
                    $('#banksControlSelect1').append('<option value="' + banks[index]['id'] + '">' + banks[index]['name'] + '</option>');
                }else{
                    $('#banksControlSelect1').append('<option value="' + banks[index]['id'] + '" selected >' + banks[index]['name'] + '</option>');
                    selectBankLocationPostion = index;
                }

            });


            $.each(banks[selectBankLocationPostion]['location'], function (index, value) {

                if( banks[selectBankLocationPostion]['location'][index]['id'] != selectedBankAccount['bank_location_id'] ){
                    $('#bankLocationsControlSelect1').append('<option value="' + banks[selectBankLocationPostion]['location'][index]['id'] + '">' + banks[selectBankLocationPostion]['location'][index]['name'] + '</option>');
                }else{
                    $('#bankLocationsControlSelect1').append('<option value="' + banks[selectBankLocationPostion]['location'][index]['id'] + '" selected >' + banks[selectBankLocationPostion]['location'][index]['name'] + '</option>');
                }

            });



            $('#editBankAccountModal').modal('toggle')

        });




        $("#banksControlSelect1").change(function(){
            var selectedIndex = $("#banksControlSelect1 option:selected").index();
            populateUpdateAccountBankLocations(selectedIndex)
        });


        function populateUpdateAccountBankLocations( bank_id ){

            $('#bankLocationsControlSelect1').html('');

            $.each(banks[bank_id]['location'], function (index, value) {
                $('#bankLocationsControlSelect1').append('<option value="' + banks[bank_id]['location'][index]['id'] + '">' + banks[bank_id]['location'][index]['name'] + '</option>');
            });

        }


    });


</script>
@routes

@endsection
