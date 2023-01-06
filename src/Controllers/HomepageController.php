<?php
declare(strict_types=1);

namespace Codeacademy\OppExam\Controllers;

class HomepageController
{
    public function show(): void
    {
        require 'view/homepage.php';
    }
}