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

                                                    <tr>
                                                        <td>1</td>
                                                        <td>ziraat bankasi</td>
                                                        <td>
                                                                <img src="https://www.ziraatbank.com.tr/SiteAssets/images/fb-logo.jpg" alt="ziraat_name" class="rounded-circle" width="50" />
                                                        </td>
                                                        <td>TRZB</td>
                                                        <td>
                                                                31/05/2023
                                                        </td>
                                                        <td>
                                                                    <button type="button" class="btn btn-xs btn-info edit-bank" value="1"> <i class="fa fa-edit"></i> </button>
                                                                    <a href="#" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
                                                                    <a href="#" class="btn btn-xs btn-primary"> <i class="fa fa-undo"></i> </a>
                                                                    <a href="#" class="btn btn-xs btn-primary"> <i class="fa fa-eye"></i> Locations</a>
                                                        </td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <td colspan="5" class="span4 text-center text-muted"> No Bank Found</td>
                                                    </tr> --}}
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





<!-- Add Bank Modal -->
<div class="modal fade" id="addBankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="" method="POST" enctype="multipart/form-data" >

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
                    <input type="text" class="form-control" name="name" value="Ziraat Bankasi" required />
                </div>
                <div class="form-group">
                        <label>Code</label>
                    <input type="text" class="form-control" name="code" value="TRZB" required />
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
                        <input type="text" class="form-control" name="name" value="Ziraat Bankasi" required id="update_name"/>
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" value="TRZB" required id="update_code" />
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
