<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:36
 */
class Google_Service_Walletobjects_TranslatedString extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $kind;
    public $language;
    public $value;


    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
