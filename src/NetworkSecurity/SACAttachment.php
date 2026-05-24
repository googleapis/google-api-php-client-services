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

class SACAttachment extends \Google\Model
{
  /**
   * No state specified. This should not be used.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Has never been attached to a partner.
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
   * Output only. Timestamp when the attachment was created.
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
   * `projects/{project}/locations/{location}/sacAttachments/{sac_attachment}`.
   *
   * @var string
   */
  public $name;
  /**
   * Required. NCC Gateway associated with the attachment. This can be input as
   * an ID or a full resource name. The output always has the form
   * `projects/{project_number}/locations/{location}/spokes/{ncc_gateway}`.
   *
   * @var string
   */
  public $nccGateway;
  /**
   * Required. SAC Realm which owns the attachment. This can be input as an ID
   * or a full resource name. The output always has the form
   * `projects/{project_number}/locations/{location}/sacRealms/{sac_realm}`.
   *
   * @var string
   */
  public $sacRealm;
  /**
   * Output only. State of the attachment.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Timestamp when the attachment was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Timestamp when the attachment was created.
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
   * `projects/{project}/locations/{location}/sacAttachments/{sac_attachment}`.
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
   * Required. NCC Gateway associated with the attachment. This can be input as
   * an ID or a full resource name. The output always has the form
   * `projects/{project_number}/locations/{location}/spokes/{ncc_gateway}`.
   *
   * @param string $nccGateway
   */
  public function setNccGateway($nccGateway)
  {
    $this->nccGateway = $nccGateway;
  }
  /**
   * @return string
   */
  public function getNccGateway()
  {
    return $this->nccGateway;
  }
  /**
   * Required. SAC Realm which owns the attachment. This can be input as an ID
   * or a full resource name. The output always has the form
   * `projects/{project_number}/locations/{location}/sacRealms/{sac_realm}`.
   *
   * @param string $sacRealm
   */
  public function setSacRealm($sacRealm)
  {
    $this->sacRealm = $sacRealm;
  }
  /**
   * @return string
   */
  public function getSacRealm()
  {
    return $this->sacRealm;
  }
  /**
   * Output only. State of the attachment.
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING_PARTNER_ATTACHMENT,
   * PARTNER_ATTACHED, PARTNER_DETACHED
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
   * Output only. Timestamp when the attachment was last updated.
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
class_alias(SACAttachment::class, 'Google_Service_NetworkSecurity_SACAttachment');
