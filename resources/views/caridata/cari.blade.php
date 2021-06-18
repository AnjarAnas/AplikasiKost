<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Hasil Data Cari
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- CSS Files -->
    <link href="{{asset('/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
    @include('sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Data</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          
        </div>
      </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">


                            <div class="card- card-header-primary">
                                    <h4 class="card-title ">Hasil cari</h4>
                                    <p class="card-category">Hasil Data Cari</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if($data=="kosong")
                                            <div class="alert alert-danger">Data Tidak Ditemukan di Database</div>
                                        @elseif (!$data->isEmpty())
                                            <table class="table table-hover table-striped">
                                                <thead class=" text-primary">
                                                    <th>
                                                        SPA
                                                    </th>
                                                    <th>
                                                        Nama
                                                    </th>
                                                    <th>
                                                        Alamat
                                                    </th>
                                                    <th>
                                                        Bandwidth
                                                    </th>
                                                    <th>
                                                        Service Id
                                                    </th>
                                                    <th>Status</th>
                                                    <th>PPI</th>
                                                    <th>Aksi</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $a)
                                                    <tr>
                                                        <td>{{$a->p_aktivasi_node_id}}</td>
                                                        <td>{{$a->c_name}}</td>
                                                        <td>{{$a->address}}</td>
                                                        <td>{{$a->bandwidth}}</td>
                                                        <td>{{$a->service_id}}</td>
                                                        <td>{{$a->status}}</td>
                                                        <td><?php  if ($a->ppi==null){
                                                            $date=null;
                                                        }
                                                        else{
                                                            $date=date('d F Y',strtotime($a->ppi));
                                                            echo $date;
                                                        }
                                                        ?></td>
                                                        <td><a href="/detaildata/{{$a->service_id}}" class="btn btn-sm btn-secondary">Detail</a><a href="/hapus/{{$a->service_id}}" onclick="confirm('Apakah Anda Ingin Menghapus Item Ini?')" class="btn btn-sm btn-danger">Hapus</a><a href="/updateview/{{$a->service_id}}" class="btn btn-sm btn-warning">Ubah</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{asset('/assets/js/core/jquery.min.js')}}">
    </script>
    <script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('/assets/js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{asset('/assets/js/plugins/moment.min.js')}}"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{asset('/assets/js/plugins/sweetalert2.js')}}"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{asset('/assets/js/plugins/jquery.validate.min.js')}}"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{asset('/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('/assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{asset('/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{asset('/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{asset('/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{asset('/assets/js/plugins/fullcalendar.min.js')}}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{asset('/assets/js/plugins/jquery-jvectormap.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('/assets/js/plugins/nouislider.min.js')}}"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')}}"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{asset('/assets/js/plugins/arrive.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{{asset('/assets/js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('/assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('/assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('/assets/demo/demo.js')}}"></script>
</body>

</html>