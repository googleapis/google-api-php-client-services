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

namespace Google\Service\NetworkServices;

class ProducerExtensionExtensionBehavior extends \Google\Model
{
  /**
   * Default value. When set, the strictest action (`BODY_ACTION_MUTATOR`) is
   * assumed. Extensions that modify the body execute in sequence.
   */
  public const REQUEST_BODY_ACTION_ACTION_UNSPECIFIED = 'ACTION_UNSPECIFIED';
  /**
   * The extension observes the body without modifying it and does not respond
   * with an allow or deny verdict via `immediate_response`. These extensions
   * can run in parallel with other extensions where appropriate.
   */
  public const REQUEST_BODY_ACTION_OBSERVER = 'OBSERVER';
  /**
   * The extension reads the body without modifying it, and can respond with an
   * allow or deny verdict via `immediate_response`. These extensions can run in
   * parallel with other extensions where appropriate.
   */
  public const REQUEST_BODY_ACTION_READONLY = 'READONLY';
  /**
   * The extension can modify the body (for example, for PII redaction or prompt
   * sanitization). These extensions execute in sequence.
   */
  public const REQUEST_BODY_ACTION_MUTATOR = 'MUTATOR';
  /**
   * Default value. When set, the strictest action (`BODY_ACTION_MUTATOR`) is
   * assumed. Extensions that modify the body execute in sequence.
   */
  public const RESPONSE_BODY_ACTION_ACTION_UNSPECIFIED = 'ACTION_UNSPECIFIED';
  /**
   * The extension observes the body without modifying it and does not respond
   * with an allow or deny verdict via `immediate_response`. These extensions
   * can run in parallel with other extensions where appropriate.
   */
  public const RESPONSE_BODY_ACTION_OBSERVER = 'OBSERVER';
  /**
   * The extension reads the body without modifying it, and can respond with an
   * allow or deny verdict via `immediate_response`. These extensions can run in
   * parallel with other extensions where appropriate.
   */
  public const RESPONSE_BODY_ACTION_READONLY = 'READONLY';
  /**
   * The extension can modify the body (for example, for PII redaction or prompt
   * sanitization). These extensions execute in sequence.
   */
  public const RESPONSE_BODY_ACTION_MUTATOR = 'MUTATOR';
  /**
   * Optional. Specifies how the `ProducerExtension` acts on the request body
   * event. This can be used to determine whether the `ProducerExtension` can
   * run in parallel with other extensions in the request direction.
   *
   * @var string
   */
  public $requestBodyAction;
  /**
   * Optional. Specifies how the `ProducerExtension` acts on the response body
   * event. This can be used to determine whether the `ProducerExtension` can
   * run in parallel with other extensions in the response direction.
   *
   * @var string
   */
  public $responseBodyAction;

  /**
   * Optional. Specifies how the `ProducerExtension` acts on the request body
   * event. This can be used to determine whether the `ProducerExtension` can
   * run in parallel with other extensions in the request direction.
   *
   * Accepted values: ACTION_UNSPECIFIED, OBSERVER, READONLY, MUTATOR
   *
   * @param self::REQUEST_BODY_ACTION_* $requestBodyAction
   */
  public function setRequestBodyAction($requestBodyAction)
  {
    $this->requestBodyAction = $requestBodyAction;
  }
  /**
   * @return self::REQUEST_BODY_ACTION_*
   */
  public function getRequestBodyAction()
  {
    return $this->requestBodyAction;
  }
  /**
   * Optional. Specifies how the `ProducerExtension` acts on the response body
   * event. This can be used to determine whether the `ProducerExtension` can
   * run in parallel with other extensions in the response direction.
   *
   * Accepted values: ACTION_UNSPECIFIED, OBSERVER, READONLY, MUTATOR
   *
   * @param self::RESPONSE_BODY_ACTION_* $responseBodyAction
   */
  public function setResponseBodyAction($responseBodyAction)
  {
    $this->responseBodyAction = $responseBodyAction;
  }
  /**
   * @return self::RESPONSE_BODY_ACTION_*
   */
  public function getResponseBodyAction()
  {
    return $this->responseBodyAction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProducerExtensionExtensionBehavior::class, 'Google_Service_NetworkServices_ProducerExtensionExtensionBehavior');
