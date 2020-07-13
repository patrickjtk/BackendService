<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClientValidationController extends Controller
{
    public function existMobileNumber(Request $request, $value) {
        $result = User::where('mobile_number', $value)->exists();

        return response()->json([
            'message' => 'success',
            'data' => !$result
        ]);
    }

    public function existEmail(Request $request, $value) {
        $result = User::where('email', $value)->exists();

        return response()->json([
            'message' => 'success',
            'data' => !$result
        ]);
    }
}
