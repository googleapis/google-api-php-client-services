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

namespace Google\Service\Meet\Resource;

use Google\Service\Meet\ListSmartNotesResponse;
use Google\Service\Meet\SmartNote;

/**
 * The "smartNotes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $meetService = new Google\Service\Meet(...);
 *   $smartNotes = $meetService->conferenceRecords_smartNotes;
 *  </code>
 */
class ConferenceRecordsSmartNotes extends \Google\Service\Resource
{
  /**
   * Gets smart notes by smart note ID. (smartNotes.get)
   *
   * @param string $name Required. Resource name of the smart note. Format:
   * conferenceRecords/{conference_record}/smartNotes/{smart_note}
   * @param array $optParams Optional parameters.
   * @return SmartNote
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SmartNote::class);
  }
  /**
   * Lists the set of smart notes from the conference record. By default, ordered
   * by start time and in ascending order.
   * (smartNotes.listConferenceRecordsSmartNotes)
   *
   * @param string $parent Required. Format:
   * `conferenceRecords/{conference_record}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of smart notes to return.
   * The service might return fewer than this value. If unspecified, at most 10
   * smart notes are returned. The maximum value is 100; values above 100 are
   * coerced to 100. Maximum might change in the future.
   * @opt_param string pageToken Optional. Page token returned from previous List
   * Call.
   * @return ListSmartNotesResponse
   * @throws \Google\Service\Exception
   */
  public function listConferenceRecordsSmartNotes($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSmartNotesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConferenceRecordsSmartNotes::class, 'Google_Service_Meet_Resource_ConferenceRecordsSmartNotes');
