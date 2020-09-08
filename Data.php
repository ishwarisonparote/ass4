<?php

class Hotel {
    
    private $hotel;

    function __construct(array $hotel) {
        if (sizeof($hotel)>0) {
            $this->hotel = $hotel;
        } else {
            throw new Exception("No Menu!!!");
        }
    }

    public function getdish() {
        $menu = [];

        foreach($this->hotel as $menu_items) {
            $menu[] = array(
                "name"=>$menu_items['name']
            );
        }

        return json_encode($menulist);
    }

    public function getid($ID) {
        $id = ["INVALID ID"];
        if($ID) {
            foreach($this->hotel as $menu_items) {
                if ($ID == $menu_items['id']) {
                    $id = $menu_items;
                    break;
                }
            }
        }
        return json_encode($id);
    }

}
?>