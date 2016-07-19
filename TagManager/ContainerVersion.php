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

class Google_Service_TagManager_ContainerVersion extends Google_Collection
{
  protected $collection_key = 'variable';
  public $accountId;
  public $container;
  public $containerId;
  public $containerVersionId;
  public $deleted;
  public $fingerprint;
  public $folder;
  public $macro;
  public $name;
  public $notes;
  public $rule;
  public $tag;
  public $trigger;
  public $variable;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setContainer(Google_Service_TagManager_Container $container)
  {
    $this->container = $container;
  }
  public function getContainer()
  {
    return $this->container;
  }
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  public function getContainerId()
  {
    return $this->containerId;
  }
  public function setContainerVersionId($containerVersionId)
  {
    $this->containerVersionId = $containerVersionId;
  }
  public function getContainerVersionId()
  {
    return $this->containerVersionId;
  }
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
  }
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  public function setFolder(array $folder)
  {
    foreach ($folder as $f) {
      if (!$f instanceof Google_Service_TagManager_Folder) {
        throw new InvalidArgumentException('First argument to setFolder must be an array of Google_Service_TagManager_Folder');
      }
    }
    $this->folder = $folder;
  }
  public function getFolder()
  {
    return $this->folder;
  }
  public function setMacro(array $macro)
  {
    foreach ($macro as $m) {
      if (!$m instanceof Google_Service_TagManager_Macro) {
        throw new InvalidArgumentException('First argument to setMacro must be an array of Google_Service_TagManager_Macro');
      }
    }
    $this->macro = $macro;
  }
  public function getMacro()
  {
    return $this->macro;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  public function getNotes()
  {
    return $this->notes;
  }
  public function setRule(array $rule)
  {
    foreach ($rule as $r) {
      if (!$r instanceof Google_Service_TagManager_Rule) {
        throw new InvalidArgumentException('First argument to setRule must be an array of Google_Service_TagManager_Rule');
      }
    }
    $this->rule = $rule;
  }
  public function getRule()
  {
    return $this->rule;
  }
  public function setTag(array $tag)
  {
    foreach ($tag as $t) {
      if (!$t instanceof Google_Service_TagManager_Tag) {
        throw new InvalidArgumentException('First argument to setTag must be an array of Google_Service_TagManager_Tag');
      }
    }
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
  public function setTrigger(array $trigger)
  {
    foreach ($trigger as $t) {
      if (!$t instanceof Google_Service_TagManager_Trigger) {
        throw new InvalidArgumentException('First argument to setTrigger must be an array of Google_Service_TagManager_Trigger');
      }
    }
    $this->trigger = $trigger;
  }
  public function getTrigger()
  {
    return $this->trigger;
  }
  public function setVariable(array $variable)
  {
    foreach ($variable as $v) {
      if (!$v instanceof Google_Service_TagManager_Variable) {
        throw new InvalidArgumentException('First argument to setVariable must be an array of Google_Service_TagManager_Variable');
      }
    }
    $this->variable = $variable;
  }
  public function getVariable()
  {
    return $this->variable;
  }
}
