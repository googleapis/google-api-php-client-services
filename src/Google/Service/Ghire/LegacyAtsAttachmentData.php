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

class Google_Service_Ghire_LegacyAtsAttachmentData extends Google_Model
{
  public $applicationFileId;
  public $kind;
  public $label;
  public $shouldPrint;

  public function setApplicationFileId($applicationFileId)
  {
    $this->applicationFileId = $applicationFileId;
  }
  public function getApplicationFileId()
  {
    return $this->applicationFileId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setShouldPrint($shouldPrint)
  {
    $this->shouldPrint = $shouldPrint;
  }
  public function getShouldPrint()
  {
    return $this->shouldPrint;
  }
}
