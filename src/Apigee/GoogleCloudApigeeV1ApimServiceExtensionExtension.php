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

class GoogleCloudApigeeV1ApimServiceExtensionExtension extends \Google\Collection
{
  protected $collection_key = 'supportedEvents';
  /**
   * Optional. Whether this request should fail open.
   *
   * @var bool
   */
  public $failOpen;
  /**
   * Required. One of the hostnames of Apigee EnvGroup where the proxy is
   * deployed. This hostname (i.e FDQN) will be used to route traffic from the
   * specified forwarding rule to the environment in Apigee X instance where the
   * proxy is deployed for handling extension traffic. Format: ^([a-zA-Z0-9.
   * _-])+$
   *
   * @var string
   */
  public $hostname;
  /**
   * Optional. Match Condition for CEL expression. Refer to
   * https://cloud.google.com/service-extensions/docs/cel-matcher-language-
   * reference for more details.
   *
   * @var string
   */
  public $matchCondition;
  /**
   * Required. Name of the `LbTrafficExtension` resource. The name must conform
   * with RFC-1034, is restricted to lower-cased letters, numbers and hyphens,
   * and can have a maximum length of 63 characters. Additionally, the first
   * character must be a letter and the last a letter or a number.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Supported events for the Service Extension. If not specified, all
   * events are supported.
   *
   * @var string[]
   */
  public $supportedEvents;

  /**
   * Optional. Whether this request should fail open.
   *
   * @param bool $failOpen
   */
  public function setFailOpen($failOpen)
  {
    $this->failOpen = $failOpen;
  }
  /**
   * @return bool
   */
  public function getFailOpen()
  {
    return $this->failOpen;
  }
  /**
   * Required. One of the hostnames of Apigee EnvGroup where the proxy is
   * deployed. This hostname (i.e FDQN) will be used to route traffic from the
   * specified forwarding rule to the environment in Apigee X instance where the
   * proxy is deployed for handling extension traffic. Format: ^([a-zA-Z0-9.
   * _-])+$
   *
   * @param string $hostname
   */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /**
   * @return string
   */
  public function getHostname()
  {
    return $this->hostname;
  }
  /**
   * Optional. Match Condition for CEL expression. Refer to
   * https://cloud.google.com/service-extensions/docs/cel-matcher-language-
   * reference for more details.
   *
   * @param string $matchCondition
   */
  public function setMatchCondition($matchCondition)
  {
    $this->matchCondition = $matchCondition;
  }
  /**
   * @return string
   */
  public function getMatchCondition()
  {
    return $this->matchCondition;
  }
  /**
   * Required. Name of the `LbTrafficExtension` resource. The name must conform
   * with RFC-1034, is restricted to lower-cased letters, numbers and hyphens,
   * and can have a maximum length of 63 characters. Additionally, the first
   * character must be a letter and the last a letter or a number.
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
   * Optional. Supported events for the Service Extension. If not specified, all
   * events are supported.
   *
   * @param string[] $supportedEvents
   */
  public function setSupportedEvents($supportedEvents)
  {
    $this->supportedEvents = $supportedEvents;
  }
  /**
   * @return string[]
   */
  public function getSupportedEvents()
  {
    return $this->supportedEvents;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1ApimServiceExtensionExtension::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApimServiceExtensionExtension');
