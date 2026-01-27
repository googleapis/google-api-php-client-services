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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRule extends \Google\Model
{
  protected $integrationSelectorType = GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleIntegrationSelector::class;
  protected $integrationSelectorDataType = '';
  protected $lineageEnablementType = GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleLineageEnablement::class;
  protected $lineageEnablementDataType = '';

  /**
   * Required. Integration selector of the rule. The rule is only applied to the
   * Integration selected by the selector.
   *
   * @param GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleIntegrationSelector $integrationSelector
   */
  public function setIntegrationSelector(GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleIntegrationSelector $integrationSelector)
  {
    $this->integrationSelector = $integrationSelector;
  }
  /**
   * @return GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleIntegrationSelector
   */
  public function getIntegrationSelector()
  {
    return $this->integrationSelector;
  }
  /**
   * Required. Lineage enablement configuration. Defines configurations for the
   * ingestion of lineage for the resource and its children. If unspecified, the
   * ingestion will be enabled only if it was configured in the resource's
   * parent.
   *
   * @param GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleLineageEnablement $lineageEnablement
   */
  public function setLineageEnablement(GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleLineageEnablement $lineageEnablement)
  {
    $this->lineageEnablement = $lineageEnablement;
  }
  /**
   * @return GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRuleLineageEnablement
   */
  public function getLineageEnablement()
  {
    return $this->lineageEnablement;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRule::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestionIngestionRule');
