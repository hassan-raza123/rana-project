@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="row">
     <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="card card-stats">
         <div class="card-header card-header-warning card-header-icon">
           <div class="card-icon">
             <i class="material-icons">weekend</i>
           </div>
           <p class="card-category">Services</p>
           <h3 class="card-title">0</h3>
         </div>
         <div class="card-footer">
           <div class="stats">

             <a href="{{route('show_services_page')}}">Our Services</a>
           </div>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="card card-stats">
         <div class="card-header card-header-rose card-header-icon">
           <div class="card-icon">
             <i class="material-icons">equalizer</i>
           </div>
           <p class="card-category">Workers</p>
           <h3 class="card-title">0</h3>
         </div>
         <div class="card-footer">
           <div class="stats">
            <a href="{{route('show_worker_page')}}"> Manage Workers</a>
           </div>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="card card-stats">
         <div class="card-header card-header-success card-header-icon">
           <div class="card-icon">
             <i class="material-icons">store</i>
           </div>
           <p class="card-category">Company</p>
           <h3 class="card-title">0</h3>
         </div>
         <div class="card-footer">
           <div class="stats">
            <a href="{{route('show_companies_page')}}"> Our Selected Company</a>
           </div>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="card card-stats">
         <div class="card-header card-header-info card-header-icon">
           <div class="card-icon">
             <i class="fa fa-twitter"></i>
           </div>
           <p class="card-category">Ledgers</p>
           <h3 class="card-title">0</h3>
         </div>
         <div class="card-footer">
           <div class="stats">
            <a href="{{route('show_ledger_page')}}"> Manage Ledgers</a>
           </div>
         </div>
       </div>
     </div>
   </div>



 </div>

@endsection
