<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Best Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates.";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ". Minimize downtime with our experienced office relocation experts.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ". On-time and damage-free vehicle delivery across India.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services from " . $this->comp['company3'] . ". We ensure scratch-free and timely delivery.";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function storage()
    {
        $data['title'] = "Secure Warehousing & Storage Services | " . $this->comp['company3'];
        $data['description'] = "Safe and spacious household & commercial storage services from " . $this->comp['company3'] . ". Clean, fire-safe, and 24/7 monitored warehouses.";
        $data['module'] = "services";
        $data['view_file'] = "storage";
        echo Modules::run('template/layout2', $data);
    }

    function international()
    {
        $data['title'] = "Hassle-Free International Shifting | " . $this->comp['company3'];
        $data['description'] = "Reliable overseas relocation and international shifting services by " . $this->comp['company3'] . ". Complete customs clearance and secure transport.";
        $data['module'] = "services";
        $data['view_file'] = "international";
        echo Modules::run('template/layout2', $data);
    }

    function corporate()
    {
        $data['title'] = "Corporate Shifting & Employee Relocation | " . $this->comp['company3'];
        $data['description'] = "Premium corporate relocation services by " . $this->comp['company3'] . ". Safe packing and movement of office inventory, computers, and furniture.";
        $data['module'] = "services";
        $data['view_file'] = "corporate";
        echo Modules::run('template/layout2', $data);
    }

    function domestic()
    {
        $data['title'] = "Trusted Domestic Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Interstate and long-distance domestic relocation services by " . $this->comp['company3'] . ". Secure packaging and fast transit across India.";
        $data['module'] = "services";
        $data['view_file'] = "domestic";
        echo Modules::run('template/layout2', $data);
    }

    function intercity()
    {
        $data['title'] = "Intercity Packers and Movers Services | " . $this->comp['company3'];
        $data['description'] = "Efficient intercity shifting services from " . $this->comp['company3'] . ". Smooth household relocation between cities with tracking.";
        $data['module'] = "services";
        $data['view_file'] = "intercity";
        echo Modules::run('template/layout2', $data);
    }

    function local()
    {
        $data['title'] = "Fast Local Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Affordable and quick local home & office shifting services by " . $this->comp['company3'] . ". Experienced local moving team and cargo carriers.";
        $data['module'] = "services";
        $data['view_file'] = "local";
        echo Modules::run('template/layout2', $data);
    }

    function logistic()
    {
        $data['title'] = "B2B Logistics & Commercial Supply Chain Services | " . $this->comp['company3'];
        $data['description'] = "Reliable logistics and freight transport services from " . $this->comp['company3'] . ". High-quality supply chain solutions for corporate clients.";
        $data['module'] = "services";
        $data['view_file'] = "logistic";
        echo Modules::run('template/layout2', $data);
    }

    function pet()
    {
        $data['title'] = "Safe Pet Relocation & Animal Transportation | " . $this->comp['company3'];
        $data['description'] = "Caring and secure pet shifting services by " . $this->comp['company3'] . ". We transport your pets safely, ensuring comfort and wellness throughout the journey.";
        $data['module'] = "services";
        $data['view_file'] = "pet";
        echo Modules::run('template/layout2', $data);
    }
}
