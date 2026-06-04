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

class GoogleAdsSearchads360V23ResourcesCampaignCustomizer extends \Google\Model
{
  /**
   * The status has not been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The customizer value is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The customizer value is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Immutable. The campaign to which the customizer attribute is linked.
   *
   * @var string
   */
  public $campaign;
  /**
   * Required. Immutable. The customizer attribute which is linked to the
   * campaign.
   *
   * @var string
   */
  public $customizerAttribute;
  /**
   * Immutable. The resource name of the campaign customizer. Campaign
   * customizer resource names have the form: `customers/{customer_id}/campaignC
   * ustomizers/{campaign_id}~{customizer_attribute_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the campaign customizer.
   *
   * @var string
   */
  public $status;
  protected $valueType = GoogleAdsSearchads360V23CommonCustomizerValue::class;
  protected $valueDataType = '';

  /**
   * Immutable. The campaign to which the customizer attribute is linked.
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
   * Required. Immutable. The customizer attribute which is linked to the
   * campaign.
   *
   * @param string $customizerAttribute
   */
  public function setCustomizerAttribute($customizerAttribute)
  {
    $this->customizerAttribute = $customizerAttribute;
  }
  /**
   * @return string
   */
  public function getCustomizerAttribute()
  {
    return $this->customizerAttribute;
  }
  /**
   * Immutable. The resource name of the campaign customizer. Campaign
   * customizer resource names have the form: `customers/{customer_id}/campaignC
   * ustomizers/{campaign_id}~{customizer_attribute_id}`
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
   * Output only. The status of the campaign customizer.
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
  /**
   * Required. The value to associate with the customizer attribute at this
   * level. The value must be of the type specified for the CustomizerAttribute.
   *
   * @param GoogleAdsSearchads360V23CommonCustomizerValue $value
   */
  public function setValue(GoogleAdsSearchads360V23CommonCustomizerValue $value)
  {
    $this->value = $value;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomizerValue
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignCustomizer::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignCustomizer');
