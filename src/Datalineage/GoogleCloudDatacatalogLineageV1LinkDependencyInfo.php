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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageV1LinkDependencyInfo extends \Google\Model
{
  /**
   * Dependency type unspecified.
   */
  public const DEPENDENCY_TYPE_DEPENDENCY_TYPE_UNSPECIFIED = 'DEPENDENCY_TYPE_UNSPECIFIED';
  /**
   * Exact data copy without any change.
   */
  public const DEPENDENCY_TYPE_EXACT_COPY = 'EXACT_COPY';
  /**
   * Other types of dependencies like filtering or grouping.
   */
  public const DEPENDENCY_TYPE_OTHER = 'OTHER';
  /**
   * The type of dependency.
   *
   * @var string
   */
  public $dependencyType;

  /**
   * The type of dependency.
   *
   * Accepted values: DEPENDENCY_TYPE_UNSPECIFIED, EXACT_COPY, OTHER
   *
   * @param self::DEPENDENCY_TYPE_* $dependencyType
   */
  public function setDependencyType($dependencyType)
  {
    $this->dependencyType = $dependencyType;
  }
  /**
   * @return self::DEPENDENCY_TYPE_*
   */
  public function getDependencyType()
  {
    return $this->dependencyType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1LinkDependencyInfo::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1LinkDependencyInfo');
