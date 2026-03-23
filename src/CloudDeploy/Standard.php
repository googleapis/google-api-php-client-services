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

namespace Google\Service\CloudDeploy;

class Standard extends \Google\Model
{
  protected $analysisType = Analysis::class;
  protected $analysisDataType = '';
  protected $postdeployType = Postdeploy::class;
  protected $postdeployDataType = '';
  protected $predeployType = Predeploy::class;
  protected $predeployDataType = '';
  /**
   * Optional. Whether to verify a deployment via `skaffold verify`.
   *
   * @var bool
   */
  public $verify;
  protected $verifyConfigType = Verify::class;
  protected $verifyConfigDataType = '';

  /**
   * Optional. Configuration for the analysis job. If this is not configured,
   * the analysis job will not be present.
   *
   * @param Analysis $analysis
   */
  public function setAnalysis(Analysis $analysis)
  {
    $this->analysis = $analysis;
  }
  /**
   * @return Analysis
   */
  public function getAnalysis()
  {
    return $this->analysis;
  }
  /**
   * Optional. Configuration for the postdeploy job. If this is not configured,
   * the postdeploy job will not be present.
   *
   * @param Postdeploy $postdeploy
   */
  public function setPostdeploy(Postdeploy $postdeploy)
  {
    $this->postdeploy = $postdeploy;
  }
  /**
   * @return Postdeploy
   */
  public function getPostdeploy()
  {
    return $this->postdeploy;
  }
  /**
   * Optional. Configuration for the predeploy job. If this is not configured,
   * the predeploy job will not be present.
   *
   * @param Predeploy $predeploy
   */
  public function setPredeploy(Predeploy $predeploy)
  {
    $this->predeploy = $predeploy;
  }
  /**
   * @return Predeploy
   */
  public function getPredeploy()
  {
    return $this->predeploy;
  }
  /**
   * Optional. Whether to verify a deployment via `skaffold verify`.
   *
   * @param bool $verify
   */
  public function setVerify($verify)
  {
    $this->verify = $verify;
  }
  /**
   * @return bool
   */
  public function getVerify()
  {
    return $this->verify;
  }
  /**
   * Optional. Configuration for the verify job. Cannot be set if `verify` is
   * set to true.
   *
   * @param Verify $verifyConfig
   */
  public function setVerifyConfig(Verify $verifyConfig)
  {
    $this->verifyConfig = $verifyConfig;
  }
  /**
   * @return Verify
   */
  public function getVerifyConfig()
  {
    return $this->verifyConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Standard::class, 'Google_Service_CloudDeploy_Standard');
