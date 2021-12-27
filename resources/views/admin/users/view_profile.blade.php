@extends('layouts.admin')

@section('content')


  <div class="row">
    <div class="col-md-4 ">
      <div class="page-categories"> 

        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="{{Route('user.profile') }}" role="tablist">
                <i class="material-icons">gavel</i> User Information
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  "  href="{{ Route('show_password') }}" role="tablist">
                <i class="material-icons">help_outline</i> Change Password
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>






  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">perm_identity</i>
          </div>
          <h4 class="card-title">Edit Profile -
            <small class="category">Complete your profile</small>
          </h4>
        </div>
        <div class="card-body">
          <form class="user_profile_form" action="{{ route('users_list_update') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" name="name" class="form-control valid_control">
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email address</label>
                    <input type="email" name="email" class="form-control valid_control">
                  </div>
                </div>
              </div>


            <button type="submit" class="btn btn-rose pull-right user_profile_submit_btn">Update Profile</button>
            <div class="clearfix"></div>
          </form> 
        </div>
      </div>
    </div>
  </div>

@endsection


@section('js')
    <script>
        onClickSubmitButton(".user_profile_submit_btn", ".user_profile_form");
    </script>
@endsection
