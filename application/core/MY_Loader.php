<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * custom loader
 *
 */
class MY_Loader extends CI_Loader
{
    public function site($template_name, $vars = array(), $return = FALSE)
    {

        /**
         * Variables Changed due to compatibility with CI 3.0.0
         *
         * @var string
         * @since S3-CodeIgniter 2.2.1
         */
        $header = $this->view('shared/site/header', $vars, $return); // default header
        $content = $this->view($template_name, $vars, $return); // view as controller
        $footer = $this->view('shared/site/footer', $vars, $return); // default footer

        if ($return) {
            return $header; // default header
            return $content;  // view as controller
            return $footer;  // default footer
        }
    }

    public function admin($template_name, $vars = array(), $return = FALSE)
    {

        /**
         * Variables Changed due to compatibility with CI 3.0.0
         *
         * @var string
         * @since S3-CodeIgniter 2.2.1
         */
        $header = $this->view('shared/admin/header', $vars, $return); // default header
        $content = $this->view($template_name, $vars, $return); // view as controller
        $footer = $this->view('shared/admin/footer', $vars, $return); // default footer

        if ($return) {
            return $header; // default header
            return $content;  // view as controller
            return $footer;  // default footer
        }
    }
}