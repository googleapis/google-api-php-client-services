<?php

class Google_Service_Walletobjects_Uri extends Google_Model {

    protected $internal_gapi_mappings = array();

    public $description;

    public $kind;

    protected $localizedDescriptionType = 'Google_Service_Walletobjects_LocalizedString';

    protected $localizedDescriptionDataType = '';

    public $uri;


    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setLocalizedDescription(Google_Service_Walletobjects_LocalizedString $localizedDescription) {
        $this->localizedDescription = $localizedDescription;
    }

    public function getLocalizedDescription() {
        return $this->localizedDescription;
    }

    public function setUri($uri) {
        $this->uri = $uri;
    }

    public function getUri() {
        return $this->uri;
    }
}