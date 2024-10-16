<?php
$estadoMusica = [
    "Feliz" => ["Bajate Gyal - roomtrash6 & 8belial", "Lip Combo - Metrika & L0rna"],
    "Triste" => ["Lebron en Cleveland - L'haine", "Moondial - Hoke"],
    "Energético" => ["PoloTeam - 8belial", "Fanta y Lean - yyy891"],
    "Relajado" => ["Lime Life - Gloosito & Baby Pantera", "Barriobajero - Ben Yart"],
    "Inspirado" => ["Calle Cortada - Ill Pekeño & Ergo Pro & Hoke", "No puede ser - Hoke"],
    "Estresado" => ["Mimosa 73U - Gloosito", "15 - Cecilio G"]

];
$discoMusica = [
    "Bajate Gyal - roomtrash6 & 8belial" => "<img src='./img/bajate-gyal.jpg' />",
    "Lip Combo - Metrika & L0rna" => "<img src='./img/lip-combo.jpg' />",
    "Lebron en Cleveland - L'haine" => "<img src='./img/lebron-cleveland.jpg' />",
    "Moondial - Hoke" => "<img src='./img/moondial.jpg' />",
    "PoloTeam - 8belial" => "<img src='./img/polo-team.jpg' />",
    "Fanta y Lean - yyy891" => "<img src='./img/fanta-lean.jpg' />",
    "Lime Life - Gloosito & Baby Pantera" => "<img src='./img/lime-life.jpg' />",
    "Barriobajero - Ben Yart" => "<img src='./img/barriobajero.jpg' />",
    "Calle Cortada - Ill Pekeño & Ergo Pro & Hoke" => "<img src='./img/calle-cortada.jpg' />",
    "No puede ser - Hoke" => "<img src='./img/no-puede-ser.jpg' />",
    "Mimosa 73U - Gloosito" => "<img src='./img/mimosa.jpg' />",
    "15 - Cecilio G" => "<img src='./img/15.jpg' />"
];

function recomendarMusica($estado, $estadoMusica, $discoMusica)
{
    if (array_key_exists($estado, $estadoMusica)) {
        $cancion1 = $estadoMusica[$estado][0];
        $cancion2 = $estadoMusica[$estado][1];

        return "
        <br>
        <h1 id='h11'> Si estas <strong> $estado </strong> </h1>
        <strong><h1 id='h11'>Te recomendamos escuchar:</h1><strong>
        
        <div class='music-container'>
            <div class='container-1'>
                <div class='discomusica'>" . $discoMusica[$cancion1] . "</div>
                <div class='discomusica-texto'>" . $cancion1 . "</div>
            </div>
            <div class='container-2'>
                <div class='discomusica'>" . $discoMusica[$cancion2] . "</div>
                <div class='discomusica-texto'>" . $cancion2 . "</div>
            </div>
        </div>";
    }
    return "No tengo recomendaciones para ese estado.";
}


?>
