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

class CloudAiLargeModelsVisionHumanPose extends \Google\Model
{
  /**
   * GCS URI of the human pose video to condition video generation.
   *
   * @var string
   */
  public $bodyLandmarksGcsUri;
  /**
   * GCS URI of the face landmarks video to condition video generation.
   *
   * @var string
   */
  public $faceLandmarksGcsUri;

  /**
   * GCS URI of the human pose video to condition video generation.
   *
   * @param string $bodyLandmarksGcsUri
   */
  public function setBodyLandmarksGcsUri($bodyLandmarksGcsUri)
  {
    $this->bodyLandmarksGcsUri = $bodyLandmarksGcsUri;
  }
  /**
   * @return string
   */
  public function getBodyLandmarksGcsUri()
  {
    return $this->bodyLandmarksGcsUri;
  }
  /**
   * GCS URI of the face landmarks video to condition video generation.
   *
   * @param string $faceLandmarksGcsUri
   */
  public function setFaceLandmarksGcsUri($faceLandmarksGcsUri)
  {
    $this->faceLandmarksGcsUri = $faceLandmarksGcsUri;
  }
  /**
   * @return string
   */
  public function getFaceLandmarksGcsUri()
  {
    return $this->faceLandmarksGcsUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionHumanPose::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionHumanPose');
