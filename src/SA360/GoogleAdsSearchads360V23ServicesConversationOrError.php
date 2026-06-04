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

class GoogleAdsSearchads360V23ServicesConversationOrError extends \Google\Model
{
  /**
   * The resource name of the appended local services lead conversation.
   *
   * @var string
   */
  public $localServicesLeadConversation;
  protected $partialFailureErrorType = GoogleRpcStatus::class;
  protected $partialFailureErrorDataType = '';

  /**
   * The resource name of the appended local services lead conversation.
   *
   * @param string $localServicesLeadConversation
   */
  public function setLocalServicesLeadConversation($localServicesLeadConversation)
  {
    $this->localServicesLeadConversation = $localServicesLeadConversation;
  }
  /**
   * @return string
   */
  public function getLocalServicesLeadConversation()
  {
    return $this->localServicesLeadConversation;
  }
  /**
   * Failure status when the request could not be processed.
   *
   * @param GoogleRpcStatus $partialFailureError
   */
  public function setPartialFailureError(GoogleRpcStatus $partialFailureError)
  {
    $this->partialFailureError = $partialFailureError;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getPartialFailureError()
  {
    return $this->partialFailureError;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesConversationOrError::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesConversationOrError');
