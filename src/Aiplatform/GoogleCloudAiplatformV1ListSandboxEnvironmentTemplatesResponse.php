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

class GoogleCloudAiplatformV1ListSandboxEnvironmentTemplatesResponse extends \Google\Collection
{
  protected $collection_key = 'sandboxEnvironmentTemplates';
  /**
   * A token, which can be sent as
   * ListSandboxEnvironmentTemplatesRequest.page_token to retrieve the next
   * page. Absence of this field indicates there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  protected $sandboxEnvironmentTemplatesType = GoogleCloudAiplatformV1SandboxEnvironmentTemplate::class;
  protected $sandboxEnvironmentTemplatesDataType = 'array';

  /**
   * A token, which can be sent as
   * ListSandboxEnvironmentTemplatesRequest.page_token to retrieve the next
   * page. Absence of this field indicates there are no subsequent pages.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The SandboxEnvironmentTemplates matching the request.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplate[] $sandboxEnvironmentTemplates
   */
  public function setSandboxEnvironmentTemplates($sandboxEnvironmentTemplates)
  {
    $this->sandboxEnvironmentTemplates = $sandboxEnvironmentTemplates;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplate[]
   */
  public function getSandboxEnvironmentTemplates()
  {
    return $this->sandboxEnvironmentTemplates;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ListSandboxEnvironmentTemplatesResponse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ListSandboxEnvironmentTemplatesResponse');
