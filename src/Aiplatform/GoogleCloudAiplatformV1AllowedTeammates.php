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

class GoogleCloudAiplatformV1AllowedTeammates extends \Google\Collection
{
  protected $collection_key = 'teammates';
  protected $teammatesType = GoogleCloudAiplatformV1Teammate::class;
  protected $teammatesDataType = 'array';

  /**
   * Optional. The teammates the agent is permitted to contact. At most 500.
   * OUTPUT: always returned. An empty list means the agent has no teammates,
   * not that the field went unread. INPUT: the complete desired set, not a
   * delta -- teammates absent from it are removed. The backing roster is
   * updated asynchronously and best-effort after the write returns, so it may
   * briefly lag what `GetAgent` reports. What the agent is actually able to
   * reach follows the roster, not this field, until the two converge.
   *
   * @param GoogleCloudAiplatformV1Teammate[] $teammates
   */
  public function setTeammates($teammates)
  {
    $this->teammates = $teammates;
  }
  /**
   * @return GoogleCloudAiplatformV1Teammate[]
   */
  public function getTeammates()
  {
    return $this->teammates;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AllowedTeammates::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AllowedTeammates');
