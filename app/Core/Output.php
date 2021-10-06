<?php
/**
 * @author Cristian Vasquez
 * @see https://github.com/cristianV0117
 */
namespace Core;

final class Output
{
    /**
     * @param array
     * @return string
     */
    public function json(array $request): string
    {
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($request);
    }
}