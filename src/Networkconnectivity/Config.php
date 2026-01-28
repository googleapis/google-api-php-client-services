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

namespace Google\Service\Networkconnectivity;

class Config extends \Google\Collection
{
  protected $collection_key = 'rrdatas';
  /**
   * Required. The list of resource record data strings. The content and format
   * of these strings depend on the AutomatedDnsRecord.type. For many common
   * record types, this list may contain multiple strings. As defined in RFC
   * 1035 (section 5) and RFC 1034 (section 3.6.1) -- see examples. Examples: A
   * record: ["192.0.2.1"] or ["192.0.2.1", "192.0.2.2"] TXT record: ["This is a
   * text record"] CNAME record: ["target.example.com."] AAAA record: ["::1"] or
   * ["2001:0db8:85a3:0000:0000:8a2e:0370:7334",
   * "2001:0db8:85a3:0000:0000:8a2e:0370:7335"]
   *
   * @var string[]
   */
  public $rrdatas;
  /**
   * Required. Number of seconds that this DNS record can be cached by
   * resolvers.
   *
   * @var string
   */
  public $ttl;

  /**
   * Required. The list of resource record data strings. The content and format
   * of these strings depend on the AutomatedDnsRecord.type. For many common
   * record types, this list may contain multiple strings. As defined in RFC
   * 1035 (section 5) and RFC 1034 (section 3.6.1) -- see examples. Examples: A
   * record: ["192.0.2.1"] or ["192.0.2.1", "192.0.2.2"] TXT record: ["This is a
   * text record"] CNAME record: ["target.example.com."] AAAA record: ["::1"] or
   * ["2001:0db8:85a3:0000:0000:8a2e:0370:7334",
   * "2001:0db8:85a3:0000:0000:8a2e:0370:7335"]
   *
   * @param string[] $rrdatas
   */
  public function setRrdatas($rrdatas)
  {
    $this->rrdatas = $rrdatas;
  }
  /**
   * @return string[]
   */
  public function getRrdatas()
  {
    return $this->rrdatas;
  }
  /**
   * Required. Number of seconds that this DNS record can be cached by
   * resolvers.
   *
   * @param string $ttl
   */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /**
   * @return string
   */
  public function getTtl()
  {
    return $this->ttl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Config::class, 'Google_Service_Networkconnectivity_Config');
