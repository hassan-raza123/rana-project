  <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('admin_assets/img/sidebar-1.jpg') }}">

      <div class="container">
        <div class="logo">
            <a href="/" class="simple-text logo-normal">
                Rana Zulfiqar & Sons
            </a>
        </div>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="{{ asset('admin_assets/img/faces/ali.jpg') }}" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Tania Andrew
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">

                <li class="nav-item">
                  <a class="nav-link" href="{{Route('user.profile') }}">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="/">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Manage Letter Pad
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('add_pad_page')}}">
                    <span class="sidebar-mini"> ALP </span>
                    <span class="sidebar-normal">Add Letter Pad </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('show_pad_page')}}">
                    <span class="sidebar-mini"> SLP </span>
                    <span class="sidebar-normal"> Show Letter Pad </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('show_worker_page')}}">
              <i class="material-icons">widgets</i>
              <p>Workers</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('show_services_page')}}">
              <i class="material-icons">widgets</i>
              <p>Services</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('show_companies_page')}}">
              <i class="material-icons">widgets</i>
              <p>Company</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('show_ledger_page')}}">
              <i class="material-icons">widgets</i>
              <p>Ledger</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('show_holder_page')}}">
              <i class="material-icons">widgets</i>
              <p>Stake Holders</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">

