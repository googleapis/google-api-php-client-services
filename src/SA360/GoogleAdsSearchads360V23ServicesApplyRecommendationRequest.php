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

class GoogleAdsSearchads360V23ServicesApplyRecommendationRequest extends \Google\Collection
{
  protected $collection_key = 'operations';
  protected $operationsType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperation::class;
  protected $operationsDataType = 'array';
  /**
   * If true, successful operations will be carried out and invalid operations
   * will return errors. If false, operations will be carried out as a
   * transaction if and only if they are all valid. Default is false.
   *
   * @var bool
   */
  public $partialFailure;

  /**
   * Required. The list of operations to apply recommendations. If
   * partial_failure=false all recommendations should be of the same type There
   * is a limit of 100 operations per request.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperation[] $operations
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
  /**
   * If true, successful operations will be carried out and invalid operations
   * will return errors. If false, operations will be carried out as a
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesApplyRecommendationRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesApplyRecommendationRequest');
