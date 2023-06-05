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
                                        Banks
                                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addBankModal">Add Bank</button>
                                    </h4>
                                    <pre></pre>

                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Picture</th>
                                                    <th scope="col">Code</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($banks as $bank)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $bank->name }}</td>
                                                        <td>
                                                            @if($bank->picture)
                                                                <img src="{{ $bank->picture }}" alt="{{ $bank->name }}" class="rounded-circle" width="50" />
                                                            @endif
                                                        </td>
                                                        <td>{{ $bank->code }}</td>
                                                        <td>
                                                            @if( !empty($bank->created_at) )
                                                                {{ $bank->created_at->diffForHumans() }}
                                                            @else
                                                                --/--/----
                                                            @endif
                                                        </td>
                                                        <td>

                                                            @can('edit-bank')
                                                                <button type="button" class="btn btn-xs btn-info edit-bank" value="{{ $loop->index }}"> <i class="fa fa-edit"></i> </button>
                                                            @endcan

                                                            @if( empty($bank->deleted_at) )
                                                                @can('delete-bank')
                                                                    <a href="{{ route('delete_bank', $bank->id ) }}" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
                                                                @endcan
                                                            @else
                                                                @can('restore-bank')
                                                                    <a href="{{ route('restore_bank', $bank->id ) }}" class="btn btn-xs btn-primary"> <i class="fa fa-undo"></i> </a>
                                                                @endcan
                                                            @endif

                                                            @can('list-bank-locations')
                                                                <a href="{{ route('bank_locations', $bank->id ) }}" class="btn btn-xs btn-primary"> <i class="fa fa-eye"></i> Locations</a>
                                                            @endcan

                                                        </td>
                                                    </tr>
                                                @endforeach

                                                @if(count($banks) == 0)
                                                    <tr>
                                                        <td colspan="5" class="span4 text-center text-muted"> No Bank Found</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="float-right">
                                            {{ $banks->links() }}
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
<div class="modal fade" id="addBankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('save_bank') }}" method="POST" enctype="multipart/form-data" >

            @csrf

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Bank</h5>
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
                        <label>Code</label>
                    <input type="text" class="form-control" name="code" value="{{ old('code') }}" required />
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

<!-- Edit Bank Modal -->
<div class="modal fade" id="editBankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form action="" method="POST" id="editBank" enctype="multipart/form-data">

                @csrf

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Bank</h5>
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
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" value="{{ old('code') }}" required id="update_code" />
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


var banks = {!! json_encode($banks->toArray(), JSON_HEX_TAG) !!};


$(".edit-bank").click(function(){


    var position = $(this).val();
    $("#editBankModal").modal('toggle');

    var updateRoute = route('edit_bank', banks['data'][position]['id'] );
    $('#editBank').attr('action', ''+updateRoute+'');


    $("#update_name").val(banks['data'][position].name);
    $("#update_code").val(banks['data'][position].code);

});


</script>

@endsection
