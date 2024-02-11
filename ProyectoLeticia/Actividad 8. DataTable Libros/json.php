<?php 
  header('Content-Type: application/json');
        $data = [];
    

            $data []= [
                "Nombre" => "Sigue Mi Voz",
                "Autor" => "Ariana Godoy",
                "Año" => 2020,
                "NumeroPaginas" => 45,
                "ISBN" => 248753091,
                "Capitulos"  => [
                  
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 15,
                    "Capitulo2" => "Final",
                    "Paginas2" => 15,
                      ]
            ];

    
            $data []= [
                "Nombre" => "La Bella Y La Bestia",
                "Autor" => "GisyRipoll14",
                "Año" => 2021,
                "NumeroPaginas" => 33,
                "ISBN" => 6528710043,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 11,
                    "Capitulo2" => "Final",
                    "Paginas2" => 11,
                ]];


                   $data []=[
                "Nombre" => "Besos En Guerra",
                "Autor" => "EsKritoraConK",
                "Año" => 2019,
                "NumeroPaginas" => 27,
                "ISBN" => 9843204510,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 9,
                    "Capitulo2" => "Final",
                    "Paginas2" => 9,
                   ]];


                   $data []=[ 
                "Nombre" => "La Chica De Los Patines",
                "Autor" => "Gloriamturrubiates",
                "Año" => 2018,
                "NumeroPaginas" => 75,
                "ISBN" => 7923103286,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 25,
                    "Capitulo2" => "Final",
                    "Paginas2" => 25,
             ]];


                   $data []=[
                "Nombre" => "Hey Danna",
                "Autor" => "Gloriamturrubiates",
                "Año" =>  2018,
                "NumeroPaginas" => 69,
                "ISBN" => 8432865185,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 23,
                    "Capitulo2" => "Final",
                    "Paginas2" => 23,
             ]];


                   $data []=[
                "Nombre" => "Querida Leyre",
                "Autor" => "Gloriamturrubiates",
                "Año" => 2018,
                "NumeroPaginas" => 66,
                "ISBN" => 6732094314,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 22,
                    "Capitulo2" => "Final",
                    "Paginas2" => 22,
               ]];


                   $data []=[
                "Nombre" => "Tú, El Recuerdo De Mi Futuro",
                "Autor" => "DaniSofLu",
                "Año" => 2018,
                "NumeroPaginas" => 72,
                "ISBN" => 9043112852,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 24,
                    "Capitulo2" => "Final",
                    "Paginas2" => 24,
               ]];


                   $data []=[
                "Nombre" => "Tú Recuerdo En Mi",
                "Autor" => "DaniSofLu",
                "Año" => 2019,
                "NumeroPaginas" => 69,
                "ISBN" => 5423102261,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 23,
                    "Capitulo2" => "Final",
                    "Paginas2" => 23,
                ]];


                    $data []=[
                "Nombre" => "Profecia De Un Final Feliz",
                "Autor" => "DaniSofLu",
                "Año" => 2020,
                "NumeroPaginas" => 63,
                "ISBN" => 3217540971,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 21,
                    "Capitulo2" => "Final",
                    "Paginas2" => 21,
               ]];


                    $data []=[
                "Nombre" => "Del Amor y Otros Vacios",
                "Autor" => "Jhullyhanha",
                "Año" => 2020,
                "NumeroPaginas" => 33,
                "ISBN" => 4512305427,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 11,
                    "Capitulo2" => "Final",
                    "Paginas2" => 11,
                ]];
                
              
        

                echo json_encode(['data' => $data ]);


?>
    