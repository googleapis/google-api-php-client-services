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

namespace Google\Service\Chromewebstore;

class Warning extends \Google\Model
{
  /**
   * A description of the warning. Developers should use this message to
   * understand the warning and take appropriate action to resolve the issue.
   *
   * @var string
   */
  public $description;
  /**
   * The reason for the warning. This is a constant value that identifies the
   * proximate cause of the warning. This should be at most 63 characters and
   * match a regular expression of `A-Z+[A-Z0-9]`, which represents
   * UPPER_SNAKE_CASE.
   *
   * @var string
   */
  public $reason;

  /**
   * A description of the warning. Developers should use this message to
   * understand the warning and take appropriate action to resolve the issue.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The reason for the warning. This is a constant value that identifies the
   * proximate cause of the warning. This should be at most 63 characters and
   * match a regular expression of `A-Z+[A-Z0-9]`, which represents
   * UPPER_SNAKE_CASE.
   *
   * @param string $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return string
   */
  public function getReason()
  {
    return $this->reason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Warning::class, 'Google_Service_Chromewebstore_Warning');
