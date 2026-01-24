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

class Finding extends \Google\Collection
{
  protected $collection_key = 'reoccurrenceTimes';
  /**
   * Optional. AI summary of the finding.
   *
   * @var string
   */
  public $aiSummary;
  /**
   * Optional. Name of the alert that this finding is bound to.
   *
   * @var string
   */
  public $alert;
  /**
   * Optional. Optional - asset name if known. Format:
   * vaults/{vault}/assets/{asset}
   *
   * @var string
   */
  public $asset;
  protected $auditType = Audit::class;
  protected $auditDataType = '';
  /**
   * Optional. Configuration names that are bound to this finding.
   *
   * @var string[]
   */
  public $configurations;
  protected $detailType = FindingDetail::class;
  protected $detailDataType = '';
  /**
   * Required. A short descriptive title for the finding <= 250 chars. EX:
   * "Actor 'baddy' offering $1000 for credentials of 'goodguy'".
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Optional - name of the issue that this finding is bound to.
   * Format: vaults/{vault}/issues/{issue}
   *
   * @var string
   */
  public $issue;
  /**
   * Identifier. Server generated name for the finding (leave clear during
   * creation). Format: vaults/{vault}/findings/{finding}
   *
   * @var string
   */
  public $name;
  /**
   * Required. Logical source of this finding (name of the sub-engine).
   *
   * @var string
   */
  public $provider;
  protected $relevanceAnalysisType = RelevanceAnalysis::class;
  protected $relevanceAnalysisDataType = '';
  /**
   * Output only. When identical finding (same labels and same details) has re-
   * occurred.
   *
   * @var string[]
   */
  public $reoccurrenceTimes;
  /**
   * Optional. Deprecated: Use the `severity_analysis` field instead. Base
   * severity score from the finding source.
   *
   * @deprecated
   * @var float
   */
  public $severity;
  protected $severityAnalysisType = SeverityAnalysis::class;
  protected $severityAnalysisDataType = '';

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
   * Optional. Name of the alert that this finding is bound to.
   *
   * @param string $alert
   */
  public function setAlert($alert)
  {
    $this->alert = $alert;
  }
  /**
   * @return string
   */
  public function getAlert()
  {
    return $this->alert;
  }
  /**
   * Optional. Optional - asset name if known. Format:
   * vaults/{vault}/assets/{asset}
   *
   * @param string $asset
   */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /**
   * @return string
   */
  public function getAsset()
  {
    return $this->asset;
  }
  /**
   * Output only. Audit data about the finding.
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
   * Optional. Configuration names that are bound to this finding.
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
   * Required. Holder of the domain specific details of the finding.
   *
   * @param FindingDetail $detail
   */
  public function setDetail(FindingDetail $detail)
  {
    $this->detail = $detail;
  }
  /**
   * @return FindingDetail
   */
  public function getDetail()
  {
    return $this->detail;
  }
  /**
   * Required. A short descriptive title for the finding <= 250 chars. EX:
   * "Actor 'baddy' offering $1000 for credentials of 'goodguy'".
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
   * Optional. Optional - name of the issue that this finding is bound to.
   * Format: vaults/{vault}/issues/{issue}
   *
   * @param string $issue
   */
  public function setIssue($issue)
  {
    $this->issue = $issue;
  }
  /**
   * @return string
   */
  public function getIssue()
  {
    return $this->issue;
  }
  /**
   * Identifier. Server generated name for the finding (leave clear during
   * creation). Format: vaults/{vault}/findings/{finding}
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
   * Required. Logical source of this finding (name of the sub-engine).
   *
   * @param string $provider
   */
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /**
   * @return string
   */
  public function getProvider()
  {
    return $this->provider;
  }
  /**
   * Output only. High-Precision Relevance Analysis verdict for the finding.
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
   * Output only. When identical finding (same labels and same details) has re-
   * occurred.
   *
   * @param string[] $reoccurrenceTimes
   */
  public function setReoccurrenceTimes($reoccurrenceTimes)
  {
    $this->reoccurrenceTimes = $reoccurrenceTimes;
  }
  /**
   * @return string[]
   */
  public function getReoccurrenceTimes()
  {
    return $this->reoccurrenceTimes;
  }
  /**
   * Optional. Deprecated: Use the `severity_analysis` field instead. Base
   * severity score from the finding source.
   *
   * @deprecated
   * @param float $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @deprecated
   * @return float
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * Output only. High-Precision Severity Analysis verdict for the finding.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Finding::class, 'Google_Service_ThreatIntelligenceService_Finding');
