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

class GoogleAdsSearchads360V23ResourcesSharedSet extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The shared set is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The shared set is removed and can no longer be used.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * A set of keywords that can be excluded from targeting.
   */
  public const TYPE_NEGATIVE_KEYWORDS = 'NEGATIVE_KEYWORDS';
  /**
   * A set of placements that can be excluded from targeting.
   */
  public const TYPE_NEGATIVE_PLACEMENTS = 'NEGATIVE_PLACEMENTS';
  /**
   * An account-level set of keywords that can be excluded from targeting.
   */
  public const TYPE_ACCOUNT_LEVEL_NEGATIVE_KEYWORDS = 'ACCOUNT_LEVEL_NEGATIVE_KEYWORDS';
  /**
   * A set of brands can be included or excluded from targeting.
   */
  public const TYPE_BRANDS = 'BRANDS';
  /**
   * A set of webpages that can be excluded from targeting. This shared set type
   * is not publicly available.
   */
  public const TYPE_WEBPAGES = 'WEBPAGES';
  /**
   * A set of vertical ads item group rules that can be included or excluded
   * from targeting in Vertical Ads (e.g., for hotel ads).
   */
  public const TYPE_VERTICAL_ADS_ITEM_GROUP_RULE_LIST = 'VERTICAL_ADS_ITEM_GROUP_RULE_LIST';
  /**
   * Not specified.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Hotels travel vertical.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_HOTELS = 'HOTELS';
  /**
   * Vacation rentals travel vertical.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_VACATION_RENTALS = 'VACATION_RENTALS';
  /**
   * Rental cars travel vertical.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_RENTAL_CARS = 'RENTAL_CARS';
  /**
   * Events travel vertical.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_EVENTS = 'EVENTS';
  /**
   * Things to do travel vertical.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_THINGS_TO_DO = 'THINGS_TO_DO';
  /**
   * Flights travel vertical.
   */
  public const VERTICAL_ADS_ITEM_VERTICAL_TYPE_FLIGHTS = 'FLIGHTS';
  /**
   * Output only. The ID of this shared set. Read only.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The number of shared criteria within this shared set. Read
   * only.
   *
   * @var string
   */
  public $memberCount;
  /**
   * The name of this shared set. Required. Shared Sets must have names that are
   * unique among active shared sets of the same type. The length of this string
   * should be between 1 and 255 UTF-8 bytes, inclusive.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The number of campaigns associated with this shared set. Read
   * only.
   *
   * @var string
   */
  public $referenceCount;
  /**
   * Immutable. The resource name of the shared set. Shared set resource names
   * have the form: `customers/{customer_id}/sharedSets/{shared_set_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of this shared set. Read only.
   *
   * @var string
   */
  public $status;
  /**
   * Immutable. The type of this shared set: each shared set holds only a single
   * kind of resource. Required. Immutable.
   *
   * @var string
   */
  public $type;
  /**
   * Immutable. Shared sets of type VERTICAL_ADS_ITEM_GROUP_RULE_LIST are
   * associated with a particular vertical (e.g. hotels, things to do, flights,
   * etc.). This field is required for shared sets of type
   * VERTICAL_ADS_ITEM_GROUP_RULE_LIST.
   *
   * @var string
   */
  public $verticalAdsItemVerticalType;

  /**
   * Output only. The ID of this shared set. Read only.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The number of shared criteria within this shared set. Read
   * only.
   *
   * @param string $memberCount
   */
  public function setMemberCount($memberCount)
  {
    $this->memberCount = $memberCount;
  }
  /**
   * @return string
   */
  public function getMemberCount()
  {
    return $this->memberCount;
  }
  /**
   * The name of this shared set. Required. Shared Sets must have names that are
   * unique among active shared sets of the same type. The length of this string
   * should be between 1 and 255 UTF-8 bytes, inclusive.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The number of campaigns associated with this shared set. Read
   * only.
   *
   * @param string $referenceCount
   */
  public function setReferenceCount($referenceCount)
  {
    $this->referenceCount = $referenceCount;
  }
  /**
   * @return string
   */
  public function getReferenceCount()
  {
    return $this->referenceCount;
  }
  /**
   * Immutable. The resource name of the shared set. Shared set resource names
   * have the form: `customers/{customer_id}/sharedSets/{shared_set_id}`
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
   * Output only. The status of this shared set. Read only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Immutable. The type of this shared set: each shared set holds only a single
   * kind of resource. Required. Immutable.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEGATIVE_KEYWORDS,
   * NEGATIVE_PLACEMENTS, ACCOUNT_LEVEL_NEGATIVE_KEYWORDS, BRANDS, WEBPAGES,
   * VERTICAL_ADS_ITEM_GROUP_RULE_LIST
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
  /**
   * Immutable. Shared sets of type VERTICAL_ADS_ITEM_GROUP_RULE_LIST are
   * associated with a particular vertical (e.g. hotels, things to do, flights,
   * etc.). This field is required for shared sets of type
   * VERTICAL_ADS_ITEM_GROUP_RULE_LIST.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, HOTELS, VACATION_RENTALS,
   * RENTAL_CARS, EVENTS, THINGS_TO_DO, FLIGHTS
   *
   * @param self::VERTICAL_ADS_ITEM_VERTICAL_TYPE_* $verticalAdsItemVerticalType
   */
  public function setVerticalAdsItemVerticalType($verticalAdsItemVerticalType)
  {
    $this->verticalAdsItemVerticalType = $verticalAdsItemVerticalType;
  }
  /**
   * @return self::VERTICAL_ADS_ITEM_VERTICAL_TYPE_*
   */
  public function getVerticalAdsItemVerticalType()
  {
    return $this->verticalAdsItemVerticalType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesSharedSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesSharedSet');
