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

namespace Google\Service\CustomerEngagementSuite;

class Span extends \Google\Collection
{
  protected $collection_key = 'childSpans';
  /**
   * Output only. Key-value attributes associated with the span.
   *
   * @var array[]
   */
  public $attributes;
  protected $childSpansType = Span::class;
  protected $childSpansDataType = 'array';
  /**
   * Output only. The duration of the span.
   *
   * @var string
   */
  public $duration;
  /**
   * Output only. The end time of the span.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The name of the span.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The start time of the span.
   *
   * @var string
   */
  public $startTime;

  /**
   * Output only. Key-value attributes associated with the span.
   *
   * @param array[] $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return array[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * Output only. The child spans that are nested under this span.
   *
   * @param Span[] $childSpans
   */
  public function setChildSpans($childSpans)
  {
    $this->childSpans = $childSpans;
  }
  /**
   * @return Span[]
   */
  public function getChildSpans()
  {
    return $this->childSpans;
  }
  /**
   * Output only. The duration of the span.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * Output only. The end time of the span.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. The name of the span.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The start time of the span.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Span::class, 'Google_Service_CustomerEngagementSuite_Span');
