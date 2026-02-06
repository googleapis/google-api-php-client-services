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

namespace Google\Service\CustomerEngagementSuite;

class ApiKeyConfig extends \Google\Model
{
  /**
   * Unspecified. This value should not be unused.
   */
  public const REQUEST_LOCATION_REQUEST_LOCATION_UNSPECIFIED = 'REQUEST_LOCATION_UNSPECIFIED';
  /**
   * Represents the key in http header.
   */
  public const REQUEST_LOCATION_HEADER = 'HEADER';
  /**
   * Represents the key in query string.
   */
  public const REQUEST_LOCATION_QUERY_STRING = 'QUERY_STRING';
  /**
   * Required. The name of the SecretManager secret version resource storing the
   * API key. Format: `projects/{project}/secrets/{secret}/versions/{version}`
   * Note: You should grant `roles/secretmanager.secretAccessor` role to the CES
   * service agent `service-@gcp-sa-ces.iam.gserviceaccount.com`.
   *
   * @var string
   */
  public $apiKeySecretVersion;
  /**
   * Required. The parameter name or the header name of the API key. E.g., If
   * the API request is "https://example.com/act?X-Api-Key=", "X-Api-Key" would
   * be the parameter name.
   *
   * @var string
   */
  public $keyName;
  /**
   * Required. Key location in the request.
   *
   * @var string
   */
  public $requestLocation;

  /**
   * Required. The name of the SecretManager secret version resource storing the
   * API key. Format: `projects/{project}/secrets/{secret}/versions/{version}`
   * Note: You should grant `roles/secretmanager.secretAccessor` role to the CES
   * service agent `service-@gcp-sa-ces.iam.gserviceaccount.com`.
   *
   * @param string $apiKeySecretVersion
   */
  public function setApiKeySecretVersion($apiKeySecretVersion)
  {
    $this->apiKeySecretVersion = $apiKeySecretVersion;
  }
  /**
   * @return string
   */
  public function getApiKeySecretVersion()
  {
    return $this->apiKeySecretVersion;
  }
  /**
   * Required. The parameter name or the header name of the API key. E.g., If
   * the API request is "https://example.com/act?X-Api-Key=", "X-Api-Key" would
   * be the parameter name.
   *
   * @param string $keyName
   */
  public function setKeyName($keyName)
  {
    $this->keyName = $keyName;
  }
  /**
   * @return string
   */
  public function getKeyName()
  {
    return $this->keyName;
  }
  /**
   * Required. Key location in the request.
   *
   * Accepted values: REQUEST_LOCATION_UNSPECIFIED, HEADER, QUERY_STRING
   *
   * @param self::REQUEST_LOCATION_* $requestLocation
   */
  public function setRequestLocation($requestLocation)
  {
    $this->requestLocation = $requestLocation;
  }
  /**
   * @return self::REQUEST_LOCATION_*
   */
  public function getRequestLocation()
  {
    return $this->requestLocation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiKeyConfig::class, 'Google_Service_CustomerEngagementSuite_ApiKeyConfig');
