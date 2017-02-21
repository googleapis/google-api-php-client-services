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

class Google_Service_Ghire_PhoneNumber extends Google_Model
{
  public $countryCode;
  public $countryCodeSource;
  public $extension;
  public $italianLeadingZero;
  public $kind;
  public $nationalNumber;
  public $preferredDomesticCarrierCode;
  public $rawInput;

  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setCountryCodeSource($countryCodeSource)
  {
    $this->countryCodeSource = $countryCodeSource;
  }
  public function getCountryCodeSource()
  {
    return $this->countryCodeSource;
  }
  public function setExtension($extension)
  {
    $this->extension = $extension;
  }
  public function getExtension()
  {
    return $this->extension;
  }
  public function setItalianLeadingZero($italianLeadingZero)
  {
    $this->italianLeadingZero = $italianLeadingZero;
  }
  public function getItalianLeadingZero()
  {
    return $this->italianLeadingZero;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNationalNumber($nationalNumber)
  {
    $this->nationalNumber = $nationalNumber;
  }
  public function getNationalNumber()
  {
    return $this->nationalNumber;
  }
  public function setPreferredDomesticCarrierCode($preferredDomesticCarrierCode)
  {
    $this->preferredDomesticCarrierCode = $preferredDomesticCarrierCode;
  }
  public function getPreferredDomesticCarrierCode()
  {
    return $this->preferredDomesticCarrierCode;
  }
  public function setRawInput($rawInput)
  {
    $this->rawInput = $rawInput;
  }
  public function getRawInput()
  {
    return $this->rawInput;
  }
}
