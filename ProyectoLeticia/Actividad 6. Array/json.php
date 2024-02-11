<br>
<br>
<br>
<br>
<br>

<center><h1>ACTIVIDAD 6. ARRAY</h1></center>
<br>
<br>
<br>

<?php
$Libros=[];
 

        $Libros[]=[
            "Nombre" => "Sigue Mi Voz",
            "Autor" => "Ariana Godoy",
            "Año" => 2020,
            "Numero Paginas" => 45,
            "ISBN" => 2487530917,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 15,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 15,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "La Bella Y La Bestia",
            "Autor" => "GisyRipoll14",
            "Año" => 2021,
            "Numero Paginas" => 33,
            "ISBN" => 6528710043,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 11,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 11,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "Besos En Guerra",
            "Autor" => "EsKritoraConK",
            "Año" => 2019,
            "Numero Paginas" => 27,
            "ISBN" => 9843204510,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 9,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 9,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "La Chica De Los Paties",
            "Autor" => "Gloriamturrubiates",
            "Año" => 2018,
            "Numero Paginas" => 75,
            "ISBN" => 7923103286,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 25,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 25,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "Hey Danna",
            "Autor" => "Gloriamturrubiates",
            "Año" => 2018,
            "Numero Paginas" => 69,
            "ISBN" => 8432865185,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 23,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 23,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "Querida Leyre",
            "Autor" => "Gloriamturrubiates",
            "Año" => 2018,
            "Numero Paginas" => 66,
            "ISBN" => 6732094314,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 22,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 22,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "Tú, El Recuerdo De Mi Futuro",
            "Autor" => "DaniSofLu",
            "Año" => 2018,
            "Numero Paginas" => 72,
            "ISBN" => 9043112852,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 24,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 24,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "Tú Recuerdo En Mi",
            "Autor" => "DaniSofLu",
            "Año" => 2019,
            "Numero Paginas" => 69,
            "ISBN" => 5423102261,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 23,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 23,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "Profecia De Un Fial Feliz",
            "Autor" => "DaniSofLu",
            "Año" => 2020,
            "Numero Paginas" => 63,
            "ISBN" => 3217540971,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 21,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 21,
                ]
                ],
        ];

        $Libros[]=[
            "Nombre" => "Del Amor y Otros Vacios",
            "Autor" => "Jhullyhanha",
            "Año" => 2020,
            "Numero Paginas" => 33,
            "ISBN" => 4512305427,
            "Capitulos" =>[
                [
                    "Capitulo1" => "Inicio",
                    "Paginas1" => 11,
                ],
                [
                    "Capitulo2" => "Final",
                    "Paginas2" => 11,
                ]
                ],
        ];

        echo json_encode($Libros);
    ?>