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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1DeviceTrustConfig extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const SCOPE_BROWSER_ENFORCEMENT_SCOPE_UNSPECIFIED = 'BROWSER_ENFORCEMENT_SCOPE_UNSPECIFIED';
  /**
   * Only browsers are enforced.
   */
  public const SCOPE_BROWSERS_ONLY = 'BROWSERS_ONLY';
  /**
   * Only profiles are enforced.
   */
  public const SCOPE_PROFILES_ONLY = 'PROFILES_ONLY';
  /**
   * Both browsers and profiles are enforced.
   */
  public const SCOPE_BROWSERS_AND_PROFILES = 'BROWSERS_AND_PROFILES';
  /**
   * Default value.
   */
  public const SERVICE_PROVIDER_SERVICE_PROVIDER_UNSPECIFIED = 'SERVICE_PROVIDER_UNSPECIFIED';
  /**
   * Universal device trust connector.
   */
  public const SERVICE_PROVIDER_UNIVERSAL_DEVICE_TRUST = 'UNIVERSAL_DEVICE_TRUST';
  /**
   * Okta service provider.
   */
  public const SERVICE_PROVIDER_OKTA = 'OKTA';
  /**
   * Ping Identity service provider.
   */
  public const SERVICE_PROVIDER_PING_IDENTITY = 'PING_IDENTITY';
  /**
   * OneLogin service provider.
   */
  public const SERVICE_PROVIDER_ONELOGIN = 'ONELOGIN';
  /**
   * Duo service provider.
   */
  public const SERVICE_PROVIDER_DUO = 'DUO';
  /**
   * Zscaler service provider.
   */
  public const SERVICE_PROVIDER_ZSCALER = 'ZSCALER';
  /**
   * Omnissa service provider.
   */
  public const SERVICE_PROVIDER_OMNISSA = 'OMNISSA';
  /**
   * JumpCloud service provider.
   */
  public const SERVICE_PROVIDER_JUMPCLOUD = 'JUMPCLOUD';
  protected $collection_key = 'urlMatchers';
  /**
   * Required. The scope at which this configuration will be applied. Note that
   * this only applies to Chrome browser, as in ChromeOS it's always applied.
   *
   * @var string
   */
  public $scope;
  /**
   * Required. A list of email addresses of the service accounts which are
   * allowed to call the Verified Access API with full access.
   *
   * @var string[]
   */
  public $serviceAccounts;
  /**
   * Optional. The service provider for the device trust connector.
   *
   * @var string
   */
  public $serviceProvider;
  /**
   * Required. List of URLs allowed to be part of the attestation flow to get
   * the set of signals from the machine. URLs must have HTTPS scheme, e.g.
   * "https://example.com". Wildcards, *, are allowed. For detailed information
   * on valid URL patterns, please see https://cloud.google.com/docs/chrome-
   * enterprise/policies/url-patterns.
   *
   * @var string[]
   */
  public $urlMatchers;

  /**
   * Required. The scope at which this configuration will be applied. Note that
   * this only applies to Chrome browser, as in ChromeOS it's always applied.
   *
   * Accepted values: BROWSER_ENFORCEMENT_SCOPE_UNSPECIFIED, BROWSERS_ONLY,
   * PROFILES_ONLY, BROWSERS_AND_PROFILES
   *
   * @param self::SCOPE_* $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return self::SCOPE_*
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Required. A list of email addresses of the service accounts which are
   * allowed to call the Verified Access API with full access.
   *
   * @param string[] $serviceAccounts
   */
  public function setServiceAccounts($serviceAccounts)
  {
    $this->serviceAccounts = $serviceAccounts;
  }
  /**
   * @return string[]
   */
  public function getServiceAccounts()
  {
    return $this->serviceAccounts;
  }
  /**
   * Optional. The service provider for the device trust connector.
   *
   * Accepted values: SERVICE_PROVIDER_UNSPECIFIED, UNIVERSAL_DEVICE_TRUST,
   * OKTA, PING_IDENTITY, ONELOGIN, DUO, ZSCALER, OMNISSA, JUMPCLOUD
   *
   * @param self::SERVICE_PROVIDER_* $serviceProvider
   */
  public function setServiceProvider($serviceProvider)
  {
    $this->serviceProvider = $serviceProvider;
  }
  /**
   * @return self::SERVICE_PROVIDER_*
   */
  public function getServiceProvider()
  {
    return $this->serviceProvider;
  }
  /**
   * Required. List of URLs allowed to be part of the attestation flow to get
   * the set of signals from the machine. URLs must have HTTPS scheme, e.g.
   * "https://example.com". Wildcards, *, are allowed. For detailed information
   * on valid URL patterns, please see https://cloud.google.com/docs/chrome-
   * enterprise/policies/url-patterns.
   *
   * @param string[] $urlMatchers
   */
  public function setUrlMatchers($urlMatchers)
  {
    $this->urlMatchers = $urlMatchers;
  }
  /**
   * @return string[]
   */
  public function getUrlMatchers()
  {
    return $this->urlMatchers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1DeviceTrustConfig::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1DeviceTrustConfig');
