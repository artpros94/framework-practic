<?php
namespace Project\Controllers;
use Core\Controller;

class HelloController extends Controller
{
    public function index()
    {
        return 'Hello my friend';
    }
}