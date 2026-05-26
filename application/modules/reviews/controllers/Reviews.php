<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    private function loadReviews() {
        $path = FCPATH . 'admin_data/reviews.json';
        if (!file_exists($path)) return [];
        return json_decode(file_get_contents($path), true) ?: [];
    }

    private function saveReviews($reviews) {
        $path = FCPATH . 'admin_data/reviews.json';
        file_put_contents($path, json_encode($reviews, JSON_PRETTY_PRINT));
    }

    function index()
    {
        $reviews = $this->loadReviews();
        
        // Filter by star rating if requested
        $star_filter = $this->input->get('star');
        if ($star_filter) {
            $reviews = array_filter($reviews, function($r) use ($star_filter) {
                return ($r['rating'] ?? 5) == $star_filter;
            });
        }

        // Show only 'show' status
        $data['reviews'] = array_filter($reviews, function($r) {
            return ($r['status'] ?? 'show') === 'show';
        });
        
        $data['title'] = "Customer Reviews & Ratings | " . $this->comp['company3'];
        $data['description'] = "Detailed feedback and ratings from our satisfied clients. Read real reviews about our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $reviews = $this->loadReviews();
            
            $new_review = [
                "id" => time(),
                "name" => $this->input->post('name'),
                "city" => $this->input->post('city'),
                "rating" => (int) $this->input->post('rating'),
                "review" => $this->input->post('review'),
                "status" => "hide", // Pending approval
                "created_at" => date('Y-m-d H:i:s')
            ];
            
            $reviews[] = $new_review;
            $this->saveReviews($reviews);
            
            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted for approval.');
            redirect('reviews');
        }
    }
}