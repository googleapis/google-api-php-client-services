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

namespace Google\Service\ThreatIntelligenceService\Resource;

use Google\Service\ThreatIntelligenceService\Alert;
use Google\Service\ThreatIntelligenceService\EnumerateAlertFacetsResponse;
use Google\Service\ThreatIntelligenceService\ListAlertsResponse;
use Google\Service\ThreatIntelligenceService\MarkAlertAsBenignRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsDuplicateRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsEscalatedRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsFalsePositiveRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsNotActionableRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsReadRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsResolvedRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsTrackedExternallyRequest;
use Google\Service\ThreatIntelligenceService\MarkAlertAsTriagedRequest;
use Google\Service\ThreatIntelligenceService\RefreshAlertUriStatusRequest;
use Google\Service\ThreatIntelligenceService\RefreshAlertUriStatusResponse;
use Google\Service\ThreatIntelligenceService\ReportAlertUriRequest;
use Google\Service\ThreatIntelligenceService\ReportAlertUriResponse;

/**
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $threatintelligenceService = new Google\Service\ThreatIntelligenceService(...);
 *   $alerts = $threatintelligenceService->projects_alerts;
 *  </code>
 */
class ProjectsAlerts extends \Google\Service\Resource
{
  /**
   * Marks an alert as benign - BENIGN. (alerts.benign)
   *
   * @param string $name Required. Name of the alert to mark as a benign. Format:
   * projects/{project}/alerts/{alert}
   * @param MarkAlertAsBenignRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function benign($name, MarkAlertAsBenignRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('benign', [$params], Alert::class);
  }
  /**
   * Marks an alert as a duplicate of another alert. - DUPLICATE.
   * (alerts.duplicate)
   *
   * @param string $name Required. Name of the alert to mark as a duplicate.
   * Format: projects/{project}/alerts/{alert}
   * @param MarkAlertAsDuplicateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function duplicate($name, MarkAlertAsDuplicateRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('duplicate', [$params], Alert::class);
  }
  /**
   * EnumerateAlertFacets returns the facets and the number of alerts that meet
   * the filter criteria and have that value for each facet.
   * (alerts.enumerateFacets)
   *
   * @param string $parent Required. Parent of the alerts.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter on what alerts will be enumerated.
   * @return EnumerateAlertFacetsResponse
   * @throws \Google\Service\Exception
   */
  public function enumerateFacets($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('enumerateFacets', [$params], EnumerateAlertFacetsResponse::class);
  }
  /**
   * Marks an alert as escalated - ESCALATED. (alerts.escalate)
   *
   * @param string $name Required. Name of the alert to mark as escalated. Format:
   * projects/{project}/alerts/{alert}
   * @param MarkAlertAsEscalatedRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function escalate($name, MarkAlertAsEscalatedRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('escalate', [$params], Alert::class);
  }
  /**
   * Marks an alert as a false positive - FALSE_POSITIVE. (alerts.falsePositive)
   *
   * @param string $name Required. Name of the alert to mark as a false positive.
   * Format: projects/{project}/alerts/{alert}
   * @param MarkAlertAsFalsePositiveRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function falsePositive($name, MarkAlertAsFalsePositiveRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('falsePositive', [$params], Alert::class);
  }
  /**
   * Get an alert by name. (alerts.get)
   *
   * @param string $name Required. Name of the alert to get. Format:
   * projects/{project}/alerts/{alert}
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Alert::class);
  }
  /**
   * Get a list of alerts that meet the filter criteria.
   * (alerts.listProjectsAlerts)
   *
   * @param string $parent Required. Parent of the alerts. Format:
   * projects/{project}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter criteria.
   * @opt_param string orderBy Optional. Order by criteria in the csv format:
   * "field1,field2 desc" or "field1,field2" or "field1 asc, field2".
   * @opt_param int pageSize Optional. Page size.
   * @opt_param string pageToken Optional. Page token.
   * @return ListAlertsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsAlerts($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAlertsResponse::class);
  }
  /**
   * Marks an alert as not actionable - NOT_ACTIONABLE. (alerts.notActionable)
   *
   * @param string $name Required. Name of the alert to mark as a not actionable.
   * Format: projects/{project}/alerts/{alert}
   * @param MarkAlertAsNotActionableRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function notActionable($name, MarkAlertAsNotActionableRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('notActionable', [$params], Alert::class);
  }
  /**
   * Marks an alert as read - READ. (alerts.read)
   *
   * @param string $name Required. Name of the alert to mark as read. Format:
   * projects/{project}/alerts/{alert}
   * @param MarkAlertAsReadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function read($name, MarkAlertAsReadRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('read', [$params], Alert::class);
  }
  /**
   * Return the status of a URI submitted to Google WebRisk.
   * (alerts.refreshUriStatus)
   *
   * @param string $name Required. Name of alert to refresh status from WebRisk
   * @param RefreshAlertUriStatusRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RefreshAlertUriStatusResponse
   * @throws \Google\Service\Exception
   */
  public function refreshUriStatus($name, RefreshAlertUriStatusRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('refreshUriStatus', [$params], RefreshAlertUriStatusResponse::class);
  }
  /**
   * Report the URI associated with an alert to Google WebRisk.
   * (alerts.reportAlertUri)
   *
   * @param string $name Required. Name of alert to submit to WebRisk.
   * @param ReportAlertUriRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ReportAlertUriResponse
   * @throws \Google\Service\Exception
   */
  public function reportAlertUri($name, ReportAlertUriRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('reportAlertUri', [$params], ReportAlertUriResponse::class);
  }
  /**
   * Marks an alert to closed state - RESOLVED. (alerts.resolve)
   *
   * @param string $name Required. Name of the alert to mark as resolved. Format:
   * projects/{project}/alerts/{alert}
   * @param MarkAlertAsResolvedRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function resolve($name, MarkAlertAsResolvedRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('resolve', [$params], Alert::class);
  }
  /**
   * Marks an alert as tracked externally - TRACKED_EXTERNALLY.
   * (alerts.trackExternally)
   *
   * @param string $name Required. Name of the alert to mark as tracked
   * externally. Format: projects/{project}/alerts/{alert}
   * @param MarkAlertAsTrackedExternallyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function trackExternally($name, MarkAlertAsTrackedExternallyRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('trackExternally', [$params], Alert::class);
  }
  /**
   * Marks an alert as triaged - TRIAGED. (alerts.triage)
   *
   * @param string $name Required. Name of the alert to mark as a triaged. Format:
   * projects/{project}/alerts/{alert}
   * @param MarkAlertAsTriagedRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Alert
   * @throws \Google\Service\Exception
   */
  public function triage($name, MarkAlertAsTriagedRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('triage', [$params], Alert::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsAlerts::class, 'Google_Service_ThreatIntelligenceService_Resource_ProjectsAlerts');
