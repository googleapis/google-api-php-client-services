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

namespace Google\Service\AgentRegistry;

class SkillEncryptionSpec extends \Google\Model
{
  /**
   * Output only. Creation timestamp.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. The Cloud KMS CryptoKey resource name used to protect Skill
   * payloads in this project and location. This field can be set or updated
   * only when no Skills exist in the target project and location. Once any
   * Skill exists in the location, updating this field is rejected with
   * `FAILED_PRECONDITION`. Format: `projects/{project}/locations/{location}/key
   * Rings/{keyRing}/cryptoKeys/{cryptoKey}`
   *
   * @var string
   */
  public $cryptoKeyName;
  /**
   * Identifier. Resource name of the SkillEncryptionSpec. Format:
   * `projects/{project}/locations/{location}/skillEncryptionSpec`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Most recent update timestamp.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Creation timestamp.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Required. The Cloud KMS CryptoKey resource name used to protect Skill
   * payloads in this project and location. This field can be set or updated
   * only when no Skills exist in the target project and location. Once any
   * Skill exists in the location, updating this field is rejected with
   * `FAILED_PRECONDITION`. Format: `projects/{project}/locations/{location}/key
   * Rings/{keyRing}/cryptoKeys/{cryptoKey}`
   *
   * @param string $cryptoKeyName
   */
  public function setCryptoKeyName($cryptoKeyName)
  {
    $this->cryptoKeyName = $cryptoKeyName;
  }
  /**
   * @return string
   */
  public function getCryptoKeyName()
  {
    return $this->cryptoKeyName;
  }
  /**
   * Identifier. Resource name of the SkillEncryptionSpec. Format:
   * `projects/{project}/locations/{location}/skillEncryptionSpec`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Most recent update timestamp.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SkillEncryptionSpec::class, 'Google_Service_AgentRegistry_SkillEncryptionSpec');
