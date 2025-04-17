<?php
class Orders extends CI_Model
{
    public function insertOrder($id_merop, $id_user, $kol)
    {
        $sql = "INSERT INTO `orders`( `id_user`, `id_merop`, `kol`) VALUES (?, ?, ?)";
        $result = $this->db->query($sql, array($id_user, $id_merop, $kol));
        return $result;
    }

    public function selectOrder($id_user, $limit, $offset)
    {
        $sql = "SELECT * FROM orders, merop WHERE  orders.id_user = ? AND orders.status = 1 AND orders.id_merop = merop.id_merop
        LIMIT ? OFFSET ?";;
        $result = $this->db->query($sql, array($id_user, $limit, $offset));
        return $result->result_array();
    }

    public function selectOrders()
    {
        $sql = "select   users.fio, merop.name_merop,merop.date1 ,merop.date2, orders.kol, merop.price   from orders, users, merop 
WHERE users.id_user = orders.id_user AND orders.id_merop = merop.id_merop";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function cancelOrder($id_order)
    {
        $sql = "UPDATE orders SET status = 0 WHERE orders.id_order = ?";
        $result = $this->db->query($sql, array($id_order));
        return $result;
    }

    public function checkDate($id_order, $now_date)
    {
        $sql = "SELECT * FROM orders, merop WHERE orders.id_order= ? AND  orders.id_merop = merop.id_merop AND merop.date2 < ?;";
        $result = $this->db->query($sql, array($id_order, $now_date));
        return $result->result_array();
    }
    public function addFeddback($id_user, $comemnt)
    {
        $sql = "INSERT INTO feedback (id_user,comment) VALUES (?, ?)";
        $result = $this->db->query($sql, array($id_user, $comemnt));
        return $result;
    }
}
