<?php 
include("./include/auth.php");
?>


<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  
  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>Blackdash - Bootstrap5 Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

   
	<!--starts navigation bar / sidebar -->

	<!--starts top header-->
	<?php 
		include("./include/header.php");
		?>

	<!--Ends navigation bar / sidebar -->
	 <!--end top header-->
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

               <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-5">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-basket2-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">4.6K</h3>
                  <p class="text-muted mb-4">Total Leads</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-up"></i><span>45.5%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-wallet-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">$25M</h3>
                  <p class="text-muted mb-4">Total Instructed</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-up"></i><span>24.5%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">5.6K</h3>
                  <p class="text-muted mb-4">Total Compelete</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-down"></i><span>15.8%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-chat-text-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">752</h3>
                  <p class="text-muted mb-4">Total Not Instructed</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-up"></i><span>35.2%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-bar-chart-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">42.8%</h3>
                  <p class="text-muted mb-4">Total Pending</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-down"></i><span>28.5%</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->


  <!-- JS Files-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="assets/plugins/chartjs/chart.min.js"></script>
  <script src="assets/js/index.js"></script>
  <!-- Main JS-->
  <script src="assets/js/main.js"></script>


</body>

</html>