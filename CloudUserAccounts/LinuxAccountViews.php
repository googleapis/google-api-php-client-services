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

class Google_Service_CloudUserAccounts_LinuxAccountViews extends Google_Collection
{
  protected $collection_key = 'userViews';
  public $groupViews;
  public $kind;
  public $userViews;

  public function setGroupViews(array $groupViews)
  {
    foreach ($groupViews as $g) {
      if (!$g instanceof Google_Service_CloudUserAccounts_LinuxGroupView) {
        throw new InvalidArgumentException('First argument to setGroupViews must be an array of Google_Service_CloudUserAccounts_LinuxGroupView');
      }
    }
    $this->groupViews = $groupViews;
  }
  public function getGroupViews()
  {
    return $this->groupViews;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUserViews(array $userViews)
  {
    foreach ($userViews as $u) {
      if (!$u instanceof Google_Service_CloudUserAccounts_LinuxUserView) {
        throw new InvalidArgumentException('First argument to setUserViews must be an array of Google_Service_CloudUserAccounts_LinuxUserView');
      }
    }
    $this->userViews = $userViews;
  }
  public function getUserViews()
  {
    return $this->userViews;
  }
}
