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

class AssistantLogsQueryAnnotationLog extends \Google\Collection
{
  protected $collection_key = 'structureAnnotations';
  /**
   * @var AssistantLogsDeviceAnnotationLog
   */
  public $deviceAnnotation;
  protected $deviceAnnotationType = AssistantLogsDeviceAnnotationLog::class;
  protected $deviceAnnotationDataType = '';
  /**
   * @var AssistantLogsDeviceAnnotationLog[]
   */
  public $deviceAnnotations;
  protected $deviceAnnotationsType = AssistantLogsDeviceAnnotationLog::class;
  protected $deviceAnnotationsDataType = 'array';
  /**
   * @var AssistantLogsProviderAnnotationLog
   */
  public $providerAnnotation;
  protected $providerAnnotationType = AssistantLogsProviderAnnotationLog::class;
  protected $providerAnnotationDataType = '';
  /**
   * @var AssistantLogsRoomAnnotationLog
   */
  public $roomAnnotation;
  protected $roomAnnotationType = AssistantLogsRoomAnnotationLog::class;
  protected $roomAnnotationDataType = '';
  /**
   * @var AssistantLogsRoomAnnotationLog[]
   */
  public $roomAnnotations;
  protected $roomAnnotationsType = AssistantLogsRoomAnnotationLog::class;
  protected $roomAnnotationsDataType = 'array';
  /**
   * @var AssistantLogsStructureAnnotationLog[]
   */
  public $structureAnnotations;
  protected $structureAnnotationsType = AssistantLogsStructureAnnotationLog::class;
  protected $structureAnnotationsDataType = 'array';

  /**
   * @param AssistantLogsDeviceAnnotationLog
   */
  public function setDeviceAnnotation(AssistantLogsDeviceAnnotationLog $deviceAnnotation)
  {
    $this->deviceAnnotation = $deviceAnnotation;
  }
  /**
   * @return AssistantLogsDeviceAnnotationLog
   */
  public function getDeviceAnnotation()
  {
    return $this->deviceAnnotation;
  }
  /**
   * @param AssistantLogsDeviceAnnotationLog[]
   */
  public function setDeviceAnnotations($deviceAnnotations)
  {
    $this->deviceAnnotations = $deviceAnnotations;
  }
  /**
   * @return AssistantLogsDeviceAnnotationLog[]
   */
  public function getDeviceAnnotations()
  {
    return $this->deviceAnnotations;
  }
  /**
   * @param AssistantLogsProviderAnnotationLog
   */
  public function setProviderAnnotation(AssistantLogsProviderAnnotationLog $providerAnnotation)
  {
    $this->providerAnnotation = $providerAnnotation;
  }
  /**
   * @return AssistantLogsProviderAnnotationLog
   */
  public function getProviderAnnotation()
  {
    return $this->providerAnnotation;
  }
  /**
   * @param AssistantLogsRoomAnnotationLog
   */
  public function setRoomAnnotation(AssistantLogsRoomAnnotationLog $roomAnnotation)
  {
    $this->roomAnnotation = $roomAnnotation;
  }
  /**
   * @return AssistantLogsRoomAnnotationLog
   */
  public function getRoomAnnotation()
  {
    return $this->roomAnnotation;
  }
  /**
   * @param AssistantLogsRoomAnnotationLog[]
   */
  public function setRoomAnnotations($roomAnnotations)
  {
    $this->roomAnnotations = $roomAnnotations;
  }
  /**
   * @return AssistantLogsRoomAnnotationLog[]
   */
  public function getRoomAnnotations()
  {
    return $this->roomAnnotations;
  }
  /**
   * @param AssistantLogsStructureAnnotationLog[]
   */
  public function setStructureAnnotations($structureAnnotations)
  {
    $this->structureAnnotations = $structureAnnotations;
  }
  /**
   * @return AssistantLogsStructureAnnotationLog[]
   */
  public function getStructureAnnotations()
  {
    return $this->structureAnnotations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantLogsQueryAnnotationLog::class, 'Google_Service_Contentwarehouse_AssistantLogsQueryAnnotationLog');
