<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Default Controller
 *
 * @access public
 * @param string
 * @return string
 */
class Site extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        //BotDetect CodeIgniter 3.0 CAPTCHA Integration Quickstart - https://captcha.com/doc/php/codeigniter-captcha-quickstart.html
        // load the BotDetect Captcha library and set its parameter
        $this->load->library('botdetect/BotDetectCaptcha', array(
            'captchaConfig' => 'ExampleCaptcha'
        ));

        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['title'] = "Тошкент шаҳар ҳудудий коммунал фойдаланиш бирлашмаси";
        $data['home_active'] = true;

        $this->load->site('site/index', $data);
    }

    public function submit()
    {
        $data['title'] = "Мурожаат бериш";
        $data['submit_active'] = true;
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();

        $this->load->site('site/submit', $data);
    }

    public function result()
    {
        $data['title'] = "Мурожаат натижалари";
        $data['result_active'] = true;
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();

        $this->load->model('Complaints_model');

        //status
        $data["status1"] = $this->complaint->count_entries_status(1);
        $data["status2"] = $this->complaint->count_entries_status(2);
        $data["status3"] = $this->complaint->count_entries_status(3);
        $data["total"] = $data["status1"] + $data["status2"] + $data["status3"];


        $this->load->site('site/result', $data);
    }

    public function about()
    {
        $data['title'] = "Бирлашманинг фаолияти ҳақида маълумотлар";
        $data['about_active'] = true;

        $this->load->site('site/about', $data);
    }

    public function contact()
    {
        $data['title'] = "Боғланиш учун телефон рақамлар ва манзиллар";
        $data['contact_active'] = true;

        $this->load->site('site/contact', $data);
    }

    public function send_complaint()
    {
        if ($_POST) {

            // validate the user-entered Captcha code when the form is submitted
            $code = $this->input->post('CaptchaCode');
            $isHuman = $this->botdetectcaptcha->Validate($code);

            if (!$isHuman) {
                $this->session->set_flashdata('error', "Captcha коди нотогри");
            } else {
                $this->load->model('Complaints_model');

                $config['upload_path'] = './tmp/';
                $this->load->library('upload', $config);
                $file = $this->upload->data('file');

                $_POST['file'] = $file;

                $id = $this->complaint->insert_entry();

                $this->session->set_flashdata('message', "Сизнинг мурожаатингиз қабул қилинди! Мурожаатнинг тартиб рақами " . $id);
            }
        }

        redirect("site/submit");
    }

}