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

class Google_Service_Compute_UrlMap extends Google_Collection
{
  protected $collection_key = 'tests';
  public $creationTimestamp;
  public $defaultService;
  public $description;
  public $fingerprint;
  public $hostRules;
  public $id;
  public $kind;
  public $name;
  public $pathMatchers;
  public $selfLink;
  public $tests;

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  public function setDefaultService($defaultService)
  {
    $this->defaultService = $defaultService;
  }
  public function getDefaultService()
  {
    return $this->defaultService;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  public function setHostRules(array $hostRules)
  {
    foreach ($hostRules as $h) {
      if (!$h instanceof Google_Service_Compute_HostRule) {
        throw new InvalidArgumentException('First argument to setHostRules must be an array of Google_Service_Compute_HostRule');
      }
    }
    $this->hostRules = $hostRules;
  }
  public function getHostRules()
  {
    return $this->hostRules;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPathMatchers(array $pathMatchers)
  {
    foreach ($pathMatchers as $p) {
      if (!$p instanceof Google_Service_Compute_PathMatcher) {
        throw new InvalidArgumentException('First argument to setPathMatchers must be an array of Google_Service_Compute_PathMatcher');
      }
    }
    $this->pathMatchers = $pathMatchers;
  }
  public function getPathMatchers()
  {
    return $this->pathMatchers;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setTests(array $tests)
  {
    foreach ($tests as $t) {
      if (!$t instanceof Google_Service_Compute_UrlMapTest) {
        throw new InvalidArgumentException('First argument to setTests must be an array of Google_Service_Compute_UrlMapTest');
      }
    }
    $this->tests = $tests;
  }
  public function getTests()
  {
    return $this->tests;
  }
}
