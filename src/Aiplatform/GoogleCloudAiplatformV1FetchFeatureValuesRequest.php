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

class GoogleCloudAiplatformV1FetchFeatureValuesRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $dataFormat;
  /**
   * @var GoogleCloudAiplatformV1FeatureViewDataKey
   */
  public $dataKey;
  protected $dataKeyType = GoogleCloudAiplatformV1FeatureViewDataKey::class;
  protected $dataKeyDataType = '';

  /**
   * @param string
   */
  public function setDataFormat($dataFormat)
  {
    $this->dataFormat = $dataFormat;
  }
  /**
   * @return string
   */
  public function getDataFormat()
  {
    return $this->dataFormat;
  }
  /**
   * @param GoogleCloudAiplatformV1FeatureViewDataKey
   */
  public function setDataKey(GoogleCloudAiplatformV1FeatureViewDataKey $dataKey)
  {
    $this->dataKey = $dataKey;
  }
  /**
   * @return GoogleCloudAiplatformV1FeatureViewDataKey
   */
  public function getDataKey()
  {
    return $this->dataKey;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1FetchFeatureValuesRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1FetchFeatureValuesRequest');
