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

class GoogleAdsSearchads360V23CommonLineupAttributeMetadata extends \Google\Collection
{
  protected $collection_key = 'sampleChannels';
  /**
   * The lower end of a range containing the number of channels in the lineup.
   *
   * @var string
   */
  public $channelCountLowerBound;
  /**
   * The upper end of a range containing the number of channels in the lineup.
   *
   * @var string
   */
  public $channelCountUpperBound;
  protected $inventoryCountryType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $inventoryCountryDataType = '';
  /**
   * The median number of impressions per month on this lineup.
   *
   * @var string
   */
  public $medianMonthlyInventory;
  protected $sampleChannelsType = GoogleAdsSearchads360V23CommonLineupAttributeMetadataSampleChannel::class;
  protected $sampleChannelsDataType = 'array';

  /**
   * The lower end of a range containing the number of channels in the lineup.
   *
   * @param string $channelCountLowerBound
   */
  public function setChannelCountLowerBound($channelCountLowerBound)
  {
    $this->channelCountLowerBound = $channelCountLowerBound;
  }
  /**
   * @return string
   */
  public function getChannelCountLowerBound()
  {
    return $this->channelCountLowerBound;
  }
  /**
   * The upper end of a range containing the number of channels in the lineup.
   *
   * @param string $channelCountUpperBound
   */
  public function setChannelCountUpperBound($channelCountUpperBound)
  {
    $this->channelCountUpperBound = $channelCountUpperBound;
  }
  /**
   * @return string
   */
  public function getChannelCountUpperBound()
  {
    return $this->channelCountUpperBound;
  }
  /**
   * The national market associated with the lineup.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $inventoryCountry
   */
  public function setInventoryCountry(GoogleAdsSearchads360V23CommonLocationInfo $inventoryCountry)
  {
    $this->inventoryCountry = $inventoryCountry;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getInventoryCountry()
  {
    return $this->inventoryCountry;
  }
  /**
   * The median number of impressions per month on this lineup.
   *
   * @param string $medianMonthlyInventory
   */
  public function setMedianMonthlyInventory($medianMonthlyInventory)
  {
    $this->medianMonthlyInventory = $medianMonthlyInventory;
  }
  /**
   * @return string
   */
  public function getMedianMonthlyInventory()
  {
    return $this->medianMonthlyInventory;
  }
  /**
   * Examples of channels that are included in the lineup.
   *
   * @param GoogleAdsSearchads360V23CommonLineupAttributeMetadataSampleChannel[] $sampleChannels
   */
  public function setSampleChannels($sampleChannels)
  {
    $this->sampleChannels = $sampleChannels;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLineupAttributeMetadataSampleChannel[]
   */
  public function getSampleChannels()
  {
    return $this->sampleChannels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLineupAttributeMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLineupAttributeMetadata');
