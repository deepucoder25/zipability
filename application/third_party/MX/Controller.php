<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9155657049';
        $this->comp['phonehtml'] = 'tel:+919155657049';
        $this->comp['phone1'] = '+91 0000000000';
        $this->comp['phonehtml1'] = 'tel:+910000000000';

        // Branch phone numbers
        $this->comp['phone_hyd'] = '+91-9155657049';
        $this->comp['phonehtml_hyd'] = 'tel:+919155657049';
        $this->comp['phone_blr'] = '+91-9431027514';
        $this->comp['phonehtml_blr'] = 'tel:+919431027514';
        $this->comp['phone_chn'] = '+91-9994069815';
        $this->comp['phonehtml_chn'] = 'tel:+919994069815';

        $this->comp['supportmail'] = 'support@mycompany.com';
        $this->comp['replyToMail'] = 'support@mycompany.com';
        $this->comp['mail'] = 'info@bikeparcel.in';    
        $this->comp['mailhtml'] = "mailto:info@bikeparcel.in";
        $this->comp['company3'] = 'Zipability Relocation Pvt.Ltd.';
        $this->comp['companydomain'] = 'mycompany.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";

        // Select active branch based on URI
        $uri = strtolower($_SERVER['REQUEST_URI'] ?? '');
        if (strpos($uri, 'hyderabad') !== false || strpos($uri, 'telangana') !== false) {
            $this->comp['active_branch'] = 'Hyderabad Branch';
            $this->comp['active_address'] = 'H. No: 8-7-47/1, Ghouri Nagar Masid, Old Bowenpally, Hyderabad – 500011';
            $this->comp['active_phone'] = $this->comp['phone_hyd'];
            $this->comp['active_phone_html'] = $this->comp['phonehtml_hyd'];
        } elseif (strpos($uri, 'bangalore') !== false || strpos($uri, 'karnataka') !== false) {
            $this->comp['active_branch'] = 'Bangalore Branch';
            $this->comp['active_address'] = 'First Floor, B-111, 14 DUTTL, 5th Main Road, Narasimha Layout, Yeswanthpur, Bangalore – 560022, Karnataka';
            $this->comp['active_phone'] = $this->comp['phone_blr'];
            $this->comp['active_phone_html'] = $this->comp['phonehtml_blr'];
        } elseif (strpos($uri, 'chennai') !== false || strpos($uri, 'tamil-nadu') !== false || strpos($uri, 'tamilnadu') !== false) {
            $this->comp['active_branch'] = 'Chennai Branch';
            $this->comp['active_address'] = 'H. No. 56, Sakthi Garden, 2nd main Road, 4th Street, Senneekuppam Poonamallee, Chennai – 600056';
            $this->comp['active_phone'] = $this->comp['phone_chn'];
            $this->comp['active_phone_html'] = $this->comp['phonehtml_chn'];
        } else {
            $this->comp['active_branch'] = 'Main Branch';
            $this->comp['active_address'] = 'Shop No.17, Building No.2, Deeplaxmi Rajaram Residency, Kalher, Bhiwandi, Mumbai, Pin Code- 421302';
            $this->comp['active_phone'] = $this->comp['phone'];
            $this->comp['active_phone_html'] = $this->comp['phonehtml'];
        }

        // Dynamically compute WhatsApp link for the active branch number
        $active_phone_digits = preg_replace('/\D+/', '', (string) $this->comp['active_phone']);
        $this->comp['whatsapphtml'] = "https://wa.me/" . $active_phone_digits;

        $this->comp['address'] = $this->comp['active_address'];
        $this->comp['address1'] = "H. No: 8-7-47/1, Ghouri Nagar Masid, Old Bowenpally";
        $this->comp['address2'] = "Hyderabad – 500011";
        $this->comp['addressRegion'] = "Hyderabad";
        $this->comp['postalCode'] = "500011";   
        $this->comp['companystate'] = "Telangana";
        $this->comp['themeColor'] = "#00B5B8";

        $this->comp['experience'] = "15+";
        $this->comp['startYear'] = "2011";

        $this->comp['happyClients'] = "39,850+";
        $this->comp['yearsExperience'] = "15+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "20+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
