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

namespace Google\Service\Compute;

class VmExtensionPolicy extends \Google\Collection
{
  /**
   * The policy is active and applied to matching VMs. Newly created VMs that
   * match the policy will also receive the extension policy.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The policy is in the process of being deleted. After the extension is
   * removed from all matching VMs, the policy will be deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Default value. Do not use.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  protected $collection_key = 'instanceSelectors';
  /**
   * Output only. [Output Only] Creation timestamp inRFC3339 text format.
   *
   * @var string
   */
  public $creationTimestamp;
  /**
   * An optional description of this resource.
   *
   * @var string
   */
  public $description;
  protected $extensionPoliciesType = VmExtensionPolicyExtensionPolicy::class;
  protected $extensionPoliciesDataType = 'map';
  /**
   * Optional. Output only. [Output Only] Link to the global policy that manages
   * this zone policy, if applicable.
   *
   * @var string
   */
  public $globalResourceLink;
  /**
   * Output only. [Output Only] The unique identifier for the resource. This
   * identifier is defined by the server.
   *
   * @var string
   */
  public $id;
  protected $instanceSelectorsType = VmExtensionPolicyInstanceSelector::class;
  protected $instanceSelectorsDataType = 'array';
  /**
   * Output only. [Output Only] Type of the resource.
   * Alwayscompute#vmExtensionPolicy.
   *
   * @var string
   */
  public $kind;
  /**
   * Optional. Output only. [Output Only] Indicates if this policy is managed by
   * a global policy.
   *
   * @var bool
   */
  public $managedByGlobal;
  /**
   * Name of the resource. Provided by the client when the resource is created.
   * The name must be 1-63 characters long, and comply withRFC1035.
   * Specifically, the name must be 1-63 characters long and match the regular
   * expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character
   * must be a lowercase letter, and all following characters must be a dash,
   * lowercase letter, or digit, except the last character, which cannot be a
   * dash.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Priority of this policy. Used to resolve conflicts when multiple
   * policies apply to the same extension. The policy priority is an integer
   * from 0 to 65535, inclusive. Lower integers indicate higher priorities. If
   * you do not specify a priority when creating a rule, it is assigned a
   * priority of 1000. If priorities are equal, the policy with the most recent
   * creation timestamp takes precedence.
   *
   * @var int
   */
  public $priority;
  /**
   * Output only. [Output Only] Server-defined fully-qualified URL for this
   * resource.
   *
   * @var string
   */
  public $selfLink;
  /**
   * Output only. [Output Only] Server-defined URL for this resource's resource
   * id.
   *
   * @var string
   */
  public $selfLinkWithId;
  /**
   * Optional. Output only. [Output Only] Current state of the policy: ACTIVE or
   * DELETING.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. [Output Only] Update timestamp inRFC3339 text format.
   *
   * @var string
   */
  public $updateTimestamp;

  /**
   * Output only. [Output Only] Creation timestamp inRFC3339 text format.
   *
   * @param string $creationTimestamp
   */
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  /**
   * @return string
   */
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  /**
   * An optional description of this resource.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. A map of extension names (for example, "ops-agent") to their
   * corresponding policy configurations.
   *
   * @param VmExtensionPolicyExtensionPolicy[] $extensionPolicies
   */
  public function setExtensionPolicies($extensionPolicies)
  {
    $this->extensionPolicies = $extensionPolicies;
  }
  /**
   * @return VmExtensionPolicyExtensionPolicy[]
   */
  public function getExtensionPolicies()
  {
    return $this->extensionPolicies;
  }
  /**
   * Optional. Output only. [Output Only] Link to the global policy that manages
   * this zone policy, if applicable.
   *
   * @param string $globalResourceLink
   */
  public function setGlobalResourceLink($globalResourceLink)
  {
    $this->globalResourceLink = $globalResourceLink;
  }
  /**
   * @return string
   */
  public function getGlobalResourceLink()
  {
    return $this->globalResourceLink;
  }
  /**
   * Output only. [Output Only] The unique identifier for the resource. This
   * identifier is defined by the server.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. Selectors to target VMs for this policy. VMs are selected if they
   * match *any* of the provided selectors (logical OR). If this list is empty,
   * the policy applies to all VMs.
   *
   * @param VmExtensionPolicyInstanceSelector[] $instanceSelectors
   */
  public function setInstanceSelectors($instanceSelectors)
  {
    $this->instanceSelectors = $instanceSelectors;
  }
  /**
   * @return VmExtensionPolicyInstanceSelector[]
   */
  public function getInstanceSelectors()
  {
    return $this->instanceSelectors;
  }
  /**
   * Output only. [Output Only] Type of the resource.
   * Alwayscompute#vmExtensionPolicy.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Optional. Output only. [Output Only] Indicates if this policy is managed by
   * a global policy.
   *
   * @param bool $managedByGlobal
   */
  public function setManagedByGlobal($managedByGlobal)
  {
    $this->managedByGlobal = $managedByGlobal;
  }
  /**
   * @return bool
   */
  public function getManagedByGlobal()
  {
    return $this->managedByGlobal;
  }
  /**
   * Name of the resource. Provided by the client when the resource is created.
   * The name must be 1-63 characters long, and comply withRFC1035.
   * Specifically, the name must be 1-63 characters long and match the regular
   * expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character
   * must be a lowercase letter, and all following characters must be a dash,
   * lowercase letter, or digit, except the last character, which cannot be a
   * dash.
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
   * Optional. Priority of this policy. Used to resolve conflicts when multiple
   * policies apply to the same extension. The policy priority is an integer
   * from 0 to 65535, inclusive. Lower integers indicate higher priorities. If
   * you do not specify a priority when creating a rule, it is assigned a
   * priority of 1000. If priorities are equal, the policy with the most recent
   * creation timestamp takes precedence.
   *
   * @param int $priority
   */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /**
   * @return int
   */
  public function getPriority()
  {
    return $this->priority;
  }
  /**
   * Output only. [Output Only] Server-defined fully-qualified URL for this
   * resource.
   *
   * @param string $selfLink
   */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /**
   * @return string
   */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /**
   * Output only. [Output Only] Server-defined URL for this resource's resource
   * id.
   *
   * @param string $selfLinkWithId
   */
  public function setSelfLinkWithId($selfLinkWithId)
  {
    $this->selfLinkWithId = $selfLinkWithId;
  }
  /**
   * @return string
   */
  public function getSelfLinkWithId()
  {
    return $this->selfLinkWithId;
  }
  /**
   * Optional. Output only. [Output Only] Current state of the policy: ACTIVE or
   * DELETING.
   *
   * Accepted values: ACTIVE, DELETING, STATE_UNSPECIFIED
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
   * Output only. [Output Only] Update timestamp inRFC3339 text format.
   *
   * @param string $updateTimestamp
   */
  public function setUpdateTimestamp($updateTimestamp)
  {
    $this->updateTimestamp = $updateTimestamp;
  }
  /**
   * @return string
   */
  public function getUpdateTimestamp()
  {
    return $this->updateTimestamp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VmExtensionPolicy::class, 'Google_Service_Compute_VmExtensionPolicy');
