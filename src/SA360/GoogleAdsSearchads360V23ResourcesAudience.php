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

class GoogleAdsSearchads360V23ResourcesAudience extends \Google\Collection
{
  /**
   * The scope has not been specified.
   */
  public const SCOPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version.
   */
  public const SCOPE_UNKNOWN = 'UNKNOWN';
  /**
   * The audience is scoped at the customer level.
   */
  public const SCOPE_CUSTOMER = 'CUSTOMER';
  /**
   * The audience is scoped under a specific AssetGroup.
   */
  public const SCOPE_ASSET_GROUP = 'ASSET_GROUP';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Enabled status - audience is enabled and can be targeted.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Removed status - audience is removed and cannot be used for targeting.
   */
  public const STATUS_REMOVED = 'REMOVED';
  protected $collection_key = 'dimensions';
  /**
   * Immutable. The asset group that this audience is scoped under. Must be set
   * if and only if scope is ASSET_GROUP. Immutable after creation. If an
   * audience with ASSET_GROUP scope is upgraded to CUSTOMER scope, this field
   * will automatically be cleared.
   *
   * @var string
   */
  public $assetGroup;
  /**
   * Description of this audience.
   *
   * @var string
   */
  public $description;
  protected $dimensionsType = GoogleAdsSearchads360V23CommonAudienceDimension::class;
  protected $dimensionsDataType = 'array';
  protected $exclusionDimensionType = GoogleAdsSearchads360V23CommonAudienceExclusionDimension::class;
  protected $exclusionDimensionDataType = '';
  /**
   * Output only. ID of the audience.
   *
   * @var string
   */
  public $id;
  /**
   * Name of the audience. It should be unique across all audiences within the
   * account. It must have a minimum length of 1 and maximum length of 255.
   * Required when scope is not set or is set to CUSTOMER. Cannot be set or
   * updated when scope is ASSET_GROUP.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the audience. Audience names have the form:
   * `customers/{customer_id}/audiences/{audience_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Defines the scope this audience can be used in. By default, the scope is
   * CUSTOMER. Audiences can be created with a scope of ASSET_GROUP for
   * exclusive use by a single asset_group. Scope may change from ASSET_GROUP to
   * CUSTOMER but not from CUSTOMER to ASSET_GROUP.
   *
   * @var string
   */
  public $scope;
  /**
   * Output only. Status of this audience. Indicates whether the audience is
   * enabled or removed.
   *
   * @var string
   */
  public $status;

  /**
   * Immutable. The asset group that this audience is scoped under. Must be set
   * if and only if scope is ASSET_GROUP. Immutable after creation. If an
   * audience with ASSET_GROUP scope is upgraded to CUSTOMER scope, this field
   * will automatically be cleared.
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
   * Description of this audience.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Positive dimensions specifying the audience composition.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceDimension[] $dimensions
   */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceDimension[]
   */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /**
   * Negative dimension specifying the audience composition.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceExclusionDimension $exclusionDimension
   */
  public function setExclusionDimension(GoogleAdsSearchads360V23CommonAudienceExclusionDimension $exclusionDimension)
  {
    $this->exclusionDimension = $exclusionDimension;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceExclusionDimension
   */
  public function getExclusionDimension()
  {
    return $this->exclusionDimension;
  }
  /**
   * Output only. ID of the audience.
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
   * Name of the audience. It should be unique across all audiences within the
   * account. It must have a minimum length of 1 and maximum length of 255.
   * Required when scope is not set or is set to CUSTOMER. Cannot be set or
   * updated when scope is ASSET_GROUP.
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
   * Immutable. The resource name of the audience. Audience names have the form:
   * `customers/{customer_id}/audiences/{audience_id}`
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
   * Defines the scope this audience can be used in. By default, the scope is
   * CUSTOMER. Audiences can be created with a scope of ASSET_GROUP for
   * exclusive use by a single asset_group. Scope may change from ASSET_GROUP to
   * CUSTOMER but not from CUSTOMER to ASSET_GROUP.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER, ASSET_GROUP
   *
   * @param self::SCOPE_* $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return self::SCOPE_*
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Output only. Status of this audience. Indicates whether the audience is
   * enabled or removed.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAudience::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAudience');
