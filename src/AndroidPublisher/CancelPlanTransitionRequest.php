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

namespace Google\Service\AndroidPublisher;

class CancelPlanTransitionRequest extends \Google\Model
{
  /**
   * If set, the API will fail if the etag does not match the latest etag for
   * this subscription. The etag is retrieved from
   * purchases.subscriptionsv2.get: https://developers.google.com/android-
   * publisher/api-ref/rest/v3/purchases.subscriptionsv2/get
   *
   * @var string
   */
  public $etag;
  /**
   * Required. The subscription product (for example, 'premium_plan') for which
   * an in process plan transition should be canceled.
   *
   * @var string
   */
  public $productId;

  /**
   * If set, the API will fail if the etag does not match the latest etag for
   * this subscription. The etag is retrieved from
   * purchases.subscriptionsv2.get: https://developers.google.com/android-
   * publisher/api-ref/rest/v3/purchases.subscriptionsv2/get
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Required. The subscription product (for example, 'premium_plan') for which
   * an in process plan transition should be canceled.
   *
   * @param string $productId
   */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /**
   * @return string
   */
  public function getProductId()
  {
    return $this->productId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CancelPlanTransitionRequest::class, 'Google_Service_AndroidPublisher_CancelPlanTransitionRequest');
