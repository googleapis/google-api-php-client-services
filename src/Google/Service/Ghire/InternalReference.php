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

class Google_Service_Ghire_InternalReference extends Google_Collection
{
  protected $collection_key = 'overlap';
  protected $atsDataType = 'Google_Service_Ghire_LegacyAtsInternalReferenceData';
  protected $atsDataDataType = '';
  public $kind;
  protected $overlapType = 'Google_Service_Ghire_OrganizationOverlap';
  protected $overlapDataType = 'array';

  public function setAtsData(Google_Service_Ghire_LegacyAtsInternalReferenceData $atsData)
  {
    $this->atsData = $atsData;
  }
  public function getAtsData()
  {
    return $this->atsData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOverlap($overlap)
  {
    $this->overlap = $overlap;
  }
  public function getOverlap()
  {
    return $this->overlap;
  }
}
