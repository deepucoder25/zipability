<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    /**
     * About Us Page
     * Serves the main company profile page highlighting legacy, mission, and expertise.
     */
    function index()
    {
        $data['title'] = "About Us - Trusted Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Learn more about " . $this->comp['company3'] . " and our " . $this->comp['experience'] . " Years Legacy. Discover our premium packers and movers infrastructure, expert shifting team, mission, and vision.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * Why Choose Us Page
     * Details key benefits, safety standouts, and quality assurance differentiators.
     */
    function choose()
    {
        $data['title'] = "Why Choose Us for Shifting & Relocation | " . $this->comp['company3'];
        $data['description'] = "Discover why customers trust " . $this->comp['company3'] . " for secure, professional, and transparently priced household shifting, vehicle transport, and corporate relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * Frequently Asked Questions (FAQs) Page
     * Clarifies transit queries, insurance policies, delivery windows, and shifting rates.
     */
    function faqs()
    {
        $data['title'] = "Packers and Movers FAQs - Shifting Queries | " . $this->comp['company3'];
        $data['description'] = "Get quick answers to common queries about packers and movers charges, shifting estimates, transit insurance policies, delivery timelines, and tracking details.";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * Customer Testimonials Page
     * Highlights positive customer feedback, ratings, and relocation reviews.
     */
    function testimonials()
    {
        $data['title'] = "Client Testimonials & Shifting Reviews | " . $this->comp['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $this->comp['company3'] . " home shifting, vehicle transportation, and corporate office relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * Reviews Redirect
     * Redirects users to the centralized reviews listing module.
     */
    function reviews()
    {
        redirect('reviews');
    }

    /**
     * Privacy Policy Page
     * Outlines personal data security standards and information protection policies.
     */
    function privacy()
    {
        $data['title'] = "Privacy Policy & Data Security | " . $this->comp['company3'];
        $data['description'] = "Learn how " . $this->comp['company3'] . " handles, processes, and protects your personal data and shipment information during your relocation process.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * Terms and Conditions Page
     * Details rules, transport policies, and conditions of carrier service.
     */
    function terms()
    {
        $data['title'] = "Terms & Conditions of Relocation Service | " . $this->comp['company3'];
        $data['description'] = "Read the standard terms and conditions governing packers and movers, transport logistics, and storage services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * How It Works Page
     * Explains the full step-by-step moving, shipping, and delivery journey.
     */
    function how_it_works()
    {
        $data['title'] = "How Packers and Movers Shifting Works - Step-by-Step | " . $this->comp['company3'];
        $data['description'] = "A transparent, step-by-step guide to our professional motorcycle shipping, household packing, secure transit, and doorstep moving process pan-India.";
        $data['module'] = "about";
        $data['view_file'] = "how_it_works";
        echo Modules::run('template/layout2', $data);
    }

    /**
     * Careers Page
     * Details job vacancies, corporate packaging roles, and staff opportunities.
     */
    function careers()
    {
        $data['title'] = "Careers - Join Our Professional Shifting Team | " . $this->comp['company3'];
        $data['description'] = "Explore job openings, custom packaging opportunities, warehouse logistics management, and customer relationship roles at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "careers";
        echo Modules::run('template/layout2', $data);
    }
}

