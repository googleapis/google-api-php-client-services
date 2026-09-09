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

namespace Google\Service\Compute;

class ProjectView extends \Google\Model
{
  protected $projectType = Project::class;
  protected $projectDataType = '';

  /**
   * The project data. The returned Project data does not contain regional or
   * zonal quota usage data. Global quota limits are present. For accurate,
   * real-time quota usage numbers, query the global [projects.get](https://clou
   * d.google.com/compute/docs/reference/rest/v1/projects/get) endpoint.
   *
   * @param Project $project
   */
  public function setProject(Project $project)
  {
    $this->project = $project;
  }
  /**
   * @return Project
   */
  public function getProject()
  {
    return $this->project;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectView::class, 'Google_Service_Compute_ProjectView');
