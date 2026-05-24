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

namespace Google\Service\NetworkSecurity;

class AuthzPolicy extends \Google\Collection
{
  /**
   * Unspecified action.
   */
  public const ACTION_AUTHZ_ACTION_UNSPECIFIED = 'AUTHZ_ACTION_UNSPECIFIED';
  /**
   * Allow request to pass through to the backend.
   */
  public const ACTION_ALLOW = 'ALLOW';
  /**
   * Deny the request and return a HTTP 404 to the client.
   */
  public const ACTION_DENY = 'DENY';
  /**
   * Delegate the authorization decision to an external authorization engine.
   */
  public const ACTION_CUSTOM = 'CUSTOM';
  /**
   * Unspecified policy profile.
   */
  public const POLICY_PROFILE_POLICY_PROFILE_UNSPECIFIED = 'POLICY_PROFILE_UNSPECIFIED';
  /**
   * Applies to request authorization. `CUSTOM` authorization policies with
   * Authz extensions will be allowed with `EXT_AUTHZ_GRPC` or `EXT_PROC_GRPC`
   * protocols. Extensions are invoked only for request header events.
   */
  public const POLICY_PROFILE_REQUEST_AUTHZ = 'REQUEST_AUTHZ';
  /**
   * Applies to content security, sanitization, etc. Only `CUSTOM` action is
   * allowed in this policy profile. AuthzExtensions in the custom provider must
   * support `EXT_PROC_GRPC` protocol only and be capable of receiving all
   * `EXT_PROC_GRPC` events (REQUEST_HEADERS, REQUEST_BODY, REQUEST_TRAILERS,
   * RESPONSE_HEADERS, RESPONSE_BODY, RESPONSE_TRAILERS) with
   * `FULL_DUPLEX_STREAMED` body send mode.
   */
  public const POLICY_PROFILE_CONTENT_AUTHZ = 'CONTENT_AUTHZ';
  protected $collection_key = 'networkRules';
  /**
   * Required. Can be one of `ALLOW`, `DENY`, `CUSTOM`. When the action is
   * `CUSTOM`, `customProvider` must be specified. When the action is `ALLOW`,
   * only requests matching the policy will be allowed. When the action is
   * `DENY`, only requests matching the policy will be denied. When a request
   * arrives, the policies are evaluated in the following order: 1. If there is
   * a `CUSTOM` policy that matches the request, the `CUSTOM` policy is
   * evaluated using the custom authorization providers and the request is
   * denied if the provider rejects the request. 2. If there are any `DENY`
   * policies that match the request, the request is denied. 3. If there are no
   * `ALLOW` policies for the resource or if any of the `ALLOW` policies match
   * the request, the request is allowed. 4. Else the request is denied by
   * default if none of the configured AuthzPolicies with `ALLOW` action match
   * the request.
   *
   * @var string
   */
  public $action;
  /**
   * Output only. The timestamp when the resource was created.
   *
   * @var string
   */
  public $createTime;
  protected $customProviderType = AuthzPolicyCustomProvider::class;
  protected $customProviderDataType = '';
  /**
   * Optional. A human-readable description of the resource.
   *
   * @var string
   */
  public $description;
  protected $httpRulesType = AuthzPolicyAuthzRule::class;
  protected $httpRulesDataType = 'array';
  /**
   * Optional. Set of labels associated with the `AuthzPolicy` resource. The
   * format must comply with [the following
   * requirements](/compute/docs/labeling-resources#requirements).
   *
   * @var string[]
   */
  public $labels;
  /**
   * Required. Identifier. Name of the `AuthzPolicy` resource in the following
   * format:
   * `projects/{project}/locations/{location}/authzPolicies/{authz_policy}`.
   *
   * @var string
   */
  public $name;
  protected $networkRulesType = AuthzPolicyAuthzRule::class;
  protected $networkRulesDataType = 'array';
  /**
   * Optional. Immutable. Defines the type of authorization being performed. If
   * not specified, `REQUEST_AUTHZ` is applied. This field cannot be changed
   * once AuthzPolicy is created.
   *
   * @var string
   */
  public $policyProfile;
  protected $targetType = AuthzPolicyTarget::class;
  protected $targetDataType = '';
  /**
   * Output only. The timestamp when the resource was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. Can be one of `ALLOW`, `DENY`, `CUSTOM`. When the action is
   * `CUSTOM`, `customProvider` must be specified. When the action is `ALLOW`,
   * only requests matching the policy will be allowed. When the action is
   * `DENY`, only requests matching the policy will be denied. When a request
   * arrives, the policies are evaluated in the following order: 1. If there is
   * a `CUSTOM` policy that matches the request, the `CUSTOM` policy is
   * evaluated using the custom authorization providers and the request is
   * denied if the provider rejects the request. 2. If there are any `DENY`
   * policies that match the request, the request is denied. 3. If there are no
   * `ALLOW` policies for the resource or if any of the `ALLOW` policies match
   * the request, the request is allowed. 4. Else the request is denied by
   * default if none of the configured AuthzPolicies with `ALLOW` action match
   * the request.
   *
   * Accepted values: AUTHZ_ACTION_UNSPECIFIED, ALLOW, DENY, CUSTOM
   *
   * @param self::ACTION_* $action
   */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /**
   * @return self::ACTION_*
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Output only. The timestamp when the resource was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Required if the action is `CUSTOM`. Allows delegating
   * authorization decisions to Cloud IAP or to Service Extensions. One of
   * `cloudIap` or `authzExtension` must be specified.
   *
   * @param AuthzPolicyCustomProvider $customProvider
   */
  public function setCustomProvider(AuthzPolicyCustomProvider $customProvider)
  {
    $this->customProvider = $customProvider;
  }
  /**
   * @return AuthzPolicyCustomProvider
   */
  public function getCustomProvider()
  {
    return $this->customProvider;
  }
  /**
   * Optional. A human-readable description of the resource.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. A list of authorization HTTP rules to match against the incoming
   * request. A policy match occurs when at least one HTTP rule matches the
   * request or when no HTTP rules are specified in the policy. At least one
   * HTTP Rule is required for Allow or Deny Action. Limited to 5 rules.
   *
   * @param AuthzPolicyAuthzRule[] $httpRules
   */
  public function setHttpRules($httpRules)
  {
    $this->httpRules = $httpRules;
  }
  /**
   * @return AuthzPolicyAuthzRule[]
   */
  public function getHttpRules()
  {
    return $this->httpRules;
  }
  /**
   * Optional. Set of labels associated with the `AuthzPolicy` resource. The
   * format must comply with [the following
   * requirements](/compute/docs/labeling-resources#requirements).
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Required. Identifier. Name of the `AuthzPolicy` resource in the following
   * format:
   * `projects/{project}/locations/{location}/authzPolicies/{authz_policy}`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. A list of authorization network rules to match against the
   * incoming request. A policy match occurs when at least one network rule
   * matches the request. At least one network rule is required for Allow or
   * Deny Action if no HTTP rules are provided. Network rules are mutually
   * exclusive with HTTP rules. Limited to 5 rules.
   *
   * @param AuthzPolicyAuthzRule[] $networkRules
   */
  public function setNetworkRules($networkRules)
  {
    $this->networkRules = $networkRules;
  }
  /**
   * @return AuthzPolicyAuthzRule[]
   */
  public function getNetworkRules()
  {
    return $this->networkRules;
  }
  /**
   * Optional. Immutable. Defines the type of authorization being performed. If
   * not specified, `REQUEST_AUTHZ` is applied. This field cannot be changed
   * once AuthzPolicy is created.
   *
   * Accepted values: POLICY_PROFILE_UNSPECIFIED, REQUEST_AUTHZ, CONTENT_AUTHZ
   *
   * @param self::POLICY_PROFILE_* $policyProfile
   */
  public function setPolicyProfile($policyProfile)
  {
    $this->policyProfile = $policyProfile;
  }
  /**
   * @return self::POLICY_PROFILE_*
   */
  public function getPolicyProfile()
  {
    return $this->policyProfile;
  }
  /**
   * Required. Specifies the set of resources to which this policy should be
   * applied to.
   *
   * @param AuthzPolicyTarget $target
   */
  public function setTarget(AuthzPolicyTarget $target)
  {
    $this->target = $target;
  }
  /**
   * @return AuthzPolicyTarget
   */
  public function getTarget()
  {
    return $this->target;
  }
  /**
   * Output only. The timestamp when the resource was updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthzPolicy::class, 'Google_Service_NetworkSecurity_AuthzPolicy');
