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

namespace Google\Service\Contentwarehouse;

class AbuseiamEvaluation extends \Google\Collection
{
  protected $collection_key = 'region';
  protected $abuseTypeType = AbuseiamAbuseType::class;
  protected $abuseTypeDataType = '';
  /**
   * @var string
   */
  public $backend;
  /**
   * @var string
   */
  public $comment;
  protected $miscDataType = AbuseiamNameValuePair::class;
  protected $miscDataDataType = 'array';
  /**
   * @var string
   */
  public $processedMicros;
  protected $regionType = AbuseiamRegion::class;
  protected $regionDataType = 'array';
  public $score;
  /**
   * @var string
   */
  public $status;
  protected $targetType = AbuseiamTarget::class;
  protected $targetDataType = '';
  /**
   * @var string
   */
  public $timestampMicros;
  protected $userRestrictionType = AbuseiamUserRestriction::class;
  protected $userRestrictionDataType = '';
  /**
   * @var string
   */
  public $version;

  /**
   * @param AbuseiamAbuseType
   */
  public function setAbuseType(AbuseiamAbuseType $abuseType)
  {
    $this->abuseType = $abuseType;
  }
  /**
   * @return AbuseiamAbuseType
   */
  public function getAbuseType()
  {
    return $this->abuseType;
  }
  /**
   * @param string
   */
  public function setBackend($backend)
  {
    $this->backend = $backend;
  }
  /**
   * @return string
   */
  public function getBackend()
  {
    return $this->backend;
  }
  /**
   * @param string
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * @param AbuseiamNameValuePair[]
   */
  public function setMiscData($miscData)
  {
    $this->miscData = $miscData;
  }
  /**
   * @return AbuseiamNameValuePair[]
   */
  public function getMiscData()
  {
    return $this->miscData;
  }
  /**
   * @param string
   */
  public function setProcessedMicros($processedMicros)
  {
    $this->processedMicros = $processedMicros;
  }
  /**
   * @return string
   */
  public function getProcessedMicros()
  {
    return $this->processedMicros;
  }
  /**
   * @param AbuseiamRegion[]
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return AbuseiamRegion[]
   */
  public function getRegion()
  {
    return $this->region;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
  /**
   * @param string
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * @param AbuseiamTarget
   */
  public function setTarget(AbuseiamTarget $target)
  {
    $this->target = $target;
  }
  /**
   * @return AbuseiamTarget
   */
  public function getTarget()
  {
    return $this->target;
  }
  /**
   * @param string
   */
  public function setTimestampMicros($timestampMicros)
  {
    $this->timestampMicros = $timestampMicros;
  }
  /**
   * @return string
   */
  public function getTimestampMicros()
  {
    return $this->timestampMicros;
  }
  /**
   * @param AbuseiamUserRestriction
   */
  public function setUserRestriction(AbuseiamUserRestriction $userRestriction)
  {
    $this->userRestriction = $userRestriction;
  }
  /**
   * @return AbuseiamUserRestriction
   */
  public function getUserRestriction()
  {
    return $this->userRestriction;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AbuseiamEvaluation::class, 'Google_Service_Contentwarehouse_AbuseiamEvaluation');
