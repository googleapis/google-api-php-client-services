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

namespace Google\Service\GoogleHealthAPI;

class Profile extends \Google\Model
{
  /**
   * Optional. The age in years based on the user's birth date. Updates to this
   * field are currently not supported.
   *
   * @var int
   */
  public $age;
  /**
   * Output only. The automatically calculated running stride length, in
   * millimeters. The user must consent to one of the following access scopes to
   * access this field: - `https://www.googleapis.com/auth/googlehealth.activity
   * _and_fitness.readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @var int
   */
  public $autoRunningStrideLengthMm;
  /**
   * Output only. The automatically calculated walking stride length, in
   * millimeters. The user must consent to one of the following access scopes to
   * access this field: - `https://www.googleapis.com/auth/googlehealth.activity
   * _and_fitness.readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @var int
   */
  public $autoWalkingStrideLengthMm;
  protected $membershipStartDateType = Date::class;
  protected $membershipStartDateDataType = '';
  /**
   * Identifier. The resource name of this Profile resource. Format:
   * `users/{user}/profile` Example: `users/1234567890/profile` or
   * `users/me/profile` The {user} ID is a system-generated Google Health API
   * user ID, a string of 1-63 characters consisting of lowercase and uppercase
   * letters, numbers, and hyphens. The literal `me` can also be used to refer
   * to the authenticated user.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The user's user configured running stride length, in millimeters.
   * The user must consent to one of the following access scopes to access this
   * field: - `https://www.googleapis.com/auth/googlehealth.activity_and_fitness
   * .readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @var int
   */
  public $userConfiguredRunningStrideLengthMm;
  /**
   * Optional. The user's user configured walking stride length, in millimeters.
   * The user must consent to one of the following access scopes to access this
   * field: - `https://www.googleapis.com/auth/googlehealth.activity_and_fitness
   * .readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @var int
   */
  public $userConfiguredWalkingStrideLengthMm;

  /**
   * Optional. The age in years based on the user's birth date. Updates to this
   * field are currently not supported.
   *
   * @param int $age
   */
  public function setAge($age)
  {
    $this->age = $age;
  }
  /**
   * @return int
   */
  public function getAge()
  {
    return $this->age;
  }
  /**
   * Output only. The automatically calculated running stride length, in
   * millimeters. The user must consent to one of the following access scopes to
   * access this field: - `https://www.googleapis.com/auth/googlehealth.activity
   * _and_fitness.readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @param int $autoRunningStrideLengthMm
   */
  public function setAutoRunningStrideLengthMm($autoRunningStrideLengthMm)
  {
    $this->autoRunningStrideLengthMm = $autoRunningStrideLengthMm;
  }
  /**
   * @return int
   */
  public function getAutoRunningStrideLengthMm()
  {
    return $this->autoRunningStrideLengthMm;
  }
  /**
   * Output only. The automatically calculated walking stride length, in
   * millimeters. The user must consent to one of the following access scopes to
   * access this field: - `https://www.googleapis.com/auth/googlehealth.activity
   * _and_fitness.readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @param int $autoWalkingStrideLengthMm
   */
  public function setAutoWalkingStrideLengthMm($autoWalkingStrideLengthMm)
  {
    $this->autoWalkingStrideLengthMm = $autoWalkingStrideLengthMm;
  }
  /**
   * @return int
   */
  public function getAutoWalkingStrideLengthMm()
  {
    return $this->autoWalkingStrideLengthMm;
  }
  /**
   * Output only. The date the user created their account. Updates to this field
   * are currently not supported.
   *
   * @param Date $membershipStartDate
   */
  public function setMembershipStartDate(Date $membershipStartDate)
  {
    $this->membershipStartDate = $membershipStartDate;
  }
  /**
   * @return Date
   */
  public function getMembershipStartDate()
  {
    return $this->membershipStartDate;
  }
  /**
   * Identifier. The resource name of this Profile resource. Format:
   * `users/{user}/profile` Example: `users/1234567890/profile` or
   * `users/me/profile` The {user} ID is a system-generated Google Health API
   * user ID, a string of 1-63 characters consisting of lowercase and uppercase
   * letters, numbers, and hyphens. The literal `me` can also be used to refer
   * to the authenticated user.
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
  /**
   * Optional. The user's user configured running stride length, in millimeters.
   * The user must consent to one of the following access scopes to access this
   * field: - `https://www.googleapis.com/auth/googlehealth.activity_and_fitness
   * .readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @param int $userConfiguredRunningStrideLengthMm
   */
  public function setUserConfiguredRunningStrideLengthMm($userConfiguredRunningStrideLengthMm)
  {
    $this->userConfiguredRunningStrideLengthMm = $userConfiguredRunningStrideLengthMm;
  }
  /**
   * @return int
   */
  public function getUserConfiguredRunningStrideLengthMm()
  {
    return $this->userConfiguredRunningStrideLengthMm;
  }
  /**
   * Optional. The user's user configured walking stride length, in millimeters.
   * The user must consent to one of the following access scopes to access this
   * field: - `https://www.googleapis.com/auth/googlehealth.activity_and_fitness
   * .readonly` -
   * `https://www.googleapis.com/auth/googlehealth.activity_and_fitness`
   *
   * @param int $userConfiguredWalkingStrideLengthMm
   */
  public function setUserConfiguredWalkingStrideLengthMm($userConfiguredWalkingStrideLengthMm)
  {
    $this->userConfiguredWalkingStrideLengthMm = $userConfiguredWalkingStrideLengthMm;
  }
  /**
   * @return int
   */
  public function getUserConfiguredWalkingStrideLengthMm()
  {
    return $this->userConfiguredWalkingStrideLengthMm;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Profile::class, 'Google_Service_GoogleHealthAPI_Profile');
