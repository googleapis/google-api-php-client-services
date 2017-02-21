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

class Google_Service_Supportcases_CaseData extends Google_Model
{
  protected $assigneeType = 'Google_Service_Supportcases_Assignee1';
  protected $assigneeDataType = '';
  public $productName;
  public $state;

  public function setAssignee(Google_Service_Supportcases_Assignee1 $assignee)
  {
    $this->assignee = $assignee;
  }
  public function getAssignee()
  {
    return $this->assignee;
  }
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  public function getProductName()
  {
    return $this->productName;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}
