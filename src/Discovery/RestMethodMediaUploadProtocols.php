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

class RestMethodMediaUploadProtocols extends \Google\Model
{
  protected $resumableType = RestMethodMediaUploadProtocolsResumable::class;
  protected $resumableDataType = '';
  protected $simpleType = RestMethodMediaUploadProtocolsSimple::class;
  protected $simpleDataType = '';

  /**
   * @param RestMethodMediaUploadProtocolsResumable
   */
  public function setResumable(RestMethodMediaUploadProtocolsResumable $resumable)
  {
    $this->resumable = $resumable;
  }
  /**
   * @return RestMethodMediaUploadProtocolsResumable
   */
  public function getResumable()
  {
    return $this->resumable;
  }
  /**
   * @param RestMethodMediaUploadProtocolsSimple
   */
  public function setSimple(RestMethodMediaUploadProtocolsSimple $simple)
  {
    $this->simple = $simple;
  }
  /**
   * @return RestMethodMediaUploadProtocolsSimple
   */
  public function getSimple()
  {
    return $this->simple;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestMethodMediaUploadProtocols::class, 'Google_Service_Discovery_RestMethodMediaUploadProtocols');
