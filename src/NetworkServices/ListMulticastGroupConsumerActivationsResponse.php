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

namespace Google\Service\NetworkServices;

class ListMulticastGroupConsumerActivationsResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  protected $multicastGroupConsumerActivationsType = MulticastGroupConsumerActivation::class;
  protected $multicastGroupConsumerActivationsDataType = 'array';
  /**
   * A page token from an earlier query, as returned in `next_page_token`.
   *
   * @var string
   */
  public $nextPageToken;
  /**
   * Locations that could not be reached.
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * The list of multicast group consumer activations.
   *
   * @param MulticastGroupConsumerActivation[] $multicastGroupConsumerActivations
   */
  public function setMulticastGroupConsumerActivations($multicastGroupConsumerActivations)
  {
    $this->multicastGroupConsumerActivations = $multicastGroupConsumerActivations;
  }
  /**
   * @return MulticastGroupConsumerActivation[]
   */
  public function getMulticastGroupConsumerActivations()
  {
    return $this->multicastGroupConsumerActivations;
  }
  /**
   * A page token from an earlier query, as returned in `next_page_token`.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * Locations that could not be reached.
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListMulticastGroupConsumerActivationsResponse::class, 'Google_Service_NetworkServices_ListMulticastGroupConsumerActivationsResponse');
