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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ReasoningEngineSpecBuildSpec extends \Google\Model
{
  /**
   * Optional. The service account that Cloud Build uses to run the build. This
   * field is only applicable when `worker_pool` is specified (i.e., for custom
   * worker pools). If `worker_pool` is not specified, this field is ignored and
   * the build runs using the Google-managed service agent. Format:
   * `projects/{project}/serviceAccounts/{service_account}` or
   * `{service_account}@{project}.iam.gserviceaccount.com`
   *
   * @var string
   */
  public $serviceAccount;
  /**
   * Optional. Identifier. The resource name of the Cloud Build WorkerPool to
   * use for the build. Format:
   * `projects/{project}/locations/{location}/workerPools/{worker_pool}`
   *
   * @var string
   */
  public $workerPool;

  /**
   * Optional. The service account that Cloud Build uses to run the build. This
   * field is only applicable when `worker_pool` is specified (i.e., for custom
   * worker pools). If `worker_pool` is not specified, this field is ignored and
   * the build runs using the Google-managed service agent. Format:
   * `projects/{project}/serviceAccounts/{service_account}` or
   * `{service_account}@{project}.iam.gserviceaccount.com`
   *
   * @param string $serviceAccount
   */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return string
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /**
   * Optional. Identifier. The resource name of the Cloud Build WorkerPool to
   * use for the build. Format:
   * `projects/{project}/locations/{location}/workerPools/{worker_pool}`
   *
   * @param string $workerPool
   */
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /**
   * @return string
   */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecBuildSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecBuildSpec');
