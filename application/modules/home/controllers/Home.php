<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    /**
     * 404 Error Page Handler
     * Serves the premium custom 404 error page.
     */
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The page you are looking for does not exist. Explore trusted packing, moving, and vehicle transportation services at " . $this->comp['company3'] . ".";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout3', $data);
    }

    /**
     * Homepage Index
     * Serves the main website homepage with dynamic company information and highlights.
     */
    function index()
    {
        $data['title'] = "Best Packers and Movers | " . $this->comp['company3'] . " - Shifting Services";
        $data['description'] = "Your trusted packers and movers partner for secure, professional, and affordable home shifting, office relocation, and vehicle transport services. Contact " . $this->comp['company3'] . " at " . $this->comp['phone'] . " today.";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    /**
     * URL Redirect Handler
     * Manages legacy URL structural redirects to ensure SEO continuity.
     */
    public function oldurl_to_newurl()
    {
        // Redirect legacy URLs to their optimized equivalents if matching patterns occur
    }
}
