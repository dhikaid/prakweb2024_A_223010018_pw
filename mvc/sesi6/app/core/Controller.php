<?php

class Controller
{
    // controller view methodnya
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
