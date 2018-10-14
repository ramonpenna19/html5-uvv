<?php

  $page = 'home';
  $show_base_header = true;
  $show_base_footer = true;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  if ($page === 'login') {
    $body_class = 'login-page';
    $show_base_footer = false;
  }

  if ($show_base_header)
    include "includes/base_header.php";

  include "pages/" . $page . ".php";

  if ($show_base_footer)
    include "includes/base_footer.php";
