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

namespace Google\Service\CurationPartners;

class AccessControlSettings extends \Google\Collection
{
  protected $collection_key = 'allowlistedMediaPlanners';
  /**
   * Required. Immutable. The list of media planners that are explicitly granted
   * access to the curated package. Eligible media planners can be found in the
   * mediaPlanners.list method. Only a single media planner may be allowlisted
   * at this time. Format: `mediaPlanners/{mediaPlannerAccountId}`
   *
   * @var string[]
   */
  public $allowlistedMediaPlanners;

  /**
   * Required. Immutable. The list of media planners that are explicitly granted
   * access to the curated package. Eligible media planners can be found in the
   * mediaPlanners.list method. Only a single media planner may be allowlisted
   * at this time. Format: `mediaPlanners/{mediaPlannerAccountId}`
   *
   * @param string[] $allowlistedMediaPlanners
   */
  public function setAllowlistedMediaPlanners($allowlistedMediaPlanners)
  {
    $this->allowlistedMediaPlanners = $allowlistedMediaPlanners;
  }
  /**
   * @return string[]
   */
  public function getAllowlistedMediaPlanners()
  {
    return $this->allowlistedMediaPlanners;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessControlSettings::class, 'Google_Service_CurationPartners_AccessControlSettings');
