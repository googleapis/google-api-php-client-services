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

namespace Google\Service\CloudRedis;

class AclRule extends \Google\Model
{
  /**
   * Required. The rule to be applied to the username. Ex: "on >password123 ~*
   * +@all" The format of the rule is defined by Redis OSS:
   * https://redis.io/docs/latest/operate/oss_and_stack/management/security/acl/
   *
   * @var string
   */
  public $rule;
  /**
   * Required. Specifies the IAM user or service account to be added to the ACL
   * policy. This username will be directly set on the Redis OSS.
   *
   * @var string
   */
  public $username;

  /**
   * Required. The rule to be applied to the username. Ex: "on >password123 ~*
   * +@all" The format of the rule is defined by Redis OSS:
   * https://redis.io/docs/latest/operate/oss_and_stack/management/security/acl/
   *
   * @param string $rule
   */
  public function setRule($rule)
  {
    $this->rule = $rule;
  }
  /**
   * @return string
   */
  public function getRule()
  {
    return $this->rule;
  }
  /**
   * Required. Specifies the IAM user or service account to be added to the ACL
   * policy. This username will be directly set on the Redis OSS.
   *
   * @param string $username
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /**
   * @return string
   */
  public function getUsername()
  {
    return $this->username;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AclRule::class, 'Google_Service_CloudRedis_AclRule');
