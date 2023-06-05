@extends('layouts.master')

@section('title', 'Profile')


@section('custom-style')

<style>

.dot {
  height: 20px;
  width: 20px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}  
  
</style>

@endsection

@section('content')

<div class="row">    

    <div class="col-md-12">
        <div class="row">
            
            <div class="col-sm-12 col-md-6 col-lg-6 p-2">
                <div class="p-4 card">

                    <h6 class="mb-4 text-muted">Personal Details</h6>

                    <div class="row pl-4">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                First Name<br/>
                                <b>{{ $user->first_name }}</b>
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Last Name<br/>
                                <b>{{ $user->last_name }}</b>
                            </p>
                        </div>
                    </div>

                    <div class="row pl-4">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Username<br/>
                                <b>{{ $user->username }}</b>
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Status<br/>
                                @if( empty($user->deleted_at) )
                                    <i class="dot bg-success"> </i><b> &nbsp; &nbsp;Active</b>
                                @else
                                    <i class="dot bg-danger"> </i><b> &nbsp; &nbsp;De-activated</b>
                                @endif
                                
                            </p>
                        </div>
                    </div>

                    <div class="row pl-4">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Address<br/>
                                <b>{{ $user->address }}</b>
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Country<br/>
                                <b>{{ $user->country->name }}</b>
                            </p>
                        </div>
                    </div>




                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 p-2">
                <div class="p-4 card">

                    <h6 class="mb-4 text-muted">Contact Details</h6>

                    <div class="row pl-4">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Contact Phone<br/>
                                <b>{{ $user->phone_number }}</b>
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Email Address<br/>
                                <b>{{ $user->email }}</b>
                            </p>
                        </div>
                    </div>

                    <div class="row pl-4">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>
                                Alternative Email Address<br/>
                                <b>{{ $user->alt_email }}</b>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
     



@endsection

@section('custom-script')

<script>


</script>

@endsection