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

class GoogleAdsSearchads360V23CommonListingGroupInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Subdivision of products along some listing dimension. These nodes are not
   * used by serving to target listing entries, but is purely to define the
   * structure of the tree.
   */
  public const TYPE_SUBDIVISION = 'SUBDIVISION';
  /**
   * Listing group unit that defines a bid.
   */
  public const TYPE_UNIT = 'UNIT';
  protected $caseValueType = GoogleAdsSearchads360V23CommonListingDimensionInfo::class;
  protected $caseValueDataType = '';
  /**
   * Resource name of ad group criterion which is the parent listing group
   * subdivision. Null for the root group.
   *
   * @var string
   */
  public $parentAdGroupCriterion;
  protected $pathType = GoogleAdsSearchads360V23CommonListingDimensionPath::class;
  protected $pathDataType = '';
  /**
   * Type of the listing group.
   *
   * @var string
   */
  public $type;

  /**
   * Dimension value with which this listing group is refining its parent.
   * Undefined for the root group.
   *
   * @param GoogleAdsSearchads360V23CommonListingDimensionInfo $caseValue
   */
  public function setCaseValue(GoogleAdsSearchads360V23CommonListingDimensionInfo $caseValue)
  {
    $this->caseValue = $caseValue;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonListingDimensionInfo
   */
  public function getCaseValue()
  {
    return $this->caseValue;
  }
  /**
   * Resource name of ad group criterion which is the parent listing group
   * subdivision. Null for the root group.
   *
   * @param string $parentAdGroupCriterion
   */
  public function setParentAdGroupCriterion($parentAdGroupCriterion)
  {
    $this->parentAdGroupCriterion = $parentAdGroupCriterion;
  }
  /**
   * @return string
   */
  public function getParentAdGroupCriterion()
  {
    return $this->parentAdGroupCriterion;
  }
  /**
   * The path of dimensions defining this listing group.
   *
   * @param GoogleAdsSearchads360V23CommonListingDimensionPath $path
   */
  public function setPath(GoogleAdsSearchads360V23CommonListingDimensionPath $path)
  {
    $this->path = $path;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonListingDimensionPath
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * Type of the listing group.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SUBDIVISION, UNIT
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
class_alias(GoogleAdsSearchads360V23CommonListingGroupInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonListingGroupInfo');
