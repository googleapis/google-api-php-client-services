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

class GoogleCloudDataplexV1UnstructuredDataProfileResult extends \Google\Model
{
  /**
   * Output only. The inferred description.
   *
   * @var string
   */
  public $description;
  protected $graphProfileType = GoogleCloudDataplexV1GraphProfile::class;
  protected $graphProfileDataType = '';
  /**
   * Output only. Optional message for partial failures (e.g. node type
   * extraction failed).
   *
   * @var string
   */
  public $partialFailureMessage;

  /**
   * Output only. The inferred description.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The inferred graph profile.
   *
   * @param GoogleCloudDataplexV1GraphProfile $graphProfile
   */
  public function setGraphProfile(GoogleCloudDataplexV1GraphProfile $graphProfile)
  {
    $this->graphProfile = $graphProfile;
  }
  /**
   * @return GoogleCloudDataplexV1GraphProfile
   */
  public function getGraphProfile()
  {
    return $this->graphProfile;
  }
  /**
   * Output only. Optional message for partial failures (e.g. node type
   * extraction failed).
   *
   * @param string $partialFailureMessage
   */
  public function setPartialFailureMessage($partialFailureMessage)
  {
    $this->partialFailureMessage = $partialFailureMessage;
  }
  /**
   * @return string
   */
  public function getPartialFailureMessage()
  {
    return $this->partialFailureMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1UnstructuredDataProfileResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1UnstructuredDataProfileResult');
