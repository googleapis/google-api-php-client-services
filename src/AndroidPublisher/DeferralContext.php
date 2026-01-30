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

class DeferralContext extends \Google\Model
{
  /**
   * Required. The duration by which all subscription items should be deferred.
   *
   * @var string
   */
  public $deferDuration;
  /**
   * Required. The API will fail if the etag does not match the latest etag for
   * this subscription. The etag is retrieved from
   * purchases.subscriptionsv2.get: https://developers.google.com/android-
   * publisher/api-ref/rest/v3/purchases.subscriptionsv2/get
   *
   * @var string
   */
  public $etag;
  /**
   * If set to "true", the request is a dry run to validate the effect of Defer,
   * the subscription would not be impacted.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. The duration by which all subscription items should be deferred.
   *
   * @param string $deferDuration
   */
  public function setDeferDuration($deferDuration)
  {
    $this->deferDuration = $deferDuration;
  }
  /**
   * @return string
   */
  public function getDeferDuration()
  {
    return $this->deferDuration;
  }
  /**
   * Required. The API will fail if the etag does not match the latest etag for
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
   * If set to "true", the request is a dry run to validate the effect of Defer,
   * the subscription would not be impacted.
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
class_alias(DeferralContext::class, 'Google_Service_AndroidPublisher_DeferralContext');
