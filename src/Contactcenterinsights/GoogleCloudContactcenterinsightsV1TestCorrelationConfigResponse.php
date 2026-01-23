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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1TestCorrelationConfigResponse extends \Google\Collection
{
  protected $collection_key = 'partialErrors';
  protected $detailedResultsType = GoogleCloudContactcenterinsightsV1TestCorrelationConfigResponseDetailedCorrelationResults::class;
  protected $detailedResultsDataType = '';
  protected $partialErrorsType = GoogleRpcStatus::class;
  protected $partialErrorsDataType = 'array';

  /**
   * Results for the DETAILED_SYNC execution mode.
   *
   * @param GoogleCloudContactcenterinsightsV1TestCorrelationConfigResponseDetailedCorrelationResults $detailedResults
   */
  public function setDetailedResults(GoogleCloudContactcenterinsightsV1TestCorrelationConfigResponseDetailedCorrelationResults $detailedResults)
  {
    $this->detailedResults = $detailedResults;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1TestCorrelationConfigResponseDetailedCorrelationResults
   */
  public function getDetailedResults()
  {
    return $this->detailedResults;
  }
  /**
   * Partial errors during test correlation config operation that might cause
   * the operation output to be incomplete.
   *
   * @param GoogleRpcStatus[] $partialErrors
   */
  public function setPartialErrors($partialErrors)
  {
    $this->partialErrors = $partialErrors;
  }
  /**
   * @return GoogleRpcStatus[]
   */
  public function getPartialErrors()
  {
    return $this->partialErrors;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1TestCorrelationConfigResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1TestCorrelationConfigResponse');
