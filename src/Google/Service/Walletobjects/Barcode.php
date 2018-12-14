<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:39
 */

class Google_Service_Walletobjects_Barcode extends Google_Model {

    protected $internal_gapi_mappings = array();

    public $alternateText;

    public $kind;

    public $type;

    public $value;


    public function setAlternateText($alternateText) {
        $this->alternateText = $alternateText;
    }

    public function getAlternateText() {
        return $this->alternateText;
    }

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}