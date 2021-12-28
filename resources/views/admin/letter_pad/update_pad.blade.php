
@extends('layouts.admin')

@section('content')

    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  class="form-horizontal update_leter_pad_form" action="{{route('edit_pad',$update_pad->id)}}" method="POST">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Update Letter Pad</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <!-- <label class="bmd-label-floating">Service</label> -->
                              <select name="service_name" class=" selectpicker" data-style="select-with-transition" value="{{$update_pad->service_name}}" data-size="7">
                                @foreach($fetch_Service as $fetch_Service)
                                <option>{{$fetch_Service->service_name}} </option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <!-- <label class="bmd-label-floating">Company</label> -->
                              <select name="company_name" class=" selectpicker" data-style="select-with-transition" value="{{$update_pad->company_name}}" data-size="7">
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
                                <label>Machine Number</label>
                                <input class="form-control valid_control" type="text" name="machine_number" value="{{$update_pad->machine_number}}" onkeypress="return isNumber(event)"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" value="{{$update_pad->date}}" class="form-control valid_control datepicker" name="date" />
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site</label>
                                <input class="form-control valid_control" type="text" name="site" value="{{$update_pad->site}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Concrete Quantity</label>
                                <input class="form-control valid_control" type="text" name="concrete_quantity" value="{{$update_pad->concrete_quantity}}"onkeypress="return isNumber(event)" />
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Working Hours</label>
                                <input class="form-control valid_control" type="text" name="working_hours" value="{{$update_pad->working_hours}}" onkeypress="return isNumber(event)"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bill</label>
                                <input class="form-control valid_control" type="text" name="bill" value="{{$update_pad->bill}}" onkeypress="return isNumber(event)"/>
                            </div>
                        </div>
                      </div>
                    </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="button" class="btn btn-rose update_letter_pad_submit_btn">Submit</button>
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
        onClickSubmitButton(".update_letter_pad_submit_btn", ".update_leter_pad_form");
    </script>
@endsection