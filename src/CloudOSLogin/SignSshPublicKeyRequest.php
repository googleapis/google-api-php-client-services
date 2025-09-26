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

namespace Google\Service\CloudOSLogin;

class SignSshPublicKeyRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $appEngineInstance;
  /**
   * @var string
   */
  public $computeInstance;
  /**
   * @var string
   */
  public $serviceAccount;
  /**
   * @var string
   */
  public $sshPublicKey;

  /**
   * @param string
   */
  public function setAppEngineInstance($appEngineInstance)
  {
    $this->appEngineInstance = $appEngineInstance;
  }
  /**
   * @return string
   */
  public function getAppEngineInstance()
  {
    return $this->appEngineInstance;
  }
  /**
   * @param string
   */
  public function setComputeInstance($computeInstance)
  {
    $this->computeInstance = $computeInstance;
  }
  /**
   * @return string
   */
  public function getComputeInstance()
  {
    return $this->computeInstance;
  }
  /**
   * @param string
   */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return string
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /**
   * @param string
   */
  public function setSshPublicKey($sshPublicKey)
  {
    $this->sshPublicKey = $sshPublicKey;
  }
  /**
   * @return string
   */
  public function getSshPublicKey()
  {
    return $this->sshPublicKey;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SignSshPublicKeyRequest::class, 'Google_Service_CloudOSLogin_SignSshPublicKeyRequest');
