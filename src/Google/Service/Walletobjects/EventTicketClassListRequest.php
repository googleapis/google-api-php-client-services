<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:54
 */

class Google_Service_Walletobjects_EventTicketClassListRequest extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $resultMaskType = 'Google_Service_Walletobjects_EventTicketClassMask';
    protected $resultMaskDataType = '';


    public function setResultMask(Google_Service_Walletobjects_EventTicketClassMask $resultMask)
    {
        $this->resultMask = $resultMask;
    }
    public function getResultMask()
    {
        return $this->resultMask;
    }
}