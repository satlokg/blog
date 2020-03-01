<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetail, PaymentGatewayContract $payment)
    {
       //$payment = new PaymentGateway('usd');
    	$order = $orderDetail->all();
       dd($payment->charge(2500));
    }
}
