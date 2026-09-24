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

class Relationships extends \Google\Collection
{
  protected $collection_key = 'subdomains';
  /**
   * Optional. Related URLs associated with the domain.
   *
   * @var string[]
   */
  public $relatedUrls;
  /**
   * Optional. Sibling domains sharing the same IP address.
   *
   * @var string[]
   */
  public $siblingDomains;
  /**
   * Optional. Subdomains associated with the target domain or URL.
   *
   * @var string[]
   */
  public $subdomains;

  /**
   * Optional. Related URLs associated with the domain.
   *
   * @param string[] $relatedUrls
   */
  public function setRelatedUrls($relatedUrls)
  {
    $this->relatedUrls = $relatedUrls;
  }
  /**
   * @return string[]
   */
  public function getRelatedUrls()
  {
    return $this->relatedUrls;
  }
  /**
   * Optional. Sibling domains sharing the same IP address.
   *
   * @param string[] $siblingDomains
   */
  public function setSiblingDomains($siblingDomains)
  {
    $this->siblingDomains = $siblingDomains;
  }
  /**
   * @return string[]
   */
  public function getSiblingDomains()
  {
    return $this->siblingDomains;
  }
  /**
   * Optional. Subdomains associated with the target domain or URL.
   *
   * @param string[] $subdomains
   */
  public function setSubdomains($subdomains)
  {
    $this->subdomains = $subdomains;
  }
  /**
   * @return string[]
   */
  public function getSubdomains()
  {
    return $this->subdomains;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Relationships::class, 'Google_Service_ThreatIntelligenceService_Relationships');
