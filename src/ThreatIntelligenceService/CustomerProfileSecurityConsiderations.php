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

class CustomerProfileSecurityConsiderations extends \Google\Collection
{
  protected $collection_key = 'considerations';
  /**
   * Optional. A series of considerations for the security of the organization,
   * such as "high risk of compromise" or "vulnerable to cyberbullying".
   *
   * @var string[]
   */
  public $considerations;
  /**
   * Optional. A note about the security considerations.
   *
   * @var string
   */
  public $note;

  /**
   * Optional. A series of considerations for the security of the organization,
   * such as "high risk of compromise" or "vulnerable to cyberbullying".
   *
   * @param string[] $considerations
   */
  public function setConsiderations($considerations)
  {
    $this->considerations = $considerations;
  }
  /**
   * @return string[]
   */
  public function getConsiderations()
  {
    return $this->considerations;
  }
  /**
   * Optional. A note about the security considerations.
   *
   * @param string $note
   */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /**
   * @return string
   */
  public function getNote()
  {
    return $this->note;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerProfileSecurityConsiderations::class, 'Google_Service_ThreatIntelligenceService_CustomerProfileSecurityConsiderations');
