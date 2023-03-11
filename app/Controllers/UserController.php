<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = model(UserModel::class);

        $data = [
            'users' => $model->getUsers(),
            'title' => 'User List',
        ];

        return view('templates/header', $data)
            . view('pages/user/index')
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $model = model(UserModel::class);
        
        $data['user'] = $model->getUsers($id);
        
        if (empty($data['user'])) {
            throw new PageNotFoundException('Cannot find the user with ID: ' . $id);
        } 
        
        $data['title'] = $data['user']['name'];

        return view('templates/header', $data)
            . view('pages/user/view')
            . view('templates/footer');
    }
}
