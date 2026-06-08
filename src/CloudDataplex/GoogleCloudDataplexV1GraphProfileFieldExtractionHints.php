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

class GoogleCloudDataplexV1GraphProfileFieldExtractionHints extends \Google\Model
{
  /**
   * Output only. Standardizes extracted data (e.g., to ISO 3166-1 alpha-2).
   *
   * @var string
   */
  public $normalization;
  /**
   * Output only. Generates value from other data instead of direct extraction
   * (e.g., hashing).
   *
   * @var string
   */
  public $synthesis;

  /**
   * Output only. Standardizes extracted data (e.g., to ISO 3166-1 alpha-2).
   *
   * @param string $normalization
   */
  public function setNormalization($normalization)
  {
    $this->normalization = $normalization;
  }
  /**
   * @return string
   */
  public function getNormalization()
  {
    return $this->normalization;
  }
  /**
   * Output only. Generates value from other data instead of direct extraction
   * (e.g., hashing).
   *
   * @param string $synthesis
   */
  public function setSynthesis($synthesis)
  {
    $this->synthesis = $synthesis;
  }
  /**
   * @return string
   */
  public function getSynthesis()
  {
    return $this->synthesis;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfileFieldExtractionHints::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfileFieldExtractionHints');
