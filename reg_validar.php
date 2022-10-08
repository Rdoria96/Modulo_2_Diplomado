CODIGO PHP


 <h2>Registro de seguro de vida a personas</h2>

 <?php

if (isset($_POST['enviar'])) {

    $opcion_1 = $_POST['opcion_1'];
    $name_asegu = $_POST['name_asegu']; 
    $opcion_2 = $_POST['opcion_2'];
    $numced= $_POST['numced'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $fecha =$_POST['fecha'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $phone= $_POST['phone'];
    $opcion_3= $_POST['opcion_3'];
    $estado= $_POST['estado'];
    $opcion_4= $_POST['opcion_4'];

    
    

 // valida los datos enviados
 //Verifica si la opcion 1 esta vacio
 if(empty ($opcion_1)){
    die ('ERROR: El campo esta vacio, por favor seleccione una opcion correcta ');
    }

 // verifica el nombre de aseguradora
 if(empty ($name_asegu)){
    die ('ERROR: Por favor ingrese el nombre de la aseguradora.');
    }
  
   // verifica la opcion 2
   if(empty ($opcion_2)) {
     die ('ERROR: Selecione una opcion correcta, intente nuevamente');
   }
    
   //Verifica si el campo cedula esta vacio
   if(empty ($numced)) {
    die ('ERROR:Por favor ingrese el numero de cedula, es importante para el registro');
  }

 //Verifica si el campo nombre esta vacio
 if(empty ($first_name)) {
    die ('ERROR:Por favor ingrese el primer nombre, es importante para el registro');
  }

   //Verifica si el nombre esta vacio
   if(empty ($last_name)) {
    die ('ERROR:Por favor ingrese el segundo nombre, es importante para el registro');
  }

 //Verifica si no se ha llenado el campo de fecha
 if(empty ($fecha)) {
    die ('ERROR:Por favor ingrese la fecha, es importante para el registro');
  }

   //Verifica si el campo email esta ingresando un correo valido ejemplo pruebatest@email.com
   if(empty ($email)) {
    die ('ERROR:Por favor ingrese el numero de cedula, es importante para el registro');
  }

   //Verifica si el campo de direccion esta vacio
   if(empty ($address)) {
    die ('ERROR:Por favor ingrese el numero de telefono, es importante para el registro');
  }

   //Verifica si el campo de numero de telefono esta vacio
   if(empty ($phone)) {
    die ('ERROR:Por favor ingrese el numero de telefono, es importante para el registro');
  }
  
   //Verifica la licencia de conducir
   if(empty ($opcion_3)) {
    die ('ERROR:Por favor seleccione una opcion correcta');
  }

   //Verifica el campo estado
   if(empty ($estado)) {
    die ('ERROR:Por favor ingrese el estado de su licencia');
  }

 //Verifica las selecion 4
 if(empty ($opcion_4)) {
    die ('ERROR: Por seleciona una opcion correcta, intente nuevamente');
  }




        echo '<table border="2" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <td> <font face="Arial">¿Tiene actualmente una póliza de seguro de automóvil activa?</font> </td> 
                    <td> <font face="Arial">¿Nombre de la aseguradora de automóviles actual?</font> </td> 
                    <td> <font face="Arial">¿Ha tenido multas o accidentes en los últimos 3 años?</font> </td> 
                    <td> <font face="Arial">Numero de cedula</font> </td> 
                    <td> <font face="Arial">Name</font> </td> 
                    <td> <font face="Arial">Last name</font> </td> 
                    <td> <font face="Arial">Fecha de nacimiento</font> </td> 
                    <td> <font face="Arial">Email</font> </td> 
                    <td> <font face="Arial">Direccion</font> </td> 
                    <td> <font face="Arial">Numero Telefono</font> </td> 
                    <td> <font face="Arial">Información de la licencia de conducir</font> </td> 
                    <td> <font face="Arial"Estado de su licencia</font> </td> 
                    <td> <font face="Arial">¿Cómo le gustaría recibir su propuesta?</font> </td> 
                    
                </tr>';

        echo '<tr> 
                  <td>' . $opcion_1 . '</td> 
                  <td>' . $name_asegu . '</td> 
                  <td>' . $opcion_2 . '</td> 
                  <td>' . $numced . '</td> 
                  <td>' . $first_name . '</td> 
                  <td>' . $last_name. '</td> 
                  <td>' . $fecha . '</td> 
                  <td>' . $email . '</td> 
                  <td>' . $address . '</td> 
                  <td>' . $phone . '</td> 
                  <td>' . $opcion_3 . '</td> 
                  <td>' . $estado . '</td> 
                  <td>' . $opcion_4 . '</td> 

                  
              </tr>
              
              </table>';
        echo "<br>";
}