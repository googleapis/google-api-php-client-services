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

namespace Google\Service\WebSecurityScanner;

class Authentication extends \Google\Model
{
  protected $customAccountType = CustomAccount::class;
  protected $customAccountDataType = '';
  protected $googleAccountType = GoogleAccount::class;
  protected $googleAccountDataType = '';
  protected $iapCredentialType = IapCredential::class;
  protected $iapCredentialDataType = '';

  /**
   * @param CustomAccount
   */
  public function setCustomAccount(CustomAccount $customAccount)
  {
    $this->customAccount = $customAccount;
  }
  /**
   * @return CustomAccount
   */
  public function getCustomAccount()
  {
    return $this->customAccount;
  }
  /**
   * @param GoogleAccount
   */
  public function setGoogleAccount(GoogleAccount $googleAccount)
  {
    $this->googleAccount = $googleAccount;
  }
  /**
   * @return GoogleAccount
   */
  public function getGoogleAccount()
  {
    return $this->googleAccount;
  }
  /**
   * @param IapCredential
   */
  public function setIapCredential(IapCredential $iapCredential)
  {
    $this->iapCredential = $iapCredential;
  }
  /**
   * @return IapCredential
   */
  public function getIapCredential()
  {
    return $this->iapCredential;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Authentication::class, 'Google_Service_WebSecurityScanner_Authentication');
