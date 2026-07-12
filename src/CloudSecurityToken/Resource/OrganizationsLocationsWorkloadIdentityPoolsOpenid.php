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

namespace Google\Service\CloudSecurityToken\Resource;

use Google\Service\CloudSecurityToken\GoogleIdentityStsV1Jwks;

/**
 * The "openid" collection of methods.
 * Typical usage is:
 *  <code>
 *   $stsService = new Google\Service\CloudSecurityToken(...);
 *   $openid = $stsService->organizations_locations_workloadIdentityPools_openid;
 *  </code>
 */
class OrganizationsLocationsWorkloadIdentityPoolsOpenid extends \Google\Service\Resource
{
  /**
   * Fetches the signing keys for an agentic or managed workload identity pool and
   * returns them in JWKs format, defined in [RFC
   * 7517](https://tools.ietf.org/html/rfc7517). For now, only agentic system
   * pools are supported. **Preview** This feature is subject to the "Pre-GA
   * Offerings Terms" in the General Service Terms section of the [Service
   * Specific Terms](https://cloud.google.com/terms/service-terms#1). Pre-GA
   * features are available "as is" and might have limited support. For more
   * information, see the [launch stage
   * descriptions](https://cloud.google.com/products#product-launch-stages).
   * (openid.getJwks)
   *
   * @param string $name Required. The name of the pool whose JWKS needs to be
   * retrieved. Format: 'organizations/{ORGANIZATION_NUMBER}/locations/global/work
   * loadIdentityPools/{POOL_ID}'
   * 'projects/{PROJECT_NUMBER}/locations/global/workloadIdentityPools/{POOL_ID}'
   * Example(s): 'organizations/1234/locations/global/workloadIdentityPools/agents
   * .global.org-1234.system.id.goog' 'projects/12345678/locations/global/workload
   * IdentityPools/agents.global.proj-12345678.system.id.goog'
   * @param array $optParams Optional parameters.
   * @return GoogleIdentityStsV1Jwks
   * @throws \Google\Service\Exception
   */
  public function getJwks($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getJwks', [$params], GoogleIdentityStsV1Jwks::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsWorkloadIdentityPoolsOpenid::class, 'Google_Service_CloudSecurityToken_Resource_OrganizationsLocationsWorkloadIdentityPoolsOpenid');
