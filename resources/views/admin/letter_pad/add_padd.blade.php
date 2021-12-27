@extends('layouts.admin')

@section('content')

    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  class="form-horizontal leter_pad_form" action="{{route('upload_pad')}}" method="POST">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Letter Pad</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Machine Number</label>
                                <input class="form-control valid_control" type="text" name="machine_number" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control  valid_control datepicker"  name="date" />
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site</label>
                                <input class="form-control valid_control" type="text" name="site" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Concrete Quantity</label>
                                <input class="form-control valid_control" type="text" name="concrete_quantity" />
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Working Hours</label>
                                <input class="form-control valid_control" type="text" name="working_hours" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bill</label>
                                <input class="form-control valid_control" type="text" name="bill" />
                            </div>
                        </div>
                      </div>
                    </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose letter_pad_submit_btn">Submit</button>
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
        onClickSubmitButton(".letter_pad_submit_btn", ".leter_pad_form");
    </script>
@endsection