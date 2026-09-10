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

class EnrollResourceRequest extends \Google\Collection
{
  protected $collection_key = 'destinations';
  protected $destinationsType = EligibleDestination::class;
  protected $destinationsDataType = 'array';

  /**
   * Required. Cloud Storage buckets that you can upload your audit reports to
   * during the audit process. When you enroll an organization or folder, you
   * can choose a Cloud Storage bucket from any project in the organization or
   * folder. If you run an audit at the project level using the service agent at
   * the organization or folder level, all the buckets that are associated with
   * the service agent are available.
   *
   * @param EligibleDestination[] $destinations
   */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /**
   * @return EligibleDestination[]
   */
  public function getDestinations()
  {
    return $this->destinations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnrollResourceRequest::class, 'Google_Service_CloudAuditManager_EnrollResourceRequest');
