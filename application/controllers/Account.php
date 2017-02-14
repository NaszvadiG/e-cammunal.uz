<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Default Controller
 *
 * @access public
 * @param string
 * @return string
 */
class Account extends CI_Controller
{
    public function login()
    {
        $this->load->view('account/login');
    }

    function validate_credentials()
    {
        if ($_POST) {
            $username = $this->input->post('username');
            $password = $this->input->post('userpass');
            $tuman = $this->input->post('tuman');

            if (strcasecmp($username, "admin") == 0 &&
                strcasecmp($password, "admin") == 0
            ) {

                $data = array(
                    'username' => $username,
                    'tuman' => $tuman,
                    'is_logged_in' => true
                );
                $this->session->set_userdata($data);

                redirect('admin/index');
            } else {
                $this->session->set_flashdata('error', "Фойдаланувчи ёки парол нотугри киритилган");
            }
        }

        redirect('account/login');
    }

    public function logout()
    {
        $array_items = array('username', 'is_logged_in', 'tuman');
        $this->session->unset_userdata($array_items);

        redirect('admin/index');
    }

}