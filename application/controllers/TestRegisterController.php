<?php
defined('BASEPATH') or exit('No direct script access allowed');


class TestRegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // error_reporting(E_ALL ^ (E_NOTICE));
        $this->load->library('form_validation');
        $this->load->model('RegisterModel');
        $this->load->model('admin_model');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        $this->load->model('SettingModel');
        $this->load->model('FaqModel'); // rakesh
    }

    public function mailTemplate()
    {
        // echo 11; die();

        echo $mail_data['to'] = 'afiqur.rssoftware@gmail.com';
        //echo $mail_data['to'] = 'robelsust@gmail.com';
        echo $mail_data['subject'] = 'test subject';
        echo $mail_data['message'] = 'test body';
        $this->sendEmail($mail_data);

        return true;
    }

    public function sendEmail($mail_data)
    {
        $mailTo        =  $mail_data['to'];
        $mailSubject   =   $mail_data['subject'];
        $message       =   $mail_data['message'];

        $this->load->library('email');
        $this->email->set_mailtype('html');

        /*$config['protocol'] ='sendmail';
        $config['mailpath'] ='/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = true;*/
        $config['protocol']    = 'smtp';
        $config['smtp_crypto']    = 'ssl';
        $config['smtp_port']    = '465';
        $config['priority']    = '1';
        $config['smtp_host']    = 'smtp.zoho.com';
        $config['smtp_user']    = 'contact@q-study.com';
        $config['smtp_pass']    = 'Mn876#%2dq';
        $config['charset']    = 'utf-8';
        $config['mailtype']    = 'html';
        $config['newline']    = "\r\n";
        $this->email->initialize($config);
        
        
        $this->email->from('contact@q-study.com');
        $this->email->to($mailTo);
        $this->email->subject($mailSubject);
        $this->email->message($message);
        
        
        $this->email->send();

        echo $this->email->print_debugger(); die();

        return true;
    }
}
