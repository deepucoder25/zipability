<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    private $config;
    function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.hostinger.com',
            'smtp_port' => 587,
            'smtp_user' => 'info@groveus.com',
            'smtp_pass' => '',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
    }
    
    private function saveToJson($filename, $data) {
        $path = FCPATH . 'admin_data/' . $filename;
        $current_data = [];
        if (file_exists($path)) {
            $current_data = json_decode(file_get_contents($path), true) ?: [];
        }
        $data['created_at'] = date('Y-m-d H:i:s');
        $current_data[] = $data;
        file_put_contents($path, json_encode($current_data, JSON_PRETTY_PRINT));
    }
   


public function bookings()
{
    $this->load->library('email', $this->config);
    $this->email->set_newline("\r\n");
    $this->email->set_crlf("\r\n");

    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $mfrom = $this->input->post('mfrom');
    $mto = $this->input->post('mto');
    $msg = $this->input->post('message');

    // Save to JSON for Admin Panel
    $this->saveToJson('bookings.json', [
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "mfrom" => $mfrom,
        "mto" => $mto,
        "message" => $msg,
        "move_date" => $this->input->post('move_date') ?: 'N/A'
    ]);

    // Admin notification email
    $msgd = "Services Needed";
    $adminMessage = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>$name</b><br><br>From: <b>$mfrom</b><br><br>To: <b>$mto</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b><br><br>Client Msg: <b>$msg</b></div>";

    $this->email->to("info@groveus.com");
    $this->email->from("info@groveus.com");
   
    $this->email->subject('New Booking Enquiry Received');
    $this->email->message($adminMessage);
    $this->email->send();

   

    return true;
}


    public function contact(){
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $qry = $this->input->post('message');
        // Save to JSON for Admin Panel
        $this->saveToJson('contacts.json', [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "message" => $qry
        ]);
        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$qry</q></b><br><br>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b></div>";
      $this->email->to("info@groveus.com");
    $this->email->from("info@groveus.com");
        
        $this->email->subject('New Contacts Enquiry Received ');
        $this->email->message($message);
        $this->email->send();
        return true;
    }

    public function call_back(){
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');

        // Save to JSON for Admin Panel
        $this->saveToJson('callback.json', [
            "name" => $name,
            "phone" => $phone
        ]);

        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br><b>This is a Call Back Request. Please contact the client immediately.</b></div>";
        $this->email->to("info@groveus.com");
        $this->email->from("info@groveus.com");
        
        $this->email->subject('Emergency: New Call Back Request Received');
        $this->email->message($message);
        $this->email->send();
        return true;
    }
}