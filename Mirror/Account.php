<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Mirror_Account extends Google_Collection
{
  protected $collection_key = 'userData';
  public $authTokens;
  public $features;
  public $password;
  public $userData;

  public function setAuthTokens(array $authTokens)
  {
    foreach ($authTokens as $a) {
      if (!$a instanceof Google_Service_Mirror_AuthToken) {
        throw new InvalidArgumentException('First argument to setAuthTokens must be an array of Google_Service_Mirror_AuthToken');
      }
    }
    $this->authTokens = $authTokens;
  }
  public function getAuthTokens()
  {
    return $this->authTokens;
  }
  public function setFeatures(array $features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setPassword($password)
  {
    $this->password = $password;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function setUserData(array $userData)
  {
    foreach ($userData as $u) {
      if (!$u instanceof Google_Service_Mirror_UserData) {
        throw new InvalidArgumentException('First argument to setUserData must be an array of Google_Service_Mirror_UserData');
      }
    }
    $this->userData = $userData;
  }
  public function getUserData()
  {
    return $this->userData;
  }
}
