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

class CustomerProfileIndustry extends \Google\Collection
{
  protected $collection_key = 'citationIds';
  /**
   * Optional. The citation ids for the industry.
   *
   * @var string[]
   */
  public $citationIds;
  /**
   * Required. The name of the industry.
   *
   * @var string
   */
  public $industry;

  /**
   * Optional. The citation ids for the industry.
   *
   * @param string[] $citationIds
   */
  public function setCitationIds($citationIds)
  {
    $this->citationIds = $citationIds;
  }
  /**
   * @return string[]
   */
  public function getCitationIds()
  {
    return $this->citationIds;
  }
  /**
   * Required. The name of the industry.
   *
   * @param string $industry
   */
  public function setIndustry($industry)
  {
    $this->industry = $industry;
  }
  /**
   * @return string
   */
  public function getIndustry()
  {
    return $this->industry;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerProfileIndustry::class, 'Google_Service_ThreatIntelligenceService_CustomerProfileIndustry');
