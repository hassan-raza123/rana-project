@extends('layouts.admin')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  class="form-horizontal update_ledger_form" action="{{route('edit_ledger',$update_ledger->id)}}" method="POST">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Update Ledger</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date</label>
                          <input type="text" name="date" class="form-control datepicker valid_control" value="{{$update_ledger->date}}">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Machine Number</label>
                          <input type="text" name="machine_number" class="form-control valid_control" value="{{$update_ledger->machine_number}}" onkeypress="return isNumber(event)">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Site</label>
                          <input type="text" name="site"  class="form-control valid_control" value="{{$update_ledger->site}}" >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Concrete Hours</label>
                          <input type="text" name="concrete_hours" class="form-control valid_control" value="{{$update_ledger->concrete_hours}}" onkeypress="return isNumber(event)">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bill</label>
                          <input type="text" name="bill"  class="form-control valid_control" value="{{$update_ledger->bill}}" onkeypress="return isNumber(event)">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="button" class="btn btn-rose update_ledger_submit_btn">Submit</button>
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
        onClickSubmitButton(".update_ledger_submit_btn", ".update_ledger_form");
    </script>
@endsection