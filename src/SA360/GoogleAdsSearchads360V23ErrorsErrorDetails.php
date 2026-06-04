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

class GoogleAdsSearchads360V23ErrorsErrorDetails extends \Google\Model
{
  protected $budgetPerDayMinimumErrorDetailsType = GoogleAdsSearchads360V23ErrorsBudgetPerDayMinimumErrorDetails::class;
  protected $budgetPerDayMinimumErrorDetailsDataType = '';
  protected $policyFindingDetailsType = GoogleAdsSearchads360V23ErrorsPolicyFindingDetails::class;
  protected $policyFindingDetailsDataType = '';
  protected $policyViolationDetailsType = GoogleAdsSearchads360V23ErrorsPolicyViolationDetails::class;
  protected $policyViolationDetailsDataType = '';
  protected $quotaErrorDetailsType = GoogleAdsSearchads360V23ErrorsQuotaErrorDetails::class;
  protected $quotaErrorDetailsDataType = '';
  protected $resourceCountDetailsType = GoogleAdsSearchads360V23ErrorsResourceCountDetails::class;
  protected $resourceCountDetailsDataType = '';
  /**
   * The error code that should have been returned, but wasn't. This is used
   * when the error code is not published in the client specified version.
   *
   * @var string
   */
  public $unpublishedErrorCode;

  /**
   * Details for a budget below per-day minimum error.
   *
   * @param GoogleAdsSearchads360V23ErrorsBudgetPerDayMinimumErrorDetails $budgetPerDayMinimumErrorDetails
   */
  public function setBudgetPerDayMinimumErrorDetails(GoogleAdsSearchads360V23ErrorsBudgetPerDayMinimumErrorDetails $budgetPerDayMinimumErrorDetails)
  {
    $this->budgetPerDayMinimumErrorDetails = $budgetPerDayMinimumErrorDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ErrorsBudgetPerDayMinimumErrorDetails
   */
  public function getBudgetPerDayMinimumErrorDetails()
  {
    return $this->budgetPerDayMinimumErrorDetails;
  }
  /**
   * Describes policy violation findings.
   *
   * @param GoogleAdsSearchads360V23ErrorsPolicyFindingDetails $policyFindingDetails
   */
  public function setPolicyFindingDetails(GoogleAdsSearchads360V23ErrorsPolicyFindingDetails $policyFindingDetails)
  {
    $this->policyFindingDetails = $policyFindingDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ErrorsPolicyFindingDetails
   */
  public function getPolicyFindingDetails()
  {
    return $this->policyFindingDetails;
  }
  /**
   * Describes an ad policy violation.
   *
   * @param GoogleAdsSearchads360V23ErrorsPolicyViolationDetails $policyViolationDetails
   */
  public function setPolicyViolationDetails(GoogleAdsSearchads360V23ErrorsPolicyViolationDetails $policyViolationDetails)
  {
    $this->policyViolationDetails = $policyViolationDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ErrorsPolicyViolationDetails
   */
  public function getPolicyViolationDetails()
  {
    return $this->policyViolationDetails;
  }
  /**
   * Details on the quota error, including the scope (account or developer), the
   * rate bucket name and the retry delay.
   *
   * @param GoogleAdsSearchads360V23ErrorsQuotaErrorDetails $quotaErrorDetails
   */
  public function setQuotaErrorDetails(GoogleAdsSearchads360V23ErrorsQuotaErrorDetails $quotaErrorDetails)
  {
    $this->quotaErrorDetails = $quotaErrorDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ErrorsQuotaErrorDetails
   */
  public function getQuotaErrorDetails()
  {
    return $this->quotaErrorDetails;
  }
  /**
   * Details for a resource count limit exceeded error.
   *
   * @param GoogleAdsSearchads360V23ErrorsResourceCountDetails $resourceCountDetails
   */
  public function setResourceCountDetails(GoogleAdsSearchads360V23ErrorsResourceCountDetails $resourceCountDetails)
  {
    $this->resourceCountDetails = $resourceCountDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ErrorsResourceCountDetails
   */
  public function getResourceCountDetails()
  {
    return $this->resourceCountDetails;
  }
  /**
   * The error code that should have been returned, but wasn't. This is used
   * when the error code is not published in the client specified version.
   *
   * @param string $unpublishedErrorCode
   */
  public function setUnpublishedErrorCode($unpublishedErrorCode)
  {
    $this->unpublishedErrorCode = $unpublishedErrorCode;
  }
  /**
   * @return string
   */
  public function getUnpublishedErrorCode()
  {
    return $this->unpublishedErrorCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ErrorsErrorDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ErrorsErrorDetails');
