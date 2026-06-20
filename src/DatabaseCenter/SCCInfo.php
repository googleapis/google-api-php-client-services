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

namespace Google\Service\DatabaseCenter;

class SCCInfo extends \Google\Collection
{
  protected $collection_key = 'regulatoryStandards';
  /**
   * Name by which SCC calls this signal.
   *
   * @var string
   */
  public $category;
  /**
   * External URI which points to a SCC page associated with the signal.
   *
   * @var string
   */
  public $externalUri;
  protected $regulatoryStandardsType = RegulatoryStandard::class;
  protected $regulatoryStandardsDataType = 'array';
  /**
   * Name of the signal.
   *
   * @var string
   */
  public $signal;

  /**
   * Name by which SCC calls this signal.
   *
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * External URI which points to a SCC page associated with the signal.
   *
   * @param string $externalUri
   */
  public function setExternalUri($externalUri)
  {
    $this->externalUri = $externalUri;
  }
  /**
   * @return string
   */
  public function getExternalUri()
  {
    return $this->externalUri;
  }
  /**
   * Compliances that are associated with the signal.
   *
   * @param RegulatoryStandard[] $regulatoryStandards
   */
  public function setRegulatoryStandards($regulatoryStandards)
  {
    $this->regulatoryStandards = $regulatoryStandards;
  }
  /**
   * @return RegulatoryStandard[]
   */
  public function getRegulatoryStandards()
  {
    return $this->regulatoryStandards;
  }
  /**
   * Name of the signal.
   *
   * @param string $signal
   */
  public function setSignal($signal)
  {
    $this->signal = $signal;
  }
  /**
   * @return string
   */
  public function getSignal()
  {
    return $this->signal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SCCInfo::class, 'Google_Service_DatabaseCenter_SCCInfo');
