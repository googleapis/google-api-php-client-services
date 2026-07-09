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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1EvaluationMetric;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListEvaluationMetricsResponse;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "evaluationMetrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $evaluationMetrics = $aiplatformService->projects_locations_evaluationMetrics;
 *  </code>
 */
class ProjectsLocationsEvaluationMetrics extends \Google\Service\Resource
{
  /**
   * Creates an EvaluationMetric. (evaluationMetrics.create)
   *
   * @param string $parent Required. The resource name of the Location to create
   * the EvaluationMetric in. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1EvaluationMetric $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string evaluationMetricId Optional. The ID to use for the
   * EvaluationMetric, which will become the final component of the
   * EvaluationMetric's resource name. This value should be 1-63 characters, and
   * valid characters are /a-z-/. The first character must be a lowercase letter,
   * and the last character must be a lowercase letter or number.
   * @return GoogleCloudAiplatformV1EvaluationMetric
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1EvaluationMetric $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudAiplatformV1EvaluationMetric::class);
  }
  /**
   * Deletes an EvaluationMetric. (evaluationMetrics.delete)
   *
   * @param string $name Required. The name of the EvaluationMetric resource to be
   * deleted. Format: `projects/{project}/locations/{location}/evaluationMetrics/{
   * evaluation_metric}`
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets an EvaluationMetric. (evaluationMetrics.get)
   *
   * @param string $name Required. The name of the EvaluationMetric resource.
   * Format: `projects/{project}/locations/{location}/evaluationMetrics/{evaluatio
   * n_metric}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1EvaluationMetric
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1EvaluationMetric::class);
  }
  /**
   * Lists EvaluationMetrics.
   * (evaluationMetrics.listProjectsLocationsEvaluationMetrics)
   *
   * @param string $parent Required. The resource name of the Location from which
   * to list the EvaluationMetrics. Format:
   * `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression that matches a subset of
   * the EvaluationMetrics to show. For field names both snake_case and camelCase
   * are supported. For more information about filter syntax, see
   * [AIP-160](https://google.aip.dev/160).
   * @opt_param string orderBy Optional. A comma-separated list of fields to order
   * by, sorted in ascending order by default. Use `desc` after a field name for
   * descending.
   * @opt_param int pageSize Optional. The maximum number of EvaluationMetrics to
   * return.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListEvaluationMetrics` call. Provide this to retrieve the subsequent page.
   * @return GoogleCloudAiplatformV1ListEvaluationMetricsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsEvaluationMetrics($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListEvaluationMetricsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsEvaluationMetrics::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsEvaluationMetrics');
