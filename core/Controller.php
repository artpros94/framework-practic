<?php

namespace Core;

class controller
{
    protected $loyaut = 'default';

    protected function render($view, $data){
        return new Page($this->loyaut, $this->title, $view, $data);
    }
}