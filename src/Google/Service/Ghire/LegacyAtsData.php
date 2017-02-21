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

class Google_Service_Ghire_LegacyAtsData extends Google_Model
{
  public $euPrivacyOptIn;
  public $genderVerified;
  public $kind;
  public $normalizedName;
  public $soundexName;
  public $usRaceVerified;

  public function setEuPrivacyOptIn($euPrivacyOptIn)
  {
    $this->euPrivacyOptIn = $euPrivacyOptIn;
  }
  public function getEuPrivacyOptIn()
  {
    return $this->euPrivacyOptIn;
  }
  public function setGenderVerified($genderVerified)
  {
    $this->genderVerified = $genderVerified;
  }
  public function getGenderVerified()
  {
    return $this->genderVerified;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNormalizedName($normalizedName)
  {
    $this->normalizedName = $normalizedName;
  }
  public function getNormalizedName()
  {
    return $this->normalizedName;
  }
  public function setSoundexName($soundexName)
  {
    $this->soundexName = $soundexName;
  }
  public function getSoundexName()
  {
    return $this->soundexName;
  }
  public function setUsRaceVerified($usRaceVerified)
  {
    $this->usRaceVerified = $usRaceVerified;
  }
  public function getUsRaceVerified()
  {
    return $this->usRaceVerified;
  }
}
