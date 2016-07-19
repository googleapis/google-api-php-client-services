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

class Google_Service_AdExchangeBuyerII_FilterSet extends Google_Collection
{
  protected $collection_key = 'webPropertyIds';
  public $absoluteDateRange;
  public $buyerAccountId;
  public $creativeId;
  public $dealId;
  public $filterSetId;
  public $filterSetOwnerAccountId;
  public $format;
  public $platform;
  public $relativeDateRange;
  public $webPropertyIds;

  public function setAbsoluteDateRange(Google_Service_AdExchangeBuyerII_AbsoluteDateRange $absoluteDateRange)
  {
    $this->absoluteDateRange = $absoluteDateRange;
  }
  public function getAbsoluteDateRange()
  {
    return $this->absoluteDateRange;
  }
  public function setBuyerAccountId($buyerAccountId)
  {
    $this->buyerAccountId = $buyerAccountId;
  }
  public function getBuyerAccountId()
  {
    return $this->buyerAccountId;
  }
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  public function setDealId($dealId)
  {
    $this->dealId = $dealId;
  }
  public function getDealId()
  {
    return $this->dealId;
  }
  public function setFilterSetId($filterSetId)
  {
    $this->filterSetId = $filterSetId;
  }
  public function getFilterSetId()
  {
    return $this->filterSetId;
  }
  public function setFilterSetOwnerAccountId($filterSetOwnerAccountId)
  {
    $this->filterSetOwnerAccountId = $filterSetOwnerAccountId;
  }
  public function getFilterSetOwnerAccountId()
  {
    return $this->filterSetOwnerAccountId;
  }
  public function setFormat($format)
  {
    $this->format = $format;
  }
  public function getFormat()
  {
    return $this->format;
  }
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  public function getPlatform()
  {
    return $this->platform;
  }
  public function setRelativeDateRange(Google_Service_AdExchangeBuyerII_RelativeDateRange $relativeDateRange)
  {
    $this->relativeDateRange = $relativeDateRange;
  }
  public function getRelativeDateRange()
  {
    return $this->relativeDateRange;
  }
  public function setWebPropertyIds(array $webPropertyIds)
  {
    $this->webPropertyIds = $webPropertyIds;
  }
  public function getWebPropertyIds()
  {
    return $this->webPropertyIds;
  }
}
