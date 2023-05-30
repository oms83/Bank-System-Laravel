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

                                                    <tr>
                                                        <td>1</td>
                                                        <td>master Card</td>
                                                        <td> <img src="https://www.mastercard.com/content/dam/public/brandcenter/assets/images/logos/mclogo-for-footer.svg" alt="master-card" class="rounded-circle" width="50" /> </td>
                                                        <td>master-card</td>
                                                        <td>
                                                            30/05/2023
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-xs btn-info edit-card-type" value="1"> <i class="fa fa-edit"></i> </button>
                                                        </td>
                                                    </tr>

                                                    {{-- <tr>
                                                        <td colspan="5" class="span4 text-center text-muted"> No Card Type Found</td>
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
     
@endsection
