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

namespace Google\Service\CloudSearch;

class AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup extends \Google\Collection
{
  protected $collection_key = 'parameters';
  /**
   * @var string
   */
  public $conferenceId;
  /**
   * @var string
   */
  public $conferenceSolutionId;
  protected $entryPointsType = AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup::class;
  protected $entryPointsDataType = 'array';
  public $entryPoints = [];
  protected $errorType = AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError::class;
  protected $errorDataType = '';
  public $error;
  /**
   * @var string
   */
  public $note;
  protected $parametersType = AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter::class;
  protected $parametersDataType = 'array';
  public $parameters = [];

  /**
   * @param string
   */
  public function setConferenceId($conferenceId)
  {
    $this->conferenceId = $conferenceId;
  }
  /**
   * @return string
   */
  public function getConferenceId()
  {
    return $this->conferenceId;
  }
  /**
   * @param string
   */
  public function setConferenceSolutionId($conferenceSolutionId)
  {
    $this->conferenceSolutionId = $conferenceSolutionId;
  }
  /**
   * @return string
   */
  public function getConferenceSolutionId()
  {
    return $this->conferenceSolutionId;
  }
  /**
   * @param AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup[]
   */
  public function setEntryPoints($entryPoints)
  {
    $this->entryPoints = $entryPoints;
  }
  /**
   * @return AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupEntryPointMarkup[]
   */
  public function getEntryPoints()
  {
    return $this->entryPoints;
  }
  /**
   * @param AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError
   */
  public function setError(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError $error)
  {
    $this->error = $error;
  }
  /**
   * @return AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupError
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * @param string
   */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /**
   * @return string
   */
  public function getNote()
  {
    return $this->note;
  }
  /**
   * @param AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter[]
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkupParameter[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup::class, 'Google_Service_CloudSearch_AppsExtensionsMarkupCalendarClientActionMarkupConferenceDataMarkup');
