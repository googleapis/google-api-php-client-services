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

namespace Google\Service\SQLAdmin;

class PasswordValidationPolicy extends \Google\Model
{
  public $complexity;
  public $disallowUsernameSubstring;
  public $minLength;
  public $passwordChangeInterval;
  public $reuseInterval;

  public function setComplexity($complexity)
  {
    $this->complexity = $complexity;
  }
  public function getComplexity()
  {
    return $this->complexity;
  }
  public function setDisallowUsernameSubstring($disallowUsernameSubstring)
  {
    $this->disallowUsernameSubstring = $disallowUsernameSubstring;
  }
  public function getDisallowUsernameSubstring()
  {
    return $this->disallowUsernameSubstring;
  }
  public function setMinLength($minLength)
  {
    $this->minLength = $minLength;
  }
  public function getMinLength()
  {
    return $this->minLength;
  }
  public function setPasswordChangeInterval($passwordChangeInterval)
  {
    $this->passwordChangeInterval = $passwordChangeInterval;
  }
  public function getPasswordChangeInterval()
  {
    return $this->passwordChangeInterval;
  }
  public function setReuseInterval($reuseInterval)
  {
    $this->reuseInterval = $reuseInterval;
  }
  public function getReuseInterval()
  {
    return $this->reuseInterval;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PasswordValidationPolicy::class, 'Google_Service_SQLAdmin_PasswordValidationPolicy');
