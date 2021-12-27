@extends('layouts.admin')

@section('content')


<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">

              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                <div class="row">
                  <div class="col-md-10">
                  <h4 class="card-title">Our Services</h4>
                  </div>
                  <div class="col-md-2">
                  <a href="{{route('add_services_page')}}" class="btn btn-rose">Add Services</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
              </div>
              <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Service Name</th>
                      <th class="disabled-sorting text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($fetch_service as $fetch_service)
                        <tr>
                          <td>{{$fetch_service->id}}</td>
                          <td>{{$fetch_service->service_name}}</td>
                          <td class="td-actions text-right">
                            <a href="{{route('update_services',$fetch_service->id)}}" rel="tooltip" class="btn btn-success">
                            <i class="material-icons">edit</i>
                            </a>
                            <a href="{{route('delete_services',$fetch_service->id)}}" rel="tooltip"  class="btn btn-danger">
                            <i class="material-icons">close</i>
                            </a>
                          </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- end content-->
          </div>
          <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
      </div>
      <!-- end row -->
    </div>
</div>
@endsection
