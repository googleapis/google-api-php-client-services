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

class GoogleAdsSearchads360V23CommonCallFeedItem extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CALL_CONVERSION_REPORTING_STATE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CALL_CONVERSION_REPORTING_STATE_UNKNOWN = 'UNKNOWN';
  /**
   * Call conversion action is disabled.
   */
  public const CALL_CONVERSION_REPORTING_STATE_DISABLED = 'DISABLED';
  /**
   * Call conversion action will use call conversion type set at the account
   * level.
   */
  public const CALL_CONVERSION_REPORTING_STATE_USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION = 'USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION';
  /**
   * Call conversion action will use call conversion type set at the resource
   * (call only ads/call extensions) level.
   */
  public const CALL_CONVERSION_REPORTING_STATE_USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION = 'USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION';
  /**
   * The conversion action to attribute a call conversion to. If not set a
   * default conversion action is used. This field only has effect if
   * call_tracking_enabled is set to true. Otherwise this field is ignored.
   *
   * @var string
   */
  public $callConversionAction;
  /**
   * Enum value that indicates whether this call extension uses its own call
   * conversion setting (or just have call conversion disabled), or following
   * the account level setting.
   *
   * @var string
   */
  public $callConversionReportingState;
  /**
   * If true, disable call conversion tracking. call_conversion_action should
   * not be set if this is true. Optional.
   *
   * @var bool
   */
  public $callConversionTrackingDisabled;
  /**
   * Indicates whether call tracking is enabled. By default, call tracking is
   * not enabled.
   *
   * @var bool
   */
  public $callTrackingEnabled;
  /**
   * Uppercase two-letter country code of the advertiser's phone number. This
   * string must not be empty.
   *
   * @var string
   */
  public $countryCode;
  /**
   * The advertiser's phone number to append to the ad. This string must not be
   * empty.
   *
   * @var string
   */
  public $phoneNumber;

  /**
   * The conversion action to attribute a call conversion to. If not set a
   * default conversion action is used. This field only has effect if
   * call_tracking_enabled is set to true. Otherwise this field is ignored.
   *
   * @param string $callConversionAction
   */
  public function setCallConversionAction($callConversionAction)
  {
    $this->callConversionAction = $callConversionAction;
  }
  /**
   * @return string
   */
  public function getCallConversionAction()
  {
    return $this->callConversionAction;
  }
  /**
   * Enum value that indicates whether this call extension uses its own call
   * conversion setting (or just have call conversion disabled), or following
   * the account level setting.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DISABLED,
   * USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION,
   * USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION
   *
   * @param self::CALL_CONVERSION_REPORTING_STATE_* $callConversionReportingState
   */
  public function setCallConversionReportingState($callConversionReportingState)
  {
    $this->callConversionReportingState = $callConversionReportingState;
  }
  /**
   * @return self::CALL_CONVERSION_REPORTING_STATE_*
   */
  public function getCallConversionReportingState()
  {
    return $this->callConversionReportingState;
  }
  /**
   * If true, disable call conversion tracking. call_conversion_action should
   * not be set if this is true. Optional.
   *
   * @param bool $callConversionTrackingDisabled
   */
  public function setCallConversionTrackingDisabled($callConversionTrackingDisabled)
  {
    $this->callConversionTrackingDisabled = $callConversionTrackingDisabled;
  }
  /**
   * @return bool
   */
  public function getCallConversionTrackingDisabled()
  {
    return $this->callConversionTrackingDisabled;
  }
  /**
   * Indicates whether call tracking is enabled. By default, call tracking is
   * not enabled.
   *
   * @param bool $callTrackingEnabled
   */
  public function setCallTrackingEnabled($callTrackingEnabled)
  {
    $this->callTrackingEnabled = $callTrackingEnabled;
  }
  /**
   * @return bool
   */
  public function getCallTrackingEnabled()
  {
    return $this->callTrackingEnabled;
  }
  /**
   * Uppercase two-letter country code of the advertiser's phone number. This
   * string must not be empty.
   *
   * @param string $countryCode
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /**
   * The advertiser's phone number to append to the ad. This string must not be
   * empty.
   *
   * @param string $phoneNumber
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return string
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCallFeedItem::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCallFeedItem');
