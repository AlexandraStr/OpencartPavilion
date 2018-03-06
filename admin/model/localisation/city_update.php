<?php
class ModelLocalisationCityUpdate extends Model
{

    public function updateTableCity($cities)
    {

        $this->db->query("DROP TABLE `" . DB_PREFIX . "city`");

        $this->db->query("CREATE TABLE `" . DB_PREFIX . "city` (`city_id` int (11) NOT NULL,`language_id` int (3) NOT NULL, `name` varchar (128) NOT NULL, `area` varchar (128), `ref` varchar (128), `type` varchar (128) ,`zone` varchar (32) ,`status` int (11), `sort_order` int (11) NOT NULL DEFAULT '0') ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        foreach ($cities as $city) {
      //      $this->db->query("INSERT INTO `" . DB_PREFIX . "city` (`city_id`, `name`,`language_id`, `area`, `ref`,`type`, `sort_order`) VALUES (" . $city['city_id'] . "," .addslashes($city['name']) . ",'4'," . addcslashes($city['area']) . "," .addslashes($city['ref'] ). "," . addslashes($city['type']) . ",'0']");


            $this->db->query("INSERT INTO `" . DB_PREFIX . "city`
            SET city_id = '" . (int)$city['city_id'] . "',
             name = '" . $this->db->escape($city['name']) . "',
             language_id = '4',
              area = '" . $this->db->escape($city['area']) . "', 
              ref = '" . $this->db->escape($city['ref']) . "',
              type = '" . $this->db->escape($city['type']) . "',
              status='1',
                sort_order = '0'");

            $this->db->query("INSERT INTO `" . DB_PREFIX . "city`
            SET city_id = '" . (int)$city['city_id'] . "',
             name = '" . $this->db->escape($city['name_ru']) . "',
             language_id = '3',
              area = '" . $this->db->escape($city['area']) . "', 
              ref = '" . $this->db->escape($city['ref']) . "',
              type = '" . $this->db->escape($city['type_ru']) . "',
               status='1',
                sort_order = '0'");

              $this->db->query("UPDATE `" . DB_PREFIX . "city` c, (SELECT code,area FROM oc_zone WHERE `language_id`='4') z SET c.zone = z.code WHERE c.`area`= z.`area`");
        }
    }

    public function updateTableZone()
    {

        $this->db->query("DROP TABLE IF EXISTS `oc_zone`");

        $this->db->query("CREATE TABLE `oc_zone` (
                         `zone_id` int(11) NOT NULL,
                         `country_id` int(11) NOT NULL,
                         `name` varchar(128) NOT NULL,
                         `name_city` varchar(128) NOT NULL,
                         `code` varchar(32) NOT NULL,
                         `area` varchar(128) NOT NULL DEFAULT '',
                        `language_id` int(11) NOT NULL,
                        `status` tinyint(1) NOT NULL DEFAULT '1',
                         PRIMARY KEY (`zone_id`)
                          ) ENGINE=MyISAM DEFAULT CHARSET=utf8");

        $this->db->query("INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `name_city`, `code`, `area`, `language_id`, `status`)
        VALUES
       (1,220,'Вінницька','Вінниця','VN','71508129-9b87-11de-822f-000c2965ae0e',4,1),
	  (2,220,'Винницкая','Винница','VN','71508129-9b87-11de-822f-000c2965ae0e',3,1),
	(3,220,'Дніпропетровська','Дніпропетровськ','DP','7150812b-9b87-11de-822f-000c2965ae0e',4,1),
	(4,220,'Днепропетровская','Днепропетровск','DP','7150812b-9b87-11de-822f-000c2965ae0e',3,1),
	(5,220,'Донецька','Донецьк','DN','7150812c-9b87-11de-822f-000c2965ae0e',4,1),
	(6,220,'Донецкая','Донецк','DN','7150812c-9b87-11de-822f-000c2965ae0e',3,1),
	(7,220,'Житомирська','Житомир','ZH','7150812d-9b87-11de-822f-000c2965ae0e',4,1),
	(8,220,'Житомирская','Житомир','ZH','7150812d-9b87-11de-822f-000c2965ae0e',3,1),
	(9,220,'Запорізька','Запоріжжя','ZP','7150812f-9b87-11de-822f-000c2965ae0e',4,1),
	(10,220,'Запорожская','Запорожье','ZP','7150812f-9b87-11de-822f-000c2965ae0e',3,1),
	(11,220,'Івано-Франківська','Івано-Франківськ','IF','71508130-9b87-11de-822f-000c2965ae0e',4,1),
	(12,220,'Ивано-Франковская','Ивано-Франковск','IF','71508130-9b87-11de-822f-000c2965ae0e',3,1),
	(13,220,'Київська','Київ','KY','71508131-9b87-11de-822f-000c2965ae0e',4,1),
	(14,220,'Киевская','Киев','KY','71508131-9b87-11de-822f-000c2965ae0e',3,1),
	(15,220,'Кіровоградська','Кіровоград','KG','71508132-9b87-11de-822f-000c2965ae0e',4,1),
	(16,220,'Кировоградская','Кировоград','KG','71508132-9b87-11de-822f-000c2965ae0e',3,1),
	(17,220,'Луганська','Луганськ','LG','71508133-9b87-11de-822f-000c2965ae0e',4,1),
	(18,220,'Луганская','Луганск','LG','71508133-9b87-11de-822f-000c2965ae0e',3,1),
	(19,220,'Волинська','Луцьк','VL','7150812a-9b87-11de-822f-000c2965ae0e',4,1),
	(20,220,'Волынская','Луцк','VL','7150812a-9b87-11de-822f-000c2965ae0e',3,1),
	(21,220,'Львівська','Львів','LV','71508134-9b87-11de-822f-000c2965ae0e',4,1),
	(22,220,'Львовская','Львов','LV','71508134-9b87-11de-822f-000c2965ae0e',3,1),
	(23,220,'Миколаївська','Миколаїв','NK','71508135-9b87-11de-822f-000c2965ae0e',4,1),
	(24,220,'Николаевская','Николаев','NK','71508135-9b87-11de-822f-000c2965ae0e',3,1),
	(25,220,'Одеська','Одеса','OD','71508136-9b87-11de-822f-000c2965ae0e',4,1),
	(26,220,'Одесская','Одесса','OD','71508136-9b87-11de-822f-000c2965ae0e',3,1),
	(27,220,'Полтавська','Полтава','PL','71508137-9b87-11de-822f-000c2965ae0e',4,1),
	(28,220,'Полтавская','Полтава','PL','71508137-9b87-11de-822f-000c2965ae0e',3,1),
	(29,220,'Рівненська','Рівне','RV','71508138-9b87-11de-822f-000c2965ae0e',4,1),
	(30,220,'Ровненская','Ровно','RV','71508138-9b87-11de-822f-000c2965ae0e',3,1),
	(31,220,'Сумська','Суми','SU','71508139-9b87-11de-822f-000c2965ae0e',4,1),
	(32,220,'Сумская','Сумы','SU','71508139-9b87-11de-822f-000c2965ae0e',3,1),
	(33,220,'Тернопільська','Тернопіль','TP','7150813a-9b87-11de-822f-000c2965ae0e',4,1),
	(34,220,'Тернопольская','Тернополь','TP','7150813a-9b87-11de-822f-000c2965ae0e',3,1),
	(35,220,'Закарпатська','Ужгород','ZK','7150812e-9b87-11de-822f-000c2965ae0e',4,1),
	(36,220,'Закарпатская','Ужгород','ZK','7150812e-9b87-11de-822f-000c2965ae0e',3,1),
	(37,220,'Харківська','Харків','HK','7150813b-9b87-11de-822f-000c2965ae0e',4,1),
	(38,220,'Харьковская','Харьков','HK','7150813b-9b87-11de-822f-000c2965ae0e',3,1),
	(39,220,'Херсонська','Херсон','HR','7150813c-9b87-11de-822f-000c2965ae0e',4,1),
	(40,220,'Херсонская','Херсон','HR','7150813c-9b87-11de-822f-000c2965ae0e',3,1),
	(41,220,'Хмельницька','Хмельницький','HM','7150813d-9b87-11de-822f-000c2965ae0e',4,1),
	(42,220,'Хмельницкая','Хмельницкий','HM','7150813d-9b87-11de-822f-000c2965ae0e',3,1),
	(43,220,'Черкаська','Черкаси','CK','7150813e-9b87-11de-822f-000c2965ae0e',4,1),
	(44,220,'Черкасская','Черкассы','CK','7150813e-9b87-11de-822f-000c2965ae0e',3,1),
	(45,220,'Чернігівська','Чернігів','CG','71508140-9b87-11de-822f-000c2965ae0e',4,1),
	(46,220,'Черниговская','Чернигов','CG','71508140-9b87-11de-822f-000c2965ae0e',3,1),
	(47,220,'Чернівецька','Чернівці','CN','7150813f-9b87-11de-822f-000c2965ae0e',4,1),
	(48,220,'Черновицкая','Черновцы','CN','7150813f-9b87-11de-822f-000c2965ae0e',3,1)");

    }



}