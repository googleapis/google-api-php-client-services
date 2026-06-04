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

class GoogleAdsSearchads360V23ServicesListInvoicesResponse extends \Google\Collection
{
  protected $collection_key = 'invoices';
  protected $invoicesType = GoogleAdsSearchads360V23ResourcesInvoice::class;
  protected $invoicesDataType = 'array';

  /**
   * The list of invoices that match the billing setup and time period.
   *
   * @param GoogleAdsSearchads360V23ResourcesInvoice[] $invoices
   */
  public function setInvoices($invoices)
  {
    $this->invoices = $invoices;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInvoice[]
   */
  public function getInvoices()
  {
    return $this->invoices;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesListInvoicesResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesListInvoicesResponse');
