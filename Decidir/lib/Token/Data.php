<?php
namespace Decidir\Token;

class Data extends \Decidir\Data\AbstractData {

	public function __construct(array $data) {

		$this->setRequiredFields(array(
			"card_number" => array(
				"name" => "card_number"
			),
			"card_expiration_month" => array(
				"name" => "card_expiration_month"
			),
			"card_expiration_year" => array(
				"name" => "card_expiration_year"
			),
			"card_holder_name" => array(
				"name" => "card_holder_name"
			),
		));

        $this->setOptionalFields(array(
            "security_code" => array(
                "name" => "security_code"
            ),
            "type" => array(
                "name" => "type"
            ),
            "number" => array(
				"name" => "number"
			),
			"card_holder_birthday"=> array(
				"name" => "card_holder_birthday"
			),
			"card_holder_door_number"=> array(
				"name" => "card_holder_door_number"
			),
        ));

		parent::__construct($data);
	}

	public function getData(){
		return $array = json_encode($this->getDataField());
	}
}