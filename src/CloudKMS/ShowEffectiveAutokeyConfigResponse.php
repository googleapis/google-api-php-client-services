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

namespace Google\Service\CloudKMS;

class ShowEffectiveAutokeyConfigResponse extends \Google\Model
{
  /**
   * Default value. When KeyProjectResolutionMode is set to
   * KEY_PROJECT_RESOLUTION_MODE_UNSPECIFIED for a folder and that folder has a
   * key_project set, the folder acts like its KeyProjectResolutionMode is
   * DEDICATED_KEY_PROJECT.
   */
  public const KEY_PROJECT_RESOLUTION_MODE_KEY_PROJECT_RESOLUTION_MODE_UNSPECIFIED = 'KEY_PROJECT_RESOLUTION_MODE_UNSPECIFIED';
  /**
   * Keys are created in a dedicated project specified by `key_project`.
   */
  public const KEY_PROJECT_RESOLUTION_MODE_DEDICATED_KEY_PROJECT = 'DEDICATED_KEY_PROJECT';
  /**
   * Keys are created in the same project as the resource requesting the key.
   * The `key_project` must not be set when this mode is used.
   */
  public const KEY_PROJECT_RESOLUTION_MODE_RESOURCE_PROJECT = 'RESOURCE_PROJECT';
  /**
   * Disables the AutokeyConfig. When this mode is set, any AutokeyConfig from
   * higher levels in the resource hierarchy are ignored for this resource and
   * its descendants. This setting can be overridden by a more specific
   * configuration at a lower level. For example, if Autokey is disabled on a
   * folder, it can be re-enabled on a sub-folder or project within that folder
   * by setting a different mode (e.g., DEDICATED_KEY_PROJECT or
   * RESOURCE_PROJECT).
   */
  public const KEY_PROJECT_RESOLUTION_MODE_DISABLED = 'DISABLED';
  /**
   * Name of the key project configured in the ancestry of the project or
   * folder.
   *
   * @var string
   */
  public $keyProject;
  /**
   * The KeyProjectResolutionMode for the AutokeyConfig.
   *
   * @var string
   */
  public $keyProjectResolutionMode;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';

  /**
   * Name of the key project configured in the ancestry of the project or
   * folder.
   *
   * @param string $keyProject
   */
  public function setKeyProject($keyProject)
  {
    $this->keyProject = $keyProject;
  }
  /**
   * @return string
   */
  public function getKeyProject()
  {
    return $this->keyProject;
  }
  /**
   * The KeyProjectResolutionMode for the AutokeyConfig.
   *
   * Accepted values: KEY_PROJECT_RESOLUTION_MODE_UNSPECIFIED,
   * DEDICATED_KEY_PROJECT, RESOURCE_PROJECT, DISABLED
   *
   * @param self::KEY_PROJECT_RESOLUTION_MODE_* $keyProjectResolutionMode
   */
  public function setKeyProjectResolutionMode($keyProjectResolutionMode)
  {
    $this->keyProjectResolutionMode = $keyProjectResolutionMode;
  }
  /**
   * @return self::KEY_PROJECT_RESOLUTION_MODE_*
   */
  public function getKeyProjectResolutionMode()
  {
    return $this->keyProjectResolutionMode;
  }
  /**
   * Source of the effective AutokeyConfig.
   *
   * @param Source $source
   */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /**
   * @return Source
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShowEffectiveAutokeyConfigResponse::class, 'Google_Service_CloudKMS_ShowEffectiveAutokeyConfigResponse');
