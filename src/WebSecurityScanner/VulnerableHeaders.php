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

namespace Google\Service\WebSecurityScanner;

class VulnerableHeaders extends \Google\Collection
{
  protected $collection_key = 'missingHeaders';
  protected $headersType = Header::class;
  protected $headersDataType = 'array';
  protected $missingHeadersType = Header::class;
  protected $missingHeadersDataType = 'array';

  /**
   * @param Header[]
   */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /**
   * @return Header[]
   */
  public function getHeaders()
  {
    return $this->headers;
  }
  /**
   * @param Header[]
   */
  public function setMissingHeaders($missingHeaders)
  {
    $this->missingHeaders = $missingHeaders;
  }
  /**
   * @return Header[]
   */
  public function getMissingHeaders()
  {
    return $this->missingHeaders;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VulnerableHeaders::class, 'Google_Service_WebSecurityScanner_VulnerableHeaders');
