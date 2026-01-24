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

namespace Google\Service\ThreatIntelligenceService;

class Evidence extends \Google\Collection
{
  protected $collection_key = 'distinctThemes';
  /**
   * A list of semantic themes or concepts found to be common, related, or
   * aligned between the sources, supporting the verdict.
   *
   * @var string[]
   */
  public $commonThemes;
  /**
   * A list of semantic themes or descriptions unique to one source or
   * semantically distant.
   *
   * @var string[]
   */
  public $distinctThemes;

  /**
   * A list of semantic themes or concepts found to be common, related, or
   * aligned between the sources, supporting the verdict.
   *
   * @param string[] $commonThemes
   */
  public function setCommonThemes($commonThemes)
  {
    $this->commonThemes = $commonThemes;
  }
  /**
   * @return string[]
   */
  public function getCommonThemes()
  {
    return $this->commonThemes;
  }
  /**
   * A list of semantic themes or descriptions unique to one source or
   * semantically distant.
   *
   * @param string[] $distinctThemes
   */
  public function setDistinctThemes($distinctThemes)
  {
    $this->distinctThemes = $distinctThemes;
  }
  /**
   * @return string[]
   */
  public function getDistinctThemes()
  {
    return $this->distinctThemes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Evidence::class, 'Google_Service_ThreatIntelligenceService_Evidence');
