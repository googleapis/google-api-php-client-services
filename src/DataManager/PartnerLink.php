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

namespace Google\Service\DataManager;

class PartnerLink extends \Google\Model
{
  /**
   * Identifier. The name of the partner link. Format:
   * accountTypes/{account_type}/accounts/{account}/partnerLinks/{partner_link}
   *
   * @var string
   */
  public $name;
  protected $owningAccountType = ProductAccount::class;
  protected $owningAccountDataType = '';
  protected $partnerAccountType = ProductAccount::class;
  protected $partnerAccountDataType = '';
  /**
   * Output only. The partner link ID.
   *
   * @var string
   */
  public $partnerLinkId;

  /**
   * Identifier. The name of the partner link. Format:
   * accountTypes/{account_type}/accounts/{account}/partnerLinks/{partner_link}
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
   * Required. The owning account granting access to the partner account.
   *
   * @param ProductAccount $owningAccount
   */
  public function setOwningAccount(ProductAccount $owningAccount)
  {
    $this->owningAccount = $owningAccount;
  }
  /**
   * @return ProductAccount
   */
  public function getOwningAccount()
  {
    return $this->owningAccount;
  }
  /**
   * Required. The partner account granted access by the owning account.
   *
   * @param ProductAccount $partnerAccount
   */
  public function setPartnerAccount(ProductAccount $partnerAccount)
  {
    $this->partnerAccount = $partnerAccount;
  }
  /**
   * @return ProductAccount
   */
  public function getPartnerAccount()
  {
    return $this->partnerAccount;
  }
  /**
   * Output only. The partner link ID.
   *
   * @param string $partnerLinkId
   */
  public function setPartnerLinkId($partnerLinkId)
  {
    $this->partnerLinkId = $partnerLinkId;
  }
  /**
   * @return string
   */
  public function getPartnerLinkId()
  {
    return $this->partnerLinkId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartnerLink::class, 'Google_Service_DataManager_PartnerLink');
