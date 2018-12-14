<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:31
 */

class Google_Service_Walletobjects_ImageModuleData extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $mainImageType = 'Google_Service_Walletobjects_Image';
    protected $mainImageDataType = '';


    public function setMainImage(Google_Service_Walletobjects_Image $mainImage)
    {
        $this->mainImage = $mainImage;
    }
    public function getMainImage()
    {
        return $this->mainImage;
    }
}