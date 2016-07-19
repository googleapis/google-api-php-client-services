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

class Google_Service_Datastore_Query extends Google_Collection
{
  protected $collection_key = 'projection';
  public $distinctOn;
  public $endCursor;
  public $filter;
  public $kind;
  public $limit;
  public $offset;
  public $order;
  public $projection;
  public $startCursor;

  public function setDistinctOn(array $distinctOn)
  {
    foreach ($distinctOn as $d) {
      if (!$d instanceof Google_Service_Datastore_PropertyReference) {
        throw new InvalidArgumentException('First argument to setDistinctOn must be an array of Google_Service_Datastore_PropertyReference');
      }
    }
    $this->distinctOn = $distinctOn;
  }
  public function getDistinctOn()
  {
    return $this->distinctOn;
  }
  public function setEndCursor($endCursor)
  {
    $this->endCursor = $endCursor;
  }
  public function getEndCursor()
  {
    return $this->endCursor;
  }
  public function setFilter(Google_Service_Datastore_Filter $filter)
  {
    $this->filter = $filter;
  }
  public function getFilter()
  {
    return $this->filter;
  }
  public function setKind(array $kind)
  {
    foreach ($kind as $k) {
      if (!$k instanceof Google_Service_Datastore_KindExpression) {
        throw new InvalidArgumentException('First argument to setKind must be an array of Google_Service_Datastore_KindExpression');
      }
    }
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  public function getLimit()
  {
    return $this->limit;
  }
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  public function getOffset()
  {
    return $this->offset;
  }
  public function setOrder(array $order)
  {
    foreach ($order as $o) {
      if (!$o instanceof Google_Service_Datastore_PropertyOrder) {
        throw new InvalidArgumentException('First argument to setOrder must be an array of Google_Service_Datastore_PropertyOrder');
      }
    }
    $this->order = $order;
  }
  public function getOrder()
  {
    return $this->order;
  }
  public function setProjection(array $projection)
  {
    foreach ($projection as $p) {
      if (!$p instanceof Google_Service_Datastore_Projection) {
        throw new InvalidArgumentException('First argument to setProjection must be an array of Google_Service_Datastore_Projection');
      }
    }
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
  public function setStartCursor($startCursor)
  {
    $this->startCursor = $startCursor;
  }
  public function getStartCursor()
  {
    return $this->startCursor;
  }
}
