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

class GoogleAdsSearchads360V23CommonEventAttribute extends \Google\Collection
{
  protected $collection_key = 'itemAttribute';
  /**
   * Required. Advertiser defined event to be used for remarketing. The accepted
   * values are "Viewed", "Cart", "Purchased" and "Recommended".
   *
   * @var string
   */
  public $event;
  /**
   * Required. Timestamp at which the event happened. The format is YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default.
   *
   * @var string
   */
  public $eventDateTime;
  protected $itemAttributeType = GoogleAdsSearchads360V23CommonEventItemAttribute::class;
  protected $itemAttributeDataType = 'array';

  /**
   * Required. Advertiser defined event to be used for remarketing. The accepted
   * values are "Viewed", "Cart", "Purchased" and "Recommended".
   *
   * @param string $event
   */
  public function setEvent($event)
  {
    $this->event = $event;
  }
  /**
   * @return string
   */
  public function getEvent()
  {
    return $this->event;
  }
  /**
   * Required. Timestamp at which the event happened. The format is YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default.
   *
   * @param string $eventDateTime
   */
  public function setEventDateTime($eventDateTime)
  {
    $this->eventDateTime = $eventDateTime;
  }
  /**
   * @return string
   */
  public function getEventDateTime()
  {
    return $this->eventDateTime;
  }
  /**
   * Required. Item attributes of the event.
   *
   * @param GoogleAdsSearchads360V23CommonEventItemAttribute[] $itemAttribute
   */
  public function setItemAttribute($itemAttribute)
  {
    $this->itemAttribute = $itemAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonEventItemAttribute[]
   */
  public function getItemAttribute()
  {
    return $this->itemAttribute;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonEventAttribute::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonEventAttribute');
