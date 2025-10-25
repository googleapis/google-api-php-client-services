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

namespace Google\Service\DisplayVideo;

class AdPolicy extends \Google\Collection
{
  protected $collection_key = 'adPolicyTopicEntry';
  /**
   * @var string
   */
  public $adPolicyApprovalStatus;
  /**
   * @var string
   */
  public $adPolicyReviewStatus;
  protected $adPolicyTopicEntryType = AdPolicyTopicEntry::class;
  protected $adPolicyTopicEntryDataType = 'array';

  /**
   * @param string
   */
  public function setAdPolicyApprovalStatus($adPolicyApprovalStatus)
  {
    $this->adPolicyApprovalStatus = $adPolicyApprovalStatus;
  }
  /**
   * @return string
   */
  public function getAdPolicyApprovalStatus()
  {
    return $this->adPolicyApprovalStatus;
  }
  /**
   * @param string
   */
  public function setAdPolicyReviewStatus($adPolicyReviewStatus)
  {
    $this->adPolicyReviewStatus = $adPolicyReviewStatus;
  }
  /**
   * @return string
   */
  public function getAdPolicyReviewStatus()
  {
    return $this->adPolicyReviewStatus;
  }
  /**
   * @param AdPolicyTopicEntry[]
   */
  public function setAdPolicyTopicEntry($adPolicyTopicEntry)
  {
    $this->adPolicyTopicEntry = $adPolicyTopicEntry;
  }
  /**
   * @return AdPolicyTopicEntry[]
   */
  public function getAdPolicyTopicEntry()
  {
    return $this->adPolicyTopicEntry;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdPolicy::class, 'Google_Service_DisplayVideo_AdPolicy');
