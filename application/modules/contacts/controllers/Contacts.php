<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts extends MX_Controller
{
    /**
     * Contacts Controller Constructor
     * Initializes base class construct.
     */
    function __construct(){
        parent::__construct();
    //  $this->load->database();
    }

    /**
     * Contact Us Page
     * Serves the premium visual Contact Us view file with office coordinates and contact form.
     */
    function index()
    {
        $data['title'] = "Contact Us - Professional Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Get in touch with " . $this->comp['company3'] . " for professional packers and movers, household shifting, vehicle transport, and warehousing support. Call " . $this->comp['phone'] . " today.";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }
  
    /**
     * Online Shifting Booking Callback
     * Processes AJAX post requests to submit shifting and booking data.
     */
    function booking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('email', "Email", 'trim|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->bookings();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    /**
     * FAQ Question Form Callback
     * Handles instant query post requests from FAQs.
     */
    function faq()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->faq();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    /**
     * Contact Message Submission Callback
     * Handles AJAX submission from the main Contact Us page form.
     */
    function contact()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->contact();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    /**
     * Instant Call-Back Request Callback
     * Processes requests from floating callback forms or quick inquiry triggers.
     */
    function call_back()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->call_back();
            if ($check == true) {
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    /**
     * Newsletter Subscription Callback
     * Handles user email signups for newsletter mailing lists.
     */
    function newsletter()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->newsletter();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div style='background:red !important;'>" . validation_errors() . "</div>";
        }
    }
}