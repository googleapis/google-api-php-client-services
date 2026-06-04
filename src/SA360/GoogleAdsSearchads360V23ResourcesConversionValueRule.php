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

class GoogleAdsSearchads360V23ResourcesConversionValueRule extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Conversion Value Rule is enabled and can be applied.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Conversion Value Rule is permanently deleted and can't be applied.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Conversion Value Rule is paused, but can be re-enabled.
   */
  public const STATUS_PAUSED = 'PAUSED';
  protected $actionType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAction::class;
  protected $actionDataType = '';
  protected $audienceConditionType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAudienceCondition::class;
  protected $audienceConditionDataType = '';
  protected $deviceConditionType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleDeviceCondition::class;
  protected $deviceConditionDataType = '';
  protected $geoLocationConditionType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleGeoLocationCondition::class;
  protected $geoLocationConditionDataType = '';
  /**
   * Output only. The ID of the conversion value rule.
   *
   * @var string
   */
  public $id;
  protected $itineraryConditionType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryCondition::class;
  protected $itineraryConditionDataType = '';
  /**
   * Output only. The resource name of the conversion value rule's owner
   * customer. When the value rule is inherited from a manager customer,
   * owner_customer will be the resource name of the manager whereas the
   * customer in the resource_name will be of the requesting serving customer.
   * ** Read-only **
   *
   * @var string
   */
  public $ownerCustomer;
  /**
   * Immutable. The resource name of the conversion value rule. Conversion value
   * rule resource names have the form:
   * `customers/{customer_id}/conversionValueRules/{conversion_value_rule_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The status of the conversion value rule.
   *
   * @var string
   */
  public $status;

  /**
   * Action applied when the rule is triggered.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAction $action
   */
  public function setAction(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAction $action)
  {
    $this->action = $action;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAction
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Condition for audience that must be satisfied for the value rule to apply.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAudienceCondition $audienceCondition
   */
  public function setAudienceCondition(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAudienceCondition $audienceCondition)
  {
    $this->audienceCondition = $audienceCondition;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAudienceCondition
   */
  public function getAudienceCondition()
  {
    return $this->audienceCondition;
  }
  /**
   * Condition for device type that must be satisfied for the value rule to
   * apply.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleDeviceCondition $deviceCondition
   */
  public function setDeviceCondition(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleDeviceCondition $deviceCondition)
  {
    $this->deviceCondition = $deviceCondition;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleDeviceCondition
   */
  public function getDeviceCondition()
  {
    return $this->deviceCondition;
  }
  /**
   * Condition for Geo location that must be satisfied for the value rule to
   * apply.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleGeoLocationCondition $geoLocationCondition
   */
  public function setGeoLocationCondition(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleGeoLocationCondition $geoLocationCondition)
  {
    $this->geoLocationCondition = $geoLocationCondition;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleGeoLocationCondition
   */
  public function getGeoLocationCondition()
  {
    return $this->geoLocationCondition;
  }
  /**
   * Output only. The ID of the conversion value rule.
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
   * Condition for itinerary that must be satisfied for the value rule to apply.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryCondition $itineraryCondition
   */
  public function setItineraryCondition(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryCondition $itineraryCondition)
  {
    $this->itineraryCondition = $itineraryCondition;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryCondition
   */
  public function getItineraryCondition()
  {
    return $this->itineraryCondition;
  }
  /**
   * Output only. The resource name of the conversion value rule's owner
   * customer. When the value rule is inherited from a manager customer,
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
   * Immutable. The resource name of the conversion value rule. Conversion value
   * rule resource names have the form:
   * `customers/{customer_id}/conversionValueRules/{conversion_value_rule_id}`
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
   * The status of the conversion value rule.
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
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRule::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRule');
