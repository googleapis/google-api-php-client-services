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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1InputDataConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $annotationSchemaUri;
  /**
   * @var string
   */
  public $annotationsFilter;
  /**
   * @var GoogleCloudAiplatformV1BigQueryDestination
   */
  public $bigqueryDestination;
  protected $bigqueryDestinationType = GoogleCloudAiplatformV1BigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  /**
   * @var string
   */
  public $datasetId;
  /**
   * @var GoogleCloudAiplatformV1FilterSplit
   */
  public $filterSplit;
  protected $filterSplitType = GoogleCloudAiplatformV1FilterSplit::class;
  protected $filterSplitDataType = '';
  /**
   * @var GoogleCloudAiplatformV1FractionSplit
   */
  public $fractionSplit;
  protected $fractionSplitType = GoogleCloudAiplatformV1FractionSplit::class;
  protected $fractionSplitDataType = '';
  /**
   * @var GoogleCloudAiplatformV1GcsDestination
   */
  public $gcsDestination;
  protected $gcsDestinationType = GoogleCloudAiplatformV1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /**
   * @var bool
   */
  public $persistMlUseAssignment;
  /**
   * @var GoogleCloudAiplatformV1PredefinedSplit
   */
  public $predefinedSplit;
  protected $predefinedSplitType = GoogleCloudAiplatformV1PredefinedSplit::class;
  protected $predefinedSplitDataType = '';
  /**
   * @var string
   */
  public $savedQueryId;
  /**
   * @var GoogleCloudAiplatformV1StratifiedSplit
   */
  public $stratifiedSplit;
  protected $stratifiedSplitType = GoogleCloudAiplatformV1StratifiedSplit::class;
  protected $stratifiedSplitDataType = '';
  /**
   * @var GoogleCloudAiplatformV1TimestampSplit
   */
  public $timestampSplit;
  protected $timestampSplitType = GoogleCloudAiplatformV1TimestampSplit::class;
  protected $timestampSplitDataType = '';

  /**
   * @param string
   */
  public function setAnnotationSchemaUri($annotationSchemaUri)
  {
    $this->annotationSchemaUri = $annotationSchemaUri;
  }
  /**
   * @return string
   */
  public function getAnnotationSchemaUri()
  {
    return $this->annotationSchemaUri;
  }
  /**
   * @param string
   */
  public function setAnnotationsFilter($annotationsFilter)
  {
    $this->annotationsFilter = $annotationsFilter;
  }
  /**
   * @return string
   */
  public function getAnnotationsFilter()
  {
    return $this->annotationsFilter;
  }
  /**
   * @param GoogleCloudAiplatformV1BigQueryDestination
   */
  public function setBigqueryDestination(GoogleCloudAiplatformV1BigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /**
   * @return GoogleCloudAiplatformV1BigQueryDestination
   */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
  /**
   * @param string
   */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /**
   * @return string
   */
  public function getDatasetId()
  {
    return $this->datasetId;
  }
  /**
   * @param GoogleCloudAiplatformV1FilterSplit
   */
  public function setFilterSplit(GoogleCloudAiplatformV1FilterSplit $filterSplit)
  {
    $this->filterSplit = $filterSplit;
  }
  /**
   * @return GoogleCloudAiplatformV1FilterSplit
   */
  public function getFilterSplit()
  {
    return $this->filterSplit;
  }
  /**
   * @param GoogleCloudAiplatformV1FractionSplit
   */
  public function setFractionSplit(GoogleCloudAiplatformV1FractionSplit $fractionSplit)
  {
    $this->fractionSplit = $fractionSplit;
  }
  /**
   * @return GoogleCloudAiplatformV1FractionSplit
   */
  public function getFractionSplit()
  {
    return $this->fractionSplit;
  }
  /**
   * @param GoogleCloudAiplatformV1GcsDestination
   */
  public function setGcsDestination(GoogleCloudAiplatformV1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /**
   * @return GoogleCloudAiplatformV1GcsDestination
   */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /**
   * @param bool
   */
  public function setPersistMlUseAssignment($persistMlUseAssignment)
  {
    $this->persistMlUseAssignment = $persistMlUseAssignment;
  }
  /**
   * @return bool
   */
  public function getPersistMlUseAssignment()
  {
    return $this->persistMlUseAssignment;
  }
  /**
   * @param GoogleCloudAiplatformV1PredefinedSplit
   */
  public function setPredefinedSplit(GoogleCloudAiplatformV1PredefinedSplit $predefinedSplit)
  {
    $this->predefinedSplit = $predefinedSplit;
  }
  /**
   * @return GoogleCloudAiplatformV1PredefinedSplit
   */
  public function getPredefinedSplit()
  {
    return $this->predefinedSplit;
  }
  /**
   * @param string
   */
  public function setSavedQueryId($savedQueryId)
  {
    $this->savedQueryId = $savedQueryId;
  }
  /**
   * @return string
   */
  public function getSavedQueryId()
  {
    return $this->savedQueryId;
  }
  /**
   * @param GoogleCloudAiplatformV1StratifiedSplit
   */
  public function setStratifiedSplit(GoogleCloudAiplatformV1StratifiedSplit $stratifiedSplit)
  {
    $this->stratifiedSplit = $stratifiedSplit;
  }
  /**
   * @return GoogleCloudAiplatformV1StratifiedSplit
   */
  public function getStratifiedSplit()
  {
    return $this->stratifiedSplit;
  }
  /**
   * @param GoogleCloudAiplatformV1TimestampSplit
   */
  public function setTimestampSplit(GoogleCloudAiplatformV1TimestampSplit $timestampSplit)
  {
    $this->timestampSplit = $timestampSplit;
  }
  /**
   * @return GoogleCloudAiplatformV1TimestampSplit
   */
  public function getTimestampSplit()
  {
    return $this->timestampSplit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1InputDataConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1InputDataConfig');
