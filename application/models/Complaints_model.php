<?php

/**
 * Created by PhpStorm.
 * User: elyor
 * Date: 1/29/2017
 * Time: 3:31 PM
 */
class Complaints_model extends CI_Model
{
    public $fish;
    public $tuman;
    public $manzil;
    public $email;
    public $telefon;
    public $tugil_yil;
    public $matn;
    public $maqom;
    public $maxfiy;
    public $mazmun;
    public $date1;
    public $date2;
    public $date3;
    public $file;
    public $status;

    public function get_entry($id)
    {
        return $this->db->get_where('complaints', array('id' => $id))->row();
    }

    public function get_all_entries($tuman)
    {
        $query = $this->db->get_where('complaints', array('tuman' => $tuman));

        return $query->result();
    }

    public function insert_entry()
    {
        $this->fish = $_POST['fish'];
        $this->tuman = $_POST['tuman'];
        $this->manzil = $_POST['manzil'];
        $this->email = $_POST['email'];
        $this->telefon = $_POST['telefon'];
        $this->tugil_yil = $_POST['tugil_yil'];
        $this->matn = $_POST['matn'];
        $this->maqom = $_POST['maqom'];
        $this->mazmun = $_POST['mazmun'];
        $this->maxfiy = $_POST['maxfiy'];
        $this->file = $_POST['file'];
        $this->status = 0;

        return $this->db->insert('complaints', $this);
    }


    public function status_entry($id, $status)
    {
        $ent = $this->get_entry($id);

        switch ($status) {

            //process
            case 1:
                $ent->status = 1;
                $this->date1 = date("Y-m-d H:i:s");
                break;

            //active
            case 2:
                $ent->status = 2;
                $this->date2 = date("Y-m-d H:i:s");
                break;

            //finish
            case 3:
                $ent->status = 3;
                $this->date3 = date("Y-m-d H:i:s");
                break;
        }

        $this->db->update('complaints', $ent, array('id' => $id));
    }

    public function count_entries_status($status)
    {
        $query = $this->db->get_where('complaints', array('status' => $status));

        return $query->num_rows();
    }

    public function delete_entry($id)
    {
        $this->db->delete('complaints', array('id' => $id));
    }
}