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

class DataStoreToolSnippetsConfig extends \Google\Model
{
  /**
   * Optional. Whether snippets are enabled.
   *
   * @var bool
   */
  public $enableSnippets;
  /**
   * Optional. Number of snippets to return per query. If unset, returns all
   * snippets from the service by default.
   *
   * @var int
   */
  public $maxSnippets;

  /**
   * Optional. Whether snippets are enabled.
   *
   * @param bool $enableSnippets
   */
  public function setEnableSnippets($enableSnippets)
  {
    $this->enableSnippets = $enableSnippets;
  }
  /**
   * @return bool
   */
  public function getEnableSnippets()
  {
    return $this->enableSnippets;
  }
  /**
   * Optional. Number of snippets to return per query. If unset, returns all
   * snippets from the service by default.
   *
   * @param int $maxSnippets
   */
  public function setMaxSnippets($maxSnippets)
  {
    $this->maxSnippets = $maxSnippets;
  }
  /**
   * @return int
   */
  public function getMaxSnippets()
  {
    return $this->maxSnippets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreToolSnippetsConfig::class, 'Google_Service_CustomerEngagementSuite_DataStoreToolSnippetsConfig');
