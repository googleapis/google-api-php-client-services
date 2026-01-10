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

namespace Google\Service\CloudKMS;

class SingleTenantHsmInstance extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The SingleTenantHsmInstance is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The SingleTenantHsmInstance is waiting for 2FA keys to be registered. This
   * can be done by calling CreateSingleTenantHsmInstanceProposal with the
   * RegisterTwoFactorAuthKeys operation.
   */
  public const STATE_PENDING_TWO_FACTOR_AUTH_REGISTRATION = 'PENDING_TWO_FACTOR_AUTH_REGISTRATION';
  /**
   * The SingleTenantHsmInstance is ready to use. A SingleTenantHsmInstance must
   * be in the ACTIVE state for all CryptoKeys created within the
   * SingleTenantHsmInstance to be usable.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The SingleTenantHsmInstance is being disabled.
   */
  public const STATE_DISABLING = 'DISABLING';
  /**
   * The SingleTenantHsmInstance is disabled.
   */
  public const STATE_DISABLED = 'DISABLED';
  /**
   * The SingleTenantHsmInstance is being deleted. Requests to the instance will
   * be rejected in this state.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The SingleTenantHsmInstance has been deleted.
   */
  public const STATE_DELETED = 'DELETED';
  /**
   * The SingleTenantHsmInstance has failed and can not be recovered or used.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. The time at which the SingleTenantHsmInstance was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The time at which the SingleTenantHsmInstance was deleted.
   *
   * @var string
   */
  public $deleteTime;
  /**
   * Output only. The time at which the instance will be automatically disabled
   * if not refreshed. This field is updated upon creation and after each
   * successful refresh operation and enable. A RefreshSingleTenantHsmInstance
   * operation must be made via a SingleTenantHsmInstanceProposal before this
   * time otherwise the SingleTenantHsmInstance will become disabled.
   *
   * @var string
   */
  public $disableTime;
  /**
   * Identifier. The resource name for this SingleTenantHsmInstance in the
   * format `projects/locations/singleTenantHsmInstances`.
   *
   * @var string
   */
  public $name;
  protected $quorumAuthType = QuorumAuth::class;
  protected $quorumAuthDataType = '';
  /**
   * Output only. The state of the SingleTenantHsmInstance.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The system-defined duration that an instance can remain
   * unrefreshed until it is automatically disabled. This will have a value of
   * 120 days.
   *
   * @var string
   */
  public $unrefreshedDurationUntilDisable;

  /**
   * Output only. The time at which the SingleTenantHsmInstance was created.
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
   * Output only. The time at which the SingleTenantHsmInstance was deleted.
   *
   * @param string $deleteTime
   */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /**
   * @return string
   */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /**
   * Output only. The time at which the instance will be automatically disabled
   * if not refreshed. This field is updated upon creation and after each
   * successful refresh operation and enable. A RefreshSingleTenantHsmInstance
   * operation must be made via a SingleTenantHsmInstanceProposal before this
   * time otherwise the SingleTenantHsmInstance will become disabled.
   *
   * @param string $disableTime
   */
  public function setDisableTime($disableTime)
  {
    $this->disableTime = $disableTime;
  }
  /**
   * @return string
   */
  public function getDisableTime()
  {
    return $this->disableTime;
  }
  /**
   * Identifier. The resource name for this SingleTenantHsmInstance in the
   * format `projects/locations/singleTenantHsmInstances`.
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
   * Required. The quorum auth configuration for the SingleTenantHsmInstance.
   *
   * @param QuorumAuth $quorumAuth
   */
  public function setQuorumAuth(QuorumAuth $quorumAuth)
  {
    $this->quorumAuth = $quorumAuth;
  }
  /**
   * @return QuorumAuth
   */
  public function getQuorumAuth()
  {
    return $this->quorumAuth;
  }
  /**
   * Output only. The state of the SingleTenantHsmInstance.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING,
   * PENDING_TWO_FACTOR_AUTH_REGISTRATION, ACTIVE, DISABLING, DISABLED,
   * DELETING, DELETED, FAILED
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
   * Output only. The system-defined duration that an instance can remain
   * unrefreshed until it is automatically disabled. This will have a value of
   * 120 days.
   *
   * @param string $unrefreshedDurationUntilDisable
   */
  public function setUnrefreshedDurationUntilDisable($unrefreshedDurationUntilDisable)
  {
    $this->unrefreshedDurationUntilDisable = $unrefreshedDurationUntilDisable;
  }
  /**
   * @return string
   */
  public function getUnrefreshedDurationUntilDisable()
  {
    return $this->unrefreshedDurationUntilDisable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SingleTenantHsmInstance::class, 'Google_Service_CloudKMS_SingleTenantHsmInstance');
