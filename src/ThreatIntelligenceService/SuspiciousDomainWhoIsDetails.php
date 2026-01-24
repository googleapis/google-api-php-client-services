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

class SuspiciousDomainWhoIsDetails extends \Google\Model
{
  /**
   * The time the whois details were retrieved.
   *
   * @var string
   */
  public $retrievalTime;
  /**
   * The whois details of the suspicious domain.
   *
   * @var string
   */
  public $whois;

  /**
   * The time the whois details were retrieved.
   *
   * @param string $retrievalTime
   */
  public function setRetrievalTime($retrievalTime)
  {
    $this->retrievalTime = $retrievalTime;
  }
  /**
   * @return string
   */
  public function getRetrievalTime()
  {
    return $this->retrievalTime;
  }
  /**
   * The whois details of the suspicious domain.
   *
   * @param string $whois
   */
  public function setWhois($whois)
  {
    $this->whois = $whois;
  }
  /**
   * @return string
   */
  public function getWhois()
  {
    return $this->whois;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuspiciousDomainWhoIsDetails::class, 'Google_Service_ThreatIntelligenceService_SuspiciousDomainWhoIsDetails');
