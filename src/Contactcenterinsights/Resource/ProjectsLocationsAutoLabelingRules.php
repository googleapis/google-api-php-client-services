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

namespace Google\Service\Contactcenterinsights\Resource;

use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1AutoLabelingRule;
use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1ListAutoLabelingRulesResponse;
use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleRequest;
use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleResponse;
use Google\Service\Contactcenterinsights\GoogleProtobufEmpty;

/**
 * The "autoLabelingRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactcenterinsightsService = new Google\Service\Contactcenterinsights(...);
 *   $autoLabelingRules = $contactcenterinsightsService->projects_locations_autoLabelingRules;
 *  </code>
 */
class ProjectsLocationsAutoLabelingRules extends \Google\Service\Resource
{
  /**
   * Creates an auto labeling rule. (autoLabelingRules.create)
   *
   * @param string $parent Required. The project and location to create the auto
   * labeling rule in. Format: projects/{project}/locations/{location}
   * @param GoogleCloudContactcenterinsightsV1AutoLabelingRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string autoLabelingRuleId Required. The ID to use for the auto
   * labeling rule, which will become the final component of the auto labeling
   * rule's resource name.
   * @return GoogleCloudContactcenterinsightsV1AutoLabelingRule
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudContactcenterinsightsV1AutoLabelingRule $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudContactcenterinsightsV1AutoLabelingRule::class);
  }
  /**
   * Deletes an auto labeling rule. (autoLabelingRules.delete)
   *
   * @param string $name Required. The name of the auto labeling rule to delete.
   * Format: projects/{project}/locations/{location}/autoLabelingRules/{auto_label
   * ing_rule}
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Gets an auto labeling rule. (autoLabelingRules.get)
   *
   * @param string $name Required. The name of the auto labeling rule to get.
   * Format: projects/{project}/locations/{location}/autoLabelingRules/{auto_label
   * ing_rule}
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContactcenterinsightsV1AutoLabelingRule
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudContactcenterinsightsV1AutoLabelingRule::class);
  }
  /**
   * Lists auto labeling rules.
   * (autoLabelingRules.listProjectsLocationsAutoLabelingRules)
   *
   * @param string $parent Required. The project and location to list auto
   * labeling rules from. Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of auto labeling rules
   * to return in a single response. If unspecified, at most 100 rules will be
   * returned. The maximum value is 1000; values above 1000 will be coerced to
   * 1000.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous List request, if any.
   * @return GoogleCloudContactcenterinsightsV1ListAutoLabelingRulesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAutoLabelingRules($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudContactcenterinsightsV1ListAutoLabelingRulesResponse::class);
  }
  /**
   * Updates an auto labeling rule. (autoLabelingRules.patch)
   *
   * @param string $name Identifier. The resource name of the auto-labeling rule.
   * Format: projects/{project}/locations/{location}/autoLabelingRules/{auto_label
   * ing_rule}
   * @param GoogleCloudContactcenterinsightsV1AutoLabelingRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to be updated.
   * @return GoogleCloudContactcenterinsightsV1AutoLabelingRule
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudContactcenterinsightsV1AutoLabelingRule $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudContactcenterinsightsV1AutoLabelingRule::class);
  }
  /**
   * Tests auto labeling rules against a conversation. (autoLabelingRules.test)
   *
   * @param string $parent Required. The parent project and location. Format:
   * projects/{project}/locations/{location}
   * @param GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleResponse
   * @throws \Google\Service\Exception
   */
  public function test($parent, GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('test', [$params], GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAutoLabelingRules::class, 'Google_Service_Contactcenterinsights_Resource_ProjectsLocationsAutoLabelingRules');
