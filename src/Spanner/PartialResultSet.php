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

namespace Google\Service\Spanner;

class PartialResultSet extends \Google\Collection
{
  protected $collection_key = 'values';
  /**
   * @var bool
   */
  public $chunkedValue;
  /**
   * @var bool
   */
  public $last;
  protected $metadataType = ResultSetMetadata::class;
  protected $metadataDataType = '';
  protected $precommitTokenType = MultiplexedSessionPrecommitToken::class;
  protected $precommitTokenDataType = '';
  /**
   * @var string
   */
  public $resumeToken;
  protected $statsType = ResultSetStats::class;
  protected $statsDataType = '';
  /**
   * @var array[]
   */
  public $values;

  /**
   * @param bool
   */
  public function setChunkedValue($chunkedValue)
  {
    $this->chunkedValue = $chunkedValue;
  }
  /**
   * @return bool
   */
  public function getChunkedValue()
  {
    return $this->chunkedValue;
  }
  /**
   * @param bool
   */
  public function setLast($last)
  {
    $this->last = $last;
  }
  /**
   * @return bool
   */
  public function getLast()
  {
    return $this->last;
  }
  /**
   * @param ResultSetMetadata
   */
  public function setMetadata(ResultSetMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return ResultSetMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param MultiplexedSessionPrecommitToken
   */
  public function setPrecommitToken(MultiplexedSessionPrecommitToken $precommitToken)
  {
    $this->precommitToken = $precommitToken;
  }
  /**
   * @return MultiplexedSessionPrecommitToken
   */
  public function getPrecommitToken()
  {
    return $this->precommitToken;
  }
  /**
   * @param string
   */
  public function setResumeToken($resumeToken)
  {
    $this->resumeToken = $resumeToken;
  }
  /**
   * @return string
   */
  public function getResumeToken()
  {
    return $this->resumeToken;
  }
  /**
   * @param ResultSetStats
   */
  public function setStats(ResultSetStats $stats)
  {
    $this->stats = $stats;
  }
  /**
   * @return ResultSetStats
   */
  public function getStats()
  {
    return $this->stats;
  }
  /**
   * @param array[]
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @return array[]
   */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartialResultSet::class, 'Google_Service_Spanner_PartialResultSet');
