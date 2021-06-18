<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="/data" class="simple-text logo-normal">
      Admin
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class="nav-item {{(Request::is("detaildata/*") || Request::is("caridata") || Request::path()==="data" || Request::path()==="import"  || Request::path()==="hapus/{id}") ? 'active' : '' }}">
            <a class="nav-link" href="/data">
              <i class="material-icons">content_paste</i>
              <p>Data</p>
            </a>
          </li>
          <li class="nav-item {{(Request::path()==="kirimppi" || Request::path()==="cari" || Request::path()==="mail")? 'active': ''}}">
            <a class="nav-link" href="/kirimppi">
              <i class="material-icons">send_and_archive</i>
              <p>Kirim PPI</p>
            </a>
          </li>
          <li class="nav-item {{(Request::path()==="vendor"|| Request::path()==="addvendor/vendor"||Request::path()==="updateview/{id}/vendor"||Request::path()==="update/{id}/vendor"||Request::path()==="hapus/{id}/vendor")?'active': ''}}">
            <a class="nav-link" href="/vendor">
              <i class="material-icons">library_books</i>
              <p>Vendor</p>
            </a>
          </li>
          <li class="nav-item {{(Request::path()==="maps")?'active':''}}">
            <a class="nav-link" href="/maps">
              <i class="material-icons">location_ons</i>
              <p>Cover Area</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/logout" onclick="confirm('Apakah Anda Ingin Logout')">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>