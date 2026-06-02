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

namespace Google\Service\SecurityCommandCenter;

class Cve extends \Google\Collection
{
  public const EXPLOITATION_ACTIVITY_EXPLOITATION_ACTIVITY_UNSPECIFIED = 'EXPLOITATION_ACTIVITY_UNSPECIFIED';
  public const EXPLOITATION_ACTIVITY_WIDE = 'WIDE';
  public const EXPLOITATION_ACTIVITY_CONFIRMED = 'CONFIRMED';
  public const EXPLOITATION_ACTIVITY_AVAILABLE = 'AVAILABLE';
  public const EXPLOITATION_ACTIVITY_ANTICIPATED = 'ANTICIPATED';
  public const EXPLOITATION_ACTIVITY_NO_KNOWN = 'NO_KNOWN';
  public const IMPACT_RISK_RATING_UNSPECIFIED = 'RISK_RATING_UNSPECIFIED';
  public const IMPACT_LOW = 'LOW';
  public const IMPACT_MEDIUM = 'MEDIUM';
  public const IMPACT_HIGH = 'HIGH';
  public const IMPACT_CRITICAL = 'CRITICAL';
  protected $collection_key = 'references';
  protected $cvssv3Type = Cvssv3::class;
  protected $cvssv3DataType = '';
  /**
   * @var string
   */
  public $exploitReleaseDate;
  /**
   * @var string
   */
  public $exploitationActivity;
  /**
   * @var string
   */
  public $firstExploitationDate;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $impact;
  /**
   * @var bool
   */
  public $observedInTheWild;
  protected $referencesType = Reference::class;
  protected $referencesDataType = 'array';
  /**
   * @var bool
   */
  public $upstreamFixAvailable;
  /**
   * @var bool
   */
  public $zeroDay;

  /**
   * @param Cvssv3 $cvssv3
   */
  public function setCvssv3(Cvssv3 $cvssv3)
  {
    $this->cvssv3 = $cvssv3;
  }
  /**
   * @return Cvssv3
   */
  public function getCvssv3()
  {
    return $this->cvssv3;
  }
  /**
   * @param string $exploitReleaseDate
   */
  public function setExploitReleaseDate($exploitReleaseDate)
  {
    $this->exploitReleaseDate = $exploitReleaseDate;
  }
  /**
   * @return string
   */
  public function getExploitReleaseDate()
  {
    return $this->exploitReleaseDate;
  }
  /**
   * @param self::EXPLOITATION_ACTIVITY_* $exploitationActivity
   */
  public function setExploitationActivity($exploitationActivity)
  {
    $this->exploitationActivity = $exploitationActivity;
  }
  /**
   * @return self::EXPLOITATION_ACTIVITY_*
   */
  public function getExploitationActivity()
  {
    return $this->exploitationActivity;
  }
  /**
   * @param string $firstExploitationDate
   */
  public function setFirstExploitationDate($firstExploitationDate)
  {
    $this->firstExploitationDate = $firstExploitationDate;
  }
  /**
   * @return string
   */
  public function getFirstExploitationDate()
  {
    return $this->firstExploitationDate;
  }
  /**
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param self::IMPACT_* $impact
   */
  public function setImpact($impact)
  {
    $this->impact = $impact;
  }
  /**
   * @return self::IMPACT_*
   */
  public function getImpact()
  {
    return $this->impact;
  }
  /**
   * @param bool $observedInTheWild
   */
  public function setObservedInTheWild($observedInTheWild)
  {
    $this->observedInTheWild = $observedInTheWild;
  }
  /**
   * @return bool
   */
  public function getObservedInTheWild()
  {
    return $this->observedInTheWild;
  }
  /**
   * @param Reference[] $references
   */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /**
   * @return Reference[]
   */
  public function getReferences()
  {
    return $this->references;
  }
  /**
   * @param bool $upstreamFixAvailable
   */
  public function setUpstreamFixAvailable($upstreamFixAvailable)
  {
    $this->upstreamFixAvailable = $upstreamFixAvailable;
  }
  /**
   * @return bool
   */
  public function getUpstreamFixAvailable()
  {
    return $this->upstreamFixAvailable;
  }
  /**
   * @param bool $zeroDay
   */
  public function setZeroDay($zeroDay)
  {
    $this->zeroDay = $zeroDay;
  }
  /**
   * @return bool
   */
  public function getZeroDay()
  {
    return $this->zeroDay;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Cve::class, 'Google_Service_SecurityCommandCenter_Cve');
