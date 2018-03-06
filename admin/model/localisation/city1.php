<?php
class ModelLocalisationCity extends Model {
	public function getCity($zone) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "city WHERE zone = '" . $zone . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "' AND status = '1'");

		return $query->rows;
	}

    public function getCityByCityRef($city_ref) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "city WHERE ref = '" .$city_ref . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "' AND status = '1'");

        return $query->row;
    }

}