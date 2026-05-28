<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    /**
     * Shifting Services Index (Pan-India)
     * Renders the master landing page of all active shifting locations and states.
     */
    function index()
    {
        $data['title'] = "Our Pan-India Shifting & Relocation Network | " . $this->comp['company3'];
        $data['description'] = "Trusted pan-India packers and movers service provider. Explore our extensive network across major states and cities for secure household shifting and vehicle relocation at " . $this->comp['company3'] . ".";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * Active States Shifting Page
     * Serves as the locations hub displaying list of states we operate packers and movers services in.
     */
    function state()
    {
        $data['title'] = "Pan-India Packers and Movers Services - State Shifting | " . $this->comp['company3'];
        $data['description'] = "Browse " . $this->comp['company3'] . "'s comprehensive list of active states and cities for professional packing, moving, vehicle transport, and warehousing across India.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * State Shifting Services List Page
     * Lists all serviced cities within a selected state with targeted state keywords.
     */
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => "Top Packers and Movers in $state | " . $this->comp['company3'] . " Shifting",
            "description" => "Looking for top packers and movers in $state? " . $this->comp['company3'] . " provides professional, stress-free household relocation, office shifting, and vehicle transport services in $state.",
            "keywords" => "$state " . $this->comp['company3'] . " in $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }

    /**
     * SEO Meta Tag Generator
     * Generates optimized meta title and description array based on the target city and state.
     */
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        return array(
            'title' => "Best Packers and Movers in $city, $state | " . $this->comp['company3'],
            "desc" => "Hire top-rated packers and movers in $city, $state. " . $this->comp['company3'] . " offers reliable household shifting and vehicle transport services at affordable rates."
        );
    }

    /**
     * City Relocation Landing Page
     * Serves highly optimized, city-specific Packers and Movers micro-landing pages.
     */
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink=strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            'img' => base_url('assets') . "/images/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
            "Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city",
            "$city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city",
            "Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
