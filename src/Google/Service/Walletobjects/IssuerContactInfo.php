<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:33
 */

class Google_Service_Walletobjects_IssuerContactInfo extends Google_Collection
{
    protected $collection_key = 'alertsEmails';
    protected $internal_gapi_mappings = array(
    );
    public $alertsEmails;
    public $email;
    public $name;
    public $phone;


    public function setAlertsEmails($alertsEmails)
    {
        $this->alertsEmails = $alertsEmails;
    }
    public function getAlertsEmails()
    {
        return $this->alertsEmails;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
}