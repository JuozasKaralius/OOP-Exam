<?php
declare(strict_types=1);
namespace Codeacademy\OppExam\Framework;

use Codeacademy\OppExam\Controllers\ElectricityController;
use Codeacademy\OppExam\Controllers\HomepageController;
use Codeacademy\OppExam\Interfaces\RouterInterface;

class Router implements RouterInterface
{
    private $router = [];

    public function __construct(private DIContainer $di)
    {
    }

    public function process(string $url, string $method)
    {

        if ($url === '/' && $method === 'GET') {
            $controller = $this->di->get(HomepageController::class);
            $controller->show();
        }

        if (str_starts_with($url, '/electricities')) {
            $controller = $this->di->get(ElectricityController::class);

            if ($url == '/electricities' && $method == 'GET')
                $controller->list();
            if ($url == '/electricities' && $method == 'POST')
                $controller->create();
            if ($url == '/electricities' && $method == 'DELETE')
                $controller->delete();
        }
    }
}
