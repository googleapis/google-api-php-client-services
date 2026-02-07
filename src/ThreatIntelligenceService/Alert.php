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

namespace Google\Service\ThreatIntelligenceService;

class Alert extends \Google\Collection
{
  /**
   * Default value, should never be set.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * alert is new.
   */
  public const STATE_NEW = 'NEW';
  /**
   * alert was read by a human.
   */
  public const STATE_READ = 'READ';
  /**
   * alert has been triaged.
   */
  public const STATE_TRIAGED = 'TRIAGED';
  /**
   * alert has been escalated.
   */
  public const STATE_ESCALATED = 'ESCALATED';
  /**
   * alert has been resolved.
   */
  public const STATE_RESOLVED = 'RESOLVED';
  /**
   * alert is a duplicate of another alert.
   */
  public const STATE_DUPLICATE = 'DUPLICATE';
  /**
   * alert is a false positive and should be ignored.
   */
  public const STATE_FALSE_POSITIVE = 'FALSE_POSITIVE';
  /**
   * alert is not actionable.
   */
  public const STATE_NOT_ACTIONABLE = 'NOT_ACTIONABLE';
  /**
   * alert is benign.
   */
  public const STATE_BENIGN = 'BENIGN';
  /**
   * alert is tracked externally.
   */
  public const STATE_TRACKED_EXTERNALLY = 'TRACKED_EXTERNALLY';
  protected $collection_key = 'findings';
  /**
   * Optional. AI summary of the finding.
   *
   * @var string
   */
  public $aiSummary;
  /**
   * Output only. Assets that are impacted by this alert.
   *
   * @var string[]
   */
  public $assets;
  protected $auditType = Audit::class;
  protected $auditDataType = '';
  /**
   * Output only. The resource names of the Configurations bound to this alert.
   * Format: projects/{project}/configurations/{configuration}
   *
   * @var string[]
   */
  public $configurations;
  protected $detailType = AlertDetail::class;
  protected $detailDataType = '';
  /**
   * Output only. A short title for the alert.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. alert name of the alert this alert is a duplicate of. Format:
   * projects/{project}/alerts/{alert}
   *
   * @var string
   */
  public $duplicateOf;
  /**
   * Output only. alert names of the alerts that are duplicates of this alert.
   * Format: projects/{project}/alerts/{alert}
   *
   * @var string[]
   */
  public $duplicatedBy;
  /**
   * Optional. If included when updating an alert, this should be set to the
   * current etag of the alert. If the etags do not match, the update will be
   * rejected and an ABORTED error will be returned.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. External ID for the alert. This is used internally to provide
   * protection against out of order updates.
   *
   * @var string
   */
  public $externalId;
  /**
   * Output only. The number of findings associated with this alert.
   *
   * @var string
   */
  public $findingCount;
  /**
   * Output only. Findings that are covered by this alert.
   *
   * @var string[]
   */
  public $findings;
  /**
   * Identifier. Server generated name for the alert. format is
   * projects/{project}/alerts/{alert}
   *
   * @var string
   */
  public $name;
  protected $priorityAnalysisType = PriorityAnalysis::class;
  protected $priorityAnalysisDataType = '';
  protected $relevanceAnalysisType = RelevanceAnalysis::class;
  protected $relevanceAnalysisDataType = '';
  protected $severityAnalysisType = SeverityAnalysis::class;
  protected $severityAnalysisDataType = '';
  /**
   * Output only. State of the alert.
   *
   * @var string
   */
  public $state;

  /**
   * Optional. AI summary of the finding.
   *
   * @param string $aiSummary
   */
  public function setAiSummary($aiSummary)
  {
    $this->aiSummary = $aiSummary;
  }
  /**
   * @return string
   */
  public function getAiSummary()
  {
    return $this->aiSummary;
  }
  /**
   * Output only. Assets that are impacted by this alert.
   *
   * @param string[] $assets
   */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /**
   * @return string[]
   */
  public function getAssets()
  {
    return $this->assets;
  }
  /**
   * Output only. Audit information for the alert.
   *
   * @param Audit $audit
   */
  public function setAudit(Audit $audit)
  {
    $this->audit = $audit;
  }
  /**
   * @return Audit
   */
  public function getAudit()
  {
    return $this->audit;
  }
  /**
   * Output only. The resource names of the Configurations bound to this alert.
   * Format: projects/{project}/configurations/{configuration}
   *
   * @param string[] $configurations
   */
  public function setConfigurations($configurations)
  {
    $this->configurations = $configurations;
  }
  /**
   * @return string[]
   */
  public function getConfigurations()
  {
    return $this->configurations;
  }
  /**
   * Output only. Details object for the alert, not all alerts will have a
   * details object.
   *
   * @param AlertDetail $detail
   */
  public function setDetail(AlertDetail $detail)
  {
    $this->detail = $detail;
  }
  /**
   * @return AlertDetail
   */
  public function getDetail()
  {
    return $this->detail;
  }
  /**
   * Output only. A short title for the alert.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. alert name of the alert this alert is a duplicate of. Format:
   * projects/{project}/alerts/{alert}
   *
   * @param string $duplicateOf
   */
  public function setDuplicateOf($duplicateOf)
  {
    $this->duplicateOf = $duplicateOf;
  }
  /**
   * @return string
   */
  public function getDuplicateOf()
  {
    return $this->duplicateOf;
  }
  /**
   * Output only. alert names of the alerts that are duplicates of this alert.
   * Format: projects/{project}/alerts/{alert}
   *
   * @param string[] $duplicatedBy
   */
  public function setDuplicatedBy($duplicatedBy)
  {
    $this->duplicatedBy = $duplicatedBy;
  }
  /**
   * @return string[]
   */
  public function getDuplicatedBy()
  {
    return $this->duplicatedBy;
  }
  /**
   * Optional. If included when updating an alert, this should be set to the
   * current etag of the alert. If the etags do not match, the update will be
   * rejected and an ABORTED error will be returned.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. External ID for the alert. This is used internally to provide
   * protection against out of order updates.
   *
   * @param string $externalId
   */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /**
   * @return string
   */
  public function getExternalId()
  {
    return $this->externalId;
  }
  /**
   * Output only. The number of findings associated with this alert.
   *
   * @param string $findingCount
   */
  public function setFindingCount($findingCount)
  {
    $this->findingCount = $findingCount;
  }
  /**
   * @return string
   */
  public function getFindingCount()
  {
    return $this->findingCount;
  }
  /**
   * Output only. Findings that are covered by this alert.
   *
   * @param string[] $findings
   */
  public function setFindings($findings)
  {
    $this->findings = $findings;
  }
  /**
   * @return string[]
   */
  public function getFindings()
  {
    return $this->findings;
  }
  /**
   * Identifier. Server generated name for the alert. format is
   * projects/{project}/alerts/{alert}
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
   * Output only. High-Precision Priority Analysis for the alert.
   *
   * @param PriorityAnalysis $priorityAnalysis
   */
  public function setPriorityAnalysis(PriorityAnalysis $priorityAnalysis)
  {
    $this->priorityAnalysis = $priorityAnalysis;
  }
  /**
   * @return PriorityAnalysis
   */
  public function getPriorityAnalysis()
  {
    return $this->priorityAnalysis;
  }
  /**
   * Output only. High-Precision Relevance Analysis verdict for the alert.
   *
   * @param RelevanceAnalysis $relevanceAnalysis
   */
  public function setRelevanceAnalysis(RelevanceAnalysis $relevanceAnalysis)
  {
    $this->relevanceAnalysis = $relevanceAnalysis;
  }
  /**
   * @return RelevanceAnalysis
   */
  public function getRelevanceAnalysis()
  {
    return $this->relevanceAnalysis;
  }
  /**
   * Output only. High-Precision Severity Analysis for the alert.
   *
   * @param SeverityAnalysis $severityAnalysis
   */
  public function setSeverityAnalysis(SeverityAnalysis $severityAnalysis)
  {
    $this->severityAnalysis = $severityAnalysis;
  }
  /**
   * @return SeverityAnalysis
   */
  public function getSeverityAnalysis()
  {
    return $this->severityAnalysis;
  }
  /**
   * Output only. State of the alert.
   *
   * Accepted values: STATE_UNSPECIFIED, NEW, READ, TRIAGED, ESCALATED,
   * RESOLVED, DUPLICATE, FALSE_POSITIVE, NOT_ACTIONABLE, BENIGN,
   * TRACKED_EXTERNALLY
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Alert::class, 'Google_Service_ThreatIntelligenceService_Alert');
