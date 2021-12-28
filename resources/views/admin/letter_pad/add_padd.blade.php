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
                      <h4 class="card-title">Add Letter Pad</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <!-- <label class="bmd-label-floating">Service</label> -->
                              <select name="service_name" class=" selectpicker" data-style="select-with-transition" title="Choose Service" data-size="7">
                                @foreach($fetch_Service as $fetch_Service)
                                <option>{{$fetch_Service->service_name}} </option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <!-- <label class="bmd-label-floating">Company</label> -->
                              <select name="company_name" class=" selectpicker" data-style="select-with-transition" title="Choose Company" data-size="7">
                                @foreach($fetch_Company as $fetch_Company)
                                <option>{{$fetch_Company->company_name}} </option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Machine Number</label>
                                <input class="form-control valid_control" type="text" name="machine_number" onkeypress="return isNumber(event)" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Date</label>
                                <input type="text" class="form-control  valid_control datepicker"  name="date" />
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Site</label>
                                <input class="form-control valid_control" type="text" name="site" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Concrete Quantity</label>
                                <input class="form-control valid_control" type="text" name="concrete_quantity" onkeypress="return isNumber(event)" />
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Working Hours</label>
                                <input class="form-control valid_control" type="text" name="working_hours" onkeypress="return isNumber(event)"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Amount</label>
                                <input class="form-control valid_control" type="text" name="bill" onkeypress="return isNumber(event)"/>
                            </div>
                        </div>
                      </div>
                    </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="button" class="btn btn-rose letter_pad_submit_btn">Submit</button>
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