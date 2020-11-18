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

class Google_Service_Discovery_RestMethodMediaUploadProtocols extends Google_Model
{
  protected $resumableType = 'Google_Service_Discovery_RestMethodMediaUploadProtocolsResumable';
  protected $resumableDataType = '';
  protected $simpleType = 'Google_Service_Discovery_RestMethodMediaUploadProtocolsSimple';
  protected $simpleDataType = '';

  /**
   * @param Google_Service_Discovery_RestMethodMediaUploadProtocolsResumable
   */
  public function setResumable(Google_Service_Discovery_RestMethodMediaUploadProtocolsResumable $resumable)
  {
    $this->resumable = $resumable;
  }
  /**
   * @return Google_Service_Discovery_RestMethodMediaUploadProtocolsResumable
   */
  public function getResumable()
  {
    return $this->resumable;
  }
  /**
   * @param Google_Service_Discovery_RestMethodMediaUploadProtocolsSimple
   */
  public function setSimple(Google_Service_Discovery_RestMethodMediaUploadProtocolsSimple $simple)
  {
    $this->simple = $simple;
  }
  /**
   * @return Google_Service_Discovery_RestMethodMediaUploadProtocolsSimple
   */
  public function getSimple()
  {
    return $this->simple;
  }
}
