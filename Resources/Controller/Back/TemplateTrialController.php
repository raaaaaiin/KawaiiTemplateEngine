<?php
session_start();
class EngienController{
    function render(): void
    {
        require_once 'Resources/View/Back/EngineView.php';
    }

}

$_SESSION['CurrentSelection'] = 'EngineController';
$display = new TimelineController;
$display->render();
