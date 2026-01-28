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

class SubnetworkSecondaryRange extends \Google\Model
{
  /**
   * The range of IP addresses belonging to this subnetwork secondary range.
   * Provide this property when you create the subnetwork. Ranges must be unique
   * and non-overlapping with all primary and secondary IP ranges within a
   * network. Both IPv4 and IPv6 ranges are supported. For IPv4, the range can
   * be any range listed in theValid ranges list.
   *
   * For IPv6: The range must have a /64 prefix length. The range must be
   * omitted, for auto-allocation from Google-defined ULA IPv6 range. For BYOGUA
   * internal IPv6 secondary range, the range may be specified along with the
   * `ipCollection` field. If an `ipCollection` is specified, the requested
   * ip_cidr_range must lie within the range of the PDP referenced by the
   * `ipCollection` field for allocation. If `ipCollection` field is specified,
   * but ip_cidr_range is not, the range is auto-allocated from the PDP
   * referenced by the `ipCollection` field.
   *
   * @var string
   */
  public $ipCidrRange;
  /**
   * The name associated with this subnetwork secondary range, used when adding
   * an alias IP/IPv6 range to a VM instance. The name must be 1-63 characters
   * long, and comply withRFC1035. The name must be unique within the
   * subnetwork.
   *
   * @var string
   */
  public $rangeName;
  /**
   * The URL of the reserved internal range. Only IPv4 is supported.
   *
   * @var string
   */
  public $reservedInternalRange;

  /**
   * The range of IP addresses belonging to this subnetwork secondary range.
   * Provide this property when you create the subnetwork. Ranges must be unique
   * and non-overlapping with all primary and secondary IP ranges within a
   * network. Both IPv4 and IPv6 ranges are supported. For IPv4, the range can
   * be any range listed in theValid ranges list.
   *
   * For IPv6: The range must have a /64 prefix length. The range must be
   * omitted, for auto-allocation from Google-defined ULA IPv6 range. For BYOGUA
   * internal IPv6 secondary range, the range may be specified along with the
   * `ipCollection` field. If an `ipCollection` is specified, the requested
   * ip_cidr_range must lie within the range of the PDP referenced by the
   * `ipCollection` field for allocation. If `ipCollection` field is specified,
   * but ip_cidr_range is not, the range is auto-allocated from the PDP
   * referenced by the `ipCollection` field.
   *
   * @param string $ipCidrRange
   */
  public function setIpCidrRange($ipCidrRange)
  {
    $this->ipCidrRange = $ipCidrRange;
  }
  /**
   * @return string
   */
  public function getIpCidrRange()
  {
    return $this->ipCidrRange;
  }
  /**
   * The name associated with this subnetwork secondary range, used when adding
   * an alias IP/IPv6 range to a VM instance. The name must be 1-63 characters
   * long, and comply withRFC1035. The name must be unique within the
   * subnetwork.
   *
   * @param string $rangeName
   */
  public function setRangeName($rangeName)
  {
    $this->rangeName = $rangeName;
  }
  /**
   * @return string
   */
  public function getRangeName()
  {
    return $this->rangeName;
  }
  /**
   * The URL of the reserved internal range. Only IPv4 is supported.
   *
   * @param string $reservedInternalRange
   */
  public function setReservedInternalRange($reservedInternalRange)
  {
    $this->reservedInternalRange = $reservedInternalRange;
  }
  /**
   * @return string
   */
  public function getReservedInternalRange()
  {
    return $this->reservedInternalRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubnetworkSecondaryRange::class, 'Google_Service_Compute_SubnetworkSecondaryRange');
