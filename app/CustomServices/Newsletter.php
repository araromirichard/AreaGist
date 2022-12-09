<?php

namespace App\CustomServices;

interface Newsletter
{
    public function subscribe(string $email, string $list = null);
}