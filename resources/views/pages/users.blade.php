@extends('layouts.master')

@section('title', 'Users')

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
                                        Users
                                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addUserModal">Add User</button>
                                    </h4>

                                    <h6 class="card-subtitle">All Users In The System Would Appear Here</h6>
                                    <pre></pre>

                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Profile</th>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Roles</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            @if( !empty( $user->profile ) )
                                                                <img src="{{ $user->profile }}" alt="user" class="rounded-circle" width="31">
                                                            @else
                                                                <img src="{{ url('') }}/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                                                            @endif
                                                        </td>
                                                        <td>{{ $user->first_name ,$user->last_name }}</td>
                                                        <td class="text-uppercase">{{ $user->username }}</td>
                                                        <td class="text-capitalize">{{ $user->country->name }}</td>
                                                        <td class="user-roles-{{ $user->id }} text-capitalize">
                                                            @foreach ($user->getRoleNames() as $role)
                                                                {{ $role }}
                                                                @if( !$loop->first && !$loop->last )
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td class="text-capitalize">
                                                            @if( empty($user->deleted_at) )
                                                                Active
                                                            @else
                                                                De-Activated
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if( !empty($user->created_at) )
                                                                {{ $user->created_at->diffForHumans() }}
                                                            @else
                                                                --/--/----
                                                            @endif
                                                        </td>
                                                        <td>

                                                            <button type="button" class="btn btn-xs btn-primary viewMoreModal" data-toggle="modal" data-target="#moreModal" value="{{ $user }}">
                                                                    <i class="fa fa-eye"></i> View
                                                            </button>

                                                            @if( Auth::id() != $user->id )

                                                                @if( empty($user->deleted_at) )
                                                                        <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                                @else
                                                                        <a href="" class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>
                                                                @endif

                                                                    <button type="button" class="btn btn-xs btn-info editUserModal" data-toggle="modal" data-target="#editUserModal" value="{{ $user }}"> <i class="fa fa-edit"></i> </button>

                                                            @else
                                                                <button type="button" class="btn btn-xs btn-info" >Current User</button>
                                                            @endif


                                                                <button type="button" class="btn btn-xs btn-secondary changePasswordUserModal" data-toggle="modal" data-target="#changePasswordUserModal" value="{{ $user->id }}"> <i class="fa fa-key"></i> </button>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @if(count($users) == 0)
                                                    <tr>
                                                        <td colspan="10" class="span4 text-center text-muted"> No User Found</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="float-right">
                                            {{ $users->links() }}
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- View More Info Modal -->
<div class="modal fade" id="moreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> User Profile </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            {{-- Name Section --}}
            <div class="row m-4">
                <div class="col-4">First Name
                    <div class="font-weight-bold" id="view-more-first-name"></div>
                </div>
                <div class="col-4">Last Name
                    <div class="font-weight-bold" id="view-more-last-name"></div>
                </div>
                <div class="col-4">Middle Name
                    <div class="font-weight-bold" id="view-more-middle-name"></div>
                </div>
            </div>

            {{-- Contact Info --}}
            <div class="row m-4">
                <div class="col-4">Email
                    <div class="font-weight-bold" id="view-more-email"></div>
                </div>
                <div class="col-4">Alt Email
                    <div class="font-weight-bold" id="view-more-alt-email"></div>
                </div>
                <div class="col-4">Phone Number
                    <div class="font-weight-bold" id="view-more-phone-no"></div>
                </div>
            </div>

            {{-- User and address Info --}}
            <div class="row m-4">
                <div class="col-4">Username
                    <div class="font-weight-bold text-uppercase" id="view-more-username"></div>
                </div>
                <div class="col-4">Role
                    <div class="font-weight-bold text-capitalize" id="view-more-role"></div>
                </div>
                <div class="col-4">Status
                    <div class="font-weight-bold text-capitalize" id="view-more-active"></div>
                </div>
            </div>

            {{-- Country and active Info --}}
            <div class="row m-4">
                <div class="col-4">Country
                    <div class="font-weight-bold text-capitalize" id="view-more-country"></div>
                </div>
                <div class="col-4">Address
                    <div class="font-weight-bold" id="view-more-address"></div>
                </div>
                <div class="col-4">Description
                    <div class="font-weight-bold" id="view-more-description"></div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

@endsection

@section('custom-script')

<script>

var roles = {!! json_encode($roles->toArray(), JSON_HEX_TAG) !!};
var countries = {!! json_encode($countries->toArray(), JSON_HEX_TAG) !!};

$(".viewMoreModal").click(function(){

    var stringUser = $(this).val();
    var user = JSON.parse( stringUser );

    $("#view-more-first-name").html(user.first_name);
    $("#view-more-last-name").html(user.last_name);
    $("#view-more-middle-name").html(user.middle_name);

    $("#view-more-email").html(user.email);
    $("#view-more-alt-email").html(user.alt_email);
    $("#view-more-phone-no").html(user.phone_number);

    $("#view-more-username").html(user.username);
    var roles = $(".user-roles-"+user.id+"").html();
    $("#view-more-role").html(roles);

    if( user.deleted_at ){
        $("#view-more-active").html("<span class='text-success'>Active</span");
    }else{
        $("#view-more-active").html("<span class='text-danger'>De-activated</span");
    }

    $("#view-more-country").html(user.country.name);
    $("#view-more-address").html(user.address);
    $("#view-more-description").html(user.description);

});

</script>

@endsection
