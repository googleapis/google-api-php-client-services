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

class DeliveryPipeline extends \Google\Model
{
  public $annotations;
  protected $conditionType = PipelineCondition::class;
  protected $conditionDataType = '';
  public $createTime;
  public $description;
  public $etag;
  public $labels;
  public $name;
  protected $serialPipelineType = SerialPipeline::class;
  protected $serialPipelineDataType = '';
  public $uid;
  public $updateTime;

  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * @param PipelineCondition
   */
  public function setCondition(PipelineCondition $condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return PipelineCondition
   */
  public function getCondition()
  {
    return $this->condition;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
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
  /**
   * @param SerialPipeline
   */
  public function setSerialPipeline(SerialPipeline $serialPipeline)
  {
    $this->serialPipeline = $serialPipeline;
  }
  /**
   * @return SerialPipeline
   */
  public function getSerialPipeline()
  {
    return $this->serialPipeline;
  }
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  public function getUid()
  {
    return $this->uid;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeliveryPipeline::class, 'Google_Service_CloudDeploy_DeliveryPipeline');
