<?php 

$database = parse_ini_file('BD.ini',true, INI_SCANNER_RAW);
$database = array_change_key_case($database);;

if(!isset($_GET["mode"]))
	$mode = "html";
else
	$mode = $_GET["mode"];

function showDebug($database){
	// var_dump($database);
	phpinfo();
}

function showCSV($database){

foreach($database as $row)
{
	$codigo = str_replace(".mp4","",$row['arquivo']);
	$artista = $row['artista'];
	$musica = $row['musica'];
	$inicio = $row['inicio'];
	echo "$codigo, $artista, $musica, $inicio<br>";
}
}

function showJSON($database){
	
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$i = 0;
$len = count($database);

echo "[";
foreach($database as $row)
{
	$codigo = str_replace(".mp4","",$row['arquivo']);
	$artista = $row['artista'];
	$musica = $row['musica'];
	$inicio = $row['inicio'];
	echo "{
			\"codigo\":\"$codigo\",
			\"artista\":\"$artista\",
			\"musica\":\"$musica\",
			\"inicio\":\"$inicio\"
			}";
	if ($i == $len - 1)
        echo "";
    else 
        echo ",";
    $i++;
    
}

echo "]";
}

function showHTMLTables($database){
echo "<table border=\"1\"><tbody>";
echo "<tr>
		<td>CÓDIGO</td>
		<td>ARTISTA</td>
		<td>MUSICA</td>
		<td>INICIO</td>
	</tr>";

foreach($database as $row)
{
	$codigo = str_replace(".mp4","",$row['arquivo']);
	$artista = $row['artista'];
	$musica = $row['musica'];
	$inicio = $row['inicio'];
	
echo "<tr>
		<td>$codigo</td>
		<td>$artista;</td>
		<td>$musica</td>
		<td>$inicio</td>
	</tr>";
}
echo "</tbody></table>";
}

switch ($mode) {
	case "html":
		showHTMLTables($database);
		break;
	case "json":
		showJSON($database);
		break;
	case "csv":
		showCSV($database);
		break;
	case "debug":
		showDebug($database);
		break;
}