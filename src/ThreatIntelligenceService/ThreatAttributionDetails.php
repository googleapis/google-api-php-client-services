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

class ThreatAttributionDetails extends \Google\Collection
{
  protected $collection_key = 'malware';
  /**
   * Optional. The threat actors associated with the target.
   *
   * @var string[]
   */
  public $actors;
  /**
   * Optional. The threat collections detected.
   *
   * @var string[]
   */
  public $collections;
  /**
   * Optional. The malware associated with the threat.
   *
   * @var string[]
   */
  public $malware;

  /**
   * Optional. The threat actors associated with the target.
   *
   * @param string[] $actors
   */
  public function setActors($actors)
  {
    $this->actors = $actors;
  }
  /**
   * @return string[]
   */
  public function getActors()
  {
    return $this->actors;
  }
  /**
   * Optional. The threat collections detected.
   *
   * @param string[] $collections
   */
  public function setCollections($collections)
  {
    $this->collections = $collections;
  }
  /**
   * @return string[]
   */
  public function getCollections()
  {
    return $this->collections;
  }
  /**
   * Optional. The malware associated with the threat.
   *
   * @param string[] $malware
   */
  public function setMalware($malware)
  {
    $this->malware = $malware;
  }
  /**
   * @return string[]
   */
  public function getMalware()
  {
    return $this->malware;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThreatAttributionDetails::class, 'Google_Service_ThreatIntelligenceService_ThreatAttributionDetails');
