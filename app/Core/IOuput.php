<?php
namespace Core;
interface IOuput
{
    public function json (array $request): string;
}