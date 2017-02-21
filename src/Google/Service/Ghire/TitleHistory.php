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

class Google_Service_Ghire_TitleHistory extends Google_Model
{
  public $kind;
  public $obsoleteDate;
  public $requisitionTitle;
  public $titleHistoryId;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setObsoleteDate($obsoleteDate)
  {
    $this->obsoleteDate = $obsoleteDate;
  }
  public function getObsoleteDate()
  {
    return $this->obsoleteDate;
  }
  public function setRequisitionTitle($requisitionTitle)
  {
    $this->requisitionTitle = $requisitionTitle;
  }
  public function getRequisitionTitle()
  {
    return $this->requisitionTitle;
  }
  public function setTitleHistoryId($titleHistoryId)
  {
    $this->titleHistoryId = $titleHistoryId;
  }
  public function getTitleHistoryId()
  {
    return $this->titleHistoryId;
  }
}
