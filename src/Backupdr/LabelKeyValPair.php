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

namespace Google\Service\Backupdr;

class LabelKeyValPair extends \Google\Model
{
  /**
   * Key of the label. The key must follow the format: `\\p{Ll}\\p{Lo}{0,62}`.
   * This means the key must start with a lowercase letter or a lowercase
   * international character, followed by zero or more lowercase letters,
   * lowercase international characters, numbers, underscores, or dashes. The
   * key must be at most 63 characters long. International characters are
   * allowed.
   *
   * @var string
   */
  public $key;
  /**
   * Value of the label. The value must follow the format:
   * `[\\p{Ll}\\p{Lo}\\p{N}_-]{1,63}`. This means the value must be one or more
   * lowercase letters, lowercase international characters, numbers,
   * underscores, or dashes. The value must be at most 63 characters long.
   * International characters are allowed.
   *
   * @var string
   */
  public $value;

  /**
   * Key of the label. The key must follow the format: `\\p{Ll}\\p{Lo}{0,62}`.
   * This means the key must start with a lowercase letter or a lowercase
   * international character, followed by zero or more lowercase letters,
   * lowercase international characters, numbers, underscores, or dashes. The
   * key must be at most 63 characters long. International characters are
   * allowed.
   *
   * @param string $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * Value of the label. The value must follow the format:
   * `[\\p{Ll}\\p{Lo}\\p{N}_-]{1,63}`. This means the value must be one or more
   * lowercase letters, lowercase international characters, numbers,
   * underscores, or dashes. The value must be at most 63 characters long.
   * International characters are allowed.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LabelKeyValPair::class, 'Google_Service_Backupdr_LabelKeyValPair');
