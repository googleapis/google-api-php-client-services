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

namespace Google\Service\Backupdr;

class DiskExclusionLabels extends \Google\Collection
{
  protected $collection_key = 'labels';
  protected $labelsType = LabelKeyValPair::class;
  protected $labelsDataType = 'array';

  /**
   * Optional. Labels used to identify disks for exclusion from the backup. If a
   * disk carries any of these labels, it will be excluded (OR logic).
   *
   * @param LabelKeyValPair[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return LabelKeyValPair[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiskExclusionLabels::class, 'Google_Service_Backupdr_DiskExclusionLabels');
