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

class GoogleAdsSearchads360V23ServicesCreateProductLinkRequest extends \Google\Model
{
  protected $productLinkType = GoogleAdsSearchads360V23ResourcesProductLink::class;
  protected $productLinkDataType = '';

  /**
   * Required. The product link to be created.
   *
   * @param GoogleAdsSearchads360V23ResourcesProductLink $productLink
   */
  public function setProductLink(GoogleAdsSearchads360V23ResourcesProductLink $productLink)
  {
    $this->productLink = $productLink;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesProductLink
   */
  public function getProductLink()
  {
    return $this->productLink;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCreateProductLinkRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCreateProductLinkRequest');
