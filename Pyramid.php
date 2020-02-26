<?php

ini_set('display_errors', 1);

class Pyramid 
{
    function __construct($rows)
    {
		//-setar a quantidade de linha para o loop
		$i = $rows;
		
		while ($i--){ 
			//-ver quantidade de asteriscos
			$qtd = ($rows - $i);

			//-adicionar espaços
			echo str_repeat(' ', $i);

			//-adicionar quantidade de asteriscos
			echo str_repeat('* ', $qtd)."\n";
		}
    }

}
?>

<pre>
<?php 
	//- Inicia o objecto com a quantidade de linhas para a piramide
	$pyramid =  new Pyramid(10);
?>
</pre>
