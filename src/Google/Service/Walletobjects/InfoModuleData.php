<?php
/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 13.12.18
 * Time: 16:32
 */

class Google_Service_Walletobjects_InfoModuleData extends Google_Collection
{
    protected $collection_key = 'labelValueRows';
    protected $internal_gapi_mappings = array(
    );
    protected $labelValueRowsType = 'Google_Service_Walletobjects_LabelValueRow';
    protected $labelValueRowsDataType = 'array';
    public $showLastUpdateTime;


    public function setLabelValueRows($labelValueRows)
    {
        $this->labelValueRows = $labelValueRows;
    }
    public function getLabelValueRows()
    {
        return $this->labelValueRows;
    }
    public function setShowLastUpdateTime($showLastUpdateTime)
    {
        $this->showLastUpdateTime = $showLastUpdateTime;
    }
    public function getShowLastUpdateTime()
    {
        return $this->showLastUpdateTime;
    }
}