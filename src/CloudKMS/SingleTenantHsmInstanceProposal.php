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

class SingleTenantHsmInstanceProposal extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The SingleTenantHsmInstanceProposal is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The SingleTenantHsmInstanceProposal is pending approval.
   */
  public const STATE_PENDING = 'PENDING';
  /**
   * The SingleTenantHsmInstanceProposal has been approved.
   */
  public const STATE_APPROVED = 'APPROVED';
  /**
   * The SingleTenantHsmInstanceProposal is being executed.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * The SingleTenantHsmInstanceProposal has been executed successfully.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The SingleTenantHsmInstanceProposal has failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The SingleTenantHsmInstanceProposal has been deleted and will be purged
   * after the purge_time.
   */
  public const STATE_DELETED = 'DELETED';
  protected $addQuorumMemberType = AddQuorumMember::class;
  protected $addQuorumMemberDataType = '';
  /**
   * Output only. The time at which the SingleTenantHsmInstanceProposal was
   * created.
   *
   * @var string
   */
  public $createTime;
  protected $deleteSingleTenantHsmInstanceType = DeleteSingleTenantHsmInstance::class;
  protected $deleteSingleTenantHsmInstanceDataType = '';
  /**
   * Output only. The time at which the SingleTenantHsmInstanceProposal was
   * deleted.
   *
   * @var string
   */
  public $deleteTime;
  protected $disableSingleTenantHsmInstanceType = DisableSingleTenantHsmInstance::class;
  protected $disableSingleTenantHsmInstanceDataType = '';
  protected $enableSingleTenantHsmInstanceType = EnableSingleTenantHsmInstance::class;
  protected $enableSingleTenantHsmInstanceDataType = '';
  /**
   * The time at which the SingleTenantHsmInstanceProposal will expire if not
   * approved and executed.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Output only. The root cause of the most recent failure. Only present if
   * state is FAILED.
   *
   * @var string
   */
  public $failureReason;
  /**
   * Identifier. The resource name for this SingleTenantHsmInstance in the
   * format `projects/locations/singleTenantHsmInstances/proposals`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The time at which the soft-deleted
   * SingleTenantHsmInstanceProposal will be permanently purged. This field is
   * only populated when the state is DELETED and will be set a time after
   * expiration of the proposal, i.e. >= expire_time or (create_time + ttl).
   *
   * @var string
   */
  public $purgeTime;
  protected $quorumParametersType = QuorumParameters::class;
  protected $quorumParametersDataType = '';
  protected $refreshSingleTenantHsmInstanceType = RefreshSingleTenantHsmInstance::class;
  protected $refreshSingleTenantHsmInstanceDataType = '';
  protected $registerTwoFactorAuthKeysType = RegisterTwoFactorAuthKeys::class;
  protected $registerTwoFactorAuthKeysDataType = '';
  protected $removeQuorumMemberType = RemoveQuorumMember::class;
  protected $removeQuorumMemberDataType = '';
  protected $requiredActionQuorumParametersType = RequiredActionQuorumParameters::class;
  protected $requiredActionQuorumParametersDataType = '';
  /**
   * Output only. The state of the SingleTenantHsmInstanceProposal.
   *
   * @var string
   */
  public $state;
  /**
   * Input only. The TTL for the SingleTenantHsmInstanceProposal. Proposals will
   * expire after this duration.
   *
   * @var string
   */
  public $ttl;

  /**
   * Add a quorum member to the SingleTenantHsmInstance. This will increase the
   * total_approver_count by 1. The SingleTenantHsmInstance must be in the
   * ACTIVE state to perform this operation.
   *
   * @param AddQuorumMember $addQuorumMember
   */
  public function setAddQuorumMember(AddQuorumMember $addQuorumMember)
  {
    $this->addQuorumMember = $addQuorumMember;
  }
  /**
   * @return AddQuorumMember
   */
  public function getAddQuorumMember()
  {
    return $this->addQuorumMember;
  }
  /**
   * Output only. The time at which the SingleTenantHsmInstanceProposal was
   * created.
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
   * Delete the SingleTenantHsmInstance. Deleting a SingleTenantHsmInstance will
   * make all CryptoKeys attached to the SingleTenantHsmInstance unusable. The
   * SingleTenantHsmInstance must be in the DISABLED or
   * PENDING_TWO_FACTOR_AUTH_REGISTRATION state to perform this operation.
   *
   * @param DeleteSingleTenantHsmInstance $deleteSingleTenantHsmInstance
   */
  public function setDeleteSingleTenantHsmInstance(DeleteSingleTenantHsmInstance $deleteSingleTenantHsmInstance)
  {
    $this->deleteSingleTenantHsmInstance = $deleteSingleTenantHsmInstance;
  }
  /**
   * @return DeleteSingleTenantHsmInstance
   */
  public function getDeleteSingleTenantHsmInstance()
  {
    return $this->deleteSingleTenantHsmInstance;
  }
  /**
   * Output only. The time at which the SingleTenantHsmInstanceProposal was
   * deleted.
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
   * Disable the SingleTenantHsmInstance. The SingleTenantHsmInstance must be in
   * the ACTIVE state to perform this operation.
   *
   * @param DisableSingleTenantHsmInstance $disableSingleTenantHsmInstance
   */
  public function setDisableSingleTenantHsmInstance(DisableSingleTenantHsmInstance $disableSingleTenantHsmInstance)
  {
    $this->disableSingleTenantHsmInstance = $disableSingleTenantHsmInstance;
  }
  /**
   * @return DisableSingleTenantHsmInstance
   */
  public function getDisableSingleTenantHsmInstance()
  {
    return $this->disableSingleTenantHsmInstance;
  }
  /**
   * Enable the SingleTenantHsmInstance. The SingleTenantHsmInstance must be in
   * the DISABLED state to perform this operation.
   *
   * @param EnableSingleTenantHsmInstance $enableSingleTenantHsmInstance
   */
  public function setEnableSingleTenantHsmInstance(EnableSingleTenantHsmInstance $enableSingleTenantHsmInstance)
  {
    $this->enableSingleTenantHsmInstance = $enableSingleTenantHsmInstance;
  }
  /**
   * @return EnableSingleTenantHsmInstance
   */
  public function getEnableSingleTenantHsmInstance()
  {
    return $this->enableSingleTenantHsmInstance;
  }
  /**
   * The time at which the SingleTenantHsmInstanceProposal will expire if not
   * approved and executed.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Output only. The root cause of the most recent failure. Only present if
   * state is FAILED.
   *
   * @param string $failureReason
   */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /**
   * @return string
   */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /**
   * Identifier. The resource name for this SingleTenantHsmInstance in the
   * format `projects/locations/singleTenantHsmInstances/proposals`.
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
   * Output only. The time at which the soft-deleted
   * SingleTenantHsmInstanceProposal will be permanently purged. This field is
   * only populated when the state is DELETED and will be set a time after
   * expiration of the proposal, i.e. >= expire_time or (create_time + ttl).
   *
   * @param string $purgeTime
   */
  public function setPurgeTime($purgeTime)
  {
    $this->purgeTime = $purgeTime;
  }
  /**
   * @return string
   */
  public function getPurgeTime()
  {
    return $this->purgeTime;
  }
  /**
   * Output only. The quorum approval parameters for the
   * SingleTenantHsmInstanceProposal.
   *
   * @param QuorumParameters $quorumParameters
   */
  public function setQuorumParameters(QuorumParameters $quorumParameters)
  {
    $this->quorumParameters = $quorumParameters;
  }
  /**
   * @return QuorumParameters
   */
  public function getQuorumParameters()
  {
    return $this->quorumParameters;
  }
  /**
   * Refreshes the SingleTenantHsmInstance. This operation must be performed
   * periodically to keep the SingleTenantHsmInstance active. This operation
   * must be performed before unrefreshed_duration_until_disable has passed. The
   * SingleTenantHsmInstance must be in the ACTIVE state to perform this
   * operation.
   *
   * @param RefreshSingleTenantHsmInstance $refreshSingleTenantHsmInstance
   */
  public function setRefreshSingleTenantHsmInstance(RefreshSingleTenantHsmInstance $refreshSingleTenantHsmInstance)
  {
    $this->refreshSingleTenantHsmInstance = $refreshSingleTenantHsmInstance;
  }
  /**
   * @return RefreshSingleTenantHsmInstance
   */
  public function getRefreshSingleTenantHsmInstance()
  {
    return $this->refreshSingleTenantHsmInstance;
  }
  /**
   * Register 2FA keys for the SingleTenantHsmInstance. This operation requires
   * all N Challenges to be signed by 2FA keys. The SingleTenantHsmInstance must
   * be in the PENDING_TWO_FACTOR_AUTH_REGISTRATION state to perform this
   * operation.
   *
   * @param RegisterTwoFactorAuthKeys $registerTwoFactorAuthKeys
   */
  public function setRegisterTwoFactorAuthKeys(RegisterTwoFactorAuthKeys $registerTwoFactorAuthKeys)
  {
    $this->registerTwoFactorAuthKeys = $registerTwoFactorAuthKeys;
  }
  /**
   * @return RegisterTwoFactorAuthKeys
   */
  public function getRegisterTwoFactorAuthKeys()
  {
    return $this->registerTwoFactorAuthKeys;
  }
  /**
   * Remove a quorum member from the SingleTenantHsmInstance. This will reduce
   * total_approver_count by 1. The SingleTenantHsmInstance must be in the
   * ACTIVE state to perform this operation.
   *
   * @param RemoveQuorumMember $removeQuorumMember
   */
  public function setRemoveQuorumMember(RemoveQuorumMember $removeQuorumMember)
  {
    $this->removeQuorumMember = $removeQuorumMember;
  }
  /**
   * @return RemoveQuorumMember
   */
  public function getRemoveQuorumMember()
  {
    return $this->removeQuorumMember;
  }
  /**
   * Output only. Parameters for an approval of a
   * SingleTenantHsmInstanceProposal that has both required challenges and a
   * quorum.
   *
   * @param RequiredActionQuorumParameters $requiredActionQuorumParameters
   */
  public function setRequiredActionQuorumParameters(RequiredActionQuorumParameters $requiredActionQuorumParameters)
  {
    $this->requiredActionQuorumParameters = $requiredActionQuorumParameters;
  }
  /**
   * @return RequiredActionQuorumParameters
   */
  public function getRequiredActionQuorumParameters()
  {
    return $this->requiredActionQuorumParameters;
  }
  /**
   * Output only. The state of the SingleTenantHsmInstanceProposal.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, PENDING, APPROVED, RUNNING,
   * SUCCEEDED, FAILED, DELETED
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
   * Input only. The TTL for the SingleTenantHsmInstanceProposal. Proposals will
   * expire after this duration.
   *
   * @param string $ttl
   */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /**
   * @return string
   */
  public function getTtl()
  {
    return $this->ttl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SingleTenantHsmInstanceProposal::class, 'Google_Service_CloudKMS_SingleTenantHsmInstanceProposal');
