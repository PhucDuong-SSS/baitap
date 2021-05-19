<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PassportAuthService;

class PassportAuthController extends Controller
{
    protected $passportAuthService;
    public function __construct(PassportAuthService $passportAuthService)
    {
        $this->passportAuthService = $passportAuthService;
    }
    public function register(Request $request)
    {
       return $this->passportAuthService->register($request);
    }

    public function login(Request $request)
    {
        return $this->passportAuthService->login($request);
    }
}
