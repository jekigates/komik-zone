<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use Myth\Auth\Models\UserModel;
use App\Config\Auth as AuthConfig;

class UserController extends BaseController
{
    /**
     * @var AuthConfig
     */
    protected $config;

    public function __construct()
    {
        $this->config = config('Auth');
    }

    public function index()
    {
        $model = model(UserModel::class);

        $data = [
            'config' => $this->config,
            'users' => $model->findAll(),
            'title' => 'User List',
        ];

        return view('pages/user/index', $data);
    }

    public function view($id = null)
    {
        $model = model(UserModel::class);
        
        $data = [
            'config' => $this->config,
            'title' => 'User List',
            'user' => $model->find($id),
        ];

        if (empty($data['user'])) {
            // return "bro";
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sorry, the news item you requested could not be found.');

            // throw new PageNotFoundException('Cannot find the user with ID: ' . $id);
        } 

        return view('pages/user/view', $data);
    }
}
