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

class GoogleAdsSearchads360V23CommonProductChannelExclusivityInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CHANNEL_EXCLUSIVITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CHANNEL_EXCLUSIVITY_UNKNOWN = 'UNKNOWN';
  /**
   * The item is sold through one channel only, either local stores or online as
   * indicated by its ProductChannel.
   */
  public const CHANNEL_EXCLUSIVITY_SINGLE_CHANNEL = 'SINGLE_CHANNEL';
  /**
   * The item is matched to its online or local stores counterpart, indicating
   * it is available for purchase in both ShoppingProductChannels.
   */
  public const CHANNEL_EXCLUSIVITY_MULTI_CHANNEL = 'MULTI_CHANNEL';
  /**
   * Value of the availability.
   *
   * @var string
   */
  public $channelExclusivity;

  /**
   * Value of the availability.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SINGLE_CHANNEL, MULTI_CHANNEL
   *
   * @param self::CHANNEL_EXCLUSIVITY_* $channelExclusivity
   */
  public function setChannelExclusivity($channelExclusivity)
  {
    $this->channelExclusivity = $channelExclusivity;
  }
  /**
   * @return self::CHANNEL_EXCLUSIVITY_*
   */
  public function getChannelExclusivity()
  {
    return $this->channelExclusivity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonProductChannelExclusivityInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonProductChannelExclusivityInfo');
