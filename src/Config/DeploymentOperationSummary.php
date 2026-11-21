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

namespace Google\Service\Config;

class DeploymentOperationSummary extends \Google\Model
{
  /**
   * Unspecified deployment step
   */
  public const DEPLOYMENT_STEP_DEPLOYMENT_STEP_UNSPECIFIED = 'DEPLOYMENT_STEP_UNSPECIFIED';
  /**
   * Infra Manager is creating a Google Cloud Storage bucket to store artifacts
   * and metadata about the deployment and revision
   */
  public const DEPLOYMENT_STEP_PREPARING_STORAGE_BUCKET = 'PREPARING_STORAGE_BUCKET';
  /**
   * Downloading the blueprint onto the Google Cloud Storage bucket
   */
  public const DEPLOYMENT_STEP_DOWNLOADING_BLUEPRINT = 'DOWNLOADING_BLUEPRINT';
  /**
   * Initializing Terraform using `terraform init`
   */
  public const DEPLOYMENT_STEP_RUNNING_TF_INIT = 'RUNNING_TF_INIT';
  /**
   * Running `terraform plan`
   */
  public const DEPLOYMENT_STEP_RUNNING_TF_PLAN = 'RUNNING_TF_PLAN';
  /**
   * Actuating resources using Terraform using `terraform apply`
   */
  public const DEPLOYMENT_STEP_RUNNING_TF_APPLY = 'RUNNING_TF_APPLY';
  /**
   * Destroying resources using Terraform using `terraform destroy`
   */
  public const DEPLOYMENT_STEP_RUNNING_TF_DESTROY = 'RUNNING_TF_DESTROY';
  /**
   * Validating the uploaded TF state file when unlocking a deployment
   */
  public const DEPLOYMENT_STEP_RUNNING_TF_VALIDATE = 'RUNNING_TF_VALIDATE';
  /**
   * Unlocking a deployment
   */
  public const DEPLOYMENT_STEP_UNLOCKING_DEPLOYMENT = 'UNLOCKING_DEPLOYMENT';
  /**
   * Operation was successful
   */
  public const DEPLOYMENT_STEP_SUCCEEDED = 'SUCCEEDED';
  /**
   * Operation failed
   */
  public const DEPLOYMENT_STEP_FAILED = 'FAILED';
  /**
   * Validating the provided repository.
   */
  public const DEPLOYMENT_STEP_VALIDATING_REPOSITORY = 'VALIDATING_REPOSITORY';
  /**
   * Running quota validation
   */
  public const DEPLOYMENT_STEP_RUNNING_QUOTA_VALIDATION = 'RUNNING_QUOTA_VALIDATION';
  /**
   * Initializing the actuation engine.
   */
  public const DEPLOYMENT_STEP_RUNNING_ENGINE_INIT = 'RUNNING_ENGINE_INIT';
  /**
   * Generating an execution plan using the actuation engine.
   */
  public const DEPLOYMENT_STEP_RUNNING_ENGINE_PLAN = 'RUNNING_ENGINE_PLAN';
  /**
   * Actuating resources using the actuation engine.
   */
  public const DEPLOYMENT_STEP_RUNNING_ENGINE_APPLY = 'RUNNING_ENGINE_APPLY';
  /**
   * Destroying resources using the actuation engine.
   */
  public const DEPLOYMENT_STEP_RUNNING_ENGINE_DESTROY = 'RUNNING_ENGINE_DESTROY';
  /**
   * Validating the uploaded state file when unlocking a deployment.
   */
  public const DEPLOYMENT_STEP_RUNNING_ENGINE_VALIDATE = 'RUNNING_ENGINE_VALIDATE';
  /**
   * Output only. Location of Deployment operations artifacts in
   * `gs://{bucket}/{object}` format.
   *
   * @var string
   */
  public $artifacts;
  /**
   * Output only. Cloud Build instance UUID associated with this operation.
   *
   * @var string
   */
  public $build;
  /**
   * Output only. Location of Deployment operations content in
   * `gs://{bucket}/{object}` format.
   *
   * @var string
   */
  public $content;
  /**
   * Output only. The current step the deployment operation is running.
   *
   * @var string
   */
  public $deploymentStep;
  /**
   * Output only. Location of Deployment operations logs in
   * `gs://{bucket}/{object}` format.
   *
   * @var string
   */
  public $logs;

  /**
   * Output only. Location of Deployment operations artifacts in
   * `gs://{bucket}/{object}` format.
   *
   * @param string $artifacts
   */
  public function setArtifacts($artifacts)
  {
    $this->artifacts = $artifacts;
  }
  /**
   * @return string
   */
  public function getArtifacts()
  {
    return $this->artifacts;
  }
  /**
   * Output only. Cloud Build instance UUID associated with this operation.
   *
   * @param string $build
   */
  public function setBuild($build)
  {
    $this->build = $build;
  }
  /**
   * @return string
   */
  public function getBuild()
  {
    return $this->build;
  }
  /**
   * Output only. Location of Deployment operations content in
   * `gs://{bucket}/{object}` format.
   *
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Output only. The current step the deployment operation is running.
   *
   * Accepted values: DEPLOYMENT_STEP_UNSPECIFIED, PREPARING_STORAGE_BUCKET,
   * DOWNLOADING_BLUEPRINT, RUNNING_TF_INIT, RUNNING_TF_PLAN, RUNNING_TF_APPLY,
   * RUNNING_TF_DESTROY, RUNNING_TF_VALIDATE, UNLOCKING_DEPLOYMENT, SUCCEEDED,
   * FAILED, VALIDATING_REPOSITORY, RUNNING_QUOTA_VALIDATION,
   * RUNNING_ENGINE_INIT, RUNNING_ENGINE_PLAN, RUNNING_ENGINE_APPLY,
   * RUNNING_ENGINE_DESTROY, RUNNING_ENGINE_VALIDATE
   *
   * @param self::DEPLOYMENT_STEP_* $deploymentStep
   */
  public function setDeploymentStep($deploymentStep)
  {
    $this->deploymentStep = $deploymentStep;
  }
  /**
   * @return self::DEPLOYMENT_STEP_*
   */
  public function getDeploymentStep()
  {
    return $this->deploymentStep;
  }
  /**
   * Output only. Location of Deployment operations logs in
   * `gs://{bucket}/{object}` format.
   *
   * @param string $logs
   */
  public function setLogs($logs)
  {
    $this->logs = $logs;
  }
  /**
   * @return string
   */
  public function getLogs()
  {
    return $this->logs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeploymentOperationSummary::class, 'Google_Service_Config_DeploymentOperationSummary');
