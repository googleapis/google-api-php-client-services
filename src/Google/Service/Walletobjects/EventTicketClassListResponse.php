<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:55
 */

class Google_Service_Walletobjects_EventTicketClassListResponse extends Google_Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = array(
    );
    protected $paginationType = 'Google_Service_Walletobjects_Pagination';
    protected $paginationDataType = '';
    protected $resourcesType = 'Google_Service_Walletobjects_EventTicketClass';
    protected $resourcesDataType = 'array';


    public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
    {
        $this->pagination = $pagination;
    }
    public function getPagination()
    {
        return $this->pagination;
    }
    public function setResources($resources)
    {
        $this->resources = $resources;
    }
    public function getResources()
    {
        return $this->resources;
    }
}