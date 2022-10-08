CODIGO PHP


 <h2>Registro de seguro de viviendas</h2>

 <?php

if (isset($_POST['enviar'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $ciudad =$_POST['ciudad'];
    $address= $_POST['address'];
    $phone= $_POST['phone'];
    $uso_inm = $_POST['uso_inm'];
    $duracion= $_POST['duracion'];
    $ingresos= $_POST['ingresos'];

    
    

 // valida los datos enviados

 //Verifica si el campo nombre esta vacio
 if(empty ($first_name)) {
    die ('ERROR:Por favor ingrese el primer nombre, es importante para el registro');
  }

   //Verifica si el nombre esta vacio
   if(empty ($last_name)) {
    die ('ERROR:Por favor ingrese el segundo nombre, es importante para el registro');
  }

 //Verifica si el campo ciudad esta vacio
 if(empty ($ciudad)) {
    die ('ERROR:Por favor ingrese la ciudad, es importante para el registro');
  }

   //Verifica si el campo de direccion esta vacio
   if(empty ($address)) {
    die ('ERROR:Por favor ingrese el numero de telefono, es importante para el registro');
  }

   //Verifica si el campo de numero de telefono esta vacio
   if(empty ($phone)) {
    die ('ERROR:Por favor ingrese el numero de telefono, es importante para el registro');
  }
  
   //Verifica la selecion que no este vacia
   if(empty ($uso_inm)) {
    die ('ERROR:Por favor seleccione una opcion correcta');
  }

 //Verifica la selecion que no este vacia
   if(empty ($duracion)) {
    die ('ERROR:Por favor seleccione una opcion correcta,es importante para el registro');
  }

 //Verifica el ingreso mensual
 if(empty ($ingresos)) {
    die ('ERROR: Por favor ingrese sus ingreso mensual , intente nuevamente');
  } else if ($ingresos < 2500|| $ingresos >4500){
    die ('ERROR: tiene que estar dentro del rango para poder obtener el seguro.');
}




        echo '<table border="2" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <td> <font face="Arial">Primer nombre</font> </td> 
                    <td> <font face="Arial">Segundo nombre</font> </td> 
                    <td> <font face="Arial">Ciudad</font> </td> 
                    <td> <font face="Arial">Direccion</font> </td> 
                    <td> <font face="Arial">Telefono</font> </td> 
                    <td> <font face="Arial">Uso inmbueble</font> </td> 
                    <td> <font face="Arial">Duracion</font> </td>
                    <td> <font face="Arial">Ingresos</font> </td> 
                    
                </tr>';

        echo '<tr> 
                  <td>' . $first_name . '</td> 
                  <td>' . $last_name . '</td> 
                  <td>' . $ciudad . '</td> 
                  <td>' . $address . '</td> 
                  <td>' . $phone . '</td> 
                  <td>' . $uso_inm . '</td> 
                  <td>' . $duracion . '</td> 
                  <td>' . $ingresos . '</td> 
                  
              </tr>
              
              </table>';
        echo "<br>";
}