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

class CustomerProfileCitation extends \Google\Model
{
  /**
   * Required. The citation id for the citation. Should be unique within the
   * profile.
   *
   * @var string
   */
  public $citationId;
  /**
   * Required. The name of the document the citation is from.
   *
   * @var string
   */
  public $document;
  /**
   * The time the citation was retrieved.
   *
   * @var string
   */
  public $retrievalTime;
  /**
   * Required. The source of the citation.
   *
   * @var string
   */
  public $source;
  /**
   * Optional. The url of the citation.
   *
   * @var string
   */
  public $uri;

  /**
   * Required. The citation id for the citation. Should be unique within the
   * profile.
   *
   * @param string $citationId
   */
  public function setCitationId($citationId)
  {
    $this->citationId = $citationId;
  }
  /**
   * @return string
   */
  public function getCitationId()
  {
    return $this->citationId;
  }
  /**
   * Required. The name of the document the citation is from.
   *
   * @param string $document
   */
  public function setDocument($document)
  {
    $this->document = $document;
  }
  /**
   * @return string
   */
  public function getDocument()
  {
    return $this->document;
  }
  /**
   * The time the citation was retrieved.
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
   * Required. The source of the citation.
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Optional. The url of the citation.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerProfileCitation::class, 'Google_Service_ThreatIntelligenceService_CustomerProfileCitation');
