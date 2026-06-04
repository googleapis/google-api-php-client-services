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

class GoogleAdsSearchads360V23ResourcesAssetGroupListingGroupFilter extends \Google\Model
{
  /**
   * Not specified.
   */
  public const LISTING_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LISTING_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Listings from a Shopping source, like products from Google Merchant Center.
   */
  public const LISTING_SOURCE_SHOPPING = 'SHOPPING';
  /**
   * Listings from a webpage source, like URLs from a page feed or from the
   * advertiser web domain.
   */
  public const LISTING_SOURCE_WEBPAGE = 'WEBPAGE';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Subdivision of products along some listing dimensions.
   */
  public const TYPE_SUBDIVISION = 'SUBDIVISION';
  /**
   * An included listing group filter leaf node.
   */
  public const TYPE_UNIT_INCLUDED = 'UNIT_INCLUDED';
  /**
   * An excluded listing group filter leaf node.
   */
  public const TYPE_UNIT_EXCLUDED = 'UNIT_EXCLUDED';
  /**
   * Immutable. The asset group which this asset group listing group filter is
   * part of.
   *
   * @var string
   */
  public $assetGroup;
  protected $caseValueType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimension::class;
  protected $caseValueDataType = '';
  /**
   * Output only. The ID of the ListingGroupFilter.
   *
   * @var string
   */
  public $id;
  /**
   * Immutable. The source of listings filtered by this listing group filter.
   *
   * @var string
   */
  public $listingSource;
  /**
   * Immutable. Resource name of the parent listing group subdivision. Null for
   * the root listing group filter node.
   *
   * @var string
   */
  public $parentListingGroupFilter;
  protected $pathType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionPath::class;
  protected $pathDataType = '';
  /**
   * Immutable. The resource name of the asset group listing group filter. Asset
   * group listing group filter resource name have the form: `customers/{custome
   * r_id}/assetGroupListingGroupFilters/{asset_group_id}~{listing_group_filter_
   * id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Immutable. Type of a listing group filter node.
   *
   * @var string
   */
  public $type;

  /**
   * Immutable. The asset group which this asset group listing group filter is
   * part of.
   *
   * @param string $assetGroup
   */
  public function setAssetGroup($assetGroup)
  {
    $this->assetGroup = $assetGroup;
  }
  /**
   * @return string
   */
  public function getAssetGroup()
  {
    return $this->assetGroup;
  }
  /**
   * Dimension value with which this listing group is refining its parent.
   * Undefined for the root group.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimension $caseValue
   */
  public function setCaseValue(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimension $caseValue)
  {
    $this->caseValue = $caseValue;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimension
   */
  public function getCaseValue()
  {
    return $this->caseValue;
  }
  /**
   * Output only. The ID of the ListingGroupFilter.
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
   * Immutable. The source of listings filtered by this listing group filter.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SHOPPING, WEBPAGE
   *
   * @param self::LISTING_SOURCE_* $listingSource
   */
  public function setListingSource($listingSource)
  {
    $this->listingSource = $listingSource;
  }
  /**
   * @return self::LISTING_SOURCE_*
   */
  public function getListingSource()
  {
    return $this->listingSource;
  }
  /**
   * Immutable. Resource name of the parent listing group subdivision. Null for
   * the root listing group filter node.
   *
   * @param string $parentListingGroupFilter
   */
  public function setParentListingGroupFilter($parentListingGroupFilter)
  {
    $this->parentListingGroupFilter = $parentListingGroupFilter;
  }
  /**
   * @return string
   */
  public function getParentListingGroupFilter()
  {
    return $this->parentListingGroupFilter;
  }
  /**
   * Output only. The path of dimensions defining this listing group filter.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionPath $path
   */
  public function setPath(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionPath $path)
  {
    $this->path = $path;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionPath
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * Immutable. The resource name of the asset group listing group filter. Asset
   * group listing group filter resource name have the form: `customers/{custome
   * r_id}/assetGroupListingGroupFilters/{asset_group_id}~{listing_group_filter_
   * id}`
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
   * Immutable. Type of a listing group filter node.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SUBDIVISION, UNIT_INCLUDED,
   * UNIT_EXCLUDED
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
class_alias(GoogleAdsSearchads360V23ResourcesAssetGroupListingGroupFilter::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAssetGroupListingGroupFilter');
