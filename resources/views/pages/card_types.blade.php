@extends('layouts.master')

@section('title', 'Card Types')

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
                                        Card Types     
                                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addCardTypeModal">Add Card Type</button>
                                    </h4>
                                    <pre></pre>
                                
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Picture</th>
                                                    <th scope="col">Style</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($cardTypes as $cardType)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $cardType->name }}</td>
                                                        <td> <img src="{{ $cardType->picture }}" alt="{{ $cardType->name }}" class="rounded-circle" width="50" /> </td>
                                                        <td>{{ $cardType->style }}</td>
                                                        <td>
                                                            @if( !empty($cardType->created_at) )
                                                                {{ $cardType->created_at->diffForHumans() }}
                                                            @else
                                                                --/--/----
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-xs btn-info edit-card-type" value="{{ $loop->index }}"> <i class="fa fa-edit"></i> </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                                @if(count($cardTypes) == 0)
                                                    <tr>
                                                        <td colspan="5" class="span4 text-center text-muted"> No Card Type Found</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="float-right">
                                            {{ $cardTypes->links() }}
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
     




<!-- Add CardTyp Modal -->
<div class="modal fade" id="addCardTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('save_card_type') }}" method="POST" enctype="multipart/form-data" >
            
            @csrf

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Card Type</h5>
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
                        <label>Style Class</label>
                    <input type="text" class="form-control" name="style" value="{{ old('style') }}" required />
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="newImageFile" name="picture" required accept="image/*">
                    <label class="custom-file-label" for="customFile">Choose Image</label>
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

<!-- Edit CardTyp Modal -->
<div class="modal fade" id="editCardTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
    
            <form action="" method="POST" id="editCardType" enctype="multipart/form-data">
        
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
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required id="update_name"/>
                    </div>
                    <div class="form-group">
                        <label>Style Class</label>
                        <input type="text" class="form-control" name="style" value="{{ old('style') }}" required id="update_style" />
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="newImageFile" name="picture" required accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
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


var cardTypes = {!! json_encode($cardTypes->toArray(), JSON_HEX_TAG) !!};


$(".edit-card-type").click(function(){


    var position = $(this).val();
    $("#editCardTypeModal").modal('toggle');

    var updateRoute = route('edit_card_type', cardTypes['data'][position]['id'] );
    $('#editCardType').attr('action', ''+updateRoute+'');


    $("#update_name").val(cardTypes['data'][position].name);
    $("#update_style").val(cardTypes['data'][position].style);
 
});


</script>

@endsection