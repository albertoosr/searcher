<?php
	include('config.php');
    $salida = "";
    $query = "SELECT * FROM products WHERE product NOT LIKE '' ORDER By id_product LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM products WHERE id_product LIKE '%$q%' OR product LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos table table-bordered'>
    			<thead>
    				<tr id='titulo' class='bg-light'>
    					<th scope='col'>ID</th>
    					<th scope='col'>PRODUCTO</th>
    					<th scope='col'>COSTO</th>
    					<th scope='col'>DESCRIPCIÓN</th>
    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id_product']."</td>
    					<td>".$fila['product']."</td>
    					<td>".$fila['cost']."</td>
    					<td>".$fila['description']."</td>
    				</tr>";
    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="<p class='text-danger'>Lo sentimos, no contamos con producto</p>";
    }

    echo $salida;
    $conn->close();
?>