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

class OutputFile extends \Google\Model
{
  protected $csvOutputFileType = CsvOutputFile::class;
  protected $csvOutputFileDataType = '';
  /**
   * Output only. File size in bytes.
   *
   * @var string
   */
  public $fileSizeBytes;
  protected $xlsxOutputFileType = XlsxOutputFile::class;
  protected $xlsxOutputFileDataType = '';

  /**
   * Output only. CSV output file.
   *
   * @param CsvOutputFile $csvOutputFile
   */
  public function setCsvOutputFile(CsvOutputFile $csvOutputFile)
  {
    $this->csvOutputFile = $csvOutputFile;
  }
  /**
   * @return CsvOutputFile
   */
  public function getCsvOutputFile()
  {
    return $this->csvOutputFile;
  }
  /**
   * Output only. File size in bytes.
   *
   * @param string $fileSizeBytes
   */
  public function setFileSizeBytes($fileSizeBytes)
  {
    $this->fileSizeBytes = $fileSizeBytes;
  }
  /**
   * @return string
   */
  public function getFileSizeBytes()
  {
    return $this->fileSizeBytes;
  }
  /**
   * Output only. XLSX output file.
   *
   * @param XlsxOutputFile $xlsxOutputFile
   */
  public function setXlsxOutputFile(XlsxOutputFile $xlsxOutputFile)
  {
    $this->xlsxOutputFile = $xlsxOutputFile;
  }
  /**
   * @return XlsxOutputFile
   */
  public function getXlsxOutputFile()
  {
    return $this->xlsxOutputFile;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutputFile::class, 'Google_Service_MigrationCenterAPI_OutputFile');
