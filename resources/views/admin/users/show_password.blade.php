@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col-md-4 ">
      <div class="page-categories">

        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
          <li class="nav-item">
            <a class="nav-link" href="{{Route('user.profile') }}" role="tablist">
                <i class="material-icons">gavel</i> User Information
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " data-toggle="tab" href="{{ route('show_password') }}" role="tablist">
                <i class="material-icons">help_outline</i> Change Password
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>



  @if (Session::has('Success'))
  <div class="alert alert-primary" role="alert">
     {{Session::get('Success')}}
    </div>
  @endif


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">perm_identity</i>
          </div>
          <h4 class="card-title">Edit Password -
            <small class="category">Complete your Password</small>
          </h4>
        </div>
        <div class="card-body">
          <form class="user_password_form" action="{{ route('update_password') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Old Password</label>
                    <input type="password" name="old_password" class="form-control valid_control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">New Password</label>
                    <input type="password" name="new_password" class="form-control valid_control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Confirm Password</label>
                      <input type="password" name="confirm_password" class="form-control valid_control">
                    </div>
                  </div>
                </div>

            <button type="submit" class="btn btn-rose pull-right user_password_submit_btn">Update Password</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection

@section('js')
    <script>
        onClickSubmitButton(".user_password_submit_btn", ".user_password_form");
    </script>
@endsection