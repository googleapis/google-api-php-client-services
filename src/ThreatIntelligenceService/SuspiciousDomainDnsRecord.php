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

class SuspiciousDomainDnsRecord extends \Google\Model
{
  /**
   * The name of the DNS record.
   *
   * @var string
   */
  public $record;
  /**
   * The TTL of the DNS record.
   *
   * @var int
   */
  public $ttl;
  /**
   * The type of the DNS record.
   *
   * @var string
   */
  public $type;
  /**
   * The value of the DNS record.
   *
   * @var string
   */
  public $value;

  /**
   * The name of the DNS record.
   *
   * @param string $record
   */
  public function setRecord($record)
  {
    $this->record = $record;
  }
  /**
   * @return string
   */
  public function getRecord()
  {
    return $this->record;
  }
  /**
   * The TTL of the DNS record.
   *
   * @param int $ttl
   */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /**
   * @return int
   */
  public function getTtl()
  {
    return $this->ttl;
  }
  /**
   * The type of the DNS record.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * The value of the DNS record.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuspiciousDomainDnsRecord::class, 'Google_Service_ThreatIntelligenceService_SuspiciousDomainDnsRecord');
