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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesMutateAudienceResult extends \Google\Model
{
  protected $audienceType = GoogleAdsSearchads360V23ResourcesAudience::class;
  protected $audienceDataType = '';
  /**
   * Returned for successful operations.
   *
   * @var string
   */
  public $resourceName;

  /**
   * The mutated Audience with only mutable fields after mutate. The field will
   * only be returned when response_content_type is set to "MUTABLE_RESOURCE".
   *
   * @param GoogleAdsSearchads360V23ResourcesAudience $audience
   */
  public function setAudience(GoogleAdsSearchads360V23ResourcesAudience $audience)
  {
    $this->audience = $audience;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAudience
   */
  public function getAudience()
  {
    return $this->audience;
  }
  /**
   * Returned for successful operations.
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateAudienceResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateAudienceResult');
