@extends('layouts.admin')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  class="form-horizontal stack_holder_form" action="{{route('upload_holders')}}" method="POST">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Add Stake Hoder</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="name"  class="form-control valid_control">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose stack_holder_submit_btn">Submit</button>
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
        onClickSubmitButton(".stack_holder_submit_btn", ".stack_holder_form");
    </script>
@endsection