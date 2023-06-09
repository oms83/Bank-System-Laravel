@extends('layouts.master')

@section('title', 'Currencies')

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
                                        Currencies     
                                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addCurrencyModal">Add Currency</button>
                                    </h4>
                                    <pre></pre>
                                
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Symbol</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($currencies as $currency)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $currency->name }}</td>
                                                        <td class="text-uppercase">{{ $currency->symbol }}</td>
                                                        <td>
                                                            @if( !empty($currency->created_at) )
                                                                {{ $currency->created_at->diffForHumans() }}
                                                            @else
                                                                --/--/----
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-xs btn-info edit-currency" value="{{ $loop->index }}"> <i class="fa fa-edit"></i> </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                                @if(count($currencies) == 0)
                                                    <tr>
                                                        <td colspan="5" class="span4 text-center text-muted"> No Currency Found</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="float-right">
                                            {{ $currencies->links() }}
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
     




<!-- Add Currency Modal -->
<div class="modal fade" id="addCurrencyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('save_currency') }}" method="POST" >
            
            @csrf

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Currency</h5>
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
                        <label>Symbol</label>
                    <input type="text" class="form-control" name="symbol" value="{{ old('symbol') }}" required />
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

<!-- Edit User Modal -->
<div class="modal fade" id="editCurrencyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
    
            <form action="" method="POST" id="editCurrency">
        
                @csrf
    
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Currency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required id="update_name"/>
                    </div>
                    <div class="form-group">
                            <label>Symbol</label>
                        <input type="text" class="form-control" name="symbol" value="{{ old('symbol') }}" required id="update_symbol" />
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


var currencies = {!! json_encode($currencies->toArray(), JSON_HEX_TAG) !!};


$(".edit-currency").click(function(){


    var position = $(this).val();
    $("#editCurrencyModal").modal('toggle');

    var updateRoute = route('edit_currency', currencies['data'][position]['id'] );
    $('#editCurrency').attr('action', ''+updateRoute+'');


    $("#update_name").val(currencies['data'][position].name);
    $("#update_symbol").val(currencies['data'][position].symbol);
 
});


</script>

@endsection
