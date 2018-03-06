<?php
class ModelShippingNovaposhta extends Model {

    function getQuote($address) {
        $this->load->language('shipping/novaposhta');

        if ($this->config->get('novaposhta_status')) {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

            if (!$this->config->get('novaposhta_geo_zone_id')) {
                $status = TRUE;
            } elseif ($query->num_rows) {
                $status = TRUE;
            } else {
                $status = FALSE;
            }
        } else {
            $status = FALSE;
        }

        $method_data = array();

        if (isset($this->request->get['city_ref'])) {
            $np = new LisDev\Delivery\NovaPoshtaApi2($this->config->get('novaposhta_api_key'));
            $cost = $np->getDocumentPrice($this->config->get('novaposhta_sender_city_ref'), $this->request->get['city_ref'], 'WarehouseWarehouse');
        } else{
            $cost = 0.00;
        }
        if ($status) {
            $quote_data = array();


			
            if ($this->config->get('novaposhta_free_total')< $this->cart->getSubTotal()) {
                $cost =0.00;
            }

            $quote_data['novaposhta'] = array(
                'code' => 'novaposhta.novaposhta',
                'title' => $this->language->get('text_description'),
                'cost' => $cost,
                'tax_class_id' => 0,
                'text' => $this->currency->format($cost,$this->session->data['currency'])
            );

            $method_data = array(
                'code' => 'novaposhta',
                'title' => $this->language->get('text_title'),
                'quote' => $quote_data,
                'sort_order' => $this->config->get('novaposhta_sort_order'),
                'error' => FALSE
            );
        }

        return $method_data;
    }

}

