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

namespace Google\Service\Discovery;

class RestMethodMediaUpload extends \Google\Collection
{
  protected $collection_key = 'accept';
  /**
   * @var string[]
   */
  public $accept;
  /**
   * @var string
   */
  public $maxSize;
  protected $protocolsType = RestMethodMediaUploadProtocols::class;
  protected $protocolsDataType = '';

  /**
   * @param string[]
   */
  public function setAccept($accept)
  {
    $this->accept = $accept;
  }
  /**
   * @return string[]
   */
  public function getAccept()
  {
    return $this->accept;
  }
  /**
   * @param string
   */
  public function setMaxSize($maxSize)
  {
    $this->maxSize = $maxSize;
  }
  /**
   * @return string
   */
  public function getMaxSize()
  {
    return $this->maxSize;
  }
  /**
   * @param RestMethodMediaUploadProtocols
   */
  public function setProtocols(RestMethodMediaUploadProtocols $protocols)
  {
    $this->protocols = $protocols;
  }
  /**
   * @return RestMethodMediaUploadProtocols
   */
  public function getProtocols()
  {
    return $this->protocols;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestMethodMediaUpload::class, 'Google_Service_Discovery_RestMethodMediaUpload');
