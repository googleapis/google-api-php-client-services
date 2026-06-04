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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationNotWorking extends \Google\Model
{
  /**
   * No value has been specified.
   */
  public const DEVICE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const DEVICE_UNKNOWN = 'UNKNOWN';
  /**
   * Landing page doesn't work on desktop device.
   */
  public const DEVICE_DESKTOP = 'DESKTOP';
  /**
   * Landing page doesn't work on Android device.
   */
  public const DEVICE_ANDROID = 'ANDROID';
  /**
   * Landing page doesn't work on iOS device.
   */
  public const DEVICE_IOS = 'IOS';
  /**
   * No value has been specified.
   */
  public const DNS_ERROR_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const DNS_ERROR_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Host name not found in DNS when fetching landing page.
   */
  public const DNS_ERROR_TYPE_HOSTNAME_NOT_FOUND = 'HOSTNAME_NOT_FOUND';
  /**
   * Google internal crawler issue when communicating with DNS. This error
   * doesn't mean the landing page doesn't work. Google will recrawl the landing
   * page.
   */
  public const DNS_ERROR_TYPE_GOOGLE_CRAWLER_DNS_ISSUE = 'GOOGLE_CRAWLER_DNS_ISSUE';
  /**
   * The type of device that failed to load the URL.
   *
   * @var string
   */
  public $device;
  /**
   * The type of DNS error.
   *
   * @var string
   */
  public $dnsErrorType;
  /**
   * The full URL that didn't work.
   *
   * @var string
   */
  public $expandedUrl;
  /**
   * The HTTP error code.
   *
   * @var string
   */
  public $httpErrorCode;
  /**
   * The time the URL was last checked. The format is "YYYY-MM-DD HH:MM:SS".
   * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $lastCheckedDateTime;

  /**
   * The type of device that failed to load the URL.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DESKTOP, ANDROID, IOS
   *
   * @param self::DEVICE_* $device
   */
  public function setDevice($device)
  {
    $this->device = $device;
  }
  /**
   * @return self::DEVICE_*
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * The type of DNS error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, HOSTNAME_NOT_FOUND,
   * GOOGLE_CRAWLER_DNS_ISSUE
   *
   * @param self::DNS_ERROR_TYPE_* $dnsErrorType
   */
  public function setDnsErrorType($dnsErrorType)
  {
    $this->dnsErrorType = $dnsErrorType;
  }
  /**
   * @return self::DNS_ERROR_TYPE_*
   */
  public function getDnsErrorType()
  {
    return $this->dnsErrorType;
  }
  /**
   * The full URL that didn't work.
   *
   * @param string $expandedUrl
   */
  public function setExpandedUrl($expandedUrl)
  {
    $this->expandedUrl = $expandedUrl;
  }
  /**
   * @return string
   */
  public function getExpandedUrl()
  {
    return $this->expandedUrl;
  }
  /**
   * The HTTP error code.
   *
   * @param string $httpErrorCode
   */
  public function setHttpErrorCode($httpErrorCode)
  {
    $this->httpErrorCode = $httpErrorCode;
  }
  /**
   * @return string
   */
  public function getHttpErrorCode()
  {
    return $this->httpErrorCode;
  }
  /**
   * The time the URL was last checked. The format is "YYYY-MM-DD HH:MM:SS".
   * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @param string $lastCheckedDateTime
   */
  public function setLastCheckedDateTime($lastCheckedDateTime)
  {
    $this->lastCheckedDateTime = $lastCheckedDateTime;
  }
  /**
   * @return string
   */
  public function getLastCheckedDateTime()
  {
    return $this->lastCheckedDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationNotWorking::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationNotWorking');
