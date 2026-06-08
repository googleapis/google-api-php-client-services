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

class GoogleCloudDataplexV1GraphProfileEdgeTypeExtractionHints extends \Google\Model
{
  /**
   * Output only. Expected connectivity topology and bounds of this
   * relationship. Format: "Topology - Description" Example: "1:N - One company
   * can have multiple financial reports."
   *
   * @var string
   */
  public $cardinality;

  /**
   * Output only. Expected connectivity topology and bounds of this
   * relationship. Format: "Topology - Description" Example: "1:N - One company
   * can have multiple financial reports."
   *
   * @param string $cardinality
   */
  public function setCardinality($cardinality)
  {
    $this->cardinality = $cardinality;
  }
  /**
   * @return string
   */
  public function getCardinality()
  {
    return $this->cardinality;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfileEdgeTypeExtractionHints::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfileEdgeTypeExtractionHints');
