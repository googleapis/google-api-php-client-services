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

namespace Google\Service\Contentwarehouse;

class AssistantApiCoreTypesRingtoneTaskMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $category;
  protected $characterAlarmMetadataType = AssistantApiCoreTypesRingtoneTaskMetadataCharacterAlarmMetadata::class;
  protected $characterAlarmMetadataDataType = '';
  /**
   * @var string
   */
  public $characterTag;
  /**
   * @var string
   */
  public $entityMid;
  protected $funtimeMetadataType = AssistantApiCoreTypesRingtoneTaskMetadataFuntimeMetadata::class;
  protected $funtimeMetadataDataType = '';
  protected $genMlAlarmMetadataType = AssistantApiCoreTypesRingtoneTaskMetadataGenMlAlarmMetadata::class;
  protected $genMlAlarmMetadataDataType = '';
  protected $gentleWakeInfoType = AssistantApiCoreTypesRingtoneTaskMetadataGentleWakeInfo::class;
  protected $gentleWakeInfoDataType = '';
  protected $onDeviceAlarmMetadataType = AssistantApiCoreTypesRingtoneTaskMetadataOnDeviceAlarmMetadata::class;
  protected $onDeviceAlarmMetadataDataType = '';
  /**
   * @var string
   */
  public $onDeviceAlarmSound;
  protected $routineAlarmMetadataType = AssistantApiCoreTypesRingtoneTaskMetadataRoutineAlarmMetadata::class;
  protected $routineAlarmMetadataDataType = '';

  /**
   * @param string
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * @param AssistantApiCoreTypesRingtoneTaskMetadataCharacterAlarmMetadata
   */
  public function setCharacterAlarmMetadata(AssistantApiCoreTypesRingtoneTaskMetadataCharacterAlarmMetadata $characterAlarmMetadata)
  {
    $this->characterAlarmMetadata = $characterAlarmMetadata;
  }
  /**
   * @return AssistantApiCoreTypesRingtoneTaskMetadataCharacterAlarmMetadata
   */
  public function getCharacterAlarmMetadata()
  {
    return $this->characterAlarmMetadata;
  }
  /**
   * @param string
   */
  public function setCharacterTag($characterTag)
  {
    $this->characterTag = $characterTag;
  }
  /**
   * @return string
   */
  public function getCharacterTag()
  {
    return $this->characterTag;
  }
  /**
   * @param string
   */
  public function setEntityMid($entityMid)
  {
    $this->entityMid = $entityMid;
  }
  /**
   * @return string
   */
  public function getEntityMid()
  {
    return $this->entityMid;
  }
  /**
   * @param AssistantApiCoreTypesRingtoneTaskMetadataFuntimeMetadata
   */
  public function setFuntimeMetadata(AssistantApiCoreTypesRingtoneTaskMetadataFuntimeMetadata $funtimeMetadata)
  {
    $this->funtimeMetadata = $funtimeMetadata;
  }
  /**
   * @return AssistantApiCoreTypesRingtoneTaskMetadataFuntimeMetadata
   */
  public function getFuntimeMetadata()
  {
    return $this->funtimeMetadata;
  }
  /**
   * @param AssistantApiCoreTypesRingtoneTaskMetadataGenMlAlarmMetadata
   */
  public function setGenMlAlarmMetadata(AssistantApiCoreTypesRingtoneTaskMetadataGenMlAlarmMetadata $genMlAlarmMetadata)
  {
    $this->genMlAlarmMetadata = $genMlAlarmMetadata;
  }
  /**
   * @return AssistantApiCoreTypesRingtoneTaskMetadataGenMlAlarmMetadata
   */
  public function getGenMlAlarmMetadata()
  {
    return $this->genMlAlarmMetadata;
  }
  /**
   * @param AssistantApiCoreTypesRingtoneTaskMetadataGentleWakeInfo
   */
  public function setGentleWakeInfo(AssistantApiCoreTypesRingtoneTaskMetadataGentleWakeInfo $gentleWakeInfo)
  {
    $this->gentleWakeInfo = $gentleWakeInfo;
  }
  /**
   * @return AssistantApiCoreTypesRingtoneTaskMetadataGentleWakeInfo
   */
  public function getGentleWakeInfo()
  {
    return $this->gentleWakeInfo;
  }
  /**
   * @param AssistantApiCoreTypesRingtoneTaskMetadataOnDeviceAlarmMetadata
   */
  public function setOnDeviceAlarmMetadata(AssistantApiCoreTypesRingtoneTaskMetadataOnDeviceAlarmMetadata $onDeviceAlarmMetadata)
  {
    $this->onDeviceAlarmMetadata = $onDeviceAlarmMetadata;
  }
  /**
   * @return AssistantApiCoreTypesRingtoneTaskMetadataOnDeviceAlarmMetadata
   */
  public function getOnDeviceAlarmMetadata()
  {
    return $this->onDeviceAlarmMetadata;
  }
  /**
   * @param string
   */
  public function setOnDeviceAlarmSound($onDeviceAlarmSound)
  {
    $this->onDeviceAlarmSound = $onDeviceAlarmSound;
  }
  /**
   * @return string
   */
  public function getOnDeviceAlarmSound()
  {
    return $this->onDeviceAlarmSound;
  }
  /**
   * @param AssistantApiCoreTypesRingtoneTaskMetadataRoutineAlarmMetadata
   */
  public function setRoutineAlarmMetadata(AssistantApiCoreTypesRingtoneTaskMetadataRoutineAlarmMetadata $routineAlarmMetadata)
  {
    $this->routineAlarmMetadata = $routineAlarmMetadata;
  }
  /**
   * @return AssistantApiCoreTypesRingtoneTaskMetadataRoutineAlarmMetadata
   */
  public function getRoutineAlarmMetadata()
  {
    return $this->routineAlarmMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantApiCoreTypesRingtoneTaskMetadata::class, 'Google_Service_Contentwarehouse_AssistantApiCoreTypesRingtoneTaskMetadata');
