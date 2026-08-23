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

class GoogleCloudAiplatformV1RayClusterAutoscalingSpec extends \Google\Model
{
  /**
   * Optional. The number of minutes that need to pass before an idle worker
   * node is removed by the autoscaler. Default is 5 mins.
   *
   * @var string
   */
  public $idleTimeoutMinutes;
  /**
   * Optional. The number of nodes allowed to be pending as a multiple of the
   * current number of nodes. [OSS Ray
   * reference](https://docs.ray.io/en/latest/cluster/vms/user-
   * guides/configuring-autoscaling.html#upscaling-and-downscaling-speed)
   *
   * @var string
   */
  public $upscalingSpeed;

  /**
   * Optional. The number of minutes that need to pass before an idle worker
   * node is removed by the autoscaler. Default is 5 mins.
   *
   * @param string $idleTimeoutMinutes
   */
  public function setIdleTimeoutMinutes($idleTimeoutMinutes)
  {
    $this->idleTimeoutMinutes = $idleTimeoutMinutes;
  }
  /**
   * @return string
   */
  public function getIdleTimeoutMinutes()
  {
    return $this->idleTimeoutMinutes;
  }
  /**
   * Optional. The number of nodes allowed to be pending as a multiple of the
   * current number of nodes. [OSS Ray
   * reference](https://docs.ray.io/en/latest/cluster/vms/user-
   * guides/configuring-autoscaling.html#upscaling-and-downscaling-speed)
   *
   * @param string $upscalingSpeed
   */
  public function setUpscalingSpeed($upscalingSpeed)
  {
    $this->upscalingSpeed = $upscalingSpeed;
  }
  /**
   * @return string
   */
  public function getUpscalingSpeed()
  {
    return $this->upscalingSpeed;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1RayClusterAutoscalingSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1RayClusterAutoscalingSpec');
