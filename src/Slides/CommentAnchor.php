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

namespace Google\Service\Slides;

class CommentAnchor extends \Google\Collection
{
  protected $collection_key = 'objectAnchors';
  /**
   * Output only. The unique ID of the comment anchor.
   *
   * @var string
   */
  public $anchorId;
  protected $objectAnchorsType = ObjectAnchor::class;
  protected $objectAnchorsDataType = 'array';

  /**
   * Output only. The unique ID of the comment anchor.
   *
   * @param string $anchorId
   */
  public function setAnchorId($anchorId)
  {
    $this->anchorId = $anchorId;
  }
  /**
   * @return string
   */
  public function getAnchorId()
  {
    return $this->anchorId;
  }
  /**
   * Output only. All object ID-based locations within a page that refer to the
   * anchor ID.
   *
   * @param ObjectAnchor[] $objectAnchors
   */
  public function setObjectAnchors($objectAnchors)
  {
    $this->objectAnchors = $objectAnchors;
  }
  /**
   * @return ObjectAnchor[]
   */
  public function getObjectAnchors()
  {
    return $this->objectAnchors;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommentAnchor::class, 'Google_Service_Slides_CommentAnchor');
