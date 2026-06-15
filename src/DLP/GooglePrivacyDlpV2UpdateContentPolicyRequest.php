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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2UpdateContentPolicyRequest extends \Google\Model
{
  protected $contentPolicyType = GooglePrivacyDlpV2ContentPolicy::class;
  protected $contentPolicyDataType = '';
  /**
   * Optional. Mask to control which fields get updated.
   *
   * @var string
   */
  public $updateMask;

  /**
   * Required. The content_policy with new values for the relevant fields.
   *
   * @param GooglePrivacyDlpV2ContentPolicy $contentPolicy
   */
  public function setContentPolicy(GooglePrivacyDlpV2ContentPolicy $contentPolicy)
  {
    $this->contentPolicy = $contentPolicy;
  }
  /**
   * @return GooglePrivacyDlpV2ContentPolicy
   */
  public function getContentPolicy()
  {
    return $this->contentPolicy;
  }
  /**
   * Optional. Mask to control which fields get updated.
   *
   * @param string $updateMask
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2UpdateContentPolicyRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2UpdateContentPolicyRequest');
