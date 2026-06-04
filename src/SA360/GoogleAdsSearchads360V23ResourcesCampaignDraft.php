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

class GoogleAdsSearchads360V23ResourcesCampaignDraft extends \Google\Model
{
  /**
   * The status has not been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Initial state of the draft, the advertiser can start adding changes with no
   * effect on serving.
   */
  public const STATUS_PROPOSED = 'PROPOSED';
  /**
   * The campaign draft is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Advertiser requested to promote draft's changes back into the original
   * campaign. Advertiser can poll the long running operation returned by the
   * promote action to see the status of the promotion.
   */
  public const STATUS_PROMOTING = 'PROMOTING';
  /**
   * The process to merge changes in the draft back to the original campaign has
   * completed successfully.
   */
  public const STATUS_PROMOTED = 'PROMOTED';
  /**
   * The promotion failed after it was partially applied. Promote cannot be
   * attempted again safely, so the issue must be corrected in the original
   * campaign.
   */
  public const STATUS_PROMOTE_FAILED = 'PROMOTE_FAILED';
  /**
   * Immutable. The base campaign to which the draft belongs.
   *
   * @var string
   */
  public $baseCampaign;
  /**
   * Output only. Resource name of the Campaign that results from overlaying the
   * draft changes onto the base campaign. This field is read-only.
   *
   * @var string
   */
  public $draftCampaign;
  /**
   * Output only. The ID of the draft. This field is read-only.
   *
   * @var string
   */
  public $draftId;
  /**
   * Output only. Whether there is an experiment based on this draft currently
   * serving.
   *
   * @var bool
   */
  public $hasExperimentRunning;
  /**
   * Output only. The resource name of the long-running operation that can be
   * used to poll for completion of draft promotion. This is only set if the
   * draft promotion is in progress or finished.
   *
   * @var string
   */
  public $longRunningOperation;
  /**
   * The name of the campaign draft. This field is required and should not be
   * empty when creating new campaign drafts. It must not contain any null (code
   * point 0x0), NL line feed (code point 0xA) or carriage return (code point
   * 0xD) characters.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the campaign draft. Campaign draft resource
   * names have the form:
   * `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the campaign draft. This field is read-only.
   * When a new campaign draft is added, the status defaults to PROPOSED.
   *
   * @var string
   */
  public $status;

  /**
   * Immutable. The base campaign to which the draft belongs.
   *
   * @param string $baseCampaign
   */
  public function setBaseCampaign($baseCampaign)
  {
    $this->baseCampaign = $baseCampaign;
  }
  /**
   * @return string
   */
  public function getBaseCampaign()
  {
    return $this->baseCampaign;
  }
  /**
   * Output only. Resource name of the Campaign that results from overlaying the
   * draft changes onto the base campaign. This field is read-only.
   *
   * @param string $draftCampaign
   */
  public function setDraftCampaign($draftCampaign)
  {
    $this->draftCampaign = $draftCampaign;
  }
  /**
   * @return string
   */
  public function getDraftCampaign()
  {
    return $this->draftCampaign;
  }
  /**
   * Output only. The ID of the draft. This field is read-only.
   *
   * @param string $draftId
   */
  public function setDraftId($draftId)
  {
    $this->draftId = $draftId;
  }
  /**
   * @return string
   */
  public function getDraftId()
  {
    return $this->draftId;
  }
  /**
   * Output only. Whether there is an experiment based on this draft currently
   * serving.
   *
   * @param bool $hasExperimentRunning
   */
  public function setHasExperimentRunning($hasExperimentRunning)
  {
    $this->hasExperimentRunning = $hasExperimentRunning;
  }
  /**
   * @return bool
   */
  public function getHasExperimentRunning()
  {
    return $this->hasExperimentRunning;
  }
  /**
   * Output only. The resource name of the long-running operation that can be
   * used to poll for completion of draft promotion. This is only set if the
   * draft promotion is in progress or finished.
   *
   * @param string $longRunningOperation
   */
  public function setLongRunningOperation($longRunningOperation)
  {
    $this->longRunningOperation = $longRunningOperation;
  }
  /**
   * @return string
   */
  public function getLongRunningOperation()
  {
    return $this->longRunningOperation;
  }
  /**
   * The name of the campaign draft. This field is required and should not be
   * empty when creating new campaign drafts. It must not contain any null (code
   * point 0x0), NL line feed (code point 0xA) or carriage return (code point
   * 0xD) characters.
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
   * Immutable. The resource name of the campaign draft. Campaign draft resource
   * names have the form:
   * `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
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
   * Output only. The status of the campaign draft. This field is read-only.
   * When a new campaign draft is added, the status defaults to PROPOSED.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PROPOSED, REMOVED, PROMOTING,
   * PROMOTED, PROMOTE_FAILED
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
class_alias(GoogleAdsSearchads360V23ResourcesCampaignDraft::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignDraft');
