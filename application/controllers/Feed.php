<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {

    public function index()
    {
        $data = array(
			'encoding' 			=> 'utf-8',
			'feed_name' 		=> 'JAI KALSEL',
			'feed_url' 			=> 'https://jaikalsel.damhafafano.com/feed/',
			'page_description' 	=> 'Jemaat Ahmadiyah Indonesia Kalimantan Selatan',
			'page_language' 	=> 'en-ca',
			'creator_email' 	=> 'support@damhafafano.com',
			'posts' 			=> $this->m_jai->getPost(10)
		);


		header("Content-Type: application/rss+xml");
		$this->load->vars($data);
		$this->load->view('rss');
    }

}

/* End of file Feed.php */
