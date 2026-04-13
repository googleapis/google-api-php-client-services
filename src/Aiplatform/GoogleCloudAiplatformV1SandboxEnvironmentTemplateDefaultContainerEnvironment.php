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

class GoogleCloudAiplatformV1SandboxEnvironmentTemplateDefaultContainerEnvironment extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const DEFAULT_CONTAINER_CATEGORY_DEFAULT_CONTAINER_CATEGORY_UNSPECIFIED = 'DEFAULT_CONTAINER_CATEGORY_UNSPECIFIED';
  /**
   * The default container image for Computer Use.
   */
  public const DEFAULT_CONTAINER_CATEGORY_DEFAULT_CONTAINER_CATEGORY_COMPUTER_USE = 'DEFAULT_CONTAINER_CATEGORY_COMPUTER_USE';
  /**
   * Required. The category of the default container image.
   *
   * @var string
   */
  public $defaultContainerCategory;

  /**
   * Required. The category of the default container image.
   *
   * Accepted values: DEFAULT_CONTAINER_CATEGORY_UNSPECIFIED,
   * DEFAULT_CONTAINER_CATEGORY_COMPUTER_USE
   *
   * @param self::DEFAULT_CONTAINER_CATEGORY_* $defaultContainerCategory
   */
  public function setDefaultContainerCategory($defaultContainerCategory)
  {
    $this->defaultContainerCategory = $defaultContainerCategory;
  }
  /**
   * @return self::DEFAULT_CONTAINER_CATEGORY_*
   */
  public function getDefaultContainerCategory()
  {
    return $this->defaultContainerCategory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentTemplateDefaultContainerEnvironment::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentTemplateDefaultContainerEnvironment');
