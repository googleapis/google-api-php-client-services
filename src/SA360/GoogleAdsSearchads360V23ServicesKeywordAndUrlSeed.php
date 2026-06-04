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

class GoogleAdsSearchads360V23ServicesKeywordAndUrlSeed extends \Google\Collection
{
  protected $collection_key = 'keywords';
  /**
   * Requires at least one keyword and no more than 20 keywords.
   *
   * @var string[]
   */
  public $keywords;
  /**
   * The URL to crawl in order to generate keyword ideas.
   *
   * @var string
   */
  public $url;

  /**
   * Requires at least one keyword and no more than 20 keywords.
   *
   * @param string[] $keywords
   */
  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }
  /**
   * @return string[]
   */
  public function getKeywords()
  {
    return $this->keywords;
  }
  /**
   * The URL to crawl in order to generate keyword ideas.
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
class_alias(GoogleAdsSearchads360V23ServicesKeywordAndUrlSeed::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesKeywordAndUrlSeed');
