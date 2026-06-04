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

class GoogleAdsSearchads360V23ServicesMutateKeywordPlanCampaignKeywordsRequest extends \Google\Collection
{
  protected $collection_key = 'operations';
  protected $operationsType = GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation::class;
  protected $operationsDataType = 'array';
  /**
   * If true, successful operations will be carried out and invalid operations
   * will return errors. If false, all operations will be carried out in one
   * transaction if and only if they are all valid. Default is false.
   *
   * @var bool
   */
  public $partialFailure;
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. The list of operations to perform on individual Keyword Plan
   * campaign keywords.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation[] $operations
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
  /**
   * If true, successful operations will be carried out and invalid operations
   * will return errors. If false, all operations will be carried out in one
   * transaction if and only if they are all valid. Default is false.
   *
   * @param bool $partialFailure
   */
  public function setPartialFailure($partialFailure)
  {
    $this->partialFailure = $partialFailure;
  }
  /**
   * @return bool
   */
  public function getPartialFailure()
  {
    return $this->partialFailure;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateKeywordPlanCampaignKeywordsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateKeywordPlanCampaignKeywordsRequest');
