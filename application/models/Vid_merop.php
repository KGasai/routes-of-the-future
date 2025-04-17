<?php
class Vid_merop extends CI_Model
{
    public function insertMerop($name_vid) {
        $sql = "INSERT INTO `vid_merop`( `name_vid`) VALUES (?) ";
        $result = $this -> db -> query($sql, array($name_vid));
        return $result;
    }

    public function selectMerop() {
        $sql = "SELECT * FROM `vid_merop`";
        $result = $this -> db -> query($sql);
        return $result -> result_array();
    }
}
?>