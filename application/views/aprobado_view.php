<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('image/profile1.jpeg');?>" alt="" style="width: 100px;"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/academico/Home">Home</a></li>
     
    </ul>

  </div>
</nav>
  
<div class="jumbotron text-center">
  <h2>NRO DE APROBADOS</h2>
  <H1><?= $aprob ?></H1>

</div>



</body>
</html>