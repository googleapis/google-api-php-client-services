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

namespace Google\Service\AlertCenter;

class KeyServiceError extends \Google\Model
{
  /**
   * Error info not specified.
   */
  public const ERROR_INFO_KEY_SERVICE_ERROR_INFO_UNSPECIFIED = 'KEY_SERVICE_ERROR_INFO_UNSPECIFIED';
  /**
   * The response has malformed JSON.
   */
  public const ERROR_INFO_MALFORMED_JSON = 'MALFORMED_JSON';
  /**
   * The response did not contain the wrapped/unwrapped key.
   */
  public const ERROR_INFO_MISSING_KEY = 'MISSING_KEY';
  /**
   * SMIME sign only: The sign response did not contain the signature.
   */
  public const ERROR_INFO_MISSING_SIGNATURE = 'MISSING_SIGNATURE';
  /**
   * SMIME only: The sign response does not include the algorithm name.
   */
  public const ERROR_INFO_MISSING_ALGORITHM_NAME = 'MISSING_ALGORITHM_NAME';
  /**
   * SMIME only: the algorithm name in the response is not supported by the
   * client.
   */
  public const ERROR_INFO_UNSUPPORTED_ALGORITHM = 'UNSUPPORTED_ALGORITHM';
  /**
   * Fetch request on the client has failed.
   */
  public const ERROR_INFO_FETCH_REQUEST_ERROR = 'FETCH_REQUEST_ERROR';
  /**
   * Number of similar errors encountered.
   *
   * @var string
   */
  public $errorCount;
  /**
   * Info on the key service error.
   *
   * @var string
   */
  public $errorInfo;
  /**
   * HTTP response status code from the key service.
   *
   * @var string
   */
  public $httpResponseCode;
  /**
   * Url of the external key service.
   *
   * @var string
   */
  public $keyServiceUrl;

  /**
   * Number of similar errors encountered.
   *
   * @param string $errorCount
   */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /**
   * @return string
   */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  /**
   * Info on the key service error.
   *
   * Accepted values: KEY_SERVICE_ERROR_INFO_UNSPECIFIED, MALFORMED_JSON,
   * MISSING_KEY, MISSING_SIGNATURE, MISSING_ALGORITHM_NAME,
   * UNSUPPORTED_ALGORITHM, FETCH_REQUEST_ERROR
   *
   * @param self::ERROR_INFO_* $errorInfo
   */
  public function setErrorInfo($errorInfo)
  {
    $this->errorInfo = $errorInfo;
  }
  /**
   * @return self::ERROR_INFO_*
   */
  public function getErrorInfo()
  {
    return $this->errorInfo;
  }
  /**
   * HTTP response status code from the key service.
   *
   * @param string $httpResponseCode
   */
  public function setHttpResponseCode($httpResponseCode)
  {
    $this->httpResponseCode = $httpResponseCode;
  }
  /**
   * @return string
   */
  public function getHttpResponseCode()
  {
    return $this->httpResponseCode;
  }
  /**
   * Url of the external key service.
   *
   * @param string $keyServiceUrl
   */
  public function setKeyServiceUrl($keyServiceUrl)
  {
    $this->keyServiceUrl = $keyServiceUrl;
  }
  /**
   * @return string
   */
  public function getKeyServiceUrl()
  {
    return $this->keyServiceUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyServiceError::class, 'Google_Service_AlertCenter_KeyServiceError');
