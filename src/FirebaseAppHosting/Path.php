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

namespace Google\Service\FirebaseAppHosting;

class Path extends \Google\Model
{
  /**
   * The pattern type is unspecified - this is an invalid value.
   */
  public const TYPE_PATTERN_TYPE_UNSPECIFIED = 'PATTERN_TYPE_UNSPECIFIED';
  /**
   * RE2 - regular expression (https://github.com/google/re2/wiki/Syntax).
   */
  public const TYPE_RE2 = 'RE2';
  /**
   * The pattern is a glob.
   */
  public const TYPE_GLOB = 'GLOB';
  /**
   * The pattern is a prefix.
   */
  public const TYPE_PREFIX = 'PREFIX';
  /**
   * Optional. The pattern to match against.
   *
   * @var string
   */
  public $pattern;
  /**
   * Optional. The type of pattern to match against.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The pattern to match against.
   *
   * @param string $pattern
   */
  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }
  /**
   * @return string
   */
  public function getPattern()
  {
    return $this->pattern;
  }
  /**
   * Optional. The type of pattern to match against.
   *
   * Accepted values: PATTERN_TYPE_UNSPECIFIED, RE2, GLOB, PREFIX
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Path::class, 'Google_Service_FirebaseAppHosting_Path');
