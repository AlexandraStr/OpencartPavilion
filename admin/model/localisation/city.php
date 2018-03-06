<?php
class ModelLocalisationCity extends Model {

	public function editCity($city_id, $data) {
        $query=$this->db->query("select language_id from " . DB_PREFIX . "language");
        $languages=$query->rows;
	   foreach ($languages as $language) {
           $this->db->query("UPDATE " . DB_PREFIX . "city SET name = '" . $this->db->escape($data['name'][$language['language_id']]) . "', status = '" . (int)$data['status'][$language['language_id']] . "' WHERE city_id = '" . (int)$city_id . "'AND language_id = '" . (int)$language['language_id'] . "'");
       }
		$this->cache->delete('city');
	}

	public function getCity($city_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "city WHERE city_id = '" . (int)$city_id . "'");

		return $query->rows;
	}

	public function getCities($data = array()) {
		if ($data) {
			$sql = "SELECT c.city_id AS city_id, c.zone AS zone, c.name AS name, c.status AS status, 
           (SELECT name FROM " . DB_PREFIX . "zone z WHERE z.code = c.zone AND z.status = '1' AND z.language_id = '" . (int)$this->config->get('config_language_id') . "') AS zone 
           FROM " . DB_PREFIX . "city c WHERE c.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY zone ASC";

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}

			$query = $this->db->query($sql);

			return $query->rows;
		} else {
			$city_data = $this->cache->get('city');

			if (!$city_data) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "city WHERE language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY name ASC");

				$city_data = $query->rows;

				$this->cache->set('city', $city_data);
			}

			return $city_data;
		}
	}

	public function getCitiesByZoneId($zone) {
		$city_data = $this->cache->get('city.' .$zone);

		if (!$city_data) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "city WHERE zone = " . $this->db->escape($zone)." AND status = '1'AND language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY name");

			$city_data = $query->rows;

			$this->cache->set('city.'.$zone, $city_data);
		}

		return $city_data;
	}

	public function getTotalCities($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "city c";

        $implode = array();

        $implode[] = "language_id = '" . (int)$this->config->get('config_language_id') . "'";

        if (isset($data['filter_zone']) && $data['filter_zone'] !== null) {
            $implode[] = "c.zone = '" . $this->db->escape($data['filter_zone'] ). "'";
        }

        if (!empty($data['filter_city'])) {
            $implode[] = "c.name LIKE '%" . $this->db->escape($data['filter_city']) . "%'";
        }

        if ($implode) {
            $sql .= " WHERE " . implode(" AND ", $implode);
        }

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

}