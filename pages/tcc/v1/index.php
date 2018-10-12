<!doctype html>
<html lang="en">

<head>
  <title>PUSH YOU</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="./assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <link href="./assets/css/estilo.css" rel="stylesheet" />
</head>

<body>

  <?php include "includes/nav.php"; ?>

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg-home1.jpg')"></div>

  <?php
  	if (isset($_GET['page'])) {
  		include "pages/" . $_GET['page'] . ".php";
  	} else {
  		include "pages/home.php";
  	}
  ?>

  <?php include "includes/footer.php"; ?>

  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>

  <!-- <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <script src="./assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script> -->
</body>

</html>