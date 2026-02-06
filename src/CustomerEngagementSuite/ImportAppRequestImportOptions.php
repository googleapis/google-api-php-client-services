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

class ImportAppRequestImportOptions extends \Google\Model
{
  /**
   * The conflict resolution strategy is unspecified.
   */
  public const CONFLICT_RESOLUTION_STRATEGY_CONFLICT_RESOLUTION_STRATEGY_UNSPECIFIED = 'CONFLICT_RESOLUTION_STRATEGY_UNSPECIFIED';
  /**
   * Replace existing data with imported data. If an app with the same `app_id`
   * already exists, its content will be updated based on the imported app. -
   * Resources (App, Agents, Tools, Examples, Guardrails, Toolsets) in the
   * imported app that have the same display name as existing resources will
   * overwrite the existing ones. - Imported resources with new display names
   * will be created. - Existing resources that do not have a matching display
   * name in the imported app will remain untouched.
   */
  public const CONFLICT_RESOLUTION_STRATEGY_REPLACE = 'REPLACE';
  /**
   * Overwrite existing data with imported data. If an app with the same
   * `app_id` already exists, its content will be overwritten with the imported
   * app. - Existing resources (Agents, Tools, Examples, Guardrails, Toolsets)
   * in the app will be deleted. - Imported resources will be created as new
   * resources.
   */
  public const CONFLICT_RESOLUTION_STRATEGY_OVERWRITE = 'OVERWRITE';
  /**
   * Optional. The strategy to use when resolving conflicts during import.
   *
   * @var string
   */
  public $conflictResolutionStrategy;

  /**
   * Optional. The strategy to use when resolving conflicts during import.
   *
   * Accepted values: CONFLICT_RESOLUTION_STRATEGY_UNSPECIFIED, REPLACE,
   * OVERWRITE
   *
   * @param self::CONFLICT_RESOLUTION_STRATEGY_* $conflictResolutionStrategy
   */
  public function setConflictResolutionStrategy($conflictResolutionStrategy)
  {
    $this->conflictResolutionStrategy = $conflictResolutionStrategy;
  }
  /**
   * @return self::CONFLICT_RESOLUTION_STRATEGY_*
   */
  public function getConflictResolutionStrategy()
  {
    return $this->conflictResolutionStrategy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportAppRequestImportOptions::class, 'Google_Service_CustomerEngagementSuite_ImportAppRequestImportOptions');
