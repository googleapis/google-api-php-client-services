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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1GenerateSpecRequest extends \Google\Model
{
  protected $observationWindowType = GoogleTypeInterval::class;
  protected $observationWindowDataType = '';

  /**
   * Required. The observation window. The server quantizes to day boundaries
   * and caps the span at 90 days.
   *
   * @param GoogleTypeInterval $observationWindow
   */
  public function setObservationWindow(GoogleTypeInterval $observationWindow)
  {
    $this->observationWindow = $observationWindow;
  }
  /**
   * @return GoogleTypeInterval
   */
  public function getObservationWindow()
  {
    return $this->observationWindow;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1GenerateSpecRequest::class, 'Google_Service_APIhub_GoogleCloudApihubV1GenerateSpecRequest');
