<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Gmail_MessagePart extends Google_Collection
{
  protected $collection_key = 'parts';
  public $body;
  public $filename;
  public $headers;
  public $mimeType;
  public $partId;
  public $parts;

  public function setBody(Google_Service_Gmail_MessagePartBody $body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  public function getFilename()
  {
    return $this->filename;
  }
  public function setHeaders(array $headers)
  {
    foreach ($headers as $h) {
      if (!$h instanceof Google_Service_Gmail_MessagePartHeader) {
        throw new InvalidArgumentException('First argument to setHeaders must be an array of Google_Service_Gmail_MessagePartHeader');
      }
    }
    $this->headers = $headers;
  }
  public function getHeaders()
  {
    return $this->headers;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setPartId($partId)
  {
    $this->partId = $partId;
  }
  public function getPartId()
  {
    return $this->partId;
  }
  public function setParts(array $parts)
  {
    foreach ($parts as $p) {
      if (!$p instanceof Google_Service_Gmail_MessagePart) {
        throw new InvalidArgumentException('First argument to setParts must be an array of Google_Service_Gmail_MessagePart');
      }
    }
    $this->parts = $parts;
  }
  public function getParts()
  {
    return $this->parts;
  }
}
