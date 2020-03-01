<?php
namespace App\Orders;

use App\Billing\PaymentGatewayContract;
class OrderDetails
{
	private $payment;
	public function __construct(PaymentGatewayContract $payment)
	{
		$this->payment = $payment;
	}
	public function all($value='')
	{
		$this->payment->setDiscount(500);
		return [
			'name'=>'satlok',
			'address'=>'18 street',
		];
	}
}