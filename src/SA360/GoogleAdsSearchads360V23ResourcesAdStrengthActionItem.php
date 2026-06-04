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

class GoogleAdsSearchads360V23ResourcesAdStrengthActionItem extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ACTION_ITEM_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ACTION_ITEM_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * This action item suggests adding an asset to the asset group.
   */
  public const ACTION_ITEM_TYPE_ADD_ASSET = 'ADD_ASSET';
  /**
   * Output only. The action item type.
   *
   * @var string
   */
  public $actionItemType;
  protected $addAssetDetailsType = GoogleAdsSearchads360V23ResourcesAdStrengthActionItemAddAssetDetails::class;
  protected $addAssetDetailsDataType = '';

  /**
   * Output only. The action item type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADD_ASSET
   *
   * @param self::ACTION_ITEM_TYPE_* $actionItemType
   */
  public function setActionItemType($actionItemType)
  {
    $this->actionItemType = $actionItemType;
  }
  /**
   * @return self::ACTION_ITEM_TYPE_*
   */
  public function getActionItemType()
  {
    return $this->actionItemType;
  }
  /**
   * Output only. The action item details for action item type ADD_ASSET.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdStrengthActionItemAddAssetDetails $addAssetDetails
   */
  public function setAddAssetDetails(GoogleAdsSearchads360V23ResourcesAdStrengthActionItemAddAssetDetails $addAssetDetails)
  {
    $this->addAssetDetails = $addAssetDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdStrengthActionItemAddAssetDetails
   */
  public function getAddAssetDetails()
  {
    return $this->addAssetDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdStrengthActionItem::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdStrengthActionItem');
