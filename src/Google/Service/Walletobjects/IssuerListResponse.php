<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:34
 */

class Google_Service_Walletobjects_IssuerListResponse extends Google_Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = array(
    );
    protected $resourcesType = 'Google_Service_Walletobjects_Issuer';
    protected $resourcesDataType = 'array';


    public function setResources($resources)
    {
        $this->resources = $resources;
    }
    public function getResources()
    {
        return $this->resources;
    }
}