<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CsrfController extends Controller
{
    public function setCsrfCookie()
    {
        return response()->json(['csrfToken' => csrf_token()], 200)
            ->cookie('XSRF-TOKEN', csrf_token(), 60, '/', null, false, true);
    }
}
