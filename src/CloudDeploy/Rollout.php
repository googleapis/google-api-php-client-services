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

namespace Google\Service\CloudDeploy;

class Rollout extends \Google\Model
{
  public $annotations;
  public $approvalState;
  public $approveTime;
  public $createTime;
  public $deployEndTime;
  public $deployStartTime;
  public $deployingBuild;
  public $description;
  public $enqueueTime;
  public $etag;
  public $failureReason;
  public $labels;
  public $name;
  public $state;
  public $targetId;
  public $uid;

  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  public function getAnnotations()
  {
    return $this->annotations;
  }
  public function setApprovalState($approvalState)
  {
    $this->approvalState = $approvalState;
  }
  public function getApprovalState()
  {
    return $this->approvalState;
  }
  public function setApproveTime($approveTime)
  {
    $this->approveTime = $approveTime;
  }
  public function getApproveTime()
  {
    return $this->approveTime;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDeployEndTime($deployEndTime)
  {
    $this->deployEndTime = $deployEndTime;
  }
  public function getDeployEndTime()
  {
    return $this->deployEndTime;
  }
  public function setDeployStartTime($deployStartTime)
  {
    $this->deployStartTime = $deployStartTime;
  }
  public function getDeployStartTime()
  {
    return $this->deployStartTime;
  }
  public function setDeployingBuild($deployingBuild)
  {
    $this->deployingBuild = $deployingBuild;
  }
  public function getDeployingBuild()
  {
    return $this->deployingBuild;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEnqueueTime($enqueueTime)
  {
    $this->enqueueTime = $enqueueTime;
  }
  public function getEnqueueTime()
  {
    return $this->enqueueTime;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }
  public function getTargetId()
  {
    return $this->targetId;
  }
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  public function getUid()
  {
    return $this->uid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Rollout::class, 'Google_Service_CloudDeploy_Rollout');
