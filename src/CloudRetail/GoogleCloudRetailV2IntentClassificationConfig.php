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

namespace Google\Service\CloudRetail;

class GoogleCloudRetailV2IntentClassificationConfig extends \Google\Collection
{
  protected $collection_key = 'example';
  /**
   * @var string[]
   */
  public $blocklistKeywords;
  /**
   * @var string[]
   */
  public $disabledIntentTypes;
  protected $exampleType = GoogleCloudRetailV2IntentClassificationConfigExample::class;
  protected $exampleDataType = 'array';
  protected $inlineSourceType = GoogleCloudRetailV2IntentClassificationConfigInlineSource::class;
  protected $inlineSourceDataType = '';
  /**
   * @var string
   */
  public $modelPreamble;

  /**
   * @param string[]
   */
  public function setBlocklistKeywords($blocklistKeywords)
  {
    $this->blocklistKeywords = $blocklistKeywords;
  }
  /**
   * @return string[]
   */
  public function getBlocklistKeywords()
  {
    return $this->blocklistKeywords;
  }
  /**
   * @param string[]
   */
  public function setDisabledIntentTypes($disabledIntentTypes)
  {
    $this->disabledIntentTypes = $disabledIntentTypes;
  }
  /**
   * @return string[]
   */
  public function getDisabledIntentTypes()
  {
    return $this->disabledIntentTypes;
  }
  /**
   * @param GoogleCloudRetailV2IntentClassificationConfigExample[]
   */
  public function setExample($example)
  {
    $this->example = $example;
  }
  /**
   * @return GoogleCloudRetailV2IntentClassificationConfigExample[]
   */
  public function getExample()
  {
    return $this->example;
  }
  /**
   * @param GoogleCloudRetailV2IntentClassificationConfigInlineSource
   */
  public function setInlineSource(GoogleCloudRetailV2IntentClassificationConfigInlineSource $inlineSource)
  {
    $this->inlineSource = $inlineSource;
  }
  /**
   * @return GoogleCloudRetailV2IntentClassificationConfigInlineSource
   */
  public function getInlineSource()
  {
    return $this->inlineSource;
  }
  /**
   * @param string
   */
  public function setModelPreamble($modelPreamble)
  {
    $this->modelPreamble = $modelPreamble;
  }
  /**
   * @return string
   */
  public function getModelPreamble()
  {
    return $this->modelPreamble;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2IntentClassificationConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2IntentClassificationConfig');
