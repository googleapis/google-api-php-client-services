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

class Google_Service_Calendar_FreeBusyCalendar extends Google_Collection
{
  protected $collection_key = 'errors';
  public $busy;
  public $errors;

  public function setBusy(array $busy)
  {
    foreach ($busy as $b) {
      if (!$b instanceof Google_Service_Calendar_TimePeriod) {
        throw new InvalidArgumentException('First argument to setBusy must be an array of Google_Service_Calendar_TimePeriod');
      }
    }
    $this->busy = $busy;
  }
  public function getBusy()
  {
    return $this->busy;
  }
  public function setErrors(array $errors)
  {
    foreach ($errors as $e) {
      if (!$e instanceof Google_Service_Calendar_Error) {
        throw new InvalidArgumentException('First argument to setErrors must be an array of Google_Service_Calendar_Error');
      }
    }
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
}
