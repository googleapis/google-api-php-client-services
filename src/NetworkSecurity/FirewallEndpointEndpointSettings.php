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

class FirewallEndpointEndpointSettings extends \Google\Model
{
  /**
   * Palo Alto Networks content cloud region not specified.
   */
  public const CONTENT_CLOUD_REGION_CONTENT_CLOUD_REGION_UNSPECIFIED = 'CONTENT_CLOUD_REGION_UNSPECIFIED';
  /**
   * US Central content cloud portal: `us.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_US_CENTRAL = 'US_CENTRAL';
  /**
   * APAC content cloud portal: `apac.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_APAC = 'APAC';
  /**
   * India content cloud portal: `in.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_INDIA = 'INDIA';
  /**
   * UK content cloud portal: `uk.hawkeye.services-edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_UK = 'UK';
  /**
   * France content cloud portal: `fr.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_FRANCE = 'FRANCE';
  /**
   * Japan content cloud portal: `jp.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_JAPAN = 'JAPAN';
  /**
   * Australia content cloud portal: `au.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_AUSTRALIA = 'AUSTRALIA';
  /**
   * Canada content cloud portal: `ca.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_CANADA = 'CANADA';
  /**
   * Switzerland content cloud portal: `ch.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_SWITZERLAND = 'SWITZERLAND';
  /**
   * Netherlands content cloud portal: `nl.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_NETHERLANDS = 'NETHERLANDS';
  /**
   * Indonesia content cloud portal: `id.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_INDONESIA = 'INDONESIA';
  /**
   * Qatar content cloud portal: `qa.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_QATAR = 'QATAR';
  /**
   * Taiwan content cloud portal: `tw.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_TAIWAN = 'TAIWAN';
  /**
   * Poland content cloud portal: `pl.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_POLAND = 'POLAND';
  /**
   * South Korea content cloud portal: `kr.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_SOUTH_KOREA = 'SOUTH_KOREA';
  /**
   * Saudi Arabia content cloud portal: `sa.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_SAUDI_ARABIA = 'SAUDI_ARABIA';
  /**
   * Italy content cloud portal: `it.hawkeye.services-
   * edge.paloaltonetworks.com`.
   */
  public const CONTENT_CLOUD_REGION_ITALY = 'ITALY';
  /**
   * Optional. The content cloud region of the endpoint.
   *
   * @var string
   */
  public $contentCloudRegion;
  /**
   * Optional. Whether to block HTTP partial responses for the endpoint. When
   * set to `true`, the firewall blocks the resumption of HTTP file downloads.
   * Setting this to `false` provides maximum availability, while `true`
   * provides maximum security.
   *
   * @var bool
   */
  public $httpPartialResponseBlocked;
  /**
   * Optional. Immutable. Indicates whether jumbo frames are enabled. The
   * default value is `false`.
   *
   * @var bool
   */
  public $jumboFramesEnabled;

  /**
   * Optional. The content cloud region of the endpoint.
   *
   * Accepted values: CONTENT_CLOUD_REGION_UNSPECIFIED, US_CENTRAL, APAC, INDIA,
   * UK, FRANCE, JAPAN, AUSTRALIA, CANADA, SWITZERLAND, NETHERLANDS, INDONESIA,
   * QATAR, TAIWAN, POLAND, SOUTH_KOREA, SAUDI_ARABIA, ITALY
   *
   * @param self::CONTENT_CLOUD_REGION_* $contentCloudRegion
   */
  public function setContentCloudRegion($contentCloudRegion)
  {
    $this->contentCloudRegion = $contentCloudRegion;
  }
  /**
   * @return self::CONTENT_CLOUD_REGION_*
   */
  public function getContentCloudRegion()
  {
    return $this->contentCloudRegion;
  }
  /**
   * Optional. Whether to block HTTP partial responses for the endpoint. When
   * set to `true`, the firewall blocks the resumption of HTTP file downloads.
   * Setting this to `false` provides maximum availability, while `true`
   * provides maximum security.
   *
   * @param bool $httpPartialResponseBlocked
   */
  public function setHttpPartialResponseBlocked($httpPartialResponseBlocked)
  {
    $this->httpPartialResponseBlocked = $httpPartialResponseBlocked;
  }
  /**
   * @return bool
   */
  public function getHttpPartialResponseBlocked()
  {
    return $this->httpPartialResponseBlocked;
  }
  /**
   * Optional. Immutable. Indicates whether jumbo frames are enabled. The
   * default value is `false`.
   *
   * @param bool $jumboFramesEnabled
   */
  public function setJumboFramesEnabled($jumboFramesEnabled)
  {
    $this->jumboFramesEnabled = $jumboFramesEnabled;
  }
  /**
   * @return bool
   */
  public function getJumboFramesEnabled()
  {
    return $this->jumboFramesEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FirewallEndpointEndpointSettings::class, 'Google_Service_NetworkSecurity_FirewallEndpointEndpointSettings');
