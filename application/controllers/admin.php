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

        $data['title'] = $tuman . " тумани";
        $this->load->admin('admin/index', $data);
    }

    public function complaint()
    {
        $data['title'] = "Мурожаатлар";
        $data['query'] = $this->complaint->get_all_entries();

        $this->load->admin('admin/complaint', $data);
    }

    public function complaint_delete($id)
    {
        $this->complaint->delete_entry($id);
        $this->session->set_flashdata('message', "Мурожаат №" . $id . " очирилди");

        redirect("admin/complaint");
    }

    public function complaint_active($id)
    {
        $this->complaint->active_entry($id);
        $this->session->set_flashdata('message', "Мурожаат №" . $id . " кабул килинди");

        redirect("admin/complaint");
    }

}