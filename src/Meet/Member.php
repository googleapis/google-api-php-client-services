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

namespace Google\Service\Meet;

class Member extends \Google\Model
{
  /**
   * This is used to indicate the user hasn't specified any value and the user’s
   * role will be determined upon joining the meetings between 'contributor' and
   * 'viewer' role depending on meeting configuration. For more information
   * about the viewer role, see [Assign View only roles in Google
   * Meet](https://support.google.com/meet/answer/13658394).
   */
  public const ROLE_ROLE_UNSPECIFIED = 'ROLE_UNSPECIFIED';
  /**
   * Co-host role.
   */
  public const ROLE_COHOST = 'COHOST';
  /**
   * Email for the member. This is required for creating the member.
   *
   * @var string
   */
  public $email;
  /**
   * Identifier. Resource name of the member. Format:
   * spaces/{space}/members/{member}
   *
   * @var string
   */
  public $name;
  /**
   * The meeting role assigned to the member.
   *
   * @var string
   */
  public $role;

  /**
   * Email for the member. This is required for creating the member.
   *
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }
  /**
   * Identifier. Resource name of the member. Format:
   * spaces/{space}/members/{member}
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
   * The meeting role assigned to the member.
   *
   * Accepted values: ROLE_UNSPECIFIED, COHOST
   *
   * @param self::ROLE_* $role
   */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /**
   * @return self::ROLE_*
   */
  public function getRole()
  {
    return $this->role;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Member::class, 'Google_Service_Meet_Member');
