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
                                                                    @can('delete-user')
                                                                        <a href="{{ route('delete_user',$user->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                                    @endcan
                                                                @else
                                                                    @can('restore-user')
                                                                        <a href="{{ route('restore_user',$user->id) }}" class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>
                                                                    @endcan
                                                                @endif

                                                                @can('edit-user')
                                                                    <button type="button" class="btn btn-xs btn-info editUserModal" data-toggle="modal" data-target="#editUserModal" value="{{ $user }}"> <i class="fa fa-edit"></i> </button>
                                                                @endcan

                                                            @else
                                                                <button type="button" class="btn btn-xs btn-info" >Current User</button>
                                                            @endif


                                                            @can('change-password')
                                                                <button type="button" class="btn btn-xs btn-secondary changePasswordUserModal" data-toggle="modal" data-target="#changePasswordUserModal" value="{{ $user->id }}"> <i class="fa fa-key"></i> </button>
                                                            @endcan

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

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('save_user') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">

                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="newProfileFile" name="picture" accept="image/*">
                    <label class="custom-file-label" for="newProfileFile">Choose Profile Picture</label>
                </div>

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required />
                </div>
                <div class="form-group">
                        <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required />
                </div>
                <div class="form-group">
                        <div class="mb-2">Middle Name <i class="small float-right">Optional</i> </div>
                    <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" />
                </div>


                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required/>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required/>
                </div>
                <div class="form-group">
                    <div class="mb-2">Alt Email address <i class="small float-right">Optional</i> </div>
                    <input type="email" class="form-control" name="alt_email" value="{{ old('alt_email') }}"/>
                </div>

                <div class="form-group">
                    <div class="mb-2">Username <i class="small float-right">Optional</i> </div>
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}"/>
                    <small class="form-text text-muted"><b>NB:</b> If no username was provided, the system will generate a username when saving the account.</small>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" required />
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <select class="form-control" name="country_id">
                        @foreach ($countries as $country)

                            @if( old('country_id') == $country->id )
                                <option value="{{ $country->id }}" selected> {{ $country->name }} </option>
                            @else
                                <option value="{{ $country->id }}"> {{ $country->name }} </option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="address" >{{ old('address') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description" >{{ old('description') }}</textarea>
                    <small class="form-text text-muted"><b>NB:</b> Try Adding A Brief Description to differenciate the usr accounts.</small>
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control text-capitalize" name="role">
                        @foreach ($roles as $role)
                            @if( old('role') == $role )
                                <option value="{{ $role }}" selected> {{ $role }} </option>
                            @else
                                <option value="{{ $role }}"> {{ $role }} </option>
                            @endif
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

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form method="POST" enctype="multipart/form-data" id="updateUser">

                @csrf

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">

                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="picture" accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose Profile Picture</label>
                    </div>

                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required id="update_first_name" />
                    </div>
                    <div class="form-group">
                            <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required id="update_last_name" />
                    </div>
                    <div class="form-group">
                            <div class="mb-2">Middle Name <i class="small float-right">Optional</i> </div>
                        <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" id="update_middle_name" />
                    </div>


                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required id="update_phone_number" />
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required id="update_email" />
                    </div>
                    <div class="form-group">
                        <div class="mb-2">Alt Email address <i class="small float-right">Optional</i> </div>
                        <input type="email" class="form-control" name="alt_email" value="{{ old('alt_email') }}" id="update_alt_email" />
                    </div>

                    <div class="form-group">
                        <label>Country</label>
                        <select class="form-control" name="country_id" id="update_country_id">
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" name="address" id="update_address" >{{ old('address') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description" id="update_description" >{{ old('description') }}</textarea>
                        <small class="form-text text-muted"><b>NB:</b> Try Adding A Brief Description to differenciate the usr accounts.</small>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control text-capitalize" name="role" id="update_role">
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

<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form method="POST" id="changePasswordForm">

                @csrf

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change User Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">

                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" required />
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


$(".editUserModal").click(function(){

    var stringUser = $(this).val();
    var user = JSON.parse( stringUser );

    var updateRoute = route('edit_user', user['id'] );
    $('#updateUser').attr('action', ''+updateRoute+'');

    $("#update_first_name").val(user.first_name);
    $("#update_last_name").val(user.last_name);
    $("#update_middle_name").val(user.middle_name);
    $("#update_phone_number").val(user.phone_number);
    $("#update_email").val(user.email);
    $("#update_alt_email").val(user.alt_email);
    $("#update_address").val(user.address);
    $("#update_description").val(user.description);

    $('#update_country_id').html('');

    $.each(countries, function (index, value) {

        if( countries[index]['id'] != user.country_id ){
            $('#update_country_id').append('<option value="' + countries[index]['id'] + '">' + countries[index]['name'] + '</option>');
        }else{
            $('#update_country_id').append('<option value="' + countries[index]['id'] + '" selected >' + countries[index]['name'] + '</option>');
        }

    });


    $.each(roles, function (index, value) {

        if( roles[index] != user.role ){
            $('#update_role').append('<option value="' + roles[index] + '">' + roles[index] + '</option>');
        }else{
            $('#update_role').append('<option value="' + roles[index] + '" selected >' + roles[index] + '</option>');
        }

    });





});
</script>

@endsection
