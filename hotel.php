<?php
require 'Data.php';

$req = $_GET['req'] ?? null;

if ($req) {
    $jsonData = file_get_contents("https://davids-restaurant.herokuapp.com/menu_items.json");
    $data = json_decode($jsonData, true)['menu_items'];
    try {
        $Datahotel = new Hotel($data);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    case 'name_menu':
        echo $Datahotel->getdish();
        break;

    case "menu_id":
        $ID = $_GET['id'] ?? null;
        echo $Datahotel->getid($ID);
        break;
    
    default:
        echo json_encode(["Invalid Request"]);
        break;
}

?>