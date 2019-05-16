<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Abigail - Admin</title>

  <!-- Favicons -->
  <link href="{{asset('ABIGAIL/logo/Abigail_Logo.png')}}" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('Assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Assets/lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{asset('Assets/lib/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('Assets/lib/advanced-datatable/css/DT_bootstrap.css')}}" />
  <!--external css-->
  <link href="{{asset('Assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('Assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('Assets/css/style-responsive.css')}}" rel="stylesheet">
</head>

<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>ABI<span>GAIL</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <form action="{{route('logout')}}" method="POST">
              {{csrf_field()}}
              <button
                style="color: #f2f2f2; font-size: 12px;border-radius: 4px;-webkit-border-radius: 4px;border: 1px solid #64c3c2 !important;padding: 5px 15px;margin-right: 15px;background: #dc3545;margin-top: 15px;"
                type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a><img src="{{ Auth::user()->photo }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{ Auth::user()->name }}</h5>
          @yield('linkcontent')
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <section id="main-content">
      <section class="wrapper">
        @yield('content')
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>2019</strong>. All Rights Reserved
        </p>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('Assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('Assets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('Assets/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('Assets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript"
    src="{{asset('Assets/lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('Assets/lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>
  <script src="{{asset('Assets/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script type="text/javascript">
    $(document).ready(function () {
      $('#hidden-table-info').dataTable({

      });
    });

    $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var nama = button.data('mynama')
      var size = button.data('mysize')
      var id = button.data('myid')
      var harga = button.data('myharga')
      var stok = button.data('mystok')

      var modal = $(this)
      modal.find('.modal-body #nama_produk').val(nama)
      modal.find('.modal-body #size').val(size)
      modal.find('.modal-body #harga').val(harga)
      modal.find('.modal-body #stok').val(stok)
      modal.find('.modal-body #id').val(id)
    })

    $('#AddKaryawan').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var nama = button.data('mynama')
      var email = button.data('myemai')
      var ava = button.data('myava')

      var modal = $(this)
      modal.find('.modal-body #name').val(nama)
      modal.find('.modal-body #email').val(email)
      modal.find('.modal-body #avatar').val(ava)
    })

    $('#delete-produk').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('myid')

      var modal = $(this)
      modal.find('.modal-body #id').val(id)
    })
  </script>
</body>

</html>