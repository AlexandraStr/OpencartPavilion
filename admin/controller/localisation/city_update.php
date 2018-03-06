<?php


class ControllerLocalisationCityUpdate extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('localisation/city_update');

		$this->document->setTitle($this->language->get('heading_title'));

        require_once(DIR_SYSTEM.'library/Delivery/NovaPoshtaApi2.php');
        require_once(DIR_SYSTEM.'library/Delivery/NovaPoshtaApi2Areas.php');

        $np = new LisDev\Delivery\NovaPoshtaApi2($this->config->get('novaposhta_api_key'));
        $results = $np->getCities();


        foreach ($results['data'] as $value){
            $cities[] = array(
                'city_id' => $value['CityID'],
                'name'       => addslashes($value['Description']),
                'name_ru'       => addslashes($value['DescriptionRu']),
                'area' => addslashes($value['Area']),
                'ref'  => addslashes($value['Ref']),

                'type' => addslashes($value['SettlementTypeDescription']),
                'type_ru' => addslashes($value['SettlementTypeDescriptionRu'])
            );
        }

        $this->load->model('localisation/city_update');
        $this->model_localisation_city_update->updateTableCity($cities);
		$this->getList();
	}

	protected function getList() {
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text'		=> $this->language->get('text_home'),
			'href'		=> $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text'		=> $this->language->get('heading_title'),
			'href'		=> $this->url->link('localisation/city_update', 'token=' . $this->session->data['token'] . $url, 'SSL')
		);

		$data['back'] = $this->url->link('localisation/city', 'token=' . $this->session->data['token'] . $url, 'SSL');
		$data['heading_title'] = $this->language->get('heading_title');
        $data['text_success'] = $this->language->get('text_success');
		
        $data['token'] = $this->session->data['token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('localisation/city_update_list.tpl', $data));
	}

  }