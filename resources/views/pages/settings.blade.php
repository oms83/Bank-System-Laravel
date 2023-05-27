@extends('layouts.master')

@section('title', 'Account Settings')

@section('content')

<div class="row">    

    <form action="" method="post" class="col-md-12">
        @csrf

        <div class="col-md-12">
            <div class="row">

                    <div class="col-12 p-2">
                        <div class="card bg-gradient-danger">

                            <h6 class="m-3 pt-3">Notification Settings <button class="btn btn-primary float-right">Save</button> </h6>
                            <hr/>

                            {{-- SMS Settings --}}
                            <div class="row mt-4">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right">
                                    SMS Notification
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                                    <input type="checkbox" 
                                            name="sms_notification" 
                                            checked/>
                                </div>
                            </div>

                            {{-- Email Notification --}}
                            <div class="row mt-4">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right">
                                    Email Notification
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                                    <input type="checkbox" 
                                            name="email_notification" 
                                            checked
                                    />
                                </div>
                            </div>

                            {{-- Monthly Account Statement Alert --}}
                            <div class="row mt-4 mb-5">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right">
                                        Monthly Account Statement
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                                    <input type="checkbox" 
                                            name="monthly_notification" 
                                            checked
                                    />
                                </div>
                            </div>

                            <hr class="bg-light bg-gradient-danger">
                            <div class="m-4 text-muted">
                                <b>Note:</b>
                                <p>
                                    All SMS are charged on a fixed rate. SMS alert service helps you remain aware of your Bank and Credit Card account activities.<br/>
                                    e-Statements are delivered to your registered email address at no additional charges!. <br/>
                                    e-Statement delivered to your registered email address is encrypted with a unique password. You can access your e-Statement with the unique password.
                                </p>

                            </div>


                        </div>
                    </div>

            </div>
        </div>

    </form>
</div>

@endsection

@section('custom-script')
@endsection