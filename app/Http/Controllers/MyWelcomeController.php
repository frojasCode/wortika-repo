<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\WelcomeNotification\WelcomeController as BaseWelcomeController;
use Symfony\Component\HttpFoundation\Response;


class MyWelcomeController extends BaseWelcomeController
{
    public function sendPasswordSavedResponse(): Response
    {
        return redirect()->route('home');
    }
    public function rules()
    {
        return [
            'password' => 'required|confirmed|min:6',
        ];
    }
}