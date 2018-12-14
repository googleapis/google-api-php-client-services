<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:33
 */

class Google_Service_Walletobjects_IssuerListRequest extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $resultMaskType = 'Google_Service_Walletobjects_IssuerMask';
    protected $resultMaskDataType = '';


    public function setResultMask(Google_Service_Walletobjects_IssuerMask $resultMask)
    {
        $this->resultMask = $resultMask;
    }
    public function getResultMask()
    {
        return $this->resultMask;
    }
}