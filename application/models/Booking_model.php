<?php
class Booking_model extends CI_Model
{
    public function simpan_booking($data1,$table)
    {
        $this->db->insert($table,$data1);
    }
}