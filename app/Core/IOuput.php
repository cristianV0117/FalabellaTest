<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
namespace Core;

interface IOuput
{
    /**
     * @param array $request
     * @return string
     */
    public function json(array $request): string;
}