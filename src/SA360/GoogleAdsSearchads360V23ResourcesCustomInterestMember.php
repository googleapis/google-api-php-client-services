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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesCustomInterestMember extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MEMBER_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const MEMBER_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Custom interest member type KEYWORD.
   */
  public const MEMBER_TYPE_KEYWORD = 'KEYWORD';
  /**
   * Custom interest member type URL.
   */
  public const MEMBER_TYPE_URL = 'URL';
  /**
   * The type of custom interest member, KEYWORD or URL.
   *
   * @var string
   */
  public $memberType;
  /**
   * Keyword text when member_type is KEYWORD or URL string when member_type is
   * URL.
   *
   * @var string
   */
  public $parameter;

  /**
   * The type of custom interest member, KEYWORD or URL.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, KEYWORD, URL
   *
   * @param self::MEMBER_TYPE_* $memberType
   */
  public function setMemberType($memberType)
  {
    $this->memberType = $memberType;
  }
  /**
   * @return self::MEMBER_TYPE_*
   */
  public function getMemberType()
  {
    return $this->memberType;
  }
  /**
   * Keyword text when member_type is KEYWORD or URL string when member_type is
   * URL.
   *
   * @param string $parameter
   */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /**
   * @return string
   */
  public function getParameter()
  {
    return $this->parameter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomInterestMember::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomInterestMember');
