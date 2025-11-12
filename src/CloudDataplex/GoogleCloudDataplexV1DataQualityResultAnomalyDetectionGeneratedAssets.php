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

class GoogleCloudDataplexV1DataQualityResultAnomalyDetectionGeneratedAssets extends \Google\Model
{
  /**
   * @var string
   */
  public $dataIntermediateTable;
  /**
   * @var string
   */
  public $freshnessIntermediateTable;
  /**
   * @var string
   */
  public $resultTable;
  /**
   * @var string
   */
  public $volumeIntermediateTable;

  /**
   * @param string
   */
  public function setDataIntermediateTable($dataIntermediateTable)
  {
    $this->dataIntermediateTable = $dataIntermediateTable;
  }
  /**
   * @return string
   */
  public function getDataIntermediateTable()
  {
    return $this->dataIntermediateTable;
  }
  /**
   * @param string
   */
  public function setFreshnessIntermediateTable($freshnessIntermediateTable)
  {
    $this->freshnessIntermediateTable = $freshnessIntermediateTable;
  }
  /**
   * @return string
   */
  public function getFreshnessIntermediateTable()
  {
    return $this->freshnessIntermediateTable;
  }
  /**
   * @param string
   */
  public function setResultTable($resultTable)
  {
    $this->resultTable = $resultTable;
  }
  /**
   * @return string
   */
  public function getResultTable()
  {
    return $this->resultTable;
  }
  /**
   * @param string
   */
  public function setVolumeIntermediateTable($volumeIntermediateTable)
  {
    $this->volumeIntermediateTable = $volumeIntermediateTable;
  }
  /**
   * @return string
   */
  public function getVolumeIntermediateTable()
  {
    return $this->volumeIntermediateTable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataQualityResultAnomalyDetectionGeneratedAssets::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityResultAnomalyDetectionGeneratedAssets');
