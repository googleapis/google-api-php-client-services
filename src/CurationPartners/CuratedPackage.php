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

namespace Google\Service\CurationPartners;

class CuratedPackage extends \Google\Model
{
  /**
   * The total curation fee visibility is unspecified.
   */
  public const CURATION_FEE_VISIBILITY_CURATION_FEE_VISIBILITY_UNSPECIFIED = 'CURATION_FEE_VISIBILITY_UNSPECIFIED';
  /**
   * The total curation fee is visible to all buyers. This is the default value
   * if not set.
   */
  public const CURATION_FEE_VISIBILITY_DISCLOSED = 'DISCLOSED';
  /**
   * The total curation fee is not visible to all buyers.
   */
  public const CURATION_FEE_VISIBILITY_NON_DISCLOSED = 'NON_DISCLOSED';
  /**
   * Default value.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The curated package is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The curated package is inactive.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  protected $accessSettingsType = AccessControlSettings::class;
  protected $accessSettingsDataType = '';
  /**
   * Output only. The timestamp when the curated package was created. Can be
   * used to filter the response of the curatedPackages.list method.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Immutable. The visibility of the combined curation package fee
   * and data segment fees (the total curation fee).
   *
   * @var string
   */
  public $curationFeeVisibility;
  /**
   * Optional. A description of the curated package, provided by the curator.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The display name assigned to the curated package by the curator.
   * Can be used to filter the response of the curatedPackages.list method.
   *
   * @var string
   */
  public $displayName;
  protected $feeCpmType = Money::class;
  protected $feeCpmDataType = '';
  protected $floorPriceCpmType = Money::class;
  protected $floorPriceCpmDataType = '';
  /**
   * Optional. The fee will be charged as a percentage of the impression cost,
   * represented in millipercent. For example, 1% is represented as 1000.
   *
   * @var string
   */
  public $millipercentOfMediaFee;
  /**
   * Identifier. The unique resource name for the curated package. Format:
   * `curators/{accountId}/curatedPackages/{curatedPackageId}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The state of the curated package. Can be used to filter the
   * response of the curatedPackages.list method.
   *
   * @var string
   */
  public $state;
  protected $targetingType = PackageTargeting::class;
  protected $targetingDataType = '';
  /**
   * Output only. The timestamp when the curated package was last updated. Can
   * be used to filter the response of the curatedPackages.list method.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. Settings for controlling access to the curated package. Access to
   * this curated package is limited to the allowlisted media planners and the
   * creator. Buyers and bidders can not be allowlisted for or have direct
   * access to this resource.
   *
   * @param AccessControlSettings $accessSettings
   */
  public function setAccessSettings(AccessControlSettings $accessSettings)
  {
    $this->accessSettings = $accessSettings;
  }
  /**
   * @return AccessControlSettings
   */
  public function getAccessSettings()
  {
    return $this->accessSettings;
  }
  /**
   * Output only. The timestamp when the curated package was created. Can be
   * used to filter the response of the curatedPackages.list method.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Immutable. The visibility of the combined curation package fee
   * and data segment fees (the total curation fee).
   *
   * Accepted values: CURATION_FEE_VISIBILITY_UNSPECIFIED, DISCLOSED,
   * NON_DISCLOSED
   *
   * @param self::CURATION_FEE_VISIBILITY_* $curationFeeVisibility
   */
  public function setCurationFeeVisibility($curationFeeVisibility)
  {
    $this->curationFeeVisibility = $curationFeeVisibility;
  }
  /**
   * @return self::CURATION_FEE_VISIBILITY_*
   */
  public function getCurationFeeVisibility()
  {
    return $this->curationFeeVisibility;
  }
  /**
   * Optional. A description of the curated package, provided by the curator.
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
   * Required. The display name assigned to the curated package by the curator.
   * Can be used to filter the response of the curatedPackages.list method.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. The CPM fee charged by the curator to buyers using this curated
   * package. Can be used to filter the response of the curatedPackages.list
   * method.
   *
   * @param Money $feeCpm
   */
  public function setFeeCpm(Money $feeCpm)
  {
    $this->feeCpm = $feeCpm;
  }
  /**
   * @return Money
   */
  public function getFeeCpm()
  {
    return $this->feeCpm;
  }
  /**
   * Optional. The minimum CPM a buyer has to bid to participate in auctions for
   * inventory in this curated package. Can be used to filter the response of
   * the curatedPackages.list method.
   *
   * @param Money $floorPriceCpm
   */
  public function setFloorPriceCpm(Money $floorPriceCpm)
  {
    $this->floorPriceCpm = $floorPriceCpm;
  }
  /**
   * @return Money
   */
  public function getFloorPriceCpm()
  {
    return $this->floorPriceCpm;
  }
  /**
   * Optional. The fee will be charged as a percentage of the impression cost,
   * represented in millipercent. For example, 1% is represented as 1000.
   *
   * @param string $millipercentOfMediaFee
   */
  public function setMillipercentOfMediaFee($millipercentOfMediaFee)
  {
    $this->millipercentOfMediaFee = $millipercentOfMediaFee;
  }
  /**
   * @return string
   */
  public function getMillipercentOfMediaFee()
  {
    return $this->millipercentOfMediaFee;
  }
  /**
   * Identifier. The unique resource name for the curated package. Format:
   * `curators/{accountId}/curatedPackages/{curatedPackageId}`
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
   * Output only. The state of the curated package. Can be used to filter the
   * response of the curatedPackages.list method.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, INACTIVE
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. Targeting criteria for the curated package.
   *
   * @param PackageTargeting $targeting
   */
  public function setTargeting(PackageTargeting $targeting)
  {
    $this->targeting = $targeting;
  }
  /**
   * @return PackageTargeting
   */
  public function getTargeting()
  {
    return $this->targeting;
  }
  /**
   * Output only. The timestamp when the curated package was last updated. Can
   * be used to filter the response of the curatedPackages.list method.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CuratedPackage::class, 'Google_Service_CurationPartners_CuratedPackage');
