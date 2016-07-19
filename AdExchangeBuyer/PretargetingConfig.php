<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_AdExchangeBuyer_PretargetingConfig extends Google_Collection
{
  protected $collection_key = 'videoPlayerSizes';
  public $billingId;
  public $configId;
  public $configName;
  public $creativeType;
  public $dimensions;
  public $excludedContentLabels;
  public $excludedGeoCriteriaIds;
  public $excludedPlacements;
  public $excludedUserLists;
  public $excludedVerticals;
  public $geoCriteriaIds;
  public $isActive;
  public $kind;
  public $languages;
  public $mobileCarriers;
  public $mobileDevices;
  public $mobileOperatingSystemVersions;
  public $placements;
  public $platforms;
  public $supportedCreativeAttributes;
  public $userLists;
  public $vendorTypes;
  public $verticals;
  public $videoPlayerSizes;

  public function setBillingId($billingId)
  {
    $this->billingId = $billingId;
  }
  public function getBillingId()
  {
    return $this->billingId;
  }
  public function setConfigId($configId)
  {
    $this->configId = $configId;
  }
  public function getConfigId()
  {
    return $this->configId;
  }
  public function setConfigName($configName)
  {
    $this->configName = $configName;
  }
  public function getConfigName()
  {
    return $this->configName;
  }
  public function setCreativeType(array $creativeType)
  {
    $this->creativeType = $creativeType;
  }
  public function getCreativeType()
  {
    return $this->creativeType;
  }
  public function setDimensions(array $dimensions)
  {
    foreach ($dimensions as $d) {
      if (!$d instanceof Google_Service_AdExchangeBuyer_PretargetingConfigDimensions) {
        throw new InvalidArgumentException('First argument to setDimensions must be an array of Google_Service_AdExchangeBuyer_PretargetingConfigDimensions');
      }
    }
    $this->dimensions = $dimensions;
  }
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setExcludedContentLabels(array $excludedContentLabels)
  {
    $this->excludedContentLabels = $excludedContentLabels;
  }
  public function getExcludedContentLabels()
  {
    return $this->excludedContentLabels;
  }
  public function setExcludedGeoCriteriaIds(array $excludedGeoCriteriaIds)
  {
    $this->excludedGeoCriteriaIds = $excludedGeoCriteriaIds;
  }
  public function getExcludedGeoCriteriaIds()
  {
    return $this->excludedGeoCriteriaIds;
  }
  public function setExcludedPlacements(array $excludedPlacements)
  {
    foreach ($excludedPlacements as $e) {
      if (!$e instanceof Google_Service_AdExchangeBuyer_PretargetingConfigExcludedPlacements) {
        throw new InvalidArgumentException('First argument to setExcludedPlacements must be an array of Google_Service_AdExchangeBuyer_PretargetingConfigExcludedPlacements');
      }
    }
    $this->excludedPlacements = $excludedPlacements;
  }
  public function getExcludedPlacements()
  {
    return $this->excludedPlacements;
  }
  public function setExcludedUserLists(array $excludedUserLists)
  {
    $this->excludedUserLists = $excludedUserLists;
  }
  public function getExcludedUserLists()
  {
    return $this->excludedUserLists;
  }
  public function setExcludedVerticals(array $excludedVerticals)
  {
    $this->excludedVerticals = $excludedVerticals;
  }
  public function getExcludedVerticals()
  {
    return $this->excludedVerticals;
  }
  public function setGeoCriteriaIds(array $geoCriteriaIds)
  {
    $this->geoCriteriaIds = $geoCriteriaIds;
  }
  public function getGeoCriteriaIds()
  {
    return $this->geoCriteriaIds;
  }
  public function setIsActive($isActive)
  {
    $this->isActive = $isActive;
  }
  public function getIsActive()
  {
    return $this->isActive;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLanguages(array $languages)
  {
    $this->languages = $languages;
  }
  public function getLanguages()
  {
    return $this->languages;
  }
  public function setMobileCarriers(array $mobileCarriers)
  {
    $this->mobileCarriers = $mobileCarriers;
  }
  public function getMobileCarriers()
  {
    return $this->mobileCarriers;
  }
  public function setMobileDevices(array $mobileDevices)
  {
    $this->mobileDevices = $mobileDevices;
  }
  public function getMobileDevices()
  {
    return $this->mobileDevices;
  }
  public function setMobileOperatingSystemVersions(array $mobileOperatingSystemVersions)
  {
    $this->mobileOperatingSystemVersions = $mobileOperatingSystemVersions;
  }
  public function getMobileOperatingSystemVersions()
  {
    return $this->mobileOperatingSystemVersions;
  }
  public function setPlacements(array $placements)
  {
    foreach ($placements as $p) {
      if (!$p instanceof Google_Service_AdExchangeBuyer_PretargetingConfigPlacements) {
        throw new InvalidArgumentException('First argument to setPlacements must be an array of Google_Service_AdExchangeBuyer_PretargetingConfigPlacements');
      }
    }
    $this->placements = $placements;
  }
  public function getPlacements()
  {
    return $this->placements;
  }
  public function setPlatforms(array $platforms)
  {
    $this->platforms = $platforms;
  }
  public function getPlatforms()
  {
    return $this->platforms;
  }
  public function setSupportedCreativeAttributes(array $supportedCreativeAttributes)
  {
    $this->supportedCreativeAttributes = $supportedCreativeAttributes;
  }
  public function getSupportedCreativeAttributes()
  {
    return $this->supportedCreativeAttributes;
  }
  public function setUserLists(array $userLists)
  {
    $this->userLists = $userLists;
  }
  public function getUserLists()
  {
    return $this->userLists;
  }
  public function setVendorTypes(array $vendorTypes)
  {
    $this->vendorTypes = $vendorTypes;
  }
  public function getVendorTypes()
  {
    return $this->vendorTypes;
  }
  public function setVerticals(array $verticals)
  {
    $this->verticals = $verticals;
  }
  public function getVerticals()
  {
    return $this->verticals;
  }
  public function setVideoPlayerSizes(array $videoPlayerSizes)
  {
    foreach ($videoPlayerSizes as $v) {
      if (!$v instanceof Google_Service_AdExchangeBuyer_PretargetingConfigVideoPlayerSizes) {
        throw new InvalidArgumentException('First argument to setVideoPlayerSizes must be an array of Google_Service_AdExchangeBuyer_PretargetingConfigVideoPlayerSizes');
      }
    }
    $this->videoPlayerSizes = $videoPlayerSizes;
  }
  public function getVideoPlayerSizes()
  {
    return $this->videoPlayerSizes;
  }
}
