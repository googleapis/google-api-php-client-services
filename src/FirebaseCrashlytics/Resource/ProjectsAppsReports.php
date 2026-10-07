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

use Google\Service\FirebaseCrashlytics\ListReportsResponse;
use Google\Service\FirebaseCrashlytics\Report;

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasecrashlyticsService = new Google\Service\FirebaseCrashlytics(...);
 *   $reports = $firebasecrashlyticsService->projects_apps_reports;
 *  </code>
 */
class ProjectsAppsReports extends \Google\Service\Resource
{
  /**
   * Get a report with its computed results. (reports.get)
   *
   * @param string $name Required. The report name. Format:
   * "projects/{project}/apps/{app_id}/reports/{report}".
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
   * @opt_param string granularity Optional. The report response will contain one
   * data point per time grain. If omitted, the report will contain a single data
   * point for the complete interval.
   * @opt_param string metricsMode Optional. Controls whether metrics are raw
   * observed values (mobile and web) or extrapolated values (web only). If
   * omitted, defaults to OBSERVED.
   * @opt_param int pageSize Optional. The maximum number of result groups to
   * return. If omitted, defaults to 25.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * call. The page token is only valid for the exact same set of filters, which
   * must also be sent in subsequent requests. This token is valid for 10 minutes
   * after the first request.
   * @opt_param string view Optional. Response view. If not set, defaults to
   * `REPORT_VIEW_FULL`.
   * @return Report
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Report::class);
  }
  /**
   * List all of the available reports. (reports.listProjectsAppsReports)
   *
   * @param string $parent Required. The firebase application. Format:
   * "projects/{project}/apps/{app_id}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. Response view. If not set, defaults to
   * `REPORT_VIEW_BASIC`. `REPORT_VIEW_FULL` is not supported for list operations.
   * @return ListReportsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsAppsReports($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListReportsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsAppsReports::class, 'Google_Service_FirebaseCrashlytics_Resource_ProjectsAppsReports');
