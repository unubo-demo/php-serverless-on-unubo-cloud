<?php

namespace App;

/**
 * Class Handler
 * @package App
 */
class Handler
{
    /**
     * @param $data
     * @return
     */
    public function handle($data) {
        var_dump($_SERVER);
        phpinfo();
        return "PHP serverless on Unubo Cloud.";
    }
}
