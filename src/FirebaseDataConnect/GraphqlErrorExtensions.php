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

namespace Google\Service\FirebaseDataConnect;

class GraphqlErrorExtensions extends \Google\Collection
{
  protected $collection_key = 'workarounds';
  /**
   * @var string
   */
  public $code;
  /**
   * @var string
   */
  public $debugDetails;
  /**
   * @var string
   */
  public $file;
  /**
   * @var string
   */
  public $warningLevel;
  protected $workaroundsType = Workaround::class;
  protected $workaroundsDataType = 'array';

  /**
   * @param string
   */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /**
   * @return string
   */
  public function getCode()
  {
    return $this->code;
  }
  /**
   * @param string
   */
  public function setDebugDetails($debugDetails)
  {
    $this->debugDetails = $debugDetails;
  }
  /**
   * @return string
   */
  public function getDebugDetails()
  {
    return $this->debugDetails;
  }
  /**
   * @param string
   */
  public function setFile($file)
  {
    $this->file = $file;
  }
  /**
   * @return string
   */
  public function getFile()
  {
    return $this->file;
  }
  /**
   * @param string
   */
  public function setWarningLevel($warningLevel)
  {
    $this->warningLevel = $warningLevel;
  }
  /**
   * @return string
   */
  public function getWarningLevel()
  {
    return $this->warningLevel;
  }
  /**
   * @param Workaround[]
   */
  public function setWorkarounds($workarounds)
  {
    $this->workarounds = $workarounds;
  }
  /**
   * @return Workaround[]
   */
  public function getWorkarounds()
  {
    return $this->workarounds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GraphqlErrorExtensions::class, 'Google_Service_FirebaseDataConnect_GraphqlErrorExtensions');
