<?php 
	include'elementos.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Mecanica Argentina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!-- Barra de navegación -->
  <?php echo $menu ?>

<!-- Imagen y titulo  -->
<div id="jumbo" class="jumbotron text-center">
  <h1>Tu auto más seguro que nunca.</h1>
  <p>Registrate gratis!!!</p> 
</div>

<!-- Tres columnas -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      <h3>Registrate ahora!</h3>
      <p>Registrarse es totalmente gratuito, si lesite bien, gratuito. No cobramos adicionales después del registro.</p>
    </div>
    <div class="col-sm-4">
      <h3>¿Por que unirme?</h3>
      <p>Si compartís la misma pasion por los autos que nosotros no podés dejar pasar esta oportunidad para tener el maximo control sobre tu vehiculo. Te ofrecemos un historial clinico con lujo de detalle, escrito por tu propio mecanico.</p>
    </div>
    <div class="col-sm-4">
      <h3>¿Como funciona?</h3>        
      <p>No tengo ni la mas palida idea.</p>
    </div>
  </div>
</div>

<hr>

<div class="container mt-3">
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@mail.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@greatstuff.com</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
      </tr>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>




</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
</html>