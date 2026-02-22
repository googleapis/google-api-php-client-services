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

namespace Google\Service\Compute;

class HealthAggregationPolicy extends \Google\Model
{
  public const POLICY_TYPE_BACKEND_SERVICE_POLICY = 'BACKEND_SERVICE_POLICY';
  public const POLICY_TYPE_DNS_PUBLIC_IP_POLICY = 'DNS_PUBLIC_IP_POLICY';
  /**
   * Output only. [Output Only] Creation timestamp inRFC3339 text format.
   *
   * @var string
   */
  public $creationTimestamp;
  /**
   * An optional description of this resource. Provide this property when you
   * create the resource.
   *
   * @var string
   */
  public $description;
  /**
   * Fingerprint of this resource. A hash of the contents stored in this object.
   * This field is used in optimistic locking. This field will be ignored when
   * inserting a HealthAggregationPolicy. An up-to-date fingerprint must be
   * provided in order to patch the HealthAggregationPolicy; Otherwise, the
   * request will fail with error 412 conditionNotMet. To see the latest
   * fingerprint, make a get() request to retrieve the HealthAggregationPolicy.
   *
   * @var string
   */
  public $fingerprint;
  /**
   * Can only be set if the policyType field isBACKEND_SERVICE_POLICY. Specifies
   * the threshold (as a percentage) of healthy endpoints required in order to
   * consider the aggregated health result HEALTHY. Defaults to 60. Must be in
   * range [0, 100]. Not applicable if the policyType field
   * isDNB_PUBLIC_IP_POLICY. Can be mutated. This field is optional, and will be
   * set to the default if unspecified. Note that both this threshold and
   * minHealthyThreshold must be satisfied in order for HEALTHY to be the
   * aggregated result. "Endpoints" refers to network endpoints within a Network
   * Endpoint Group or instances within an Instance Group.
   *
   * @var string
   */
  public $healthyPercentThreshold;
  /**
   * Output only. [Output Only] The unique identifier for the resource. This
   * identifier is defined by the server.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. [Output Only] Type of the resource.
   * Alwayscompute#healthAggregationPolicy for health aggregation policies.
   *
   * @var string
   */
  public $kind;
  /**
   * Can only be set if the policyType field isBACKEND_SERVICE_POLICY. Specifies
   * the minimum number of healthy endpoints required in order to consider the
   * aggregated health result HEALTHY. Defaults to 1. Must be positive. Not
   * applicable if the policyType field isDNB_PUBLIC_IP_POLICY. Can be mutated.
   * This field is optional, and will be set to the default if unspecified. Note
   * that both this threshold and healthyPercentThreshold must be satisfied in
   * order for HEALTHY to be the aggregated result. "Endpoints" refers to
   * network endpoints within a Network Endpoint Group or instances within an
   * Instance Group.
   *
   * @var string
   */
  public $minHealthyThreshold;
  /**
   * Name of the resource. Provided by the client when the resource is created.
   * The name must be 1-63 characters long, and comply withRFC1035.
   * Specifically, the name must be 1-63 characters long and match the regular
   * expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character
   * must be a lowercase letter, and all following characters must be a dash,
   * lowercase letter, or digit, except the last character, which cannot be a
   * dash.
   *
   * @var string
   */
  public $name;
  /**
   * Specifies the type of the healthAggregationPolicy. The only allowed value
   * for global resources is DNS_PUBLIC_IP_POLICY. The only allowed value for
   * regional resources is BACKEND_SERVICE_POLICY. Must be specified when the
   * healthAggregationPolicy is created, and cannot be mutated.
   *
   * @var string
   */
  public $policyType;
  /**
   * Output only. [Output Only] URL of the region where the health aggregation
   * policy resides. This field applies only to the regional resource. You must
   * specify this field as part of the HTTP request URL. It is not settable as a
   * field in the request body.
   *
   * @var string
   */
  public $region;
  /**
   * Output only. [Output Only] Server-defined URL for the resource.
   *
   * @var string
   */
  public $selfLink;
  /**
   * Output only. [Output Only] Server-defined URL with id for the resource.
   *
   * @var string
   */
  public $selfLinkWithId;

  /**
   * Output only. [Output Only] Creation timestamp inRFC3339 text format.
   *
   * @param string $creationTimestamp
   */
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  /**
   * @return string
   */
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  /**
   * An optional description of this resource. Provide this property when you
   * create the resource.
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
   * Fingerprint of this resource. A hash of the contents stored in this object.
   * This field is used in optimistic locking. This field will be ignored when
   * inserting a HealthAggregationPolicy. An up-to-date fingerprint must be
   * provided in order to patch the HealthAggregationPolicy; Otherwise, the
   * request will fail with error 412 conditionNotMet. To see the latest
   * fingerprint, make a get() request to retrieve the HealthAggregationPolicy.
   *
   * @param string $fingerprint
   */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /**
   * @return string
   */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /**
   * Can only be set if the policyType field isBACKEND_SERVICE_POLICY. Specifies
   * the threshold (as a percentage) of healthy endpoints required in order to
   * consider the aggregated health result HEALTHY. Defaults to 60. Must be in
   * range [0, 100]. Not applicable if the policyType field
   * isDNB_PUBLIC_IP_POLICY. Can be mutated. This field is optional, and will be
   * set to the default if unspecified. Note that both this threshold and
   * minHealthyThreshold must be satisfied in order for HEALTHY to be the
   * aggregated result. "Endpoints" refers to network endpoints within a Network
   * Endpoint Group or instances within an Instance Group.
   *
   * @param string $healthyPercentThreshold
   */
  public function setHealthyPercentThreshold($healthyPercentThreshold)
  {
    $this->healthyPercentThreshold = $healthyPercentThreshold;
  }
  /**
   * @return string
   */
  public function getHealthyPercentThreshold()
  {
    return $this->healthyPercentThreshold;
  }
  /**
   * Output only. [Output Only] The unique identifier for the resource. This
   * identifier is defined by the server.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. [Output Only] Type of the resource.
   * Alwayscompute#healthAggregationPolicy for health aggregation policies.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Can only be set if the policyType field isBACKEND_SERVICE_POLICY. Specifies
   * the minimum number of healthy endpoints required in order to consider the
   * aggregated health result HEALTHY. Defaults to 1. Must be positive. Not
   * applicable if the policyType field isDNB_PUBLIC_IP_POLICY. Can be mutated.
   * This field is optional, and will be set to the default if unspecified. Note
   * that both this threshold and healthyPercentThreshold must be satisfied in
   * order for HEALTHY to be the aggregated result. "Endpoints" refers to
   * network endpoints within a Network Endpoint Group or instances within an
   * Instance Group.
   *
   * @param string $minHealthyThreshold
   */
  public function setMinHealthyThreshold($minHealthyThreshold)
  {
    $this->minHealthyThreshold = $minHealthyThreshold;
  }
  /**
   * @return string
   */
  public function getMinHealthyThreshold()
  {
    return $this->minHealthyThreshold;
  }
  /**
   * Name of the resource. Provided by the client when the resource is created.
   * The name must be 1-63 characters long, and comply withRFC1035.
   * Specifically, the name must be 1-63 characters long and match the regular
   * expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character
   * must be a lowercase letter, and all following characters must be a dash,
   * lowercase letter, or digit, except the last character, which cannot be a
   * dash.
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
   * Specifies the type of the healthAggregationPolicy. The only allowed value
   * for global resources is DNS_PUBLIC_IP_POLICY. The only allowed value for
   * regional resources is BACKEND_SERVICE_POLICY. Must be specified when the
   * healthAggregationPolicy is created, and cannot be mutated.
   *
   * Accepted values: BACKEND_SERVICE_POLICY, DNS_PUBLIC_IP_POLICY
   *
   * @param self::POLICY_TYPE_* $policyType
   */
  public function setPolicyType($policyType)
  {
    $this->policyType = $policyType;
  }
  /**
   * @return self::POLICY_TYPE_*
   */
  public function getPolicyType()
  {
    return $this->policyType;
  }
  /**
   * Output only. [Output Only] URL of the region where the health aggregation
   * policy resides. This field applies only to the regional resource. You must
   * specify this field as part of the HTTP request URL. It is not settable as a
   * field in the request body.
   *
   * @param string $region
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return string
   */
  public function getRegion()
  {
    return $this->region;
  }
  /**
   * Output only. [Output Only] Server-defined URL for the resource.
   *
   * @param string $selfLink
   */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /**
   * @return string
   */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /**
   * Output only. [Output Only] Server-defined URL with id for the resource.
   *
   * @param string $selfLinkWithId
   */
  public function setSelfLinkWithId($selfLinkWithId)
  {
    $this->selfLinkWithId = $selfLinkWithId;
  }
  /**
   * @return string
   */
  public function getSelfLinkWithId()
  {
    return $this->selfLinkWithId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HealthAggregationPolicy::class, 'Google_Service_Compute_HealthAggregationPolicy');
