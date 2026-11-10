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

class GoogleCloudApihubV1GenerateSpecResponse extends \Google\Model
{
  protected $generatedSpecType = GoogleCloudApihubV1SpecContents::class;
  protected $generatedSpecDataType = '';

  /**
   * The merged OpenAPI document for the requested window.
   *
   * @param GoogleCloudApihubV1SpecContents $generatedSpec
   */
  public function setGeneratedSpec(GoogleCloudApihubV1SpecContents $generatedSpec)
  {
    $this->generatedSpec = $generatedSpec;
  }
  /**
   * @return GoogleCloudApihubV1SpecContents
   */
  public function getGeneratedSpec()
  {
    return $this->generatedSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1GenerateSpecResponse::class, 'Google_Service_APIhub_GoogleCloudApihubV1GenerateSpecResponse');
