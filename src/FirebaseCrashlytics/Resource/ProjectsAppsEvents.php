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

namespace Google\Service\FirebaseCrashlytics\Resource;

use Google\Service\FirebaseCrashlytics\BatchGetEventsResponse;
use Google\Service\FirebaseCrashlytics\ListEventsResponse;

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasecrashlyticsService = new Google\Service\FirebaseCrashlytics(...);
 *   $events = $firebasecrashlyticsService->projects_apps_events;
 *  </code>
 */
class ProjectsAppsEvents extends \Google\Service\Resource
{
  /**
   * Fetch a batch of up to 100 events by name. (events.batchGet)
   *
   * @param string $parent Required. The firebase application. Format:
   * "projects/{project}/apps/{app_id}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string names Required. The resource names of the desired events. A
   * maximum of 100 events can be retrieved in a batch. Format:
   * "projects/{project}/apps/{app_id}/events/{event_id}". The app_id and event_id
   * are required, but project may be "-" to conserve space in long URIs.
   * @opt_param string readMask Optional. The list of Event fields to include in
   * the response. If omitted, the full event is returned.
   * @return BatchGetEventsResponse
   * @throws \Google\Service\Exception
   */
  public function batchGet($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', [$params], BatchGetEventsResponse::class);
  }
  /**
   * List the events for an issue matching filter criteria, sorted in descending
   * order by timestamp. (events.listProjectsAppsEvents)
   *
   * @param string $parent Required. The Firebase application. Format:
   * "projects/{project}/apps/{app_id}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter.browser.displayNames Optional. Only count events
   * from the given browser. This string matches Browser.display_name. Format:
   * "name (display_version)" e.g. "Chrome (123)", or just "name" for all possible
   * versions, e.g. simply "Chrome".
   * @opt_param string filter.device.displayNames Only counts events from the
   * given Device model. This string matches Device.display_name. Format:
   * "manufacturer (model)" e.g. "Google (Pixel 6)", or just "manufacturer" for
   * all possible models, e.g. simply "Google". Note that a device's
   * marketing_name field can not be used for filtering.
   * @opt_param string filter.device.formFactors Only counts events from devices
   * with the given form factor (e.g. phone or tablet).
   * @opt_param string filter.interval.endTime Optional. Exclusive end of the
   * interval. If specified, a Timestamp matching this interval will have to be
   * before the end.
   * @opt_param string filter.interval.startTime Optional. Inclusive start of the
   * interval. If specified, a Timestamp matching this interval will have to be
   * the same or after the start.
   * @opt_param string filter.issue.content Optional. A space separated list of
   * filter terms matched against the contents of the issue. Contents include the
   * title and the stack trace. Matches must begin at alphanumeric tokens, i.e.,
   * 'util.Sorted' matches 'java.util.SortedSet' but not 'myutil.SortedArray'. The
   * filter matches if all filter terms match. All non-alphanumeric characters are
   * ignored for matching. Filtering is assumed to be prefix-search and order-
   * independent unless phrases are surrounded by "". Any terms contained in
   * quotes are searched using exact-match (given filter term "foo", we will not
   * return "foobar"), and must appear in the order given exactly. To get order-
   * dependence but prefix-search, use a * within the quotes ("abc foo*" will
   * match "abc foobar", but not "foo abc" "abcd foobar", or "abc xyz foobar").
   * @opt_param string filter.issue.errorTypes Optional. Only counts events of the
   * given error types. This field matches [Issue.error_type].
   * @opt_param string filter.issue.id Optional. Only counts events in the given
   * issue ID. This field matches [Issue.id].
   * @opt_param string filter.issue.signals Optional. Only returns issues
   * currently marked with the given signals. This field matches
   * [Issue.signals.signal].
   * @opt_param string filter.issue.state Optional. Deprecated: Prefer `states`
   * field. Only includes events for issues with the given issue state. Only
   * available for `topIssues` reports.
   * @opt_param string filter.issue.states Optional. Only includes events for
   * issues with the given issue states. Only available for `topIssues` reports.
   * @opt_param string filter.issue.variantId Optional. Only counts events for the
   * given issue variant ID. This field matches [IssueVariant.id].
   * @opt_param string filter.operatingSystem.displayNames Only counts events in
   * the given operating system and version. This string matches
   * OperatingSystem.display_name. Format: "osName (osVersion)" e.g. "Android
   * (11)". or just "osName" for all versions, e.g. simply "iPadOS".
   * @opt_param string filter.version.displayNames Only counts events in the given
   * app version. This string matches Version.display_name. Format:
   * "display_version (build_version)" e.g. "1.2.3 (456)".
   * @opt_param string filterExpression Optional. Filters events by custom keys
   * (https://firebase.google.com/docs/crashlytics/customize-crash-reports#add-
   * keys). Supported forms: * Equality: `custom_keys.level = "vip"` or
   * `custom_keys.level:"vip"` * Presence: `custom_keys.level:*` * OR across
   * values of one key: `custom_keys.level = "vip" OR custom_keys.level =
   * "enterprise"` * AND across different keys: `custom_keys.level = "vip" AND
   * custom_keys.region = "us"` Keys are case-sensitive. Keys and values
   * containing spaces must be double-quoted, for example `custom_keys."app state"
   * = "background"`. OR across different keys, repeating a key within an AND,
   * NOT, and comparators other than `=` and `:` are rejected with
   * INVALID_ARGUMENT. Wildcards are not supported in values; use `custom_keys.:*`
   * to match events that set a key to any value. Only supported for Android and
   * iOS. This filter expression applies in addition to the `filter` field above.
   * The syntax is a subset of AIP-160 (https://google.aip.dev/160).
   * @opt_param int pageSize Optional. The maximum number of events per page. If
   * omitted, defaults to 10.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * calls.
   * @opt_param string readMask Optional. The list of Event fields to include in
   * the response. If omitted, the full event is returned.
   * @return ListEventsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsAppsEvents($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListEventsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsAppsEvents::class, 'Google_Service_FirebaseCrashlytics_Resource_ProjectsAppsEvents');
