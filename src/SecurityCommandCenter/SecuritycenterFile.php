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

class SecuritycenterFile extends \Google\Collection
{
  public const FILE_LOAD_STATE_FILE_LOAD_STATE_UNSPECIFIED = 'FILE_LOAD_STATE_UNSPECIFIED';
  public const FILE_LOAD_STATE_LOADED_BY_PROCESS = 'LOADED_BY_PROCESS';
  public const FILE_LOAD_STATE_NOT_LOADED_BY_PROCESS = 'NOT_LOADED_BY_PROCESS';
  protected $collection_key = 'operations';
  /**
   * @var string
   */
  public $contents;
  protected $diskPathType = DiskPath::class;
  protected $diskPathDataType = '';
  /**
   * @var string
   */
  public $fileLoadState;
  /**
   * @var string
   */
  public $hashedSize;
  protected $operationsType = FileOperation::class;
  protected $operationsDataType = 'array';
  /**
   * @var bool
   */
  public $partiallyHashed;
  /**
   * @var string
   */
  public $path;
  /**
   * @var string
   */
  public $sha256;
  /**
   * @var string
   */
  public $size;

  /**
   * @param string $contents
   */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /**
   * @return string
   */
  public function getContents()
  {
    return $this->contents;
  }
  /**
   * @param DiskPath $diskPath
   */
  public function setDiskPath(DiskPath $diskPath)
  {
    $this->diskPath = $diskPath;
  }
  /**
   * @return DiskPath
   */
  public function getDiskPath()
  {
    return $this->diskPath;
  }
  /**
   * @param self::FILE_LOAD_STATE_* $fileLoadState
   */
  public function setFileLoadState($fileLoadState)
  {
    $this->fileLoadState = $fileLoadState;
  }
  /**
   * @return self::FILE_LOAD_STATE_*
   */
  public function getFileLoadState()
  {
    return $this->fileLoadState;
  }
  /**
   * @param string $hashedSize
   */
  public function setHashedSize($hashedSize)
  {
    $this->hashedSize = $hashedSize;
  }
  /**
   * @return string
   */
  public function getHashedSize()
  {
    return $this->hashedSize;
  }
  /**
   * @param FileOperation[] $operations
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return FileOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
  /**
   * @param bool $partiallyHashed
   */
  public function setPartiallyHashed($partiallyHashed)
  {
    $this->partiallyHashed = $partiallyHashed;
  }
  /**
   * @return bool
   */
  public function getPartiallyHashed()
  {
    return $this->partiallyHashed;
  }
  /**
   * @param string $path
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * @param string $sha256
   */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /**
   * @return string
   */
  public function getSha256()
  {
    return $this->sha256;
  }
  /**
   * @param string $size
   */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /**
   * @return string
   */
  public function getSize()
  {
    return $this->size;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecuritycenterFile::class, 'Google_Service_SecurityCommandCenter_SecuritycenterFile');
