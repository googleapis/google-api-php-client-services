<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Supportcases_Summary extends Google_Model
{
  protected $casesByChannelType = 'Google_Service_Supportcases_Statistic';
  protected $casesByChannelDataType = 'map';
  protected $casesByProductType = 'Google_Service_Supportcases_Statistic';
  protected $casesByProductDataType = 'map';
  protected $mostRecentOpenCaseType = 'Google_Service_Supportcases_Interaction';
  protected $mostRecentOpenCaseDataType = '';
  protected $openCasesType = 'Google_Service_Supportcases_Statistic';
  protected $openCasesDataType = '';
  protected $totalCasesType = 'Google_Service_Supportcases_Statistic';
  protected $totalCasesDataType = '';

  public function setCasesByChannel($casesByChannel)
  {
    $this->casesByChannel = $casesByChannel;
  }
  public function getCasesByChannel()
  {
    return $this->casesByChannel;
  }
  public function setCasesByProduct($casesByProduct)
  {
    $this->casesByProduct = $casesByProduct;
  }
  public function getCasesByProduct()
  {
    return $this->casesByProduct;
  }
  public function setMostRecentOpenCase(Google_Service_Supportcases_Interaction $mostRecentOpenCase)
  {
    $this->mostRecentOpenCase = $mostRecentOpenCase;
  }
  public function getMostRecentOpenCase()
  {
    return $this->mostRecentOpenCase;
  }
  public function setOpenCases(Google_Service_Supportcases_Statistic $openCases)
  {
    $this->openCases = $openCases;
  }
  public function getOpenCases()
  {
    return $this->openCases;
  }
  public function setTotalCases(Google_Service_Supportcases_Statistic $totalCases)
  {
    $this->totalCases = $totalCases;
  }
  public function getTotalCases()
  {
    return $this->totalCases;
  }
}
