<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        helper('form');

        $data['title'] = 'Login';

        // Checks whether the form is submitted.
        if ($this->request->getMethod() !== 'post') {
            // The form is not submitted, so returns the form.
            return view('templates/header', $data)
                . view('auth/login')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['email', 'password']);

        // // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'email' => 'required|valid_email',
            'password'  => 'required|min_length[8]',
        ])) {
            // Get all errors from the validation.
            $validation = \Config\Services::validation();
            foreach ($validation->getErrors() as $field => $error) {
                $errors[$field] = $error;
            }

            // Check if there are any errors.
            if (count($errors) > 0) {
                // Redirect to login page with errors.
                return redirect()->to('/login')->with('errors', $errors);
            } else {
                // If there are no errors for email or password, set the account error.
                return redirect()->to('/login')->with('error', 'Invalid email or password.');
            }
        }

        $userModel = new UserModel();

        $user = $userModel->where('email', $post['email'])
                            ->first();

        // Verify password
        if ($user && password_verify($post['password'], $user['password'])) {
            // Success login
            session()->set('user', $user);
            return redirect()->to('/');
        }
        
        return redirect()->to('/login')->with('errors', ['account' => 'Akun tidak ditemukan.']);
    }

    public function register()
    {
        helper('form');

        $data['title'] = 'Register';

        // Checks whether the form is submitted.
        if ($this->request->getMethod() !== 'post') {
            // The form is not submitted, so returns the form.
            return view('templates/header', $data)
                . view('auth/register')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email', 'password']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name'     => 'required|min_length[3]|max_length[255]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
        ])) {
            // Get all errors from the validation.
            $validation = \Config\Services::validation();
            foreach ($validation->getErrors() as $field => $error) {
                $errors[$field] = $error;
            }

            // Redirect to register page with errors.
            return redirect()->to('/register')->with('errors', $errors);
        }

        // Hash the password.
        $password = password_hash($post['password'], PASSWORD_DEFAULT);

        // Create a new user in the database.
        $userModel = new UserModel();
        $user = [
            'name'     => $post['name'],
            'email'    => $post['email'],
            'password' => $password,
            'role'     => 'user',
        ];
        $userModel->save($user);

        $registeredUser = $userModel->where('email', $post['email'])
                  ->first();
        session()->set('user', $registeredUser);

        return redirect()->to('/');
    }

    public function logout() {
        session()->destroy();

        // Redirect the user to the login page
        return redirect()->to('/login');
    }
}
