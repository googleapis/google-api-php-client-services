<?php

class Google_Service_Walletobjects_Image extends Google_Model {

    protected $internal_gapi_mappings = array();

    public $kind;

    protected $sourceUriType = 'Google_Service_Walletobjects_Uri';

    protected $sourceUriDataType = '';


    public function setKind($kind) {
        $this->kind = $kind;
    }

    public function getKind() {
        return $this->kind;
    }

    public function setSourceUri(Google_Service_Walletobjects_Uri $sourceUri) {
        $this->sourceUri = $sourceUri;
    }

    public function getSourceUri() {
        return $this->sourceUri;
    }
}