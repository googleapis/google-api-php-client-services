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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1ApimServiceExtension extends \Google\Collection
{
  /**
   * Resource is in an unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Resource is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * Resource is provisioned and ready to use.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The resource is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The resource is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  protected $collection_key = 'networkConfigs';
  /**
   * Output only. The time that this resource was created on the server.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Name of the proxy deployed in the Apigee X instance.
   *
   * @var string
   */
  public $extensionProcessor;
  protected $extensionsType = GoogleCloudApigeeV1ApimServiceExtensionExtension::class;
  protected $extensionsDataType = 'array';
  /**
   * Required. Name of the Google Cloud LB forwarding rule. Format:
   * projects/{project}/regions/{region}/forwardingRules/{forwarding_rule}
   * projects/{project}/global/forwardingRules/{forwarding_rule}
   *
   * @var string
   */
  public $lbForwardingRule;
  /**
   * Identifier. unique name of the APIM service extension. The name must
   * conform with RFC-1034, is restricted to lower-cased letters, numbers and
   * hyphens, and can have a maximum length of 63 characters. Additionally, the
   * first character must be a letter and the last a letter or a number.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The network where the forwarding rule is created. Format:
   * projects/{project}/global/networks/{network}
   *
   * @var string
   */
  public $network;
  protected $networkConfigsType = GoogleCloudApigeeV1ApimServiceExtensionNetworkConfig::class;
  protected $networkConfigsDataType = 'array';
  /**
   * Output only. State of the APIM service extension. Values other than
   * `ACTIVE` mean the resource is not ready to use.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time that this resource was updated on the server.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time that this resource was created on the server.
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
   * Required. Name of the proxy deployed in the Apigee X instance.
   *
   * @param string $extensionProcessor
   */
  public function setExtensionProcessor($extensionProcessor)
  {
    $this->extensionProcessor = $extensionProcessor;
  }
  /**
   * @return string
   */
  public function getExtensionProcessor()
  {
    return $this->extensionProcessor;
  }
  /**
   * Optional. List of extensions that are part of the service extension. Refer
   * to https://cloud.google.com/service-extensions/docs/quotas#limits for any
   * limits.
   *
   * @param GoogleCloudApigeeV1ApimServiceExtensionExtension[] $extensions
   */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /**
   * @return GoogleCloudApigeeV1ApimServiceExtensionExtension[]
   */
  public function getExtensions()
  {
    return $this->extensions;
  }
  /**
   * Required. Name of the Google Cloud LB forwarding rule. Format:
   * projects/{project}/regions/{region}/forwardingRules/{forwarding_rule}
   * projects/{project}/global/forwardingRules/{forwarding_rule}
   *
   * @param string $lbForwardingRule
   */
  public function setLbForwardingRule($lbForwardingRule)
  {
    $this->lbForwardingRule = $lbForwardingRule;
  }
  /**
   * @return string
   */
  public function getLbForwardingRule()
  {
    return $this->lbForwardingRule;
  }
  /**
   * Identifier. unique name of the APIM service extension. The name must
   * conform with RFC-1034, is restricted to lower-cased letters, numbers and
   * hyphens, and can have a maximum length of 63 characters. Additionally, the
   * first character must be a letter and the last a letter or a number.
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
   * Required. The network where the forwarding rule is created. Format:
   * projects/{project}/global/networks/{network}
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Required. List of network configurations for the APIM service extension.
   *
   * @param GoogleCloudApigeeV1ApimServiceExtensionNetworkConfig[] $networkConfigs
   */
  public function setNetworkConfigs($networkConfigs)
  {
    $this->networkConfigs = $networkConfigs;
  }
  /**
   * @return GoogleCloudApigeeV1ApimServiceExtensionNetworkConfig[]
   */
  public function getNetworkConfigs()
  {
    return $this->networkConfigs;
  }
  /**
   * Output only. State of the APIM service extension. Values other than
   * `ACTIVE` mean the resource is not ready to use.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, DELETING, UPDATING
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
   * Output only. The time that this resource was updated on the server.
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
class_alias(GoogleCloudApigeeV1ApimServiceExtension::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApimServiceExtension');
