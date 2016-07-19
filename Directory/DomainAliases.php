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

class Google_Service_Directory_DomainAliases extends Google_Collection
{
  protected $collection_key = 'domainAliases';
  public $domainAliases;
  public $etag;
  public $kind;

  public function setDomainAliases(array $domainAliases)
  {
    foreach ($domainAliases as $d) {
      if (!$d instanceof Google_Service_Directory_DomainAlias) {
        throw new InvalidArgumentException('First argument to setDomainAliases must be an array of Google_Service_Directory_DomainAlias');
      }
    }
    $this->domainAliases = $domainAliases;
  }
  public function getDomainAliases()
  {
    return $this->domainAliases;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}
