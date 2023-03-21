<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <!--Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
	<title>Dashboard Login </title>
</head>

<body>
<nav class="nav bg-purple justify-content-center">
  <a class="nav-link text-white" href="../logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
</nav>

<div class="container py-5">
  <div class="row">
    <div class="col-lg-12 p-5">
      <h1> <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h1>
      <hr />
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a class="text-decoration-none" href="../Admin/table_retrive/human_list.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">DONATE FOR HUMANS</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a class="text-decoration-none" href="../Admin/table_retrive/animals_list.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
              <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">DONATE FOR ANIMALS</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a class="text-decoration-none" href="../Admin/table_retrive/menure_list.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
             <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">DONATE FOR MANURE</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a class="text-decoration-none" href="../Admin/table_retrive/other_list.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
             <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">OTHER DONATE</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a class="text-decoration-none" href="dbfood/admin.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">FOOD MANAGE</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a class="text-decoration-none" href="#" data-toggle="modal" data-target="#modelHELP">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
            <i class="fa fa-question fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">HUMAN FOOD ENJIO</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</div>

<footer class="footer fixed-bottom">
  <div class="row text-center p-3">
    <p class="small text-muted">Develop & Design by Ummed: The Hope</p>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modelHELP" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Technical Support
          24/7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
        <p>
          <small>(Mon - Sat / 10AM - 6PM)</small>
        </p>
        <hr />
        <p> <i class="fa fa-envelope mr-3" aria-hidden="true"></i> </p>
        <p><i class="fa fa-volume-control-phone mr-3" aria-hidden="true"></i> +91-123654789 </p>

      </div>

    </div>
  </div>
</div>
</body>

</html>
<style>
    body {
  font-family: "Lato", sans-serif;
}

:root {
  --primary: #94618e;
}

.justify {
  text-align: justify;
}

.text-purple {
  color: var(--primary);
}

.bg-purple {
  background-color: var(--primary);
  color: white;
}

</style>