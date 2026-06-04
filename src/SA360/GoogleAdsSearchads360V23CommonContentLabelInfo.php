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

class GoogleAdsSearchads360V23CommonContentLabelInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Sexually suggestive content.
   */
  public const TYPE_SEXUALLY_SUGGESTIVE = 'SEXUALLY_SUGGESTIVE';
  /**
   * Below the fold placement.
   */
  public const TYPE_BELOW_THE_FOLD = 'BELOW_THE_FOLD';
  /**
   * Parked domain.
   */
  public const TYPE_PARKED_DOMAIN = 'PARKED_DOMAIN';
  /**
   * Juvenile, gross & bizarre content.
   */
  public const TYPE_JUVENILE = 'JUVENILE';
  /**
   * Profanity & rough language.
   */
  public const TYPE_PROFANITY = 'PROFANITY';
  /**
   * Death & tragedy.
   */
  public const TYPE_TRAGEDY = 'TRAGEDY';
  /**
   * Video.
   */
  public const TYPE_VIDEO = 'VIDEO';
  /**
   * Content rating: G.
   */
  public const TYPE_VIDEO_RATING_DV_G = 'VIDEO_RATING_DV_G';
  /**
   * Content rating: PG.
   */
  public const TYPE_VIDEO_RATING_DV_PG = 'VIDEO_RATING_DV_PG';
  /**
   * Content rating: T.
   */
  public const TYPE_VIDEO_RATING_DV_T = 'VIDEO_RATING_DV_T';
  /**
   * Content rating: MA.
   */
  public const TYPE_VIDEO_RATING_DV_MA = 'VIDEO_RATING_DV_MA';
  /**
   * Content rating: not yet rated.
   */
  public const TYPE_VIDEO_NOT_YET_RATED = 'VIDEO_NOT_YET_RATED';
  /**
   * Embedded video.
   */
  public const TYPE_EMBEDDED_VIDEO = 'EMBEDDED_VIDEO';
  /**
   * Live streaming video.
   */
  public const TYPE_LIVE_STREAMING_VIDEO = 'LIVE_STREAMING_VIDEO';
  /**
   * Sensitive social issues.
   */
  public const TYPE_SOCIAL_ISSUES = 'SOCIAL_ISSUES';
  /**
   * Content that's suitable for families to view together, including Made for
   * Kids videos on YouTube.
   */
  public const TYPE_BRAND_SUITABILITY_CONTENT_FOR_FAMILIES = 'BRAND_SUITABILITY_CONTENT_FOR_FAMILIES';
  /**
   * Video games that simulate hand-to-hand fighting or combat with the use of
   * modern or medieval weapons.
   */
  public const TYPE_BRAND_SUITABILITY_GAMES_FIGHTING = 'BRAND_SUITABILITY_GAMES_FIGHTING';
  /**
   * Video games that feature mature content, such as violence, inappropriate
   * language, or sexual suggestiveness.
   */
  public const TYPE_BRAND_SUITABILITY_GAMES_MATURE = 'BRAND_SUITABILITY_GAMES_MATURE';
  /**
   * Health content that people might find sensitive or upsetting, such as
   * medical procedures or images and descriptions of various medical
   * conditions.
   */
  public const TYPE_BRAND_SUITABILITY_HEALTH_SENSITIVE = 'BRAND_SUITABILITY_HEALTH_SENSITIVE';
  /**
   * Health content from sources that may provide accurate information but
   * aren't as commonly cited as other, more well-known sources.
   */
  public const TYPE_BRAND_SUITABILITY_HEALTH_SOURCE_UNDETERMINED = 'BRAND_SUITABILITY_HEALTH_SOURCE_UNDETERMINED';
  /**
   * News content that's been recently announced, regardless of the themes or
   * people being reported on.
   */
  public const TYPE_BRAND_SUITABILITY_NEWS_RECENT = 'BRAND_SUITABILITY_NEWS_RECENT';
  /**
   * News content that people might find sensitive or upsetting, such as crimes,
   * accidents, and natural incidents, or commentary on potentially
   * controversial social and political issues.
   */
  public const TYPE_BRAND_SUITABILITY_NEWS_SENSITIVE = 'BRAND_SUITABILITY_NEWS_SENSITIVE';
  /**
   * News content from sources that aren't featured on Google News or YouTube
   * News.
   */
  public const TYPE_BRAND_SUITABILITY_NEWS_SOURCE_NOT_FEATURED = 'BRAND_SUITABILITY_NEWS_SOURCE_NOT_FEATURED';
  /**
   * Political content, such as political statements made by well-known
   * politicians, political elections, or events widely perceived to be
   * political in nature.
   */
  public const TYPE_BRAND_SUITABILITY_POLITICS = 'BRAND_SUITABILITY_POLITICS';
  /**
   * Content with religious themes, such as religious teachings or customs, holy
   * sites or places of worship, well-known religious figures or people dressed
   * in religious attire, or religious opinions on social and political issues.
   */
  public const TYPE_BRAND_SUITABILITY_RELIGION = 'BRAND_SUITABILITY_RELIGION';
  /**
   * Content label type, required for CREATE operations.
   *
   * @var string
   */
  public $type;

  /**
   * Content label type, required for CREATE operations.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEXUALLY_SUGGESTIVE, BELOW_THE_FOLD,
   * PARKED_DOMAIN, JUVENILE, PROFANITY, TRAGEDY, VIDEO, VIDEO_RATING_DV_G,
   * VIDEO_RATING_DV_PG, VIDEO_RATING_DV_T, VIDEO_RATING_DV_MA,
   * VIDEO_NOT_YET_RATED, EMBEDDED_VIDEO, LIVE_STREAMING_VIDEO, SOCIAL_ISSUES,
   * BRAND_SUITABILITY_CONTENT_FOR_FAMILIES, BRAND_SUITABILITY_GAMES_FIGHTING,
   * BRAND_SUITABILITY_GAMES_MATURE, BRAND_SUITABILITY_HEALTH_SENSITIVE,
   * BRAND_SUITABILITY_HEALTH_SOURCE_UNDETERMINED,
   * BRAND_SUITABILITY_NEWS_RECENT, BRAND_SUITABILITY_NEWS_SENSITIVE,
   * BRAND_SUITABILITY_NEWS_SOURCE_NOT_FEATURED, BRAND_SUITABILITY_POLITICS,
   * BRAND_SUITABILITY_RELIGION
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
class_alias(GoogleAdsSearchads360V23CommonContentLabelInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonContentLabelInfo');
