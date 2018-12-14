<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:55
 */

class Google_Service_Walletobjects_EventTicketClassMask extends Google_Collection
{
    protected $collection_key = 'fields';
    protected $internal_gapi_mappings = array(
    );
    protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
    protected $fieldsDataType = 'array';
    public $projection;


    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function getFields()
    {
        return $this->fields;
    }
    public function setProjection($projection)
    {
        $this->projection = $projection;
    }
    public function getProjection()
    {
        return $this->projection;
    }
}