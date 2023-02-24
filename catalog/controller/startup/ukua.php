<?php
namespace Opencart\Catalog\Controller\Extension\OpexLang\Startup;
class Ukua extends \Opencart\System\Engine\Controller {
	public function index(): void {
		if ($this->config->get('language_ukua_status')) {
			$this->language->addPath('extension/opex_lang/extension/opencart', DIR_EXTENSION . 'opex_lang/extension/opencart/catalog/language/');
			$this->event->register('language/*/after', new \Opencart\System\Engine\Action('extension/opex_lang/startup/ukua.event'));
		}
	}

	public function event(&$route): void {
		$override = [
			'extension/opencart/captcha/basic',
			'extension/opencart/module/account',
			'extension/opencart/module/bestseller',
			'extension/opencart/module/category',
			'extension/opencart/module/featured',
			'extension/opencart/module/filter',
			'extension/opencart/module/information',
			'extension/opencart/module/latest',
			'extension/opencart/module/special',
			'extension/opencart/module/store',
			'extension/opencart/payment/bank_transfer',
			'extension/opencart/payment/cheque',
			'extension/opencart/payment/cod',
			'extension/opencart/payment/credit_card',
			'extension/opencart/payment/free_checkout',
			'extension/opencart/shipping/flat',
			'extension/opencart/shipping/free',
			'extension/opencart/shipping/item',
			'extension/opencart/shipping/pickup',
			'extension/opencart/shipping/weight',
			'extension/opencart/total/coupon',
			'extension/opencart/total/credit',
			'extension/opencart/total/handling',
			'extension/opencart/total/low_order_fee',
			'extension/opencart/total/reward',
			'extension/opencart/total/shipping',
			'extension/opencart/total/sub_total',
			'extension/opencart/total/total',
			'extension/opencart/total/voucher',
		];

		if (in_array($route, $override)) {
			$this->language->load('extension/opex_lang/'. $route);
		}
	}
}
