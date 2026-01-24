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

namespace Google\Service\ThreatIntelligenceService;

class MarkAlertAsDuplicateRequest extends \Google\Model
{
  /**
   * Optional. Name of the alert to mark as a duplicate of. Format:
   * projects/{project}/alerts/{alert}
   *
   * @var string
   */
  public $duplicateOf;

  /**
   * Optional. Name of the alert to mark as a duplicate of. Format:
   * projects/{project}/alerts/{alert}
   *
   * @param string $duplicateOf
   */
  public function setDuplicateOf($duplicateOf)
  {
    $this->duplicateOf = $duplicateOf;
  }
  /**
   * @return string
   */
  public function getDuplicateOf()
  {
    return $this->duplicateOf;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MarkAlertAsDuplicateRequest::class, 'Google_Service_ThreatIntelligenceService_MarkAlertAsDuplicateRequest');
