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

class GoogleAdsSearchads360V23ResourcesCustomerClientLink extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Indicates current in-effect relationship
   */
  public const STATUS_ACTIVE = 'ACTIVE';
  /**
   * Indicates terminated relationship
   */
  public const STATUS_INACTIVE = 'INACTIVE';
  /**
   * Indicates relationship has been requested by manager, but the client hasn't
   * accepted yet.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * Relationship was requested by the manager, but the client has refused.
   */
  public const STATUS_REFUSED = 'REFUSED';
  /**
   * Indicates relationship has been requested by manager, but manager canceled
   * it.
   */
  public const STATUS_CANCELED = 'CANCELED';
  /**
   * Immutable. The client customer linked to this customer.
   *
   * @var string
   */
  public $clientCustomer;
  /**
   * The visibility of the link. Users can choose whether or not to see hidden
   * links in the Google Ads UI. Default value is false
   *
   * @var bool
   */
  public $hidden;
  /**
   * Output only. This is uniquely identifies a customer client link. Read only.
   *
   * @var string
   */
  public $managerLinkId;
  /**
   * Immutable. Name of the resource. CustomerClientLink resource names have the
   * form: `customers/{customer_id}/customerClientLinks/{client_customer_id}~{ma
   * nager_link_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * This is the status of the link between client and manager.
   *
   * @var string
   */
  public $status;

  /**
   * Immutable. The client customer linked to this customer.
   *
   * @param string $clientCustomer
   */
  public function setClientCustomer($clientCustomer)
  {
    $this->clientCustomer = $clientCustomer;
  }
  /**
   * @return string
   */
  public function getClientCustomer()
  {
    return $this->clientCustomer;
  }
  /**
   * The visibility of the link. Users can choose whether or not to see hidden
   * links in the Google Ads UI. Default value is false
   *
   * @param bool $hidden
   */
  public function setHidden($hidden)
  {
    $this->hidden = $hidden;
  }
  /**
   * @return bool
   */
  public function getHidden()
  {
    return $this->hidden;
  }
  /**
   * Output only. This is uniquely identifies a customer client link. Read only.
   *
   * @param string $managerLinkId
   */
  public function setManagerLinkId($managerLinkId)
  {
    $this->managerLinkId = $managerLinkId;
  }
  /**
   * @return string
   */
  public function getManagerLinkId()
  {
    return $this->managerLinkId;
  }
  /**
   * Immutable. Name of the resource. CustomerClientLink resource names have the
   * form: `customers/{customer_id}/customerClientLinks/{client_customer_id}~{ma
   * nager_link_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * This is the status of the link between client and manager.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACTIVE, INACTIVE, PENDING, REFUSED,
   * CANCELED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerClientLink::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerClientLink');
