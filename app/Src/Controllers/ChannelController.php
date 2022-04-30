<?php


namespace App\Src\Controllers;


use App\Src\Modules\Views\Views;

class ChannelController
{
    public function index(){
        $views = new Views();
        $views->addTemplate('layouts/head');
        $views->addTemplate('components/header');
        $views->addTemplate('components/channel_data_section');
        $views->addTemplate('layouts/footer');
        $views->attachData(['title' =>"OU videos service ", 'heading' => "Genady Heading"]);
        $views->attachStyles(['/app.css', 'channel']);
        echo($views->get());
    }

}