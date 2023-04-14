<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function portal(Request $request)
    {
        return $request->user()->currentTeam->redirectToBillingPortal(
            route('dashboard')
        );
    }
}