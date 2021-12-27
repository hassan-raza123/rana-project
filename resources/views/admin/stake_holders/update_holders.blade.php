@extends('layouts.admin')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  class="form-horizontal update_stack_holder_form" action="{{route('edit_holder',$update_holder->id)}}" method="POST">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Update Stake Hoder</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="name"  class="form-control valid_control" value="{{$update_holder->name}}">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose update_stack_holder_submit_btn">Submit</button>
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
        onClickSubmitButton(".update_stack_holder_submit_btn", ".update_stack_holder_form");
    </script>
@endsection