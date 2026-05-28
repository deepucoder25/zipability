<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    /**
     * Blog Controller Constructor
     * Initializes core controller logic.
     */
    function __construct(){
        parent::__construct();
    }

    /**
     * SEO Slug Generator
     * Converts raw titles into clean, search engine friendly URL slugs.
     */
    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    /**
     * JSON Blog Loader
     * Accesses local files to fetch published blog content data.
     */
    private function loadBlogs() {
        $path = FCPATH . 'admin_data/blogs.json';
        if (!file_exists($path)) return [];
        return json_decode(file_get_contents($path), true) ?: [];
    }

    /**
     * Blog Main Route
     * Redirects root blog route to the view listing route.
     */
    function index() {
        redirect('blog/view');
    }

    /**
     * Blog View List Page
     * Renders a clean grid of all published blog posts with custom pagination.
     */
    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = array_reverse($this->loadBlogs());
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Official Packers and Movers Blog | " . $this->comp['company3'];
        $data['description'] = "Explore the official " . $this->comp['company3'] . " blog for expert packers and movers tips, home shifting checklists, vehicle transportation safety guides, and relocation pricing updates.";
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    /**
     * Single Blog Read Page
     * Renders a detailed view of a selected blog post based on its slug.
     */
    function read($slug = '') {
        // die("DEBUG: Slug received: " . $slug);
        $this->load->helper('text');

        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        foreach ($all_blogs as $b) {
            $custom_slug = $b['slug'] ?? '';
            $auto_slug = $this->slugify($b['title']);
            
            // Handle CI's translate_uri_dashes by replacing _ back to - in incoming slug
            $search_slug = str_replace('_', '-', $slug);

            if (
                (!empty($custom_slug) && strtolower($custom_slug) == strtolower($search_slug)) || 
                (strtolower($auto_slug) == strtolower($search_slug)) ||
                ($b['id'] == $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice(array_reverse($all_blogs), 0, 5);
            
            $data['title'] = ucfirst($selected_blog->title) . " | Shifting & Relocation Blog | " . $this->comp['company3'];
            $data['description'] = word_limiter(strip_tags($selected_blog->description), 160);
            
            $image_file = $selected_blog->image;
            $data['img'] = ($image_file && file_exists(FCPATH . 'uploads/blogs/' . $image_file)) ? base_url('uploads/blogs/'.$image_file) : base_url('assets/images/about/packers_movers.jpg');
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
