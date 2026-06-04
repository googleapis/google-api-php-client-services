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

class GoogleAdsSearchads360V23ResourcesUniversityDegree extends \Google\Model
{
  /**
   * Output only. Name of the degree obtained.
   *
   * @var string
   */
  public $degree;
  /**
   * Output only. Year of graduation.
   *
   * @var int
   */
  public $graduationYear;
  /**
   * Output only. Name of the university at which the degree was obtained.
   *
   * @var string
   */
  public $institutionName;

  /**
   * Output only. Name of the degree obtained.
   *
   * @param string $degree
   */
  public function setDegree($degree)
  {
    $this->degree = $degree;
  }
  /**
   * @return string
   */
  public function getDegree()
  {
    return $this->degree;
  }
  /**
   * Output only. Year of graduation.
   *
   * @param int $graduationYear
   */
  public function setGraduationYear($graduationYear)
  {
    $this->graduationYear = $graduationYear;
  }
  /**
   * @return int
   */
  public function getGraduationYear()
  {
    return $this->graduationYear;
  }
  /**
   * Output only. Name of the university at which the degree was obtained.
   *
   * @param string $institutionName
   */
  public function setInstitutionName($institutionName)
  {
    $this->institutionName = $institutionName;
  }
  /**
   * @return string
   */
  public function getInstitutionName()
  {
    return $this->institutionName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesUniversityDegree::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesUniversityDegree');
