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

class LfA2aV1SecurityRequirement extends \Google\Model
{
  protected $schemesType = LfA2aV1StringList::class;
  protected $schemesDataType = 'map';

  /**
   * A map of security schemes to the required scopes.
   *
   * @param LfA2aV1StringList[] $schemes
   */
  public function setSchemes($schemes)
  {
    $this->schemes = $schemes;
  }
  /**
   * @return LfA2aV1StringList[]
   */
  public function getSchemes()
  {
    return $this->schemes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1SecurityRequirement::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1SecurityRequirement');
