<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/thongb.css">
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="success-checkmark">
  <div class="check-icon">
    <span class="icon-line line-tip"></span>
    <span class="icon-line line-long"></span>
    <div class="icon-circle"></div>
    <div class="icon-fix"></div>
  </div>
</div>
<center>
  <button id="restart">Restart Animation</button>
</center>
<script type="text/javascript">
	$("button").click(function () {
  $(".check-icon").hide();
  setTimeout(function () {
    $(".check-icon").show();
  }, 10);
});
</script>
</body>
</html>