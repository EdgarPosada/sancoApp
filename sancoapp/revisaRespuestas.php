<?php
	
	$respuestaCorrecta = array('edgar','posada','gutierrez','rojas');

	print_r($respuestaCorrecta);

	$otro = array('edgar','ramirez','gutierrez','rojas');

	//for($i = 0; i < )
	$cont = 0;

	$cuenta = count($respuestaCorrecta);
	echo $cuenta.'<br>';

	for($i = 0; $i < $cuenta; $i++)
	{
		if($respuestaCorrecta[$i] == $otro[$i])
		{
			$cont ++;
		}
	}

	echo $cont;



?>