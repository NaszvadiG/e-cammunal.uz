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
    public $jins;
    public $tugil_yil;
    public $matn;
    public $maqom;
    public $maxfiy;
    public $mazmun;
    public $date;
    public $file;
    public $status;

    public function get_entry($id)
    {
        return $this->db->get_where('complaints', array('id' => $id))->row();
    }

    public function get_all_entries()
    {
        $query = $this->db->get('complaints');
        return $query->result();
    }

    public function insert_entry()
    {
        $this->fish = $_POST['fish'];
        $this->tuman = $_POST['tuman'];
        $this->manzil = $_POST['manzil'];
        $this->email = $_POST['email'];
        $this->telefon = $_POST['telefon'];
        $this->jins = $_POST['jins'];
        $this->tugil_yil = $_POST['tugil_yil'];
        $this->matn = $_POST['matn'];
        $this->maqom = $_POST['maqom'];
        $this->mazmun = $_POST['mazmun'];
        $this->maxfiy = $_POST['maxfiy'];
        $this->date = date("Y-m-d H:i:s");
        $this->file = $_POST['file'];
        $this->status = 0;

        return $this->db->insert('complaints', $this);
    }

    public function active_entry($id)
    {
        $ent = $this->get_entry($id);
        $ent->status = 1;

        $this->db->update('complaints', $ent, array('id' => $id));
    }

    public function delete_entry($id)
    {
        $this->db->delete('complaints', array('id' => $id));
    }
}