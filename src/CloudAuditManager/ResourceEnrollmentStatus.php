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

class ResourceEnrollmentStatus extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const ENROLLMENT_STATE_RESOURCE_ENROLLMENT_STATE_UNSPECIFIED = 'RESOURCE_ENROLLMENT_STATE_UNSPECIFIED';
  /**
   * The resource isn't enrolled.
   */
  public const ENROLLMENT_STATE_NOT_ENROLLED = 'NOT_ENROLLED';
  /**
   * The resource isn't enrolled but the parent is enrolled.
   */
  public const ENROLLMENT_STATE_INHERITED = 'INHERITED';
  /**
   * The resource is enrolled.
   */
  public const ENROLLMENT_STATE_ENROLLED = 'ENROLLED';
  /**
   * Output only. Display name for the organization, folder, or project.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Deprecated. Whether the organization, folder, or project is
   * enrolled. Use `enrollment_state` instead.
   *
   * @deprecated
   * @var bool
   */
  public $enrolled;
  protected $enrollmentType = Enrollment::class;
  protected $enrollmentDataType = '';
  /**
   * Output only. Enrollment state of the organization, folder, or project.
   *
   * @var string
   */
  public $enrollmentState;
  /**
   * Identifier. Name of the resource enrollment status, in one of the following
   * formats: * `folders/{folder}/locations/{location}/resourceEnrollmentStatuse
   * s/{resource_enrollment_status}` * `projects/{project}/locations/{location}/
   * resourceEnrollmentStatuses/{resource_enrollment_status}` * `organizations/{
   * organization}/locations/{location}/resourceEnrollmentStatuses/{resource_enr
   * ollment_status}`
   *
   * @var string
   */
  public $name;

  /**
   * Output only. Display name for the organization, folder, or project.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. Deprecated. Whether the organization, folder, or project is
   * enrolled. Use `enrollment_state` instead.
   *
   * @deprecated
   * @param bool $enrolled
   */
  public function setEnrolled($enrolled)
  {
    $this->enrolled = $enrolled;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getEnrolled()
  {
    return $this->enrolled;
  }
  /**
   * Output only. Enrolled destination details for the organization, folder, or
   * project.
   *
   * @param Enrollment $enrollment
   */
  public function setEnrollment(Enrollment $enrollment)
  {
    $this->enrollment = $enrollment;
  }
  /**
   * @return Enrollment
   */
  public function getEnrollment()
  {
    return $this->enrollment;
  }
  /**
   * Output only. Enrollment state of the organization, folder, or project.
   *
   * Accepted values: RESOURCE_ENROLLMENT_STATE_UNSPECIFIED, NOT_ENROLLED,
   * INHERITED, ENROLLED
   *
   * @param self::ENROLLMENT_STATE_* $enrollmentState
   */
  public function setEnrollmentState($enrollmentState)
  {
    $this->enrollmentState = $enrollmentState;
  }
  /**
   * @return self::ENROLLMENT_STATE_*
   */
  public function getEnrollmentState()
  {
    return $this->enrollmentState;
  }
  /**
   * Identifier. Name of the resource enrollment status, in one of the following
   * formats: * `folders/{folder}/locations/{location}/resourceEnrollmentStatuse
   * s/{resource_enrollment_status}` * `projects/{project}/locations/{location}/
   * resourceEnrollmentStatuses/{resource_enrollment_status}` * `organizations/{
   * organization}/locations/{location}/resourceEnrollmentStatuses/{resource_enr
   * ollment_status}`
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
class_alias(ResourceEnrollmentStatus::class, 'Google_Service_CloudAuditManager_ResourceEnrollmentStatus');
