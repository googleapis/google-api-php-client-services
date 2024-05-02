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

namespace Google\Service\Contentwarehouse;

class ReneEmbedding extends \Google\Collection
{
  protected $collection_key = 'floatValuesBeforeProjection';
  protected $clusterListType = ReneEmbeddingClusterList::class;
  protected $clusterListDataType = '';
  /**
   * @var string
   */
  public $compressedValue;
  /**
   * @var float[]
   */
  public $denseFeatureFloatValues;
  /**
   * @var float[]
   */
  public $floatValues;
  /**
   * @var float[]
   */
  public $floatValuesBeforeProjection;

  /**
   * @param ReneEmbeddingClusterList
   */
  public function setClusterList(ReneEmbeddingClusterList $clusterList)
  {
    $this->clusterList = $clusterList;
  }
  /**
   * @return ReneEmbeddingClusterList
   */
  public function getClusterList()
  {
    return $this->clusterList;
  }
  /**
   * @param string
   */
  public function setCompressedValue($compressedValue)
  {
    $this->compressedValue = $compressedValue;
  }
  /**
   * @return string
   */
  public function getCompressedValue()
  {
    return $this->compressedValue;
  }
  /**
   * @param float[]
   */
  public function setDenseFeatureFloatValues($denseFeatureFloatValues)
  {
    $this->denseFeatureFloatValues = $denseFeatureFloatValues;
  }
  /**
   * @return float[]
   */
  public function getDenseFeatureFloatValues()
  {
    return $this->denseFeatureFloatValues;
  }
  /**
   * @param float[]
   */
  public function setFloatValues($floatValues)
  {
    $this->floatValues = $floatValues;
  }
  /**
   * @return float[]
   */
  public function getFloatValues()
  {
    return $this->floatValues;
  }
  /**
   * @param float[]
   */
  public function setFloatValuesBeforeProjection($floatValuesBeforeProjection)
  {
    $this->floatValuesBeforeProjection = $floatValuesBeforeProjection;
  }
  /**
   * @return float[]
   */
  public function getFloatValuesBeforeProjection()
  {
    return $this->floatValuesBeforeProjection;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReneEmbedding::class, 'Google_Service_Contentwarehouse_ReneEmbedding');
