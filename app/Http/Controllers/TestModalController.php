<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\TestModalRequest;
use App\Repository\TestModalInterface;

class TestModalController
{
    public function creat(TestModalRequest $request, TestModalInterface $testModalInterface):RedirectResponse
    {
        dd($request);
    }
}
