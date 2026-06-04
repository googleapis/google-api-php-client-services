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

class GoogleAdsSearchads360V23ResourcesCampaignSharedSet extends \Google\Model
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
   * The campaign shared set is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The campaign shared set is removed and can no longer be used.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Immutable. The campaign to which the campaign shared set belongs.
   *
   * @var string
   */
  public $campaign;
  /**
   * Immutable. The resource name of the campaign shared set. Campaign shared
   * set resource names have the form:
   * `customers/{customer_id}/campaignSharedSets/{campaign_id}~{shared_set_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Immutable. The shared set associated with the campaign. This may be a
   * negative keyword shared set of another customer. This customer should be a
   * manager of the other customer, otherwise the campaign shared set will exist
   * but have no serving effect. Only negative keyword shared sets can be
   * associated with Shopping campaigns. Only negative placement shared sets can
   * be associated with Display mobile app campaigns.
   *
   * @var string
   */
  public $sharedSet;
  /**
   * Output only. The status of this campaign shared set. Read only.
   *
   * @var string
   */
  public $status;

  /**
   * Immutable. The campaign to which the campaign shared set belongs.
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
   * Immutable. The resource name of the campaign shared set. Campaign shared
   * set resource names have the form:
   * `customers/{customer_id}/campaignSharedSets/{campaign_id}~{shared_set_id}`
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
   * Immutable. The shared set associated with the campaign. This may be a
   * negative keyword shared set of another customer. This customer should be a
   * manager of the other customer, otherwise the campaign shared set will exist
   * but have no serving effect. Only negative keyword shared sets can be
   * associated with Shopping campaigns. Only negative placement shared sets can
   * be associated with Display mobile app campaigns.
   *
   * @param string $sharedSet
   */
  public function setSharedSet($sharedSet)
  {
    $this->sharedSet = $sharedSet;
  }
  /**
   * @return string
   */
  public function getSharedSet()
  {
    return $this->sharedSet;
  }
  /**
   * Output only. The status of this campaign shared set. Read only.
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
class_alias(GoogleAdsSearchads360V23ResourcesCampaignSharedSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignSharedSet');
