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

namespace Google\Service\Merchant;

class ItemIssueSeverity extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const AGGREGATED_SEVERITY_AGGREGATED_ISSUE_SEVERITY_UNSPECIFIED = 'AGGREGATED_ISSUE_SEVERITY_UNSPECIFIED';
  /**
   * Issue disapproves the product in at least one reporting context.
   */
  public const AGGREGATED_SEVERITY_DISAPPROVED = 'DISAPPROVED';
  /**
   * Issue demotes the product in all reporting contexts it affects.
   */
  public const AGGREGATED_SEVERITY_DEMOTED = 'DEMOTED';
  /**
   * Issue resolution is `PENDING_PROCESSING`.
   */
  public const AGGREGATED_SEVERITY_PENDING = 'PENDING';
  protected $collection_key = 'severityPerReportingContext';
  /**
   * Aggregated severity of the issue for all reporting contexts it affects.
   * Reporting contexts included in the computation of the aggregated severity
   * can be restricted using a filter on the `reporting_context` field. **This
   * field can be used for filtering the results.**
   *
   * @var string
   */
  public $aggregatedSeverity;
  protected $severityPerReportingContextType = IssueSeverityPerReportingContext::class;
  protected $severityPerReportingContextDataType = 'array';

  /**
   * Aggregated severity of the issue for all reporting contexts it affects.
   * Reporting contexts included in the computation of the aggregated severity
   * can be restricted using a filter on the `reporting_context` field. **This
   * field can be used for filtering the results.**
   *
   * Accepted values: AGGREGATED_ISSUE_SEVERITY_UNSPECIFIED, DISAPPROVED,
   * DEMOTED, PENDING
   *
   * @param self::AGGREGATED_SEVERITY_* $aggregatedSeverity
   */
  public function setAggregatedSeverity($aggregatedSeverity)
  {
    $this->aggregatedSeverity = $aggregatedSeverity;
  }
  /**
   * @return self::AGGREGATED_SEVERITY_*
   */
  public function getAggregatedSeverity()
  {
    return $this->aggregatedSeverity;
  }
  /**
   * Issue severity per reporting context. Reporting contexts included in this
   * list can be restricted using a filter on the `reporting_context` field.
   *
   * @param IssueSeverityPerReportingContext[] $severityPerReportingContext
   */
  public function setSeverityPerReportingContext($severityPerReportingContext)
  {
    $this->severityPerReportingContext = $severityPerReportingContext;
  }
  /**
   * @return IssueSeverityPerReportingContext[]
   */
  public function getSeverityPerReportingContext()
  {
    return $this->severityPerReportingContext;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ItemIssueSeverity::class, 'Google_Service_Merchant_ItemIssueSeverity');
