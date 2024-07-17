<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Account;
use App\Http\Controllers\Controller;
use Validator;

class PaymentController extends Controller
{
  public function store(Request $request)
  {
        #write your code for payment creation here...
        #model name = Payment
        #table name = payments
        #table fields = id,account,amount
        #all fields are required
  }
}
