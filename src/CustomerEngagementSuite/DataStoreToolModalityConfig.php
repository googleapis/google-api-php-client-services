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

namespace Google\Service\CustomerEngagementSuite;

class DataStoreToolModalityConfig extends \Google\Model
{
  /**
   * Unspecified modality type.
   */
  public const MODALITY_TYPE_MODALITY_TYPE_UNSPECIFIED = 'MODALITY_TYPE_UNSPECIFIED';
  /**
   * Text modality.
   */
  public const MODALITY_TYPE_TEXT = 'TEXT';
  /**
   * Audio modality.
   */
  public const MODALITY_TYPE_AUDIO = 'AUDIO';
  protected $groundingConfigType = DataStoreToolGroundingConfig::class;
  protected $groundingConfigDataType = '';
  /**
   * Required. The modality type.
   *
   * @var string
   */
  public $modalityType;
  protected $rewriterConfigType = DataStoreToolRewriterConfig::class;
  protected $rewriterConfigDataType = '';
  protected $summarizationConfigType = DataStoreToolSummarizationConfig::class;
  protected $summarizationConfigDataType = '';

  /**
   * Optional. The grounding configuration.
   *
   * @param DataStoreToolGroundingConfig $groundingConfig
   */
  public function setGroundingConfig(DataStoreToolGroundingConfig $groundingConfig)
  {
    $this->groundingConfig = $groundingConfig;
  }
  /**
   * @return DataStoreToolGroundingConfig
   */
  public function getGroundingConfig()
  {
    return $this->groundingConfig;
  }
  /**
   * Required. The modality type.
   *
   * Accepted values: MODALITY_TYPE_UNSPECIFIED, TEXT, AUDIO
   *
   * @param self::MODALITY_TYPE_* $modalityType
   */
  public function setModalityType($modalityType)
  {
    $this->modalityType = $modalityType;
  }
  /**
   * @return self::MODALITY_TYPE_*
   */
  public function getModalityType()
  {
    return $this->modalityType;
  }
  /**
   * Optional. The rewriter config.
   *
   * @param DataStoreToolRewriterConfig $rewriterConfig
   */
  public function setRewriterConfig(DataStoreToolRewriterConfig $rewriterConfig)
  {
    $this->rewriterConfig = $rewriterConfig;
  }
  /**
   * @return DataStoreToolRewriterConfig
   */
  public function getRewriterConfig()
  {
    return $this->rewriterConfig;
  }
  /**
   * Optional. The summarization config.
   *
   * @param DataStoreToolSummarizationConfig $summarizationConfig
   */
  public function setSummarizationConfig(DataStoreToolSummarizationConfig $summarizationConfig)
  {
    $this->summarizationConfig = $summarizationConfig;
  }
  /**
   * @return DataStoreToolSummarizationConfig
   */
  public function getSummarizationConfig()
  {
    return $this->summarizationConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreToolModalityConfig::class, 'Google_Service_CustomerEngagementSuite_DataStoreToolModalityConfig');
