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

class GoogleAdsSearchads360V23ResourcesCustomAudienceMember extends \Google\Model
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
   * Users whose interests or actions are described by a keyword.
   */
  public const MEMBER_TYPE_KEYWORD = 'KEYWORD';
  /**
   * Users who have interests related to the website's content.
   */
  public const MEMBER_TYPE_URL = 'URL';
  /**
   * Users who visit place types described by a place category.
   */
  public const MEMBER_TYPE_PLACE_CATEGORY = 'PLACE_CATEGORY';
  /**
   * Users who have installed a mobile app.
   */
  public const MEMBER_TYPE_APP = 'APP';
  /**
   * A package name of Android apps which users installed such as
   * com.google.example.
   *
   * @var string
   */
  public $app;
  /**
   * A keyword or keyword phrase — at most 10 words and 80 characters. Languages
   * with double-width characters such as Chinese, Japanese, or Korean, are
   * allowed 40 characters, which describes the user's interests or actions.
   *
   * @var string
   */
  public $keyword;
  /**
   * The type of custom audience member, KEYWORD, URL, PLACE_CATEGORY or APP.
   *
   * @var string
   */
  public $memberType;
  /**
   * A place type described by a place category users visit.
   *
   * @var string
   */
  public $placeCategory;
  /**
   * An HTTP URL, protocol-included — at most 2048 characters, which includes
   * contents users have interests in.
   *
   * @var string
   */
  public $url;

  /**
   * A package name of Android apps which users installed such as
   * com.google.example.
   *
   * @param string $app
   */
  public function setApp($app)
  {
    $this->app = $app;
  }
  /**
   * @return string
   */
  public function getApp()
  {
    return $this->app;
  }
  /**
   * A keyword or keyword phrase — at most 10 words and 80 characters. Languages
   * with double-width characters such as Chinese, Japanese, or Korean, are
   * allowed 40 characters, which describes the user's interests or actions.
   *
   * @param string $keyword
   */
  public function setKeyword($keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return string
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * The type of custom audience member, KEYWORD, URL, PLACE_CATEGORY or APP.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, KEYWORD, URL, PLACE_CATEGORY, APP
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
   * A place type described by a place category users visit.
   *
   * @param string $placeCategory
   */
  public function setPlaceCategory($placeCategory)
  {
    $this->placeCategory = $placeCategory;
  }
  /**
   * @return string
   */
  public function getPlaceCategory()
  {
    return $this->placeCategory;
  }
  /**
   * An HTTP URL, protocol-included — at most 2048 characters, which includes
   * contents users have interests in.
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomAudienceMember::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomAudienceMember');
