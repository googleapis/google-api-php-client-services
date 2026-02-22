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

namespace Google\Service\DataManager;

class PairIdInfo extends \Google\Model
{
  /**
   * Output only. The count of the advertiser's first party data records that
   * have been uploaded to a clean room provider. This does not signify the size
   * of a PAIR user list.
   *
   * @var string
   */
  public $advertiserIdentifierCount;
  /**
   * Required. Immutable. Identifies a unique advertiser to publisher
   * relationship with one clean room provider or across multiple clean room
   * providers.
   *
   * @var string
   */
  public $cleanRoomIdentifier;
  /**
   * Output only. This field denotes the percentage of membership match of this
   * user list with the corresponding publisher's first party data. Must be
   * between 0 and 100 inclusive.
   *
   * @var int
   */
  public $matchRatePercentage;
  /**
   * Required. Immutable. Identifies the publisher that the Publisher Advertiser
   * Identity Reconciliation user list is reconciled with. This field is
   * provided by the cleanroom provider and is only unique in the scope of that
   * cleanroom. This cannot be used as a global identifier across multiple
   * cleanrooms.
   *
   * @var string
   */
  public $publisherId;
  /**
   * Optional. Descriptive name of the publisher to be displayed in the UI for a
   * better targeting experience.
   *
   * @var string
   */
  public $publisherName;

  /**
   * Output only. The count of the advertiser's first party data records that
   * have been uploaded to a clean room provider. This does not signify the size
   * of a PAIR user list.
   *
   * @param string $advertiserIdentifierCount
   */
  public function setAdvertiserIdentifierCount($advertiserIdentifierCount)
  {
    $this->advertiserIdentifierCount = $advertiserIdentifierCount;
  }
  /**
   * @return string
   */
  public function getAdvertiserIdentifierCount()
  {
    return $this->advertiserIdentifierCount;
  }
  /**
   * Required. Immutable. Identifies a unique advertiser to publisher
   * relationship with one clean room provider or across multiple clean room
   * providers.
   *
   * @param string $cleanRoomIdentifier
   */
  public function setCleanRoomIdentifier($cleanRoomIdentifier)
  {
    $this->cleanRoomIdentifier = $cleanRoomIdentifier;
  }
  /**
   * @return string
   */
  public function getCleanRoomIdentifier()
  {
    return $this->cleanRoomIdentifier;
  }
  /**
   * Output only. This field denotes the percentage of membership match of this
   * user list with the corresponding publisher's first party data. Must be
   * between 0 and 100 inclusive.
   *
   * @param int $matchRatePercentage
   */
  public function setMatchRatePercentage($matchRatePercentage)
  {
    $this->matchRatePercentage = $matchRatePercentage;
  }
  /**
   * @return int
   */
  public function getMatchRatePercentage()
  {
    return $this->matchRatePercentage;
  }
  /**
   * Required. Immutable. Identifies the publisher that the Publisher Advertiser
   * Identity Reconciliation user list is reconciled with. This field is
   * provided by the cleanroom provider and is only unique in the scope of that
   * cleanroom. This cannot be used as a global identifier across multiple
   * cleanrooms.
   *
   * @param string $publisherId
   */
  public function setPublisherId($publisherId)
  {
    $this->publisherId = $publisherId;
  }
  /**
   * @return string
   */
  public function getPublisherId()
  {
    return $this->publisherId;
  }
  /**
   * Optional. Descriptive name of the publisher to be displayed in the UI for a
   * better targeting experience.
   *
   * @param string $publisherName
   */
  public function setPublisherName($publisherName)
  {
    $this->publisherName = $publisherName;
  }
  /**
   * @return string
   */
  public function getPublisherName()
  {
    return $this->publisherName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PairIdInfo::class, 'Google_Service_DataManager_PairIdInfo');
