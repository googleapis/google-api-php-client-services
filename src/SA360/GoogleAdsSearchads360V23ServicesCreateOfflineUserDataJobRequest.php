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

class GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobRequest extends \Google\Model
{
  /**
   * If true, match rate range for the offline user data job is calculated and
   * made available in the resource.
   *
   * @var bool
   */
  public $enableMatchRateRangePreview;
  protected $jobType = GoogleAdsSearchads360V23ResourcesOfflineUserDataJob::class;
  protected $jobDataType = '';
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * If true, match rate range for the offline user data job is calculated and
   * made available in the resource.
   *
   * @param bool $enableMatchRateRangePreview
   */
  public function setEnableMatchRateRangePreview($enableMatchRateRangePreview)
  {
    $this->enableMatchRateRangePreview = $enableMatchRateRangePreview;
  }
  /**
   * @return bool
   */
  public function getEnableMatchRateRangePreview()
  {
    return $this->enableMatchRateRangePreview;
  }
  /**
   * Required. The offline user data job to be created.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineUserDataJob $job
   */
  public function setJob(GoogleAdsSearchads360V23ResourcesOfflineUserDataJob $job)
  {
    $this->job = $job;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineUserDataJob
   */
  public function getJob()
  {
    return $this->job;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobRequest');
