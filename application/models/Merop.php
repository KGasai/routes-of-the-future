<?php
class Merop extends CI_Model
{
    public function selectMerop()
    {
        $sql = "SELECT * FROM merop, vid_merop";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function selectMeropByName($name_merop)
    {
        $sql = "SELECT * FROM merop, vid_merop WHERE vid_merop.name_vid = ? AND merop.id_vid = vid_merop.id_vid;";
        $result = $this->db->query($sql, array($name_merop));
        return $result->result_array();
    }

    public function insertMerop($id_grup, $id_vid, $name_merop, $price, $date1, $date2, $time_merop, $image, $description, $adres)
    {
        $sql = "INSERT INTO `merop`( `id_grup`, `id_vid`, `name_merop`, `price`, `date1`, `date2`, `time_merop`, `image`, `description`, `adres`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
        $result = $this->db->query($sql, array($id_grup, $id_vid, $name_merop, $price, $date1, $date2, $time_merop, $image, $description, $adres));
        return $result;
    }

    public function selectMeropById($id_merop)
    {
        $sql = "SELECT * FROM merop WHERE id_merop =?";
        $result = $this->db->query($sql, array( $id_merop));
        return $result->result_array();
    }

    public function selectMeropByVidAndGrup($id_vid, $id_grup){
        $sql = "SELECT * FROM merop WHERE id_vid = ? AND id_grup = ?";
        $result = $this->db->query($sql, array($id_vid, $id_grup));
        return $result->result_array();
    }
}
