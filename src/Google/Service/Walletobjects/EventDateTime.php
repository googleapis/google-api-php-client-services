<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:39
 */

class Google_Service_Walletobjects_EventDateTime extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $customDoorsOpenLabelType = 'Google_Service_Walletobjects_LocalizedString';
    protected $customDoorsOpenLabelDataType = '';
    public $doorsOpen;
    public $doorsOpenLabel;
    public $end;
    public $kind;
    public $start;


    public function setCustomDoorsOpenLabel(Google_Service_Walletobjects_LocalizedString $customDoorsOpenLabel)
    {
        $this->customDoorsOpenLabel = $customDoorsOpenLabel;
    }
    public function getCustomDoorsOpenLabel()
    {
        return $this->customDoorsOpenLabel;
    }
    public function setDoorsOpen($doorsOpen)
    {
        $this->doorsOpen = $doorsOpen;
    }
    public function getDoorsOpen()
    {
        return $this->doorsOpen;
    }
    public function setDoorsOpenLabel($doorsOpenLabel)
    {
        $this->doorsOpenLabel = $doorsOpenLabel;
    }
    public function getDoorsOpenLabel()
    {
        return $this->doorsOpenLabel;
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
}