<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_AdExchangeBuyer_CreativeServingRestrictions extends Google_Collection
{
  protected $collection_key = 'disapprovalReasons';
  public $contexts;
  public $disapprovalReasons;
  public $reason;

  public function setContexts(array $contexts)
  {
    foreach ($contexts as $c) {
      if (!$c instanceof Google_Service_AdExchangeBuyer_CreativeServingRestrictionsContexts) {
        throw new InvalidArgumentException('First argument to setContexts must be an array of Google_Service_AdExchangeBuyer_CreativeServingRestrictionsContexts');
      }
    }
    $this->contexts = $contexts;
  }
  public function getContexts()
  {
    return $this->contexts;
  }
  public function setDisapprovalReasons(array $disapprovalReasons)
  {
    foreach ($disapprovalReasons as $d) {
      if (!$d instanceof Google_Service_AdExchangeBuyer_CreativeServingRestrictionsDisapprovalReasons) {
        throw new InvalidArgumentException('First argument to setDisapprovalReasons must be an array of Google_Service_AdExchangeBuyer_CreativeServingRestrictionsDisapprovalReasons');
      }
    }
    $this->disapprovalReasons = $disapprovalReasons;
  }
  public function getDisapprovalReasons()
  {
    return $this->disapprovalReasons;
  }
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  public function getReason()
  {
    return $this->reason;
  }
}
