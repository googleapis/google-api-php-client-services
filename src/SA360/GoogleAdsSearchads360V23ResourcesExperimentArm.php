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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesExperimentArm extends \Google\Collection
{
  protected $collection_key = 'inDesignCampaigns';
  protected $assetGroupsType = GoogleAdsSearchads360V23ResourcesExperimentArmAssetGroupInfo::class;
  protected $assetGroupsDataType = 'array';
  /**
   * List of campaigns in the trial arm. The max length is one.
   *
   * @var string[]
   */
  public $campaigns;
  /**
   * Whether this arm is a control arm. A control arm is the arm against which
   * the other arms are compared.
   *
   * @var bool
   */
  public $control;
  /**
   * Immutable. The experiment to which the ExperimentArm belongs.
   *
   * @var string
   */
  public $experiment;
  /**
   * Output only. The in design campaigns in the treatment experiment arm.
   *
   * @var string[]
   */
  public $inDesignCampaigns;
  /**
   * Required. The name of the experiment arm. It must have a minimum length of
   * 1 and maximum length of 1024. It must be unique under an experiment.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the experiment arm. Experiment arm resource
   * names have the form: `customers/{customer_id}/experimentArms/{TrialArm.tria
   * l_id}~{TrialArm.trial_arm_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Traffic split of the trial arm. The value should be between 1 and 100 and
   * must total 100 between the two trial arms.
   *
   * @var string
   */
  public $trafficSplit;

  /**
   * List of asset groups in the experiment arm.
   *
   * @param GoogleAdsSearchads360V23ResourcesExperimentArmAssetGroupInfo[] $assetGroups
   */
  public function setAssetGroups($assetGroups)
  {
    $this->assetGroups = $assetGroups;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesExperimentArmAssetGroupInfo[]
   */
  public function getAssetGroups()
  {
    return $this->assetGroups;
  }
  /**
   * List of campaigns in the trial arm. The max length is one.
   *
   * @param string[] $campaigns
   */
  public function setCampaigns($campaigns)
  {
    $this->campaigns = $campaigns;
  }
  /**
   * @return string[]
   */
  public function getCampaigns()
  {
    return $this->campaigns;
  }
  /**
   * Whether this arm is a control arm. A control arm is the arm against which
   * the other arms are compared.
   *
   * @param bool $control
   */
  public function setControl($control)
  {
    $this->control = $control;
  }
  /**
   * @return bool
   */
  public function getControl()
  {
    return $this->control;
  }
  /**
   * Immutable. The experiment to which the ExperimentArm belongs.
   *
   * @param string $experiment
   */
  public function setExperiment($experiment)
  {
    $this->experiment = $experiment;
  }
  /**
   * @return string
   */
  public function getExperiment()
  {
    return $this->experiment;
  }
  /**
   * Output only. The in design campaigns in the treatment experiment arm.
   *
   * @param string[] $inDesignCampaigns
   */
  public function setInDesignCampaigns($inDesignCampaigns)
  {
    $this->inDesignCampaigns = $inDesignCampaigns;
  }
  /**
   * @return string[]
   */
  public function getInDesignCampaigns()
  {
    return $this->inDesignCampaigns;
  }
  /**
   * Required. The name of the experiment arm. It must have a minimum length of
   * 1 and maximum length of 1024. It must be unique under an experiment.
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
   * Immutable. The resource name of the experiment arm. Experiment arm resource
   * names have the form: `customers/{customer_id}/experimentArms/{TrialArm.tria
   * l_id}~{TrialArm.trial_arm_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Traffic split of the trial arm. The value should be between 1 and 100 and
   * must total 100 between the two trial arms.
   *
   * @param string $trafficSplit
   */
  public function setTrafficSplit($trafficSplit)
  {
    $this->trafficSplit = $trafficSplit;
  }
  /**
   * @return string
   */
  public function getTrafficSplit()
  {
    return $this->trafficSplit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesExperimentArm::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesExperimentArm');
