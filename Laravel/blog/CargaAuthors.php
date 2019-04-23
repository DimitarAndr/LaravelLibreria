<?php
$arrayAuthors = array(
    array(
        'name' => 'Carlos Ruiz Zafón',
        'fecha_nac' => '25 September 1964',
        'nacionalidad' => 'Español'
    ),
    array(
        'name' => 'Ildefonso Falcones',
        'fecha_nac' => '23 Junio 1958',
        'nacionalidad' => 'Español'
    ),
    array(
        'name' => 'Gabriel García Márquez',
        'fecha_nac' => '6 March 1927',
        'nacionalidad' => 'Colombiano'
    ),
    array(
        'name' => 'Emily Brontë',
        'fecha_nac' => '30 July 1818',
        'nacionalidad' => 'Inglesa'
    ),
    array(
        'name' => 'Quevedo',
        'fecha_nac' => '14 September 1580',
        'nacionalidad' => 'Español'
    ),
    array(
        'name' => 'Camilo José Cela',
        'fecha_nac' => '11 May 1916',
        'nacionalidad' => 'Español'
    ),
    array(
        'name' => 'Lope de Vega',
        'fecha_nac' => '27 August 1635',
        'nacionalidad' => 'Español'
    ),
    array(
        'name' => 'Paula Hawkins',
        'fecha_nac' => '26 August 1972',
        'nacionalidad' => 'Inglesa'
    ),
    array(
        'name' => 'Santiago Posteguillo',
        'fecha_nac' => '07 Octubre 1967',
        'nacionalidad' => 'Español'
    ),
    array(
        'name' => 'Stephen King',
        'fecha_nac' => '21 Septiembre 1947',
        'nacionalidad' => 'Americana'
    ),
    array(
        'name' => 'Anna Rice',
        'fecha_nac' => '04 Octubre 1941',
        'nacionalidad' => 'Americana'
    )
);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Biblioteca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


foreach ($arrayAuthors as $author) {
    $name = ($author['name']);
    var_dump($name);
    $fecha_nac = ($author['fecha_nac']);
    var_dump($fecha_nac);
    $nacionalidad = ($author['nacionalidad']);
    var_dump($nacionalidad);
    /*Pozvolqva dobavqne na znaci v BD*/

    mysqli_set_charset( $conn, 'utf8');
    $sql = "INSERT INTO authors (name,fecha_nac,nacionalidad)
VALUES ('$name','$fecha_nac','$nacionalidad')";
    var_dump($sql);

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>