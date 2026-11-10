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

namespace Google\Service\Batch;

class InstancePolicyOrTemplate extends \Google\Model
{
  /**
   * Optional. Set this field to `true` if you want Batch to block project-level
   * SSH keys from accessing this job's VMs. Alternatively, you can configure
   * the job to specify a VM instance template that blocks project-level SSH
   * keys. In either case, Batch blocks project-level SSH keys while creating
   * the VMs for this job. Batch allows project-level SSH keys for a job's VMs
   * only if all the following are true: + This field is undefined or set to
   * `false`. + The job's VM instance template (if any) doesn't block project-
   * level SSH keys. Notably, you can override this behavior by manually
   * updating a VM to block or allow project-level SSH keys. For more
   * information about blocking project-level SSH keys, see the Compute Engine
   * documentation: https://cloud.google.com/compute/docs/connect/restrict-ssh-
   * keys#block-keys
   *
   * @var bool
   */
  public $blockProjectSshKeys;
  /**
   * Set this field true if you want Batch to help fetch drivers from a third
   * party location and install them for GPUs specified in `policy.accelerators`
   * or `instance_template` on your behalf. Default is false. For Container-
   * Optimized Image cases, Batch will install the accelerator driver following
   * milestones of https://cloud.google.com/container-optimized-os/docs/release-
   * notes. For non Container-Optimized Image cases, following
   * https://github.com/GoogleCloudPlatform/compute-gpu-
   * installation/blob/main/linux/install_gpu_driver.py.
   *
   * @var bool
   */
  public $installGpuDrivers;
  /**
   * Optional. Set this field true if you want Batch to install Ops Agent on
   * your behalf. Default is false.
   *
   * @var bool
   */
  public $installOpsAgent;
  /**
   * An instance template used to create VMs. Batch supports global and regional
   * instance templates from the same project as the job. In case of a regional
   * instance template, the job and the instance template must be in the same
   * region. As shown in the following examples, you can specify the instance
   * template as either only its ID, only its name (not unique), or a partial or
   * full URL. If you specify only its name, then Batch checks for a global
   * instance template first. The following formats are valid for global
   * instance templates: * `{instance_template_id_number}` *
   * `{instance_template_name}` (not unique) *
   * `projects/{project}/global/instanceTemplates/{instance_template_id_number}`
   * * `projects/{project}/global/instanceTemplates/{instance_template_name}` *
   * `https://www.googleapis.com/compute/v1/projects/{project}/global/instanceTe
   * mplates/{instance_template_id_number}` * `https://www.googleapis.com/comput
   * e/v1/projects/{project}/global/instanceTemplates/{instance_template_name}`
   * The following formats are valid for regional instance templates: *
   * `{instance_template_id_number}` * `{instance_template_name}` (not unique) *
   * `projects/{project}/regions/{region}/instanceTemplates/{instance_template_i
   * d_number}` * `projects/{project}/regions/{region}/instanceTemplates/{instan
   * ce_template_name}` * `https://www.googleapis.com/compute/v1/projects/{proje
   * ct}/regions/{region}/instanceTemplates/{instance_template_id_number}` * `ht
   * tps://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/ins
   * tanceTemplates/{instance_template_name}`
   *
   * @var string
   */
  public $instanceTemplate;
  protected $policyType = InstancePolicy::class;
  protected $policyDataType = '';

  /**
   * Optional. Set this field to `true` if you want Batch to block project-level
   * SSH keys from accessing this job's VMs. Alternatively, you can configure
   * the job to specify a VM instance template that blocks project-level SSH
   * keys. In either case, Batch blocks project-level SSH keys while creating
   * the VMs for this job. Batch allows project-level SSH keys for a job's VMs
   * only if all the following are true: + This field is undefined or set to
   * `false`. + The job's VM instance template (if any) doesn't block project-
   * level SSH keys. Notably, you can override this behavior by manually
   * updating a VM to block or allow project-level SSH keys. For more
   * information about blocking project-level SSH keys, see the Compute Engine
   * documentation: https://cloud.google.com/compute/docs/connect/restrict-ssh-
   * keys#block-keys
   *
   * @param bool $blockProjectSshKeys
   */
  public function setBlockProjectSshKeys($blockProjectSshKeys)
  {
    $this->blockProjectSshKeys = $blockProjectSshKeys;
  }
  /**
   * @return bool
   */
  public function getBlockProjectSshKeys()
  {
    return $this->blockProjectSshKeys;
  }
  /**
   * Set this field true if you want Batch to help fetch drivers from a third
   * party location and install them for GPUs specified in `policy.accelerators`
   * or `instance_template` on your behalf. Default is false. For Container-
   * Optimized Image cases, Batch will install the accelerator driver following
   * milestones of https://cloud.google.com/container-optimized-os/docs/release-
   * notes. For non Container-Optimized Image cases, following
   * https://github.com/GoogleCloudPlatform/compute-gpu-
   * installation/blob/main/linux/install_gpu_driver.py.
   *
   * @param bool $installGpuDrivers
   */
  public function setInstallGpuDrivers($installGpuDrivers)
  {
    $this->installGpuDrivers = $installGpuDrivers;
  }
  /**
   * @return bool
   */
  public function getInstallGpuDrivers()
  {
    return $this->installGpuDrivers;
  }
  /**
   * Optional. Set this field true if you want Batch to install Ops Agent on
   * your behalf. Default is false.
   *
   * @param bool $installOpsAgent
   */
  public function setInstallOpsAgent($installOpsAgent)
  {
    $this->installOpsAgent = $installOpsAgent;
  }
  /**
   * @return bool
   */
  public function getInstallOpsAgent()
  {
    return $this->installOpsAgent;
  }
  /**
   * An instance template used to create VMs. Batch supports global and regional
   * instance templates from the same project as the job. In case of a regional
   * instance template, the job and the instance template must be in the same
   * region. As shown in the following examples, you can specify the instance
   * template as either only its ID, only its name (not unique), or a partial or
   * full URL. If you specify only its name, then Batch checks for a global
   * instance template first. The following formats are valid for global
   * instance templates: * `{instance_template_id_number}` *
   * `{instance_template_name}` (not unique) *
   * `projects/{project}/global/instanceTemplates/{instance_template_id_number}`
   * * `projects/{project}/global/instanceTemplates/{instance_template_name}` *
   * `https://www.googleapis.com/compute/v1/projects/{project}/global/instanceTe
   * mplates/{instance_template_id_number}` * `https://www.googleapis.com/comput
   * e/v1/projects/{project}/global/instanceTemplates/{instance_template_name}`
   * The following formats are valid for regional instance templates: *
   * `{instance_template_id_number}` * `{instance_template_name}` (not unique) *
   * `projects/{project}/regions/{region}/instanceTemplates/{instance_template_i
   * d_number}` * `projects/{project}/regions/{region}/instanceTemplates/{instan
   * ce_template_name}` * `https://www.googleapis.com/compute/v1/projects/{proje
   * ct}/regions/{region}/instanceTemplates/{instance_template_id_number}` * `ht
   * tps://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/ins
   * tanceTemplates/{instance_template_name}`
   *
   * @param string $instanceTemplate
   */
  public function setInstanceTemplate($instanceTemplate)
  {
    $this->instanceTemplate = $instanceTemplate;
  }
  /**
   * @return string
   */
  public function getInstanceTemplate()
  {
    return $this->instanceTemplate;
  }
  /**
   * InstancePolicy.
   *
   * @param InstancePolicy $policy
   */
  public function setPolicy(InstancePolicy $policy)
  {
    $this->policy = $policy;
  }
  /**
   * @return InstancePolicy
   */
  public function getPolicy()
  {
    return $this->policy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstancePolicyOrTemplate::class, 'Google_Service_Batch_InstancePolicyOrTemplate');
