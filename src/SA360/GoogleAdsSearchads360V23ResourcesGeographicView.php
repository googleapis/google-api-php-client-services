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

class GoogleAdsSearchads360V23ResourcesGeographicView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const LOCATION_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const LOCATION_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Location the user is interested in while making the query.
   */
  public const LOCATION_TYPE_AREA_OF_INTEREST = 'AREA_OF_INTEREST';
  /**
   * Location of the user issuing the query.
   */
  public const LOCATION_TYPE_LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';
  /**
   * Output only. Criterion Id for the country.
   *
   * @var string
   */
  public $countryCriterionId;
  /**
   * Output only. Type of the geo targeting of the campaign.
   *
   * @var string
   */
  public $locationType;
  /**
   * Output only. The resource name of the geographic view. Geographic view
   * resource names have the form: `customers/{customer_id}/geographicViews/{cou
   * ntry_criterion_id}~{location_type}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. Criterion Id for the country.
   *
   * @param string $countryCriterionId
   */
  public function setCountryCriterionId($countryCriterionId)
  {
    $this->countryCriterionId = $countryCriterionId;
  }
  /**
   * @return string
   */
  public function getCountryCriterionId()
  {
    return $this->countryCriterionId;
  }
  /**
   * Output only. Type of the geo targeting of the campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AREA_OF_INTEREST,
   * LOCATION_OF_PRESENCE
   *
   * @param self::LOCATION_TYPE_* $locationType
   */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /**
   * @return self::LOCATION_TYPE_*
   */
  public function getLocationType()
  {
    return $this->locationType;
  }
  /**
   * Output only. The resource name of the geographic view. Geographic view
   * resource names have the form: `customers/{customer_id}/geographicViews/{cou
   * ntry_criterion_id}~{location_type}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesGeographicView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesGeographicView');
