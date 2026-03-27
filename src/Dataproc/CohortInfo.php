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

namespace Google\Service\Dataproc;

class CohortInfo extends \Google\Model
{
  /**
   * Cohort source is unspecified.
   */
  public const COHORT_SOURCE_COHORT_SOURCE_UNSPECIFIED = 'COHORT_SOURCE_UNSPECIFIED';
  /**
   * Indicates that the cohort was explicitly provided.
   */
  public const COHORT_SOURCE_USER_PROVIDED = 'USER_PROVIDED';
  /**
   * Composed from the labels coming from Airflow/Composer.
   */
  public const COHORT_SOURCE_AIRFLOW = 'AIRFLOW';
  /**
   * Output only. Final cohort that was used to tune the workload.
   *
   * @var string
   */
  public $cohort;
  /**
   * Output only. Source of the cohort.
   *
   * @var string
   */
  public $cohortSource;

  /**
   * Output only. Final cohort that was used to tune the workload.
   *
   * @param string $cohort
   */
  public function setCohort($cohort)
  {
    $this->cohort = $cohort;
  }
  /**
   * @return string
   */
  public function getCohort()
  {
    return $this->cohort;
  }
  /**
   * Output only. Source of the cohort.
   *
   * Accepted values: COHORT_SOURCE_UNSPECIFIED, USER_PROVIDED, AIRFLOW
   *
   * @param self::COHORT_SOURCE_* $cohortSource
   */
  public function setCohortSource($cohortSource)
  {
    $this->cohortSource = $cohortSource;
  }
  /**
   * @return self::COHORT_SOURCE_*
   */
  public function getCohortSource()
  {
    return $this->cohortSource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CohortInfo::class, 'Google_Service_Dataproc_CohortInfo');
