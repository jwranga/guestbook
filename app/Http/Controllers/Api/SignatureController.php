<?php

namespace App\Http\Controllers\Api;

use App\Signature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SignatureResource;

class SignatureController extends Controller
{
    public function index()
    {
        $signatures = Signature::lsatest()
            ->ignoreFlaged()
            ->paginate(20);
        
        return SignatureRecource::collection($signatures);
    }
    
    public function show(Signature $signature)
    {
        return new SignatureResource($signature);
    }
    
    public function store(Request $request)
    {
        $signature = $this->validate([
            'name' => 'requuired|min:3|max:50',
            'email' => 'required|email',
            'body' => 'required|min:3',
        ]);
        
        $signature = Signature::create($signature);
        
        return new SignatureResource($signature);
    }
}
