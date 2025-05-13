<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zad_3.css" type="text/css">
    <meta name="author" content="Róża Dobrysiak">
    <title>zad 3</title>
</head>
<body>
<form method="POST">
    <label>Wpisz tekst:</label>
    <input type="text" id="tekst" name="tekst"><br>
    <select id="operation" name="operation">
        <option value="odwrocenie">Odwróć</option>
        <option value="to_upper">Wielkie litery</option>
        <option value="to_lower">Małe litery</option>
        <option value="countsymbols">Liczenie znaków</option>
        <option value="trimy">Usuń białe znaki</option>

    </select><br>
    <!-- <input type="submit" value="Wykonaj" id="submit_button"> -->
    <button type="submit" id="submit_button">Wykonaj</button>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $tekst = $_POST['tekst'];
    $operation = $_POST['operation'];
    $result = '';

    // if (isset($_POST['submit_button'])){
    //     if(empty($_POST['tekst'])){
    //         echo "Wypełnij pole formularza";
    //     }else
    //     switch ($operation){
    //     case 'odwrocenie':
    //         $result = strrev($tekst);
    //         break;
    //     case 'to_upper':
    //         $result = strtoupper($tekst);
    //         break;
    //     case 'to_lower':
    //         $result = strtolower($tekst);
    //         break;
    //     case 'countsymbols':
    //         $result = count_chars($tekst);
    //         // $result = strlen($tekst);
    //         break;
    //     case 'trimy':
    //         $result = trim($tekst);
    //         break;
    //     default:
    //         echo "Niepoprawne dane";
    //         break;
    // }

    switch ($operation){
        case 'odwrocenie':
            $result = strrev($tekst);
            break;
        case 'to_upper':
            $result = strtoupper($tekst);
            break;
        case 'to_lower':
            $result = strtolower($tekst);
            break;
        case 'countsymbols':
            $result = count_chars($tekst);
            // $result = strlen($tekst);
            break;
        case 'trimy':
            $result = trim($tekst);
            break;
        default:
            echo "Niepoprawne dane";
            break;
    }

    echo "<div id='result_box'><h1>Wynik: ".$result."</h1></div>";
}

?>
</body>
</html>
