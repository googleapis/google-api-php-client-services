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

namespace Google\Service\CloudAuditManager;

class EligibleDestination extends \Google\Model
{
  /**
   * The location of the Cloud Storage bucket where you want to upload the audit
   * report and evidence during the GenerateAuditReport API call.
   *
   * @var string
   */
  public $eligibleGcsBucket;

  /**
   * The location of the Cloud Storage bucket where you want to upload the audit
   * report and evidence during the GenerateAuditReport API call.
   *
   * @param string $eligibleGcsBucket
   */
  public function setEligibleGcsBucket($eligibleGcsBucket)
  {
    $this->eligibleGcsBucket = $eligibleGcsBucket;
  }
  /**
   * @return string
   */
  public function getEligibleGcsBucket()
  {
    return $this->eligibleGcsBucket;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EligibleDestination::class, 'Google_Service_CloudAuditManager_EligibleDestination');
