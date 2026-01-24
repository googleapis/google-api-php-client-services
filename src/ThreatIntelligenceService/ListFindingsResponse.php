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

class ListFindingsResponse extends \Google\Collection
{
  protected $collection_key = 'findings';
  protected $findingsType = Finding::class;
  protected $findingsDataType = 'array';
  /**
   * Page token.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * List of findings.
   *
   * @param Finding[] $findings
   */
  public function setFindings($findings)
  {
    $this->findings = $findings;
  }
  /**
   * @return Finding[]
   */
  public function getFindings()
  {
    return $this->findings;
  }
  /**
   * Page token.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListFindingsResponse::class, 'Google_Service_ThreatIntelligenceService_ListFindingsResponse');
