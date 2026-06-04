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

class GoogleAdsSearchads360V23ResourcesConversionValueRuleSet extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const ATTACHMENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ATTACHMENT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Attached to the customer.
   */
  public const ATTACHMENT_TYPE_CUSTOMER = 'CUSTOMER';
  /**
   * Attached to a campaign.
   */
  public const ATTACHMENT_TYPE_CAMPAIGN = 'CAMPAIGN';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Conversion Value Rule Set is enabled and can be applied.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Conversion Value Rule Set is permanently deleted and can't be applied.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Conversion Value Rule Set is paused and won't be applied. It can be enabled
   * again.
   */
  public const STATUS_PAUSED = 'PAUSED';
  protected $collection_key = 'dimensions';
  /**
   * Immutable. Defines the scope where the conversion value rule set is
   * attached.
   *
   * @var string
   */
  public $attachmentType;
  /**
   * The resource name of the campaign when the conversion value rule set is
   * attached to a campaign.
   *
   * @var string
   */
  public $campaign;
  /**
   * Immutable. The conversion action categories of the conversion value rule
   * set.
   *
   * @var string[]
   */
  public $conversionActionCategories;
  /**
   * Resource names of rules within the rule set.
   *
   * @var string[]
   */
  public $conversionValueRules;
  /**
   * Defines dimensions for Value Rule conditions. The condition types of value
   * rules within this value rule set must be of these dimensions. The first
   * entry in this list is the primary dimension of the included value rules.
   * When using value rule primary dimension segmentation, conversion values
   * will be segmented into the values adjusted by value rules and the original
   * values, if some value rules apply.
   *
   * @var string[]
   */
  public $dimensions;
  /**
   * Output only. The ID of the conversion value rule set.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The resource name of the conversion value rule set's owner
   * customer. When the value rule set is inherited from a manager customer,
   * owner_customer will be the resource name of the manager whereas the
   * customer in the resource_name will be of the requesting serving customer.
   * ** Read-only **
   *
   * @var string
   */
  public $ownerCustomer;
  /**
   * Immutable. The resource name of the conversion value rule set. Conversion
   * value rule set resource names have the form: `customers/{customer_id}/conve
   * rsionValueRuleSets/{conversion_value_rule_set_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the conversion value rule set. ** Read-only **
   *
   * @var string
   */
  public $status;

  /**
   * Immutable. Defines the scope where the conversion value rule set is
   * attached.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER, CAMPAIGN
   *
   * @param self::ATTACHMENT_TYPE_* $attachmentType
   */
  public function setAttachmentType($attachmentType)
  {
    $this->attachmentType = $attachmentType;
  }
  /**
   * @return self::ATTACHMENT_TYPE_*
   */
  public function getAttachmentType()
  {
    return $this->attachmentType;
  }
  /**
   * The resource name of the campaign when the conversion value rule set is
   * attached to a campaign.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Immutable. The conversion action categories of the conversion value rule
   * set.
   *
   * @param string[] $conversionActionCategories
   */
  public function setConversionActionCategories($conversionActionCategories)
  {
    $this->conversionActionCategories = $conversionActionCategories;
  }
  /**
   * @return string[]
   */
  public function getConversionActionCategories()
  {
    return $this->conversionActionCategories;
  }
  /**
   * Resource names of rules within the rule set.
   *
   * @param string[] $conversionValueRules
   */
  public function setConversionValueRules($conversionValueRules)
  {
    $this->conversionValueRules = $conversionValueRules;
  }
  /**
   * @return string[]
   */
  public function getConversionValueRules()
  {
    return $this->conversionValueRules;
  }
  /**
   * Defines dimensions for Value Rule conditions. The condition types of value
   * rules within this value rule set must be of these dimensions. The first
   * entry in this list is the primary dimension of the included value rules.
   * When using value rule primary dimension segmentation, conversion values
   * will be segmented into the values adjusted by value rules and the original
   * values, if some value rules apply.
   *
   * @param string[] $dimensions
   */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /**
   * @return string[]
   */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /**
   * Output only. The ID of the conversion value rule set.
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
   * Output only. The resource name of the conversion value rule set's owner
   * customer. When the value rule set is inherited from a manager customer,
   * owner_customer will be the resource name of the manager whereas the
   * customer in the resource_name will be of the requesting serving customer.
   * ** Read-only **
   *
   * @param string $ownerCustomer
   */
  public function setOwnerCustomer($ownerCustomer)
  {
    $this->ownerCustomer = $ownerCustomer;
  }
  /**
   * @return string
   */
  public function getOwnerCustomer()
  {
    return $this->ownerCustomer;
  }
  /**
   * Immutable. The resource name of the conversion value rule set. Conversion
   * value rule set resource names have the form: `customers/{customer_id}/conve
   * rsionValueRuleSets/{conversion_value_rule_set_id}`
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
   * Output only. The status of the conversion value rule set. ** Read-only **
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED, PAUSED
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
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRuleSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRuleSet');
