@extends('layouts.master')

@section('title', 'Banks')

@section('content')

<div class="row">              
    <div class="col-md-12 h6">
        
    </div>      
    <div class="col-md-12">

        <div class="row"> 
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card" style="border-radius:10px !important">
                    {{-- Transaction Table --}}
                    
                    <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">
                                        Bank Locations
                                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addBankLocationModal">Add Bank Location</button>
                                    </h4>
                                    <pre></pre>
                                
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Bank</th>
                                                    <th scope="col">Currency</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($bankLocations as $bankLocation)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $bankLocation->name }}</td>
                                                        <td>{{ $bankLocation->bank->name }}</td>
                                                        <td>{{ $bankLocation->currency->name }}</td>
                                                        <td>
                                                            @if( !empty($bankLocation->created_at) )
                                                                {{ $bankLocation->created_at->diffForHumans() }}
                                                            @else
                                                                --/--/----
                                                            @endif
                                                        </td>
                                                        <td>

                                                            @can('edit-bank-location')
                                                                <button type="button" class="btn btn-xs btn-info edit-bank-location" value="{{ $loop->index }}"> <i class="fa fa-edit"></i> </button>
                                                            @endcan
                                                            
                                                            @if( empty($bankLocation->deleted_at) )
                                                                @can('delete-bank-location')
                                                                    <a href="{{ route('delete_bank_location', $bankLocation->id ) }}" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
                                                                @endcan
                                                            @else
                                                                @can('restore-bank-location')
                                                                    <a href="{{ route('restore_bank_location', $bankLocation->id ) }}" class="btn btn-xs btn-primary"> <i class="fa fa-undo"></i> </a>
                                                                @endcan
                                                            @endif

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                                @if(count($bankLocations) == 0)
                                                    <tr>
                                                        <td colspan="5" class="span4 text-center text-muted"> No Bank Location Found</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="float-right">
                                            {{ $bankLocations->links() }}
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
     




<!-- Add Bank Modal -->
<div class="modal fade" id="addBankLocationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('save_bank_location') }}" method="POST" >
            
            @csrf
            <input type="hidden" value="{{ $bank->id }}" name="bank_id" />

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Bank Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
                </div>
                <div class="form-group">
                    <label>Currency</label>
                    <select class="form-control" name="currency_id">

                        @foreach ( $currencies as $currency )
                            <option value="{{ $currency->id }}">{{ $currency->name }} ({{ $currency->symbol }}) </option>    
                        @endforeach
                        
                    </select>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </form>

    </div>
</div>

<!-- Edit Bank Modal -->
<div class="modal fade" id="editBankLocationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
    
            <form action="" method="POST" id="editBankLocation" >
        
                @csrf
    
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Card Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required id="update_name" />
                    </div>
                    <div class="form-group">
                        <label>Currency</label>
                        <select class="form-control" name="currency_id" id="update_currency">
                        </select>
                    </div>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </div>
            </form>
    
        </div>
    </div>
@endsection

@section('custom-script')

<script>


var bankLocations = {!! json_encode($bankLocations->toArray(), JSON_HEX_TAG) !!};
var currencies = {!! json_encode($currencies->toArray(), JSON_HEX_TAG) !!};


$(".edit-bank-location").click(function(){


    var position = $(this).val();
    $("#editBankLocationModal").modal('toggle');

    var updateRoute = route('edit_bank_location', bankLocations['data'][position]['id'] );
    $('#editBankLocation').attr('action', ''+updateRoute+'');


    $("#update_name").val(bankLocations['data'][position].name);

    $('#update_currency').html('');
    $.each(bankLocations['data'], function (index, value) {

        if( currencies[index]['id'] == bankLocations['data'][position]['currency_id'] ){
            $('#update_currency').append('<option value="' + currencies[index]['id'] + '" selected >' + currencies[index]['name'] + '</option>');
        }else{
            $('#update_currency').append('<option value="' + currencies[index]['id'] + '">' + currencies[index]['name'] + '</option>');
        }

    });
    ///$("#update_currency").val(banks['data'][position].code);
 
});


</script>

@endsection