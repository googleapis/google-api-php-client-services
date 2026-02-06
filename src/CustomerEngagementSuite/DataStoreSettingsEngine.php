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

class DataStoreSettingsEngine extends \Google\Model
{
  /**
   * Unspecified engine type.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * The SOLUTION_TYPE_SEARCH engine for the app. All connector data stores
   * added to the app will be added to this engine.
   */
  public const TYPE_ENGINE_TYPE_SEARCH = 'ENGINE_TYPE_SEARCH';
  /**
   * Chat engine type. The SOLUTION_TYPE_CHAT engine for the app. All connector
   * data stores added to the app will be added to this engine.
   */
  public const TYPE_ENGINE_TYPE_CHAT = 'ENGINE_TYPE_CHAT';
  /**
   * Output only. The resource name of the engine. Format: `projects/{project}/l
   * ocations/{location}/collections/{collection}/engines/{engine}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The type of the engine.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The resource name of the engine. Format: `projects/{project}/l
   * ocations/{location}/collections/{collection}/engines/{engine}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The type of the engine.
   *
   * Accepted values: TYPE_UNSPECIFIED, ENGINE_TYPE_SEARCH, ENGINE_TYPE_CHAT
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStoreSettingsEngine::class, 'Google_Service_CustomerEngagementSuite_DataStoreSettingsEngine');
