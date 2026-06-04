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

class GoogleAdsSearchads360V23ServicesMoveManagerLinkRequest extends \Google\Model
{
  /**
   * Required. The resource name of the new manager customer that the client
   * wants to move to. Customer resource names have the format:
   * "customers/{customer_id}"
   *
   * @var string
   */
  public $newManager;
  /**
   * Required. The resource name of the previous CustomerManagerLink. The
   * resource name has the form: `customers/{customer_id}/customerManagerLinks/{
   * manager_customer_id}~{manager_link_id}`
   *
   * @var string
   */
  public $previousCustomerManagerLink;
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. The resource name of the new manager customer that the client
   * wants to move to. Customer resource names have the format:
   * "customers/{customer_id}"
   *
   * @param string $newManager
   */
  public function setNewManager($newManager)
  {
    $this->newManager = $newManager;
  }
  /**
   * @return string
   */
  public function getNewManager()
  {
    return $this->newManager;
  }
  /**
   * Required. The resource name of the previous CustomerManagerLink. The
   * resource name has the form: `customers/{customer_id}/customerManagerLinks/{
   * manager_customer_id}~{manager_link_id}`
   *
   * @param string $previousCustomerManagerLink
   */
  public function setPreviousCustomerManagerLink($previousCustomerManagerLink)
  {
    $this->previousCustomerManagerLink = $previousCustomerManagerLink;
  }
  /**
   * @return string
   */
  public function getPreviousCustomerManagerLink()
  {
    return $this->previousCustomerManagerLink;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMoveManagerLinkRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMoveManagerLinkRequest');
