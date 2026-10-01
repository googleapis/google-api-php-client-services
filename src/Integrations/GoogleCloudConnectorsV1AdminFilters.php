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

namespace Google\Service\Integrations;

class GoogleCloudConnectorsV1AdminFilters extends \Google\Model
{
  /**
   * Filter type is not specified.
   */
  public const FILTER_TYPE_FILTER_TYPE_UNSPECIFIED = 'FILTER_TYPE_UNSPECIFIED';
  /**
   * Only allow items matching the configured values.
   */
  public const FILTER_TYPE_INCLUSION = 'INCLUSION';
  /**
   * Disallow items matching the configured values.
   */
  public const FILTER_TYPE_EXCLUSION = 'EXCLUSION';
  /**
   * Required. Unique name for the filter, e.g., "SharePointSiteURL",
   * "DocumentType", "ChatSpaceName".
   *
   * @var string
   */
  public $filterKey;
  /**
   * Required. Type of the filter.
   *
   * @var string
   */
  public $filterType;
  /**
   * Optional. A single integer value.
   *
   * @var string
   */
  public $intValue;
  protected $stringListValuesType = GoogleCloudConnectorsV1AdminFiltersStringListValues::class;
  protected $stringListValuesDataType = '';
  /**
   * Optional. A single string value.
   *
   * @var string
   */
  public $stringValue;

  /**
   * Required. Unique name for the filter, e.g., "SharePointSiteURL",
   * "DocumentType", "ChatSpaceName".
   *
   * @param string $filterKey
   */
  public function setFilterKey($filterKey)
  {
    $this->filterKey = $filterKey;
  }
  /**
   * @return string
   */
  public function getFilterKey()
  {
    return $this->filterKey;
  }
  /**
   * Required. Type of the filter.
   *
   * Accepted values: FILTER_TYPE_UNSPECIFIED, INCLUSION, EXCLUSION
   *
   * @param self::FILTER_TYPE_* $filterType
   */
  public function setFilterType($filterType)
  {
    $this->filterType = $filterType;
  }
  /**
   * @return self::FILTER_TYPE_*
   */
  public function getFilterType()
  {
    return $this->filterType;
  }
  /**
   * Optional. A single integer value.
   *
   * @param string $intValue
   */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /**
   * @return string
   */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /**
   * Optional. List of string values.
   *
   * @param GoogleCloudConnectorsV1AdminFiltersStringListValues $stringListValues
   */
  public function setStringListValues(GoogleCloudConnectorsV1AdminFiltersStringListValues $stringListValues)
  {
    $this->stringListValues = $stringListValues;
  }
  /**
   * @return GoogleCloudConnectorsV1AdminFiltersStringListValues
   */
  public function getStringListValues()
  {
    return $this->stringListValues;
  }
  /**
   * Optional. A single string value.
   *
   * @param string $stringValue
   */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /**
   * @return string
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudConnectorsV1AdminFilters::class, 'Google_Service_Integrations_GoogleCloudConnectorsV1AdminFilters');
