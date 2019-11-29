<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Edustage Education</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" type="text/css" href="css/cssrieng.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php 
  
    if (isset($_GET['page'])) {
    switch ($_GET['page']) {

      case 'gioi-thieu':
      include_once './layout/about.php';
      break;
      case 'list-khoa-hoc':
      include_once './layout/khoa-hoc.php';
      break;
      case 'chi-tiet-khoa-hoc':
      include_once './layout/chi-tiet-khoa-hoc.php';
      break;
      case 'lien-he':
      include_once './layout/contact.php';
      break;
        case 'login':
      include_once './layout/login.php';
      break;
    case 'signup':
      include_once './layout/signup.php';
      break;
      case 'show-video':
      include_once './layout/show-video.php';
      break;
       case 'detail-video':
      include_once './layout/chitiet-video.php';
      break;

    }
  }
  else{

    include_once"layout/header.php";
    include_once"layout/slide.php";
    include_once"layout/loi-ich.php";
    include_once"layout/khoa-hoc-top.php";
    include_once"layout/dang-ky.php";
     include_once"layout/footer.php";
  }
    ?>
    


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
  </html>
