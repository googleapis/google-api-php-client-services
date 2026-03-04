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

namespace Google\Service\AndroidManagement;

class PrivateDnsSettings extends \Google\Model
{
  /**
   * Unspecified. Defaults to PRIVATE_DNS_USER_CHOICE.
   */
  public const PRIVATE_DNS_MODE_PRIVATE_DNS_MODE_UNSPECIFIED = 'PRIVATE_DNS_MODE_UNSPECIFIED';
  /**
   * The user is allowed to configure private DNS.
   */
  public const PRIVATE_DNS_MODE_PRIVATE_DNS_USER_CHOICE = 'PRIVATE_DNS_USER_CHOICE';
  /**
   * Automatic private DNS mode. The device tries to use the network-provided
   * DNS server over an encrypted connection before resorting to cleartext. The
   * user is not allowed to modify this setting. Supported on Android 10 and
   * above on fully managed devices and work profiles on company-owned devices.
   * A NonComplianceDetail with MANAGEMENT_MODE is reported on other management
   * modes. A NonComplianceDetail with API_LEVEL is reported if the Android
   * version is less than 10. A NonComplianceDetail with INVALID_VALUE is
   * reported if setting this fails for any other reason.Note: For work profiles
   * on company-owned devices, setting this mode prevents the user from changing
   * the setting, but the active private DNS setting is not modified. A
   * NonComplianceDetail with MANAGEMENT_MODE is reported in this case.
   */
  public const PRIVATE_DNS_MODE_PRIVATE_DNS_AUTOMATIC = 'PRIVATE_DNS_AUTOMATIC';
  /**
   * The device only uses the DNS server specified in private_dns_host. The user
   * is not allowed to modify this setting. If this is set, then
   * private_dns_host must be set. Supported on Android 10 and above on fully
   * managed devices. A NonComplianceDetail with MANAGEMENT_MODE is reported on
   * other management modes. A NonComplianceDetail with API_LEVEL is reported if
   * the Android version is less than 10.
   */
  public const PRIVATE_DNS_MODE_PRIVATE_DNS_SPECIFIED_HOST = 'PRIVATE_DNS_SPECIFIED_HOST';
  /**
   * Optional. The hostname of the DNS server. This must be set if and only if
   * private_dns_mode is set to PRIVATE_DNS_SPECIFIED_HOST. Supported on Android
   * 10 and above on fully managed devices. A NonComplianceDetail with
   * MANAGEMENT_MODE is reported on other management modes. A
   * NonComplianceDetail with API_LEVEL is reported if the Android version is
   * less than 10. A NonComplianceDetail with PENDING is reported if the device
   * is not connected to a network. A NonComplianceDetail with
   * nonComplianceReason INVALID_VALUE and specificNonComplianceReason
   * PRIVATE_DNS_HOST_NOT_SERVING is reported if the specified host is not a DNS
   * server or not supported on Android. A NonComplianceDetail with
   * INVALID_VALUE is reported if applying this setting fails for any other
   * reason.
   *
   * @var string
   */
  public $privateDnsHost;
  /**
   * Optional. The configuration mode for device's global private DNS settings.
   * If this is set to PRIVATE_DNS_SPECIFIED_HOST, then private_dns_host must be
   * set.
   *
   * @var string
   */
  public $privateDnsMode;

  /**
   * Optional. The hostname of the DNS server. This must be set if and only if
   * private_dns_mode is set to PRIVATE_DNS_SPECIFIED_HOST. Supported on Android
   * 10 and above on fully managed devices. A NonComplianceDetail with
   * MANAGEMENT_MODE is reported on other management modes. A
   * NonComplianceDetail with API_LEVEL is reported if the Android version is
   * less than 10. A NonComplianceDetail with PENDING is reported if the device
   * is not connected to a network. A NonComplianceDetail with
   * nonComplianceReason INVALID_VALUE and specificNonComplianceReason
   * PRIVATE_DNS_HOST_NOT_SERVING is reported if the specified host is not a DNS
   * server or not supported on Android. A NonComplianceDetail with
   * INVALID_VALUE is reported if applying this setting fails for any other
   * reason.
   *
   * @param string $privateDnsHost
   */
  public function setPrivateDnsHost($privateDnsHost)
  {
    $this->privateDnsHost = $privateDnsHost;
  }
  /**
   * @return string
   */
  public function getPrivateDnsHost()
  {
    return $this->privateDnsHost;
  }
  /**
   * Optional. The configuration mode for device's global private DNS settings.
   * If this is set to PRIVATE_DNS_SPECIFIED_HOST, then private_dns_host must be
   * set.
   *
   * Accepted values: PRIVATE_DNS_MODE_UNSPECIFIED, PRIVATE_DNS_USER_CHOICE,
   * PRIVATE_DNS_AUTOMATIC, PRIVATE_DNS_SPECIFIED_HOST
   *
   * @param self::PRIVATE_DNS_MODE_* $privateDnsMode
   */
  public function setPrivateDnsMode($privateDnsMode)
  {
    $this->privateDnsMode = $privateDnsMode;
  }
  /**
   * @return self::PRIVATE_DNS_MODE_*
   */
  public function getPrivateDnsMode()
  {
    return $this->privateDnsMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PrivateDnsSettings::class, 'Google_Service_AndroidManagement_PrivateDnsSettings');
