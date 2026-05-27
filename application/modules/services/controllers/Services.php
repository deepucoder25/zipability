<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function packing_moving()
    {
        $data['title'] = "Best Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional packing and moving services from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates.";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loading_unloading()
    {
        $data['title'] = "Professional Loading & Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Minimize loading damage with professional loading and unloading services from " . $this->comp['company3'] . ". Our team ensures safe and efficient handling of goods.";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function office_relocation()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ". Minimize downtime with our experienced office relocation experts.";
        $data['module'] = "services";
        $data['view_file'] = "office_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function car_transportation()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ". On-time and damage-free vehicle delivery across India.";
        $data['module'] = "services";
        $data['view_file'] = "car_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transportation()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services from " . $this->comp['company3'] . ". We ensure scratch-free and timely delivery.";
        $data['module'] = "services";
        $data['view_file'] = "bike_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function warehouse_and_storage()
    {
        $data['title'] = "Secure Warehousing & Storage Services | " . $this->comp['company3'];
        $data['description'] = "Safe and spacious household & commercial storage services from " . $this->comp['company3'] . ". Clean, fire-safe, and 24/7 monitored warehouses.";
        $data['module'] = "services";
        $data['view_file'] = "warehouse_and_storage";
        echo Modules::run('template/layout2', $data);
    }

    function corporate_shifting()
    {
        $data['title'] = "Corporate Shifting & Employee Relocation | " . $this->comp['company3'];
        $data['description'] = "Premium corporate relocation services by " . $this->comp['company3'] . ". Safe packing and movement of office inventory, computers, and furniture.";
        $data['module'] = "services";
        $data['view_file'] = "corporate_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function goods_insurance()
    {
        $data['title'] = "Household Goods Transit Insurance Services | " . $this->comp['company3'];
        $data['description'] = "Secure your move with comprehensive transit insurance services from " . $this->comp['company3'] . ". Safe packing and guaranteed financial coverage against accidental damage.";
        $data['module'] = "services";
        $data['view_file'] = "goods_insurance";
        echo Modules::run('template/layout2', $data);
    }
}
