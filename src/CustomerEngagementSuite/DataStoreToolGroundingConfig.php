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

class DataStoreToolGroundingConfig extends \Google\Model
{
  /**
   * Optional. Whether grounding is disabled.
   *
   * @var bool
   */
  public $disabled;
  /**
   * Optional. The groundedness threshold of the answer based on the retrieved
   * sources. The value has a configurable range of [1, 5]. The level is used to
   * threshold the groundedness of the answer, meaning that all responses with a
   * groundedness score below the threshold will fall back to returning relevant
   * snippets only. For example, a level of 3 means that the groundedness score
   * must be 3 or higher for the response to be returned.
   *
   * @var float
   */
  public $groundingLevel;

  /**
   * Optional. Whether grounding is disabled.
   *
   * @param bool $disabled
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * Optional. The groundedness threshold of the answer based on the retrieved
   * sources. The value has a configurable range of [1, 5]. The level is used to
   * threshold the groundedness of the answer, meaning that all responses with a
   * groundedness score below the threshold will fall back to returning relevant
   * snippets only. For example, a level of 3 means that the groundedness score
   * must be 3 or higher for the response to be returned.
   *
   * @param float $groundingLevel
   */
  public function setGroundingLevel($groundingLevel)
  {
    $this->groundingLevel = $groundingLevel;
  }
  /**
   * @return float
   */
  public function getGroundingLevel()
  {
    return $this->groundingLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreToolGroundingConfig::class, 'Google_Service_CustomerEngagementSuite_DataStoreToolGroundingConfig');
