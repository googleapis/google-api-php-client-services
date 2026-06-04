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

class GoogleAdsSearchads360V23CommonTagSnippet extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PAGE_FORMAT_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PAGE_FORMAT_UNKNOWN = 'UNKNOWN';
  /**
   * Standard HTML page format.
   */
  public const PAGE_FORMAT_HTML = 'HTML';
  /**
   * Google AMP page format.
   */
  public const PAGE_FORMAT_AMP = 'AMP';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The snippet that is fired as a result of a website page loading.
   */
  public const TYPE_WEBPAGE = 'WEBPAGE';
  /**
   * The snippet contains a JavaScript function which fires the tag. This
   * function is typically called from an onClick handler added to a link or
   * button element on the page.
   */
  public const TYPE_WEBPAGE_ONCLICK = 'WEBPAGE_ONCLICK';
  /**
   * For embedding on a mobile webpage. The snippet contains a JavaScript
   * function which fires the tag.
   */
  public const TYPE_CLICK_TO_CALL = 'CLICK_TO_CALL';
  /**
   * The snippet that is used to replace the phone number on your website with a
   * Google forwarding number for call tracking purposes.
   */
  public const TYPE_WEBSITE_CALL = 'WEBSITE_CALL';
  /**
   * The event snippet that works with the site tag to track actions that should
   * be counted as conversions.
   *
   * @var string
   */
  public $eventSnippet;
  /**
   * The site tag that adds visitors to your basic remarketing lists and sets
   * new cookies on your domain.
   *
   * @var string
   */
  public $globalSiteTag;
  /**
   * The format of the web page where the tracking tag and snippet will be
   * installed, for example, HTML.
   *
   * @var string
   */
  public $pageFormat;
  /**
   * The type of the generated tag snippets for tracking conversions.
   *
   * @var string
   */
  public $type;

  /**
   * The event snippet that works with the site tag to track actions that should
   * be counted as conversions.
   *
   * @param string $eventSnippet
   */
  public function setEventSnippet($eventSnippet)
  {
    $this->eventSnippet = $eventSnippet;
  }
  /**
   * @return string
   */
  public function getEventSnippet()
  {
    return $this->eventSnippet;
  }
  /**
   * The site tag that adds visitors to your basic remarketing lists and sets
   * new cookies on your domain.
   *
   * @param string $globalSiteTag
   */
  public function setGlobalSiteTag($globalSiteTag)
  {
    $this->globalSiteTag = $globalSiteTag;
  }
  /**
   * @return string
   */
  public function getGlobalSiteTag()
  {
    return $this->globalSiteTag;
  }
  /**
   * The format of the web page where the tracking tag and snippet will be
   * installed, for example, HTML.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, HTML, AMP
   *
   * @param self::PAGE_FORMAT_* $pageFormat
   */
  public function setPageFormat($pageFormat)
  {
    $this->pageFormat = $pageFormat;
  }
  /**
   * @return self::PAGE_FORMAT_*
   */
  public function getPageFormat()
  {
    return $this->pageFormat;
  }
  /**
   * The type of the generated tag snippets for tracking conversions.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WEBPAGE, WEBPAGE_ONCLICK,
   * CLICK_TO_CALL, WEBSITE_CALL
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonTagSnippet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonTagSnippet');
