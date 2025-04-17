<?php
class Feedback extends CI_Model
{
    public function insertFeedback($id_user, $comment) {
        $sql = "INSERT INTO `feedback`(`id_user`, `comment`) VALUES (?, ?)";
        $result = $this -> db -> query($sql, array($id_user, $comment));
        return $result ;
    }

    public function selectFeedback(){
        $sql = "SELECT * FROM feedback";
        $result = $this ->db -> query($sql);
        return $result -> result_array();
    }

    public function updateFeddback($id_feedback, $otvat) {
        $sql = "UPDATE  feedback SET otvet = ? WHERE id_feedback =?";
        $result = $this -> db -> query($sql, array($otvat, $id_feedback));
        return $result;
    }
}
?>