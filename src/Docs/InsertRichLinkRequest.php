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

namespace Google\Service\Docs;

class InsertRichLinkRequest extends \Google\Model
{
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  protected $richLinkPropertiesType = RichLinkProperties::class;
  protected $richLinkPropertiesDataType = '';

  /**
   * Inserts the rich link at the end of a header, footer, footnote or the
   * document body.
   *
   * @param EndOfSegmentLocation $endOfSegmentLocation
   */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /**
   * @return EndOfSegmentLocation
   */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /**
   * Inserts the rich link at a specific index in the document. The rich link
   * must be inserted inside the bounds of an existing Paragraph. For instance,
   * it cannot be inserted at a table's start index (i.e. between the table and
   * its preceding paragraph). The rich link cannot be inserted inside an
   * equation.
   *
   * @param Location $location
   */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /**
   * @return Location
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * The properties of the rich link to insert.
   *
   * @param RichLinkProperties $richLinkProperties
   */
  public function setRichLinkProperties(RichLinkProperties $richLinkProperties)
  {
    $this->richLinkProperties = $richLinkProperties;
  }
  /**
   * @return RichLinkProperties
   */
  public function getRichLinkProperties()
  {
    return $this->richLinkProperties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InsertRichLinkRequest::class, 'Google_Service_Docs_InsertRichLinkRequest');
