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

namespace Google\Service\CurationPartners;

class PackageVideoTargeting extends \Google\Collection
{
  /**
   * Default value. Should not be used in targeting specifications.
   */
  public const INCLUDED_CONTENT_DELIVERY_METHOD_CONTENT_DELIVERY_METHOD_UNSPECIFIED = 'CONTENT_DELIVERY_METHOD_UNSPECIFIED';
  /**
   * Targets video content that is being broadcast live.
   */
  public const INCLUDED_CONTENT_DELIVERY_METHOD_CONTENT_DELIVERY_METHOD_STREAMING = 'CONTENT_DELIVERY_METHOD_STREAMING';
  /**
   * Targets video content that is transferred incrementally as client's
   * playback requires.
   */
  public const INCLUDED_CONTENT_DELIVERY_METHOD_CONTENT_DELIVERY_METHOD_PROGRESSIVE = 'CONTENT_DELIVERY_METHOD_PROGRESSIVE';
  /**
   * Default value. Should not be used in targeting specifications.
   */
  public const INCLUDED_MAXIMUM_AD_DURATION_TARGETING_MAXIMUM_VIDEO_AD_DURATION_UNSPECIFIED = 'MAXIMUM_VIDEO_AD_DURATION_UNSPECIFIED';
  /**
   * Applies to video ads with a duration up to 15 seconds (0 < duration <=
   * 15s).
   */
  public const INCLUDED_MAXIMUM_AD_DURATION_TARGETING_MAXIMUM_VIDEO_AD_DURATION_FIFTEEN_SECONDS = 'MAXIMUM_VIDEO_AD_DURATION_FIFTEEN_SECONDS';
  /**
   * Applies to video ads with a duration up to 20 seconds (0 < duration <=
   * 20s).
   */
  public const INCLUDED_MAXIMUM_AD_DURATION_TARGETING_MAXIMUM_VIDEO_AD_DURATION_TWENTY_SECONDS = 'MAXIMUM_VIDEO_AD_DURATION_TWENTY_SECONDS';
  /**
   * Applies to video ads with a duration up to 30 seconds (0 < duration <=
   * 30s).
   */
  public const INCLUDED_MAXIMUM_AD_DURATION_TARGETING_MAXIMUM_VIDEO_AD_DURATION_THIRTY_SECONDS = 'MAXIMUM_VIDEO_AD_DURATION_THIRTY_SECONDS';
  /**
   * Applies to video ads with a duration up to 60 seconds (0 < duration <=
   * 60s).
   */
  public const INCLUDED_MAXIMUM_AD_DURATION_TARGETING_MAXIMUM_VIDEO_AD_DURATION_SIXTY_SECONDS = 'MAXIMUM_VIDEO_AD_DURATION_SIXTY_SECONDS';
  /**
   * Applies to video ads with a duration up to 90 seconds (0 < duration <=
   * 90s).
   */
  public const INCLUDED_MAXIMUM_AD_DURATION_TARGETING_MAXIMUM_VIDEO_AD_DURATION_NINETY_SECONDS = 'MAXIMUM_VIDEO_AD_DURATION_NINETY_SECONDS';
  /**
   * Applies to video ads with a duration up to 120 seconds (0 < duration <=
   * 120s).
   */
  public const INCLUDED_MAXIMUM_AD_DURATION_TARGETING_MAXIMUM_VIDEO_AD_DURATION_ONE_HUNDRED_TWENTY_SECONDS = 'MAXIMUM_VIDEO_AD_DURATION_ONE_HUNDRED_TWENTY_SECONDS';
  protected $collection_key = 'includedPositionTypes';
  /**
   * Optional. The targeted video delivery method. If unset, inventory will be
   * targeted regardless of video delivery method.
   *
   * @var string
   */
  public $includedContentDeliveryMethod;
  /**
   * Optional. The targeted maximum video ad duration. If unset, inventory will
   * be targeted regardless of maximum video ad duration.
   *
   * @var string
   */
  public $includedMaximumAdDurationTargeting;
  /**
   * Optional. The list of targeted video mime types using the IANA published
   * MIME type strings (https://www.iana.org/assignments/media-types/media-
   * types.xhtml). If empty, inventory will be targeted regardless of video mime
   * type.
   *
   * @var string[]
   */
  public $includedMimeTypes;
  /**
   * Optional. The list of targeted video playback methods. If empty, inventory
   * will be targeted regardless of video playback method.
   *
   * @var string[]
   */
  public $includedPlaybackMethods;
  protected $includedPlayerSizeTargetingType = VideoPlayerSizeTargeting::class;
  protected $includedPlayerSizeTargetingDataType = '';
  /**
   * Optional. The targeted video ad position types. If empty, inventory will be
   * targeted regardless of video ad position type.
   *
   * @var string[]
   */
  public $includedPositionTypes;
  /**
   * Optional. The targeted minimum predicted completion rate percentage. This
   * value must be a multiple of 10 between 10 and 90 (inclusive). For example,
   * 10 is valid, but 0, 15, and 100 are not. A value of 10 means that the
   * configuration will only match adslots for which we predict at least 10%
   * completion rate. An unset value indicates inventory will be targeted
   * regardless of predicted completion rate.
   *
   * @var string
   */
  public $minimumPredictedCompletionRatePercentage;
  protected $plcmtTargetingType = VideoPlcmtTargeting::class;
  protected $plcmtTargetingDataType = '';

  /**
   * Optional. The targeted video delivery method. If unset, inventory will be
   * targeted regardless of video delivery method.
   *
   * Accepted values: CONTENT_DELIVERY_METHOD_UNSPECIFIED,
   * CONTENT_DELIVERY_METHOD_STREAMING, CONTENT_DELIVERY_METHOD_PROGRESSIVE
   *
   * @param self::INCLUDED_CONTENT_DELIVERY_METHOD_* $includedContentDeliveryMethod
   */
  public function setIncludedContentDeliveryMethod($includedContentDeliveryMethod)
  {
    $this->includedContentDeliveryMethod = $includedContentDeliveryMethod;
  }
  /**
   * @return self::INCLUDED_CONTENT_DELIVERY_METHOD_*
   */
  public function getIncludedContentDeliveryMethod()
  {
    return $this->includedContentDeliveryMethod;
  }
  /**
   * Optional. The targeted maximum video ad duration. If unset, inventory will
   * be targeted regardless of maximum video ad duration.
   *
   * Accepted values: MAXIMUM_VIDEO_AD_DURATION_UNSPECIFIED,
   * MAXIMUM_VIDEO_AD_DURATION_FIFTEEN_SECONDS,
   * MAXIMUM_VIDEO_AD_DURATION_TWENTY_SECONDS,
   * MAXIMUM_VIDEO_AD_DURATION_THIRTY_SECONDS,
   * MAXIMUM_VIDEO_AD_DURATION_SIXTY_SECONDS,
   * MAXIMUM_VIDEO_AD_DURATION_NINETY_SECONDS,
   * MAXIMUM_VIDEO_AD_DURATION_ONE_HUNDRED_TWENTY_SECONDS
   *
   * @param self::INCLUDED_MAXIMUM_AD_DURATION_TARGETING_* $includedMaximumAdDurationTargeting
   */
  public function setIncludedMaximumAdDurationTargeting($includedMaximumAdDurationTargeting)
  {
    $this->includedMaximumAdDurationTargeting = $includedMaximumAdDurationTargeting;
  }
  /**
   * @return self::INCLUDED_MAXIMUM_AD_DURATION_TARGETING_*
   */
  public function getIncludedMaximumAdDurationTargeting()
  {
    return $this->includedMaximumAdDurationTargeting;
  }
  /**
   * Optional. The list of targeted video mime types using the IANA published
   * MIME type strings (https://www.iana.org/assignments/media-types/media-
   * types.xhtml). If empty, inventory will be targeted regardless of video mime
   * type.
   *
   * @param string[] $includedMimeTypes
   */
  public function setIncludedMimeTypes($includedMimeTypes)
  {
    $this->includedMimeTypes = $includedMimeTypes;
  }
  /**
   * @return string[]
   */
  public function getIncludedMimeTypes()
  {
    return $this->includedMimeTypes;
  }
  /**
   * Optional. The list of targeted video playback methods. If empty, inventory
   * will be targeted regardless of video playback method.
   *
   * @param string[] $includedPlaybackMethods
   */
  public function setIncludedPlaybackMethods($includedPlaybackMethods)
  {
    $this->includedPlaybackMethods = $includedPlaybackMethods;
  }
  /**
   * @return string[]
   */
  public function getIncludedPlaybackMethods()
  {
    return $this->includedPlaybackMethods;
  }
  /**
   * Optional. The targeted video player size. If unset, inventory will be
   * targeted regardless of video player size.
   *
   * @param VideoPlayerSizeTargeting $includedPlayerSizeTargeting
   */
  public function setIncludedPlayerSizeTargeting(VideoPlayerSizeTargeting $includedPlayerSizeTargeting)
  {
    $this->includedPlayerSizeTargeting = $includedPlayerSizeTargeting;
  }
  /**
   * @return VideoPlayerSizeTargeting
   */
  public function getIncludedPlayerSizeTargeting()
  {
    return $this->includedPlayerSizeTargeting;
  }
  /**
   * Optional. The targeted video ad position types. If empty, inventory will be
   * targeted regardless of video ad position type.
   *
   * @param string[] $includedPositionTypes
   */
  public function setIncludedPositionTypes($includedPositionTypes)
  {
    $this->includedPositionTypes = $includedPositionTypes;
  }
  /**
   * @return string[]
   */
  public function getIncludedPositionTypes()
  {
    return $this->includedPositionTypes;
  }
  /**
   * Optional. The targeted minimum predicted completion rate percentage. This
   * value must be a multiple of 10 between 10 and 90 (inclusive). For example,
   * 10 is valid, but 0, 15, and 100 are not. A value of 10 means that the
   * configuration will only match adslots for which we predict at least 10%
   * completion rate. An unset value indicates inventory will be targeted
   * regardless of predicted completion rate.
   *
   * @param string $minimumPredictedCompletionRatePercentage
   */
  public function setMinimumPredictedCompletionRatePercentage($minimumPredictedCompletionRatePercentage)
  {
    $this->minimumPredictedCompletionRatePercentage = $minimumPredictedCompletionRatePercentage;
  }
  /**
   * @return string
   */
  public function getMinimumPredictedCompletionRatePercentage()
  {
    return $this->minimumPredictedCompletionRatePercentage;
  }
  /**
   * Optional. The targeted video plcmt types. If unset, inventory will be
   * targeted regardless of video plcmt type.
   *
   * @param VideoPlcmtTargeting $plcmtTargeting
   */
  public function setPlcmtTargeting(VideoPlcmtTargeting $plcmtTargeting)
  {
    $this->plcmtTargeting = $plcmtTargeting;
  }
  /**
   * @return VideoPlcmtTargeting
   */
  public function getPlcmtTargeting()
  {
    return $this->plcmtTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PackageVideoTargeting::class, 'Google_Service_CurationPartners_PackageVideoTargeting');
