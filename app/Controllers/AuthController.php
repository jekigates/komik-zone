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
        if (! $this->request->is('post')) {
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
                if ($field === 'email' || $field === 'password') {
                    $errors[$field] = $error;
                }
            }

            // Check if there are any errors for email or password.
            if (isset($errors['email']) || isset($errors['password'])) {
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
            return redirect()->to('/');
        }
        
        return redirect()->to('/login')->with('error', 'Invalid email or password.');
    }

    public function attemptLogin()
    {
        helper('form');
        $data['title'] = 'Login';

        $post = $this->request->getPost(['email', 'password']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'email' => 'required|valid_email',
            'password'  => 'required|min_length[8]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', $data)
                . view('auth/login')
                . view('templates/footer');
        }

        return view('templates/header', $data)
            . view('auth/login')
            . view('templates/footer');
        
    }

    public function register()
    {
        helper('form');
        
        $data['title'] = 'Register';

        return view('templates/header', $data)
            . view('auth/register')
            . view('templates/footer');
    }

    public function logout()
    {
        // Handle logout functionality here
    }
}
