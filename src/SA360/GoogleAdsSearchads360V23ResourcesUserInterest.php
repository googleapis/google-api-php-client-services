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

class GoogleAdsSearchads360V23ResourcesUserInterest extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const TAXONOMY_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TAXONOMY_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The affinity for this user interest.
   */
  public const TAXONOMY_TYPE_AFFINITY = 'AFFINITY';
  /**
   * The market for this user interest.
   */
  public const TAXONOMY_TYPE_IN_MARKET = 'IN_MARKET';
  /**
   * Users known to have installed applications in the specified categories.
   */
  public const TAXONOMY_TYPE_MOBILE_APP_INSTALL_USER = 'MOBILE_APP_INSTALL_USER';
  /**
   * The geographical location of the interest-based vertical.
   */
  public const TAXONOMY_TYPE_VERTICAL_GEO = 'VERTICAL_GEO';
  /**
   * User interest criteria for new smart phone users.
   */
  public const TAXONOMY_TYPE_NEW_SMART_PHONE_USER = 'NEW_SMART_PHONE_USER';
  protected $collection_key = 'availabilities';
  protected $availabilitiesType = GoogleAdsSearchads360V23CommonCriterionCategoryAvailability::class;
  protected $availabilitiesDataType = 'array';
  /**
   * Output only. True if the user interest is launched to all channels and
   * locales.
   *
   * @var bool
   */
  public $launchedToAll;
  /**
   * Output only. The name of the user interest.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The resource name of the user interest. User interest resource
   * names have the form:
   * `customers/{customer_id}/userInterests/{user_interest_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Taxonomy type of the user interest.
   *
   * @var string
   */
  public $taxonomyType;
  /**
   * Output only. The ID of the user interest.
   *
   * @var string
   */
  public $userInterestId;
  /**
   * Output only. The parent of the user interest.
   *
   * @var string
   */
  public $userInterestParent;

  /**
   * Output only. Availability information of the user interest.
   *
   * @param GoogleAdsSearchads360V23CommonCriterionCategoryAvailability[] $availabilities
   */
  public function setAvailabilities($availabilities)
  {
    $this->availabilities = $availabilities;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCriterionCategoryAvailability[]
   */
  public function getAvailabilities()
  {
    return $this->availabilities;
  }
  /**
   * Output only. True if the user interest is launched to all channels and
   * locales.
   *
   * @param bool $launchedToAll
   */
  public function setLaunchedToAll($launchedToAll)
  {
    $this->launchedToAll = $launchedToAll;
  }
  /**
   * @return bool
   */
  public function getLaunchedToAll()
  {
    return $this->launchedToAll;
  }
  /**
   * Output only. The name of the user interest.
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
   * Output only. The resource name of the user interest. User interest resource
   * names have the form:
   * `customers/{customer_id}/userInterests/{user_interest_id}`
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
   * Output only. Taxonomy type of the user interest.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AFFINITY, IN_MARKET,
   * MOBILE_APP_INSTALL_USER, VERTICAL_GEO, NEW_SMART_PHONE_USER
   *
   * @param self::TAXONOMY_TYPE_* $taxonomyType
   */
  public function setTaxonomyType($taxonomyType)
  {
    $this->taxonomyType = $taxonomyType;
  }
  /**
   * @return self::TAXONOMY_TYPE_*
   */
  public function getTaxonomyType()
  {
    return $this->taxonomyType;
  }
  /**
   * Output only. The ID of the user interest.
   *
   * @param string $userInterestId
   */
  public function setUserInterestId($userInterestId)
  {
    $this->userInterestId = $userInterestId;
  }
  /**
   * @return string
   */
  public function getUserInterestId()
  {
    return $this->userInterestId;
  }
  /**
   * Output only. The parent of the user interest.
   *
   * @param string $userInterestParent
   */
  public function setUserInterestParent($userInterestParent)
  {
    $this->userInterestParent = $userInterestParent;
  }
  /**
   * @return string
   */
  public function getUserInterestParent()
  {
    return $this->userInterestParent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesUserInterest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesUserInterest');
