<?php
namespace Opencart\Admin\Controller\Extension\OpexLang\Startup;
class Ukua extends \Opencart\System\Engine\Controller {
	public function index(): void {
		if ($this->config->get('language_ukua_status')) {
			$this->language->addPath('extension/opex_lang/extension/opencart', DIR_EXTENSION . 'opex_lang/extension/opencart/admin/language/');
			$this->event->register('language/*/after', new \Opencart\System\Engine\Action('extension/opex_lang/startup/ukua.eventAdmin'));
		}
	}

	public function eventAdmin(&$route): void {
		$override = [
			'extension/opencart/captcha/basic',
			'extension/opencart/currency/ecb',
			'extension/opencart/currency/fixer',
			'extension/opencart/dashboard/activity',
			'extension/opencart/dashboard/chart',
			'extension/opencart/dashboard/customer',
			'extension/opencart/dashboard/map',
			'extension/opencart/dashboard/online',
			'extension/opencart/dashboard/order',
			'extension/opencart/dashboard/recent',
			'extension/opencart/dashboard/sale',
			'extension/opencart/fraud/ip',
			'extension/opencart/module/account',
			'extension/opencart/module/banner',
			'extension/opencart/module/bestseller',
			'extension/opencart/module/category',
			'extension/opencart/module/featured',
			'extension/opencart/module/filter',
			'extension/opencart/module/html',
			'extension/opencart/module/information',
			'extension/opencart/module/latest',
			'extension/opencart/module/special',
			'extension/opencart/module/store',
			'extension/opencart/payment/bank_transfer',
			'extension/opencart/payment/cheque',
			'extension/opencart/payment/cod',
			'extension/opencart/payment/credit_card',
			'extension/opencart/payment/free_checkout',
			'extension/opencart/report/customer_activity',
			'extension/opencart/report/customer_order',
			'extension/opencart/report/customer_reward',
			'extension/opencart/report/customer_search',
			'extension/opencart/report/customer_subscription',
			'extension/opencart/report/customer_transaction',
			'extension/opencart/report/marketing',
			'extension/opencart/report/product_purchased',
			'extension/opencart/report/product_viewed',
			'extension/opencart/report/sale_coupon',
			'extension/opencart/report/sale_order',
			'extension/opencart/report/sale_return',
			'extension/opencart/report/sale_shipping',
			'extension/opencart/report/sale_tax',
			'extension/opencart/shipping/flat',
			'extension/opencart/shipping/free',
			'extension/opencart/shipping/item',
			'extension/opencart/shipping/pickup',
			'extension/opencart/shipping/weight',
			'extension/opencart/theme/basic',
			'extension/opencart/total/coupon',
			'extension/opencart/total/credit',
			'extension/opencart/total/handling',
			'extension/opencart/total/low_order_fee',
			'extension/opencart/total/reward',
			'extension/opencart/total/shipping',
			'extension/opencart/total/sub_total',
			'extension/opencart/total/tax',
			'extension/opencart/total/total',
			'extension/opencart/total/voucher',
		];

		if (in_array($route, $override)) {
			$this->language->load('extension/opex_lang/'. $route);
		}
	}
}
