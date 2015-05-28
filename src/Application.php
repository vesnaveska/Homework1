<?php

class Application
{
    public function run()
    {
        $controller = new Greeting();
        $controller->say('Alina');
    }
}