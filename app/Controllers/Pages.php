<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        $folder_name = 'pages/';

        if ($page === 'login' || $page === 'register') {
            helper('form');

            $folder_name = 'auth/';
        }
        
        if (! is_file(APPPATH . 'Views/' . $folder_name . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucwords(str_replace('_', ' ', $page));

        return view('templates/header', $data)
            . view($folder_name . $page)
            . view('templates/footer');
    }
}