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

class GoogleAdsSearchads360V23ResourcesAssetGroupSignal extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const APPROVAL_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const APPROVAL_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Search Theme is eligible to show ads.
   */
  public const APPROVAL_STATUS_APPROVED = 'APPROVED';
  /**
   * Low search volume; Below first page bid estimate.
   */
  public const APPROVAL_STATUS_LIMITED = 'LIMITED';
  /**
   * Search Theme is inactive and isn't showing ads. A disapproved Search Theme
   * usually means there's an issue with one or more of our advertising
   * policies.
   */
  public const APPROVAL_STATUS_DISAPPROVED = 'DISAPPROVED';
  /**
   * Search Theme is under review. It won’t be able to trigger ads until it's
   * been reviewed.
   */
  public const APPROVAL_STATUS_UNDER_REVIEW = 'UNDER_REVIEW';
  protected $collection_key = 'disapprovalReasons';
  /**
   * Output only. Approval status is the output value for search theme signal
   * after Google ads policy review. When using Audience signal, this field is
   * not used and will be absent.
   *
   * @var string
   */
  public $approvalStatus;
  /**
   * Immutable. The asset group which this asset group signal belongs to.
   *
   * @var string
   */
  public $assetGroup;
  protected $audienceType = GoogleAdsSearchads360V23CommonAudienceInfo::class;
  protected $audienceDataType = '';
  /**
   * Output only. Computed for SearchTheme signals. When using Audience signal,
   * this field is not used and will be absent.
   *
   * @var string[]
   */
  public $disapprovalReasons;
  /**
   * Immutable. The resource name of the asset group signal. Asset group signal
   * resource name have the form:
   * `customers/{customer_id}/assetGroupSignals/{asset_group_id}~{signal_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $searchThemeType = GoogleAdsSearchads360V23CommonSearchThemeInfo::class;
  protected $searchThemeDataType = '';

  /**
   * Output only. Approval status is the output value for search theme signal
   * after Google ads policy review. When using Audience signal, this field is
   * not used and will be absent.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, APPROVED, LIMITED, DISAPPROVED,
   * UNDER_REVIEW
   *
   * @param self::APPROVAL_STATUS_* $approvalStatus
   */
  public function setApprovalStatus($approvalStatus)
  {
    $this->approvalStatus = $approvalStatus;
  }
  /**
   * @return self::APPROVAL_STATUS_*
   */
  public function getApprovalStatus()
  {
    return $this->approvalStatus;
  }
  /**
   * Immutable. The asset group which this asset group signal belongs to.
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
   * Immutable. The audience signal to be used by the performance max campaign.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInfo $audience
   */
  public function setAudience(GoogleAdsSearchads360V23CommonAudienceInfo $audience)
  {
    $this->audience = $audience;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInfo
   */
  public function getAudience()
  {
    return $this->audience;
  }
  /**
   * Output only. Computed for SearchTheme signals. When using Audience signal,
   * this field is not used and will be absent.
   *
   * @param string[] $disapprovalReasons
   */
  public function setDisapprovalReasons($disapprovalReasons)
  {
    $this->disapprovalReasons = $disapprovalReasons;
  }
  /**
   * @return string[]
   */
  public function getDisapprovalReasons()
  {
    return $this->disapprovalReasons;
  }
  /**
   * Immutable. The resource name of the asset group signal. Asset group signal
   * resource name have the form:
   * `customers/{customer_id}/assetGroupSignals/{asset_group_id}~{signal_id}`
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
   * Immutable. The search_theme signal to be used by the performance max
   * campaign. Mutate errors of search_theme criterion includes
   * AssetGroupSignalError.UNSPECIFIED AssetGroupSignalError.UNKNOWN
   * AssetGroupSignalError.TOO_MANY_WORDS
   * AssetGroupSignalError.SEARCH_THEME_POLICY_VIOLATION FieldError.REQUIRED
   * StringFormatError.ILLEGAL_CHARS StringLengthError.TOO_LONG
   * ResourceCountLimitExceededError.RESOURCE_LIMIT
   *
   * @param GoogleAdsSearchads360V23CommonSearchThemeInfo $searchTheme
   */
  public function setSearchTheme(GoogleAdsSearchads360V23CommonSearchThemeInfo $searchTheme)
  {
    $this->searchTheme = $searchTheme;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSearchThemeInfo
   */
  public function getSearchTheme()
  {
    return $this->searchTheme;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAssetGroupSignal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAssetGroupSignal');
