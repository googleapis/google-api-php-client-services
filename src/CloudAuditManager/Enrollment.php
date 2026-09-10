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

class Enrollment extends \Google\Collection
{
  protected $collection_key = 'destinationDetails';
  protected $destinationDetailsType = DestinationDetails::class;
  protected $destinationDetailsDataType = 'array';
  /**
   * Identifier. Name of the enrollment, in one of the following formats: *
   * `projects/{project}/locations/{location}/enrollments/{enrollment}` *
   * `folders/{folder}/locations/{location}/enrollments/{enrollment}` * `organiz
   * ations/{organization}/locations/{location}/enrollments/{enrollment}`
   *
   * @var string
   */
  public $name;

  /**
   * Output only. Cloud Storage buckets where you want to upload the audit
   * reports.
   *
   * @param DestinationDetails[] $destinationDetails
   */
  public function setDestinationDetails($destinationDetails)
  {
    $this->destinationDetails = $destinationDetails;
  }
  /**
   * @return DestinationDetails[]
   */
  public function getDestinationDetails()
  {
    return $this->destinationDetails;
  }
  /**
   * Identifier. Name of the enrollment, in one of the following formats: *
   * `projects/{project}/locations/{location}/enrollments/{enrollment}` *
   * `folders/{folder}/locations/{location}/enrollments/{enrollment}` * `organiz
   * ations/{organization}/locations/{location}/enrollments/{enrollment}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Enrollment::class, 'Google_Service_CloudAuditManager_Enrollment');
