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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataDocumentationResult extends \Google\Model
{
  protected $datasetResultType = GoogleCloudDataplexV1DataDocumentationResultDatasetResult::class;
  protected $datasetResultDataType = '';
  protected $tableResultType = GoogleCloudDataplexV1DataDocumentationResultTableResult::class;
  protected $tableResultDataType = '';

  /**
   * Output only. Insights for a Dataset resource.
   *
   * @param GoogleCloudDataplexV1DataDocumentationResultDatasetResult $datasetResult
   */
  public function setDatasetResult(GoogleCloudDataplexV1DataDocumentationResultDatasetResult $datasetResult)
  {
    $this->datasetResult = $datasetResult;
  }
  /**
   * @return GoogleCloudDataplexV1DataDocumentationResultDatasetResult
   */
  public function getDatasetResult()
  {
    return $this->datasetResult;
  }
  /**
   * Output only. Insights for a Table resource.
   *
   * @param GoogleCloudDataplexV1DataDocumentationResultTableResult $tableResult
   */
  public function setTableResult(GoogleCloudDataplexV1DataDocumentationResultTableResult $tableResult)
  {
    $this->tableResult = $tableResult;
  }
  /**
   * @return GoogleCloudDataplexV1DataDocumentationResultTableResult
   */
  public function getTableResult()
  {
    return $this->tableResult;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDocumentationResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationResult');
