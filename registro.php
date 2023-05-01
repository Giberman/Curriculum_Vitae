<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" type="image/x-icon" href="favicon-512.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="cv.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/faec7e0b5f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link rel="manifest" href="manifest.json" />
<!-- Soporte para iOS -->
<link rel="apple-touch-icon" href="cv-icono.jpg" />
<meta name="apple-mobile-web-app-status-bar" content="#db4938" />
<meta name="theme-color" content="#db4938" />

</head>
<body>
 
  <header>

<nav class="menu">
    <ul>
           <li><a href="#ancla1">Datos personales</a></li>
          
           <li><a href="#ancla2">Perfil profesional</a></li>
        
           <li><a href="#ancla3">Experiencia laboral</a></li>
          
           <li><a href="#ancla4">Formación y estudios</a></li>
        
           <li><a href="#ancla5">Certificaciones</a></li>
        
        <li><img src="https://play-lh.googleusercontent.com/h8UeTzMRSvgL1igJTZHilpta6bimeb9pW8zsAZaC75SjXoo3yUda5_NM2pTvM6NsBCIr" id="logo" alt="imagen logo cv"></li>
    </ul>
</nav>
      
  </header>
  
  <?php
$conexion = mysqli_connect("localhost", "root", "", "curriculum") or
die("Problemas con la conexión");
mysqli_query($conexion, "insert into contacto(nombre, apellido, email, comentario) values
('$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[email]', '$_REQUEST[comentario]')")
or die("Problemas " . mysqli_error($conexion));
mysqli_close($conexion);
echo "Los datos fueron enviados correctamente";
?>

  <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
  
    <script src="cv.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>
</html>
