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

class GooglePrivacyDlpV2CreateContentPolicyRequest extends \Google\Model
{
  protected $contentPolicyType = GooglePrivacyDlpV2ContentPolicy::class;
  protected $contentPolicyDataType = '';
  /**
   * Optional. The content policy ID can contain uppercase and lowercase
   * letters, numbers, and hyphens; that is, it must match the regular
   * expression: `[a-zA-Z\d-_]+`. The maximum length is 100 characters. If
   * empty, the system will generate a random id.
   *
   * @var string
   */
  public $contentPolicyId;

  /**
   * Required. The content_policy resource.
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
   * Optional. The content policy ID can contain uppercase and lowercase
   * letters, numbers, and hyphens; that is, it must match the regular
   * expression: `[a-zA-Z\d-_]+`. The maximum length is 100 characters. If
   * empty, the system will generate a random id.
   *
   * @param string $contentPolicyId
   */
  public function setContentPolicyId($contentPolicyId)
  {
    $this->contentPolicyId = $contentPolicyId;
  }
  /**
   * @return string
   */
  public function getContentPolicyId()
  {
    return $this->contentPolicyId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2CreateContentPolicyRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2CreateContentPolicyRequest');
