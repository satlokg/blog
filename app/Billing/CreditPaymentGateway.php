<?php
namespace App\Billing;

use App\Billing\PaymentGatewayContract;
use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract 
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
		$fee = $amount*0.03;
		return [
			'amount'=>($amount-$this->discount)+$fee,
			'confirmation_no'=>Str::random(),
			'currency'=>$this->currency,
			'discount'=>$this->discount,
			'fee'=>$fee,
		];

	}
}