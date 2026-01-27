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

namespace Google\Service\MigrationCenterAPI;

class CsvOutputFile extends \Google\Model
{
  /**
   * Output only. Number of columns in the file.
   *
   * @var int
   */
  public $columnsCount;
  /**
   * Output only. Number of rows in the file.
   *
   * @var int
   */
  public $rowCount;
  protected $signedUriType = SignedUri::class;
  protected $signedUriDataType = '';

  /**
   * Output only. Number of columns in the file.
   *
   * @param int $columnsCount
   */
  public function setColumnsCount($columnsCount)
  {
    $this->columnsCount = $columnsCount;
  }
  /**
   * @return int
   */
  public function getColumnsCount()
  {
    return $this->columnsCount;
  }
  /**
   * Output only. Number of rows in the file.
   *
   * @param int $rowCount
   */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /**
   * @return int
   */
  public function getRowCount()
  {
    return $this->rowCount;
  }
  /**
   * Output only. Signed URI destination.
   *
   * @param SignedUri $signedUri
   */
  public function setSignedUri(SignedUri $signedUri)
  {
    $this->signedUri = $signedUri;
  }
  /**
   * @return SignedUri
   */
  public function getSignedUri()
  {
    return $this->signedUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CsvOutputFile::class, 'Google_Service_MigrationCenterAPI_CsvOutputFile');
