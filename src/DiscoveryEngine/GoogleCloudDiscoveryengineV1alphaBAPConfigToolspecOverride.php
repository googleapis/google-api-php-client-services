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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaBAPConfigToolspecOverride extends \Google\Collection
{
  protected $collection_key = 'tools';
  /**
   * Required. Base toolspec version against which `tools` were authored. On
   * Update, MUST match the server's current stable toolspec version for the
   * connection; mismatch is rejected with a user-facing error directing the
   * admin to re-download the latest tools first.
   *
   * @var string
   */
  public $baseVersion;
  /**
   * Required. Tool definitions (one Struct per tool) that the admin has
   * customised on top of the base toolspec returned by the fed API. REQUIRED
   * because it is the only user-editable field in the modify API; the request
   * must carry at least one tool.
   *
   * @var array[]
   */
  public $tools;

  /**
   * Required. Base toolspec version against which `tools` were authored. On
   * Update, MUST match the server's current stable toolspec version for the
   * connection; mismatch is rejected with a user-facing error directing the
   * admin to re-download the latest tools first.
   *
   * @param string $baseVersion
   */
  public function setBaseVersion($baseVersion)
  {
    $this->baseVersion = $baseVersion;
  }
  /**
   * @return string
   */
  public function getBaseVersion()
  {
    return $this->baseVersion;
  }
  /**
   * Required. Tool definitions (one Struct per tool) that the admin has
   * customised on top of the base toolspec returned by the fed API. REQUIRED
   * because it is the only user-editable field in the modify API; the request
   * must carry at least one tool.
   *
   * @param array[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return array[]
   */
  public function getTools()
  {
    return $this->tools;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaBAPConfigToolspecOverride::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaBAPConfigToolspecOverride');
