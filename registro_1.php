CODIGO PHP


 <h2>Registro de seguros de autos</h2>

 <?php

if (isset($_POST['enviar'])) {

    $nombre = $_POST['first_name'];
    $nombre_last = $_POST['last_name']; 
    $edad= $_POST['edad'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $estado =$_POST['estado'];
    $ingresos = $_POST['ingresos'];
    $profesion = $_POST['profesion'];
    
 // valida los datos enviados

 //Verifica si el campo nombre esta vacio
 if(empty ($nombre)) {
    die ('ERROR:Por favor ingrese el primer nombre, es importante para el registro');
  }
   //Verifica si el nombre esta vacio
   if(empty ($nombre_last)) {
    die ('ERROR:Por favor ingrese el segundo nombre, es importante para el registro');
  }

  if(empty ($edad)) {
    die ('ERROR: Por favor proporcione su edad');
    } else if ($edad < 18 || $edad >40){
      die ('ERROR: El seguro esta habilitado para mayores
     de 18 y menores de 40 años.');
  }
 
   //Verifica la edad de acuerdo al rango
   if(empty ($ingresos)) {
    die ('ERROR: Por favor ingrese su salario mensual');
    } else if ($ingresos < 25|| $ingresos >85){
      die ('ERROR: tiene que estar dentro del rango para poder obtener el seguro.');
  }

   //Verifica si el campo email esta ingresando un correo valido ejemplo pruebatest@email.com
   if(empty ($email)) {
    die ('ERROR:Por favor ingrese el email, es importante para el registro');
  }

   //Verifica si el campo de direccion esta vacio
   if(empty ($address)) {
    die ('ERROR:Por favor ingrese su direccion, es importante para el registro');
  }

   //Verifica si el campo de numero de telefono esta vacio
   if(empty ($phone)) {
    die ('ERROR:Por favor ingrese el numero de telefono, es importante para el registro');
  }

   //Verifica el campo estado
   if(empty ($estado)) {
    die ('ERROR:Por favor ingrese el estado de su licencia');
  }

   // verifica la profesión
 if(empty ($profesion)) {
    die ('ERROR: Por favor proporcione su profesión.');
   
    }




        echo '<table border="2" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <td> <font face="Arial">Primer nombre</font> </td> 
                    <td> <font face="Arial">Segundo nombre</font> </td> 
                    <td> <font face="Arial">Edad</font> </td> 
                    <td> <font face="Arial">Direccion</font> </td> 
                    <td> <font face="Arial">Email</font> </td> 
                    <td> <font face="Arial">Telefono</font> </td> 
                    <td> <font face="Arial">Estado</font> </td> 
                    <td> <font face="Arial">Ingreso</font> </td> 
                    <td> <font face="Arial">Profesion</font> </td> 
                </tr>';

        echo '<tr> 
                  <td>' . $nombre . '</td> 
                  <td>' . $nombre_last . '</td>
                  <td>' . $edad. '</td>
                  <td>' . $address . '</td> 
                  <td>' . $email . '</td> 
                  <td>' . $phone . '</td> 
                  <td>' . $estado . '</td> 
                  <td>' . $ingresos . '</td> 
                  <td>' . $profesion . '</td> 
              </tr>
              
              </table>';
        echo "<br>";
}