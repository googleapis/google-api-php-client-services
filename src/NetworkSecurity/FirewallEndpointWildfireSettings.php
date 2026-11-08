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

class FirewallEndpointWildfireSettings extends \Google\Model
{
  /**
   * Advanced malware sandbox real-time signature lookup timeout action not
   * specified.
   */
  public const WILDFIRE_REALTIME_LOOKUP_TIMEOUT_ACTION_WILDFIRE_REALTIME_SIGNATURE_LOOKUP_TIMEOUT_ACTION_UNSPECIFIED = 'WILDFIRE_REALTIME_SIGNATURE_LOOKUP_TIMEOUT_ACTION_UNSPECIFIED';
  /**
   * Files that time out during the signature lookup are allowed to transmit.
   */
  public const WILDFIRE_REALTIME_LOOKUP_TIMEOUT_ACTION_ALLOW = 'ALLOW';
  /**
   * Files that time out during the signature lookup are not allowed to
   * transmit.
   */
  public const WILDFIRE_REALTIME_LOOKUP_TIMEOUT_ACTION_DENY = 'DENY';
  /**
   * WildFire region not specified.
   */
  public const WILDFIRE_REGION_WILDFIRE_REGION_UNSPECIFIED = 'WILDFIRE_REGION_UNSPECIFIED';
  /**
   * Canada cloud portal: ca.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_CANADA = 'CANADA';
  /**
   * United States cloud portal: us-native.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_UNITED_STATES = 'UNITED_STATES';
  /**
   * Japan cloud portal: jp.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_JAPAN = 'JAPAN';
  /**
   * Singapore cloud portal: sg.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_SINGAPORE = 'SINGAPORE';
  /**
   * United Kingdom cloud portal: uk.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_UNITED_KINGDOM = 'UNITED_KINGDOM';
  /**
   * Australia cloud portal: au.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_AUSTRALIA = 'AUSTRALIA';
  /**
   * Germany cloud portal: de.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_GERMANY = 'GERMANY';
  /**
   * India cloud portal: in.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_INDIA = 'INDIA';
  /**
   * Switzerland cloud portal: ch.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_SWITZERLAND = 'SWITZERLAND';
  /**
   * Poland cloud portal: pl.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_POLAND = 'POLAND';
  /**
   * Indonesia cloud portal: id.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_INDONESIA = 'INDONESIA';
  /**
   * Taiwan cloud portal: tw.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_TAIWAN = 'TAIWAN';
  /**
   * France cloud portal: fr.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_FRANCE = 'FRANCE';
  /**
   * Qatar cloud portal: qatar.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_QATAR = 'QATAR';
  /**
   * South Korea cloud portal: kr.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_SOUTH_KOREA = 'SOUTH_KOREA';
  /**
   * Israel cloud portal: il.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_ISRAEL = 'ISRAEL';
  /**
   * Saudi Arabia cloud portal: sa.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_SAUDI_ARABIA = 'SAUDI_ARABIA';
  /**
   * Spain cloud portal: es.wildfire.paloaltonetworks.com
   */
  public const WILDFIRE_REGION_SPAIN = 'SPAIN';
  /**
   * Optional. Indicates whether Advanced malware sandbox analysis is enabled.
   * The default value is `false`.
   *
   * @var bool
   */
  public $enabled;
  protected $wildfireInlineCloudAnalysisSettingsType = FirewallEndpointWildfireSettingsWildfireInlineCloudAnalysisSettings::class;
  protected $wildfireInlineCloudAnalysisSettingsDataType = '';
  /**
   * Optional. The duration that a file is held while the Advanced malware
   * sandbox real-time signature cloud performs a signature lookup. Valid values
   * are from 1 to 5000 milliseconds. In canonical JSON encoding, this is
   * represented as a string ending in `s` (for example, `"0.001s"` to `"5s"`).
   * The default value is `1000` milliseconds (`"1s"` in JSON).
   *
   * @var string
   */
  public $wildfireRealtimeLookupDuration;
  /**
   * Optional. The action to take on an Advanced malware sandbox real-time
   * signature lookup timeout. The default value is `ALLOW`.
   *
   * @var string
   */
  public $wildfireRealtimeLookupTimeoutAction;
  /**
   * Optional. The region where Advanced malware sandbox analysis is performed.
   * For a list of Palo Alto Networks supported regions, see [Advanced WildFire
   * global cloud](https://docs.paloaltonetworks.com/advanced-
   * wildfire/administration/advanced-wildfire-overview/advanced-wildfire-
   * deployments/advanced-wildfire-global-cloud).
   *
   * @var string
   */
  public $wildfireRegion;

  /**
   * Optional. Indicates whether Advanced malware sandbox analysis is enabled.
   * The default value is `false`.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Optional. Settings for Advanced malware sandbox inline cloud analysis.
   *
   * @param FirewallEndpointWildfireSettingsWildfireInlineCloudAnalysisSettings $wildfireInlineCloudAnalysisSettings
   */
  public function setWildfireInlineCloudAnalysisSettings(FirewallEndpointWildfireSettingsWildfireInlineCloudAnalysisSettings $wildfireInlineCloudAnalysisSettings)
  {
    $this->wildfireInlineCloudAnalysisSettings = $wildfireInlineCloudAnalysisSettings;
  }
  /**
   * @return FirewallEndpointWildfireSettingsWildfireInlineCloudAnalysisSettings
   */
  public function getWildfireInlineCloudAnalysisSettings()
  {
    return $this->wildfireInlineCloudAnalysisSettings;
  }
  /**
   * Optional. The duration that a file is held while the Advanced malware
   * sandbox real-time signature cloud performs a signature lookup. Valid values
   * are from 1 to 5000 milliseconds. In canonical JSON encoding, this is
   * represented as a string ending in `s` (for example, `"0.001s"` to `"5s"`).
   * The default value is `1000` milliseconds (`"1s"` in JSON).
   *
   * @param string $wildfireRealtimeLookupDuration
   */
  public function setWildfireRealtimeLookupDuration($wildfireRealtimeLookupDuration)
  {
    $this->wildfireRealtimeLookupDuration = $wildfireRealtimeLookupDuration;
  }
  /**
   * @return string
   */
  public function getWildfireRealtimeLookupDuration()
  {
    return $this->wildfireRealtimeLookupDuration;
  }
  /**
   * Optional. The action to take on an Advanced malware sandbox real-time
   * signature lookup timeout. The default value is `ALLOW`.
   *
   * Accepted values:
   * WILDFIRE_REALTIME_SIGNATURE_LOOKUP_TIMEOUT_ACTION_UNSPECIFIED, ALLOW, DENY
   *
   * @param self::WILDFIRE_REALTIME_LOOKUP_TIMEOUT_ACTION_* $wildfireRealtimeLookupTimeoutAction
   */
  public function setWildfireRealtimeLookupTimeoutAction($wildfireRealtimeLookupTimeoutAction)
  {
    $this->wildfireRealtimeLookupTimeoutAction = $wildfireRealtimeLookupTimeoutAction;
  }
  /**
   * @return self::WILDFIRE_REALTIME_LOOKUP_TIMEOUT_ACTION_*
   */
  public function getWildfireRealtimeLookupTimeoutAction()
  {
    return $this->wildfireRealtimeLookupTimeoutAction;
  }
  /**
   * Optional. The region where Advanced malware sandbox analysis is performed.
   * For a list of Palo Alto Networks supported regions, see [Advanced WildFire
   * global cloud](https://docs.paloaltonetworks.com/advanced-
   * wildfire/administration/advanced-wildfire-overview/advanced-wildfire-
   * deployments/advanced-wildfire-global-cloud).
   *
   * Accepted values: WILDFIRE_REGION_UNSPECIFIED, CANADA, UNITED_STATES, JAPAN,
   * SINGAPORE, UNITED_KINGDOM, AUSTRALIA, GERMANY, INDIA, SWITZERLAND, POLAND,
   * INDONESIA, TAIWAN, FRANCE, QATAR, SOUTH_KOREA, ISRAEL, SAUDI_ARABIA, SPAIN
   *
   * @param self::WILDFIRE_REGION_* $wildfireRegion
   */
  public function setWildfireRegion($wildfireRegion)
  {
    $this->wildfireRegion = $wildfireRegion;
  }
  /**
   * @return self::WILDFIRE_REGION_*
   */
  public function getWildfireRegion()
  {
    return $this->wildfireRegion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FirewallEndpointWildfireSettings::class, 'Google_Service_NetworkSecurity_FirewallEndpointWildfireSettings');
