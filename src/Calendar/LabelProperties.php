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

namespace Google\Service\Calendar;

class LabelProperties extends \Google\Collection
{
  protected $collection_key = 'eventLabels';
  protected $eventLabelsType = EventLabel::class;
  protected $eventLabelsDataType = 'array';

  /**
   * Event labels defined on this calendar. If this is present when updating the
   * calendar, it will replace the existing event labels. Extend the list to add
   * a new event label, and remove entities from the list to delete a label from
   * calendar. Each calendar can have a maximum of 200 labels.
   *
   * @param EventLabel[] $eventLabels
   */
  public function setEventLabels($eventLabels)
  {
    $this->eventLabels = $eventLabels;
  }
  /**
   * @return EventLabel[]
   */
  public function getEventLabels()
  {
    return $this->eventLabels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LabelProperties::class, 'Google_Service_Calendar_LabelProperties');
