<?php
namespace Opencart\Admin\Controller\Extension\OpexLang\Language;
class Ukua extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('extension/opex_lang/language/ukua');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language')
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/opex_lang/language/ukua', 'user_token=' . $this->session->data['user_token'])
		];

		$data['save'] = $this->url->link('extension/opex_lang/language/ukua|save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language');

		$data['language_ukua_status'] = $this->config->get('language_ukua_status');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/opex_lang/language/ukua', $data));
	}

	public function save(): void {
		$this->load->language('extension/opex_lang/language/ukua');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/opex_lang/language/ukua')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('language_ukua', $this->request->post);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function install(): void {
		if ($this->user->hasPermission('modify', 'extension/language')) {
			// Add language
			$language_data = [
				'name'       => 'Українська',
				'code'       => 'uk-ua',
				'locale'     => 'uk-ua',
				'extension'  => 'opex_lang',
				'status'     => 1,
				'sort_order' => 1
			];

			$this->load->model('localisation/language');

			$this->model_localisation_language->addLanguage($language_data);


			// Add startup to catalog
			$startup_data = [
				'code'        => 'language_ukua',
				'description' => 'Ukrainian language',
				'action'      => 'catalog/extension/opex_lang/startup/ukua',
				'status'      => 1,
				'sort_order'  => 1
			];
			$startup_admin_data = [
				'code'        => 'admin_language_ukua',
				'description' => 'Ukrainian language in admin',
				'action'      => 'admin/extension/opex_lang/startup/ukua',
				'status'      => 1,
				'sort_order'  => 2
			];
			$this->load->model('setting/startup');
			$this->model_setting_startup->addStartup($startup_data);
			$this->model_setting_startup->addStartup($startup_admin_data);
		}
	}

	public function uninstall(): void {
		if ($this->user->hasPermission('modify', 'extension/language')) {
			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguageByCode('uk-ua');

			if ($language_info) {
				$this->model_localisation_language->deleteLanguage($language_info['language_id']);
			}

			$this->model_setting_startup->deleteStartupByCode('language_ukua');
			$this->model_setting_startup->deleteStartupByCode('admin_language_ukua');
		}
	}
}
