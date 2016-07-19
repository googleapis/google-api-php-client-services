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

class Google_Service_Spectrum_SpectrumSchedule extends Google_Collection
{
  protected $collection_key = 'spectra';
  public $eventTime;
  public $spectra;

  public function setEventTime(Google_Service_Spectrum_EventTime $eventTime)
  {
    $this->eventTime = $eventTime;
  }
  public function getEventTime()
  {
    return $this->eventTime;
  }
  public function setSpectra(array $spectra)
  {
    foreach ($spectra as $s) {
      if (!$s instanceof Google_Service_Spectrum_SpectrumMessage) {
        throw new InvalidArgumentException('First argument to setSpectra must be an array of Google_Service_Spectrum_SpectrumMessage');
      }
    }
    $this->spectra = $spectra;
  }
  public function getSpectra()
  {
    return $this->spectra;
  }
}
