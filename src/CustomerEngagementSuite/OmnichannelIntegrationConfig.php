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

namespace Google\Service\CustomerEngagementSuite;

class OmnichannelIntegrationConfig extends \Google\Model
{
  protected $channelConfigsType = OmnichannelIntegrationConfigChannelConfig::class;
  protected $channelConfigsDataType = 'map';
  protected $routingConfigsType = OmnichannelIntegrationConfigRoutingConfig::class;
  protected $routingConfigsDataType = 'map';
  protected $subscriberConfigsType = OmnichannelIntegrationConfigSubscriberConfig::class;
  protected $subscriberConfigsDataType = 'map';

  /**
   * Optional. Various of configuration for handling App events.
   *
   * @param OmnichannelIntegrationConfigChannelConfig[] $channelConfigs
   */
  public function setChannelConfigs($channelConfigs)
  {
    $this->channelConfigs = $channelConfigs;
  }
  /**
   * @return OmnichannelIntegrationConfigChannelConfig[]
   */
  public function getChannelConfigs()
  {
    return $this->channelConfigs;
  }
  /**
   * Optional. The key of routing_configs is a key of `app_configs`, value is a
   * `RoutingConfig`, which contains subscriber's key.
   *
   * @param OmnichannelIntegrationConfigRoutingConfig[] $routingConfigs
   */
  public function setRoutingConfigs($routingConfigs)
  {
    $this->routingConfigs = $routingConfigs;
  }
  /**
   * @return OmnichannelIntegrationConfigRoutingConfig[]
   */
  public function getRoutingConfigs()
  {
    return $this->routingConfigs;
  }
  /**
   * Optional. Various of subscribers configs.
   *
   * @param OmnichannelIntegrationConfigSubscriberConfig[] $subscriberConfigs
   */
  public function setSubscriberConfigs($subscriberConfigs)
  {
    $this->subscriberConfigs = $subscriberConfigs;
  }
  /**
   * @return OmnichannelIntegrationConfigSubscriberConfig[]
   */
  public function getSubscriberConfigs()
  {
    return $this->subscriberConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OmnichannelIntegrationConfig::class, 'Google_Service_CustomerEngagementSuite_OmnichannelIntegrationConfig');
