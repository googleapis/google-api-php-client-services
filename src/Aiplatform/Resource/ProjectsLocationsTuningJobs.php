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

use Google\Service\Aiplatform\GoogleCloudAiplatformV1CancelTuningJobRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListTuningJobsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1RebaseTunedModelRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1TuningJob;
use Google\Service\Aiplatform\GoogleLongrunningOperation;
use Google\Service\Aiplatform\GoogleProtobufEmpty;

/**
 * The "tuningJobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $tuningJobs = $aiplatformService->projects_locations_tuningJobs;
 *  </code>
 */
class ProjectsLocationsTuningJobs extends \Google\Service\Resource
{
  /**
   * Cancels a tuning job. Starts an asynchronous cancellation request. The server
   * makes a best effort to cancel the job, but success is not guaranteed. Clients
   * can use GenAiTuningService.GetTuningJob or other methods to check whether the
   * cancellation succeeded or whether the job completed despite cancellation. On
   * successful cancellation, the tuning job is not deleted. Instead, its state is
   * set to `CANCELLED`, and `error` is set to a status with a
   * `google.rpc.Status.code` of 1, corresponding to `Code.CANCELLED`.
   * (tuningJobs.cancel)
   *
   * @param string $name Required. The name of the tuning job to cancel. Format:
   * `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
   * @param GoogleCloudAiplatformV1CancelTuningJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function cancel($name, GoogleCloudAiplatformV1CancelTuningJobRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('cancel', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Creates a tuning job. A created tuning job will be subsequently executed to
   * start the model tuning process. (tuningJobs.create)
   *
   * @param string $parent Required. The resource name of the location to create
   * the tuning job in. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1TuningJob $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1TuningJob
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1TuningJob $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudAiplatformV1TuningJob::class);
  }
  /**
   * Gets a tuning job. (tuningJobs.get)
   *
   * @param string $name Required. The name of the tuning job to retrieve. Format:
   * `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1TuningJob
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1TuningJob::class);
  }
  /**
   * Lists tuning jobs in a location. (tuningJobs.listProjectsLocationsTuningJobs)
   *
   * @param string $parent Required. The resource name of the location to list the
   * tuning jobs from. Format: `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The standard list filter.
   * @opt_param int pageSize Optional. The standard list page size.
   * @opt_param string pageToken Optional. The standard list page token. Typically
   * obtained from ListTuningJobsResponse.next_page_token of the previous
   * GenAiTuningService.ListTuningJobs call.
   * @return GoogleCloudAiplatformV1ListTuningJobsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsTuningJobs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListTuningJobsResponse::class);
  }
  /**
   * Rebase a tuned model. A rebase operation takes a model that was previously
   * tuned on a base model version, and retunes it on a new base model version.
   * The rebase operation creates a new tuning job and a new tuned model.
   * (tuningJobs.rebaseTunedModel)
   *
   * @param string $parent Required. The resource name of the location in which to
   * rebase the Model. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1RebaseTunedModelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function rebaseTunedModel($parent, GoogleCloudAiplatformV1RebaseTunedModelRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rebaseTunedModel', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsTuningJobs::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsTuningJobs');
