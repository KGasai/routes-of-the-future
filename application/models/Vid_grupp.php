<?php
class Vid_grupp extends CI_Model
{
    public function insertGroup($name_grup) {
        $sql = "INSERT INTO vid_grupp (name_grup) VALUES ('$name_grup') ";
        $result = $this -> db -> query($sql);
        return $result;
    }

    public function selectGroup() {
        $sql = "SELECT * FROM `vid_grupp`";
        $result = $this -> db -> query($sql);
        return $result -> result_array();
    }
}
?>