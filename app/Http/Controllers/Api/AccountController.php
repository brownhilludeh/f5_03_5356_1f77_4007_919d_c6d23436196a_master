<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        #write your code for account creation here...
        #model name = Account
        #table name = accounts
        #table fields = id,balance
        #all fields are required
    }

    public function get($id)
    {
        #write your code to get account details...
        #model name = Account
        #table name = accounts
        #table fields = id,balance
    }
}