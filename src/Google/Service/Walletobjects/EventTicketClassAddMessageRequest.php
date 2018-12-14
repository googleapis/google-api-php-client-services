<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:53
 */

class Google_Service_Walletobjects_EventTicketClassAddMessageRequest extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
    protected $messageDataType = '';
    public $reviewStatus;


    public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }
    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }
}