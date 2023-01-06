<?php
namespace Codeacademy\OppExam\Interfaces;

interface RouterInterface
{
    public function process(string $url, string $method);
}