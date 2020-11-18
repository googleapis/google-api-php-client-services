<?php
/*
 * Copyright 2014 Google Inc.
 *
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

class Google_Service_WebSecurityScanner_Authentication extends Google_Model
{
  protected $customAccountType = 'Google_Service_WebSecurityScanner_CustomAccount';
  protected $customAccountDataType = '';
  protected $googleAccountType = 'Google_Service_WebSecurityScanner_GoogleAccount';
  protected $googleAccountDataType = '';
  protected $iapCredentialType = 'Google_Service_WebSecurityScanner_IapCredential';
  protected $iapCredentialDataType = '';

  /**
   * @param Google_Service_WebSecurityScanner_CustomAccount
   */
  public function setCustomAccount(Google_Service_WebSecurityScanner_CustomAccount $customAccount)
  {
    $this->customAccount = $customAccount;
  }
  /**
   * @return Google_Service_WebSecurityScanner_CustomAccount
   */
  public function getCustomAccount()
  {
    return $this->customAccount;
  }
  /**
   * @param Google_Service_WebSecurityScanner_GoogleAccount
   */
  public function setGoogleAccount(Google_Service_WebSecurityScanner_GoogleAccount $googleAccount)
  {
    $this->googleAccount = $googleAccount;
  }
  /**
   * @return Google_Service_WebSecurityScanner_GoogleAccount
   */
  public function getGoogleAccount()
  {
    return $this->googleAccount;
  }
  /**
   * @param Google_Service_WebSecurityScanner_IapCredential
   */
  public function setIapCredential(Google_Service_WebSecurityScanner_IapCredential $iapCredential)
  {
    $this->iapCredential = $iapCredential;
  }
  /**
   * @return Google_Service_WebSecurityScanner_IapCredential
   */
  public function getIapCredential()
  {
    return $this->iapCredential;
  }
}
