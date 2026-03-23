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

class GoogleCloudAiplatformV1ReasoningEngineSpecContainerSpec extends \Google\Model
{
  /**
   * Required. The Artifact Registry Docker image URI (e.g., us-
   * central1-docker.pkg.dev/my-project/my-repo/my-image:tag) of the container
   * image that is to be run on each worker replica.
   *
   * @var string
   */
  public $imageUri;

  /**
   * Required. The Artifact Registry Docker image URI (e.g., us-
   * central1-docker.pkg.dev/my-project/my-repo/my-image:tag) of the container
   * image that is to be run on each worker replica.
   *
   * @param string $imageUri
   */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /**
   * @return string
   */
  public function getImageUri()
  {
    return $this->imageUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecContainerSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecContainerSpec');
