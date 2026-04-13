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

class GoogleCloudAiplatformV1IntermediateExtractedMemory extends \Google\Model
{
  /**
   * Output only. Represents the explanation of why the information was
   * extracted from the source content.
   *
   * @var string
   */
  public $context;
  /**
   * Output only. Represents the fact of the extracted memory.
   *
   * @var string
   */
  public $fact;
  /**
   * Output only. Represents the structured value of the extracted memory.
   *
   * @var array[]
   */
  public $structuredData;

  /**
   * Output only. Represents the explanation of why the information was
   * extracted from the source content.
   *
   * @param string $context
   */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /**
   * @return string
   */
  public function getContext()
  {
    return $this->context;
  }
  /**
   * Output only. Represents the fact of the extracted memory.
   *
   * @param string $fact
   */
  public function setFact($fact)
  {
    $this->fact = $fact;
  }
  /**
   * @return string
   */
  public function getFact()
  {
    return $this->fact;
  }
  /**
   * Output only. Represents the structured value of the extracted memory.
   *
   * @param array[] $structuredData
   */
  public function setStructuredData($structuredData)
  {
    $this->structuredData = $structuredData;
  }
  /**
   * @return array[]
   */
  public function getStructuredData()
  {
    return $this->structuredData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1IntermediateExtractedMemory::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1IntermediateExtractedMemory');
