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

class GooglePrivacyDlpV2PolicyAction extends \Google\Model
{
  /**
   * Not used.
   */
  public const RETURN_VERDICT_CONTENT_POLICY_VERDICT_UNSPECIFIED = 'CONTENT_POLICY_VERDICT_UNSPECIFIED';
  /**
   * The policy allows the provided content to be used.
   */
  public const RETURN_VERDICT_ALLOW = 'ALLOW';
  /**
   * The policy prevents the provided content from being used. This should
   * result in a blocked file upload, exclusion from training dataset, or other
   * similar block action. (specific action will depend on the caller).
   */
  public const RETURN_VERDICT_BLOCK = 'BLOCK';
  /**
   * Optional. If set, the verdict will be returned to the user.
   *
   * @var string
   */
  public $returnVerdict;

  /**
   * Optional. If set, the verdict will be returned to the user.
   *
   * Accepted values: CONTENT_POLICY_VERDICT_UNSPECIFIED, ALLOW, BLOCK
   *
   * @param self::RETURN_VERDICT_* $returnVerdict
   */
  public function setReturnVerdict($returnVerdict)
  {
    $this->returnVerdict = $returnVerdict;
  }
  /**
   * @return self::RETURN_VERDICT_*
   */
  public function getReturnVerdict()
  {
    return $this->returnVerdict;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2PolicyAction::class, 'Google_Service_DLP_GooglePrivacyDlpV2PolicyAction');
