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

class Google_Service_CloudDebugger_Debuggee extends Google_Collection
{
  protected $collection_key = 'sourceContexts';
  public $agentVersion;
  public $description;
  public $extSourceContexts;
  public $id;
  public $isDisabled;
  public $isInactive;
  public $labels;
  public $project;
  public $sourceContexts;
  public $status;
  public $uniquifier;

  public function setAgentVersion($agentVersion)
  {
    $this->agentVersion = $agentVersion;
  }
  public function getAgentVersion()
  {
    return $this->agentVersion;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setExtSourceContexts(array $extSourceContexts)
  {
    foreach ($extSourceContexts as $e) {
      if (!$e instanceof Google_Service_CloudDebugger_ExtendedSourceContext) {
        throw new InvalidArgumentException('First argument to setExtSourceContexts must be an array of Google_Service_CloudDebugger_ExtendedSourceContext');
      }
    }
    $this->extSourceContexts = $extSourceContexts;
  }
  public function getExtSourceContexts()
  {
    return $this->extSourceContexts;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIsDisabled($isDisabled)
  {
    $this->isDisabled = $isDisabled;
  }
  public function getIsDisabled()
  {
    return $this->isDisabled;
  }
  public function setIsInactive($isInactive)
  {
    $this->isInactive = $isInactive;
  }
  public function getIsInactive()
  {
    return $this->isInactive;
  }
  public function setLabels(array $labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setProject($project)
  {
    $this->project = $project;
  }
  public function getProject()
  {
    return $this->project;
  }
  public function setSourceContexts(array $sourceContexts)
  {
    foreach ($sourceContexts as $s) {
      if (!$s instanceof Google_Service_CloudDebugger_SourceContext) {
        throw new InvalidArgumentException('First argument to setSourceContexts must be an array of Google_Service_CloudDebugger_SourceContext');
      }
    }
    $this->sourceContexts = $sourceContexts;
  }
  public function getSourceContexts()
  {
    return $this->sourceContexts;
  }
  public function setStatus(Google_Service_CloudDebugger_StatusMessage $status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setUniquifier($uniquifier)
  {
    $this->uniquifier = $uniquifier;
  }
  public function getUniquifier()
  {
    return $this->uniquifier;
  }
}
