@extends('layouts.admin')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  class="form-horizontal update_worker_form" action="{{route('edit_workers',$update_worker->id)}}" method="POST">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Update Workers</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="name" class="form-control valid_control" value="{{$update_worker->name}}">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Job Position</label>
                          <input type="text" name="job_Position" class="form-control valid_control" value="{{$update_worker->job_Position}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Joining Date</label>
                          <input type="text" name="since" class="form-control datepicker valid_control" value="{{$update_worker->since}}">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Salary</label>
                          <input type="text" name="salary" class="form-control valid_control" value="{{$update_worker->salary}}" onkeypress="return isNumber(event)">
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="button" class="btn btn-rose update_worker_submit_btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>

@endsection



@section('js')
    <script>
        onClickSubmitButton(".update_worker_submit_btn", ".update_worker_form");
    </script>
@endsection
