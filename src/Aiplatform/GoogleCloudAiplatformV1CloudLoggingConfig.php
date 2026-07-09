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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1CloudLoggingConfig extends \Google\Model
{
  /**
   * Optional. Google Cloud project to write logs to. Defaults to the request
   * project.
   *
   * @var string
   */
  public $project;
  /**
   * Optional. MonitoredResource labels to associate the log with. The backend
   * will automatically inject project and location.
   *
   * @var string[]
   */
  public $resourceLabels;
  /**
   * Optional. MonitoredResource type. Defaults to "global" if unspecified.
   *
   * @var string
   */
  public $resourceType;
  protected $tracingContextType = GoogleCloudAiplatformV1CloudLoggingConfigTracingContext::class;
  protected $tracingContextDataType = '';

  /**
   * Optional. Google Cloud project to write logs to. Defaults to the request
   * project.
   *
   * @param string $project
   */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /**
   * @return string
   */
  public function getProject()
  {
    return $this->project;
  }
  /**
   * Optional. MonitoredResource labels to associate the log with. The backend
   * will automatically inject project and location.
   *
   * @param string[] $resourceLabels
   */
  public function setResourceLabels($resourceLabels)
  {
    $this->resourceLabels = $resourceLabels;
  }
  /**
   * @return string[]
   */
  public function getResourceLabels()
  {
    return $this->resourceLabels;
  }
  /**
   * Optional. MonitoredResource type. Defaults to "global" if unspecified.
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Optional. Tracing context for the evaluation run.
   *
   * @param GoogleCloudAiplatformV1CloudLoggingConfigTracingContext $tracingContext
   */
  public function setTracingContext(GoogleCloudAiplatformV1CloudLoggingConfigTracingContext $tracingContext)
  {
    $this->tracingContext = $tracingContext;
  }
  /**
   * @return GoogleCloudAiplatformV1CloudLoggingConfigTracingContext
   */
  public function getTracingContext()
  {
    return $this->tracingContext;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1CloudLoggingConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1CloudLoggingConfig');
