<html>
<head>
	<title>Funció var_dump</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>	
  <?php
  
    // El var_dump($temporal) ens retorna el tipus de dada en forma de base de dades depenent quina sigui aquesta variable, $temporal.
  
    // En aquest cas, el var_dump(Joan) ens retorna un string(4) ja que Joan es un string i té 4 carácters.
    
    $temporal="Joan";
    $resultat=var_dump($temporal);
    echo $resultat."<br/>";

    // En aquest cas, el var_dump(3.14) ens retorna un float ja que 3.14 es un float.
    
    $temporal=3.14;
    $resultat=var_dump($temporal);
    echo $resultat."<br/>";

    // En aquest cas, el var_dump(false) ens retorna un bool(booleà) ja que false es un bool(booleà).

    $temporal=false;
    $resultat=var_dump($temporal);
    echo $resultat."<br/>";
    
    // En aquest cas, el var_dump(3) ens retorna un int(integer) ja que 3 es un int(integer).

    $temporal=3;
    $resultat=var_dump($temporal);
    echo $resultat."<br/>";
    
    // En aquest cas, el var_dump(null) ens retorna NULL ja que null es una variable nula (NULL).

    $temporal=null;
    $resultat=var_dump($temporal);
    echo $resultat."<br/>";

  ?>
</body>
</html>
