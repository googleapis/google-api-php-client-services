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

class GoogleAdsSearchads360V23ResourcesCallView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CALL_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CALL_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The call was missed.
   */
  public const CALL_STATUS_MISSED = 'MISSED';
  /**
   * The call was received.
   */
  public const CALL_STATUS_RECEIVED = 'RECEIVED';
  /**
   * Not specified.
   */
  public const CALL_TRACKING_DISPLAY_LOCATION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CALL_TRACKING_DISPLAY_LOCATION_UNKNOWN = 'UNKNOWN';
  /**
   * The phone call placed from the ad.
   */
  public const CALL_TRACKING_DISPLAY_LOCATION_AD = 'AD';
  /**
   * The phone call placed from the landing page ad points to.
   */
  public const CALL_TRACKING_DISPLAY_LOCATION_LANDING_PAGE = 'LANDING_PAGE';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The phone call was manually dialed.
   */
  public const TYPE_MANUALLY_DIALED = 'MANUALLY_DIALED';
  /**
   * The phone call was a mobile click-to-call.
   */
  public const TYPE_HIGH_END_MOBILE_SEARCH = 'HIGH_END_MOBILE_SEARCH';
  /**
   * Output only. The advertiser-provided call duration in seconds.
   *
   * @var string
   */
  public $callDurationSeconds;
  /**
   * Output only. The status of the call.
   *
   * @var string
   */
  public $callStatus;
  /**
   * Output only. The call tracking display location.
   *
   * @var string
   */
  public $callTrackingDisplayLocation;
  /**
   * Output only. Area code of the caller. Null if the call duration is shorter
   * than 15 seconds.
   *
   * @var string
   */
  public $callerAreaCode;
  /**
   * Output only. code of the caller.
   *
   * @var string
   */
  public $callerCountryCode;
  /**
   * Output only. The advertiser-provided call end date time.
   *
   * @var string
   */
  public $endCallDateTime;
  /**
   * Output only. The resource name of the call view. Call view resource names
   * have the form: `customers/{customer_id}/callViews/{call_detail_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The advertiser-provided call start date time.
   *
   * @var string
   */
  public $startCallDateTime;
  /**
   * Output only. The type of the call.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The advertiser-provided call duration in seconds.
   *
   * @param string $callDurationSeconds
   */
  public function setCallDurationSeconds($callDurationSeconds)
  {
    $this->callDurationSeconds = $callDurationSeconds;
  }
  /**
   * @return string
   */
  public function getCallDurationSeconds()
  {
    return $this->callDurationSeconds;
  }
  /**
   * Output only. The status of the call.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MISSED, RECEIVED
   *
   * @param self::CALL_STATUS_* $callStatus
   */
  public function setCallStatus($callStatus)
  {
    $this->callStatus = $callStatus;
  }
  /**
   * @return self::CALL_STATUS_*
   */
  public function getCallStatus()
  {
    return $this->callStatus;
  }
  /**
   * Output only. The call tracking display location.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD, LANDING_PAGE
   *
   * @param self::CALL_TRACKING_DISPLAY_LOCATION_* $callTrackingDisplayLocation
   */
  public function setCallTrackingDisplayLocation($callTrackingDisplayLocation)
  {
    $this->callTrackingDisplayLocation = $callTrackingDisplayLocation;
  }
  /**
   * @return self::CALL_TRACKING_DISPLAY_LOCATION_*
   */
  public function getCallTrackingDisplayLocation()
  {
    return $this->callTrackingDisplayLocation;
  }
  /**
   * Output only. Area code of the caller. Null if the call duration is shorter
   * than 15 seconds.
   *
   * @param string $callerAreaCode
   */
  public function setCallerAreaCode($callerAreaCode)
  {
    $this->callerAreaCode = $callerAreaCode;
  }
  /**
   * @return string
   */
  public function getCallerAreaCode()
  {
    return $this->callerAreaCode;
  }
  /**
   * Output only. code of the caller.
   *
   * @param string $callerCountryCode
   */
  public function setCallerCountryCode($callerCountryCode)
  {
    $this->callerCountryCode = $callerCountryCode;
  }
  /**
   * @return string
   */
  public function getCallerCountryCode()
  {
    return $this->callerCountryCode;
  }
  /**
   * Output only. The advertiser-provided call end date time.
   *
   * @param string $endCallDateTime
   */
  public function setEndCallDateTime($endCallDateTime)
  {
    $this->endCallDateTime = $endCallDateTime;
  }
  /**
   * @return string
   */
  public function getEndCallDateTime()
  {
    return $this->endCallDateTime;
  }
  /**
   * Output only. The resource name of the call view. Call view resource names
   * have the form: `customers/{customer_id}/callViews/{call_detail_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. The advertiser-provided call start date time.
   *
   * @param string $startCallDateTime
   */
  public function setStartCallDateTime($startCallDateTime)
  {
    $this->startCallDateTime = $startCallDateTime;
  }
  /**
   * @return string
   */
  public function getStartCallDateTime()
  {
    return $this->startCallDateTime;
  }
  /**
   * Output only. The type of the call.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MANUALLY_DIALED,
   * HIGH_END_MOBILE_SEARCH
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCallView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCallView');
