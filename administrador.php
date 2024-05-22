<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administracion</title>
  <link rel="icon" href="img/logoj.png">
  <link rel="stylesheet" href="administrador.css">
</head>
<body>
  <header class="header">
    <nav class="navbar">
      <div class="logo">
        <h1 class="titulo" >ADMINISTRADOR</h1>
        <style>
          h1{
            flex
          }


        </style>
      </div>
    </nav>
  </header>
 <footer>
    <br><br><br><br>
    <div class="login-container"> 
    
    
    <!--<div class="login">
      <img src="img/text.gif" class="logo">
      <br><br><br>
      <form action="conexion.php" method="post">
      <label class="txtlogin" for="usuario">Usuario:</label>
        <label style="color: aliceblue;" for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <label class="txtlogin" for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        
      </form>
      
    </div>-->
    <div class="container">
        <img style="width: 220px;" src="img/text.gif" alt="Texto">
        <h1>Modo administrador activado.</h1>

<form id="user-form" method="post" action="CRUD.php">
        <label style="color: black;" for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" class="input-field" name="usuario" required>
<br>
        <label for="contrasena">Contraseña</label>
        <br>
        <input type="password" id="contrasena" class="input-field">
        <br><br>
        <button style="
            color: white;
            border-radius: 21px;
            height: 50px;
            background-color: green;
            font-size: x-large;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        " class="verificaracceso" type="button" id="verificarBtn">Insertar</button>
        <button style="
            color: white;
            border-radius: 21px;
            height: 50px;
            background-color: green;
            font-size: x-large;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        " class="verificaracceso" type="button" id="verificarBtn">Modificar</button>
        <button style="
            color: white;
            border-radius: 21px;
            height: 50px;
            background-color: green;
            font-size: x-large;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        " class="verificaracceso" type="button" id="verificarBtn">Eliminar</button>
    </div>
    </form>
    <style>
      <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom, #000000, #000080, #0000FF, #87CEEB, #FFFFFF);
        }

        .container {
            text-align: center;
            background: rgb(255, 255, 255);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="password"].input-field {
            border: 2px solid green;
            padding: 10px;
            border-radius: 5px;
            width: 200px;
            transition: all 0.3s ease;
            color: green;
            box-shadow: 0 5px 10px rgba(0, 255, 0, 0.2); 
        }

        input[type="password"].input-field:focus {
            outline: none;
            border-color: darkgreen;
            background-color: #e6ffe6;
            box-shadow: 0 5px 15px rgba(0, 255, 3, 4.5); 
        }

        input[type="text"].input-field {
            border: 2px solid green;
            padding: 10px;
            border-radius: 5px;
            width: 200px;
            transition: all 0.3s ease;
            color: green;
            box-shadow: 0 5px 10px rgba(0, 255, 0, 0.2); 
        }

        input[type="text"].input-field:focus {
            outline: none;
            border-color: darkgreen;
            background-color: #e6ffe6;
            box-shadow: 0 5px 15px rgba(0, 255, 3, 4.5);
        }

        button.verificaracceso {
            color: white;
            border-radius: 21px;
            height: 50px;
            background-color: green;
            font-size: x-large;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        button.verificaracceso:hover {
            background-color: darkgreen;
            transform: scale(1.05);
        }

        button.verificaracceso:active {
            transform: scale(1);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        img {
            width: 100px;
            height: auto;
        }
        h1.titulo{
          
          color: green;
          
          
        }
    </style>


 <!--<div class="button-group">
      <button class="button">Insertar</button>
      <button class="button">Modificar</button>
      <button class="button">Eliminar</button>
    </div>-->
<br>

 <?php
  $user = "root";
  $pass = "#JaCk/rG/195";
  $server = "localhost";
  $bd = "empresajack";
  
  
  $conn = new mysqli($server, $user, $pass, $bd);
  
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  
  $sql = "SELECT id, usuario, contrasena, contrasena_plana FROM users";
  $result = $conn->query($sql);
  
  
  if ($result->num_rows > 0) {
    echo "<table class='table' border='1'>
    <tr>
      <th>ID</th>
      <th>Usuario</th>
      <th>Contraseña</th>
      <th>Contraseña plana</th>
    </tr>";
  
    while($row = $result->fetch_assoc()) {
      echo "<tr>
      <td>".$row["id"]."</td>
      <td>".$row["usuario"]."</td>
      <td>".$row["contrasena"]."</td>
      <td>".$row["contrasena_plana"]."</td>
    </tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  
  $conn->close();


  
  ?>
 </footer>
  
  


  <main class="main-content">
    
    
    <a href="index.html"><button style="
            color: white;
            border-radius: 21px;
            height: 50px;
            background-color: green;
            font-size: x-large;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        " class="button" type="submit">Ir a inicio</button></a>
   
  </main>
</body>
</html>