<?php
namespace App\Billing;

use App\Billing\PaymentGatewayContract;
use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGatewayContract 
{
	private $currency;
	private $discount;
	public function __construct($currency){
		$this->currency = $currency;
		$this->discount = 0;
	}
	public function setDiscount($amount){
		$this->discount = $amount;
	}
	public function charge($amount){
		//charge to bank
		return [
			'amount'=>$amount-$this->discount,
			'confirmation_no'=>Str::random(),
			'currency'=>$this->currency,
			'discount'=>$this->discount,
		];

	}
}