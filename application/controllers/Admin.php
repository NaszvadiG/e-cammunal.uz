<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Default Controller
 *
 * @access public
 * @param string
 * @return string
 */
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->is_logged_in();
        $this->load->model('Complaints_model');
    }

    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect("account/login");
        }

    }

    public function index()
    {
        $tuman = $this->session->userdata('tuman');
        $data['title'] = "Администратор";
        $data['description'] = "Хуш келибсиз " . $tuman . " тумани администратор булимига";

        $this->load->admin('admin/index', $data);
    }

    public function complaint()
    {
        $data['title'] = "Мурожаатлар";

        $tuman = $this->session->userdata('tuman');
        $data['query'] = $this->complaint->get_all_entries($tuman);

        $this->load->admin('admin/complaint', $data);
    }

    public function complaint_delete($id)
    {
        $this->complaint->delete_entry($id);
        $this->session->set_flashdata('message', "Мурожаат №" . $id . " очирилди");

        redirect("admin/complaint");
    }

    public function complaint_status($id, $status)
    {
        $this->complaint->status_entry($id);
        $name = "";

        switch ($status) {
            case 1:
                $name = "Кабул килинди";
                break;

            case 2:
                $name = "Кайта ишланмокда";
                break;

            case 3:
                $name = "Бажарилди";
                break;
        }

        $this->session->set_flashdata('message', "Мурожаат №" . $id . " - " . $name);

        redirect("admin/complaint");
    }

}