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

namespace Google\Service\NetworkSecurity;

class SACRealm extends \Google\Model
{
  /**
   * The default value. This value is used if the state is omitted.
   */
  public const SECURITY_SERVICE_SECURITY_SERVICE_UNSPECIFIED = 'SECURITY_SERVICE_UNSPECIFIED';
  /**
   * [Palo Alto Networks Prisma
   * Access](https://www.paloaltonetworks.com/sase/access).
   */
  public const SECURITY_SERVICE_PALO_ALTO_PRISMA_ACCESS = 'PALO_ALTO_PRISMA_ACCESS';
  /**
   * No state specified. This should not be used.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Has never been attached to a partner. Used only for Prisma Access.
   */
  public const STATE_PENDING_PARTNER_ATTACHMENT = 'PENDING_PARTNER_ATTACHMENT';
  /**
   * Currently attached to a partner.
   */
  public const STATE_PARTNER_ATTACHED = 'PARTNER_ATTACHED';
  /**
   * Was once attached to a partner but has been detached.
   */
  public const STATE_PARTNER_DETACHED = 'PARTNER_DETACHED';
  /**
   * Is not attached to a partner and has an expired pairing key. Used only for
   * Prisma Access.
   */
  public const STATE_KEY_EXPIRED = 'KEY_EXPIRED';
  /**
   * Output only. Timestamp when the realm was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Optional list of labels applied to the resource.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. Resource name, in the form
   * `projects/{project}/locations/global/sacRealms/{sacRealm}`.
   *
   * @var string
   */
  public $name;
  protected $pairingKeyType = SACRealmPairingKey::class;
  protected $pairingKeyDataType = '';
  /**
   * Immutable. SSE service provider associated with the realm.
   *
   * @var string
   */
  public $securityService;
  /**
   * Output only. State of the realm.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Timestamp when the realm was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Timestamp when the realm was created.
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
   * Optional. Optional list of labels applied to the resource.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. Resource name, in the form
   * `projects/{project}/locations/global/sacRealms/{sacRealm}`.
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
   * Output only. Key to be shared with SSE service provider during pairing.
   *
   * @param SACRealmPairingKey $pairingKey
   */
  public function setPairingKey(SACRealmPairingKey $pairingKey)
  {
    $this->pairingKey = $pairingKey;
  }
  /**
   * @return SACRealmPairingKey
   */
  public function getPairingKey()
  {
    return $this->pairingKey;
  }
  /**
   * Immutable. SSE service provider associated with the realm.
   *
   * Accepted values: SECURITY_SERVICE_UNSPECIFIED, PALO_ALTO_PRISMA_ACCESS
   *
   * @param self::SECURITY_SERVICE_* $securityService
   */
  public function setSecurityService($securityService)
  {
    $this->securityService = $securityService;
  }
  /**
   * @return self::SECURITY_SERVICE_*
   */
  public function getSecurityService()
  {
    return $this->securityService;
  }
  /**
   * Output only. State of the realm.
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING_PARTNER_ATTACHMENT,
   * PARTNER_ATTACHED, PARTNER_DETACHED, KEY_EXPIRED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Timestamp when the realm was last updated.
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
class_alias(SACRealm::class, 'Google_Service_NetworkSecurity_SACRealm');
