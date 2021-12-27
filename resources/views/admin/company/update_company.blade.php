@extends('layouts.admin')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  class="form-horizontal update_company_form" action="{{route('edit_companies',$update_companies->id)}}" method="POST">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Update Company</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company Name</label>
                          <input type="text" name="company_name" class="form-control valid_control" value="{{$update_companies->company_name}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="button" class="btn btn-rose update_company_submit_btn">Submit</button>
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
        onClickSubmitButton(".update_company_submit_btn", ".update_company_form");
    </script>
@endsection