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

namespace Google\Service\DisplayVideo;

class SensitiveCategoryTargetingOptionDetails extends \Google\Model
{
  /**
   * Serves as a placeholder and doesn't specify a Display & Video 360 sensitive
   * category.
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_UNSPECIFIED = 'SENSITIVE_CATEGORY_UNSPECIFIED';
  /**
   * Deprecated: This sensitive category is no longer supported. Adult or
   * pornographic text, image, or video content.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_ADULT = 'SENSITIVE_CATEGORY_ADULT';
  /**
   * Deprecated: This sensitive category is no longer supported. Content that
   * may be construed as biased against individuals, groups, or organizations
   * based on criteria such as race, religion, disability, sex, age, veteran
   * status, sexual orientation, gender identity, or political affiliation. May
   * also indicate discussion of such content, for instance, in an academic or
   * journalistic context.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_DEROGATORY = 'SENSITIVE_CATEGORY_DEROGATORY';
  /**
   * Deprecated: This sensitive category is no longer supported. Content related
   * to audio, video, or software downloads.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_DOWNLOADS_SHARING = 'SENSITIVE_CATEGORY_DOWNLOADS_SHARING';
  /**
   * Deprecated: This sensitive category is no longer supported. Contains
   * content related to personal weapons, including knives, guns, small
   * firearms, and ammunition. Selecting either "weapons" or "sensitive social
   * issues" will result in selecting both.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_WEAPONS = 'SENSITIVE_CATEGORY_WEAPONS';
  /**
   * Deprecated: This sensitive category is no longer supported. Contains
   * content related to betting or wagering in a real-world or online setting.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_GAMBLING = 'SENSITIVE_CATEGORY_GAMBLING';
  /**
   * Deprecated: This sensitive category is no longer supported. Content which
   * may be considered graphically violent, gory, gruesome, or shocking, such as
   * street fighting videos, accident photos, descriptions of torture, etc.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_VIOLENCE = 'SENSITIVE_CATEGORY_VIOLENCE';
  /**
   * Deprecated: This sensitive category is no longer supported. Adult content,
   * as well as suggestive content that's not explicitly pornographic. This
   * category includes all pages categorized as adult.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_SUGGESTIVE = 'SENSITIVE_CATEGORY_SUGGESTIVE';
  /**
   * Deprecated: This sensitive category is no longer supported. Prominent use
   * of words considered indecent, such as curse words and sexual slang. Pages
   * with only very occasional usage, such as news sites that might include such
   * words in a quotation, are not included.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_PROFANITY = 'SENSITIVE_CATEGORY_PROFANITY';
  /**
   * Deprecated: This sensitive category is no longer supported. Contains
   * content related to alcoholic beverages, alcohol brands, recipes, etc.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_ALCOHOL = 'SENSITIVE_CATEGORY_ALCOHOL';
  /**
   * Deprecated: This sensitive category is no longer supported. Contains
   * content related to the recreational use of legal or illegal drugs, as well
   * as to drug paraphernalia or cultivation.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_DRUGS = 'SENSITIVE_CATEGORY_DRUGS';
  /**
   * Deprecated: This sensitive category is no longer supported. Contains
   * content related to tobacco and tobacco accessories, including lighters,
   * humidors, ashtrays, etc.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_TOBACCO = 'SENSITIVE_CATEGORY_TOBACCO';
  /**
   * Deprecated: This sensitive category is no longer supported. Political news
   * and media, including discussions of social, governmental, and public
   * policy.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_POLITICS = 'SENSITIVE_CATEGORY_POLITICS';
  /**
   * Deprecated: This sensitive category is no longer supported. Content related
   * to religious thought or beliefs.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_RELIGION = 'SENSITIVE_CATEGORY_RELIGION';
  /**
   * Deprecated: This sensitive category is no longer supported. Content related
   * to death, disasters, accidents, war, etc.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_TRAGEDY = 'SENSITIVE_CATEGORY_TRAGEDY';
  /**
   * Deprecated: This sensitive category is no longer supported. Content related
   * to motor vehicle, aviation or other transportation accidents.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_TRANSPORTATION_ACCIDENTS = 'SENSITIVE_CATEGORY_TRANSPORTATION_ACCIDENTS';
  /**
   * Deprecated: This sensitive category is no longer supported. Issues that
   * evoke strong, opposing views and spark debate. These include issues that
   * are controversial in most countries and markets (such as abortion), as well
   * as those that are controversial in specific countries and markets (such as
   * immigration reform in the United States).
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_SENSITIVE_SOCIAL_ISSUES = 'SENSITIVE_CATEGORY_SENSITIVE_SOCIAL_ISSUES';
  /**
   * Deprecated: This sensitive category is no longer supported. Content which
   * may be considered shocking or disturbing, such as violent news stories,
   * stunts, or toilet humor.
   *
   * @deprecated
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_SHOCKING = 'SENSITIVE_CATEGORY_SHOCKING';
  /**
   * YouTube videos embedded on websites outside of YouTube.com.
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_EMBEDDED_VIDEO = 'SENSITIVE_CATEGORY_EMBEDDED_VIDEO';
  /**
   * Video of live events streamed over the internet.
   */
  public const SENSITIVE_CATEGORY_SENSITIVE_CATEGORY_LIVE_STREAMING_VIDEO = 'SENSITIVE_CATEGORY_LIVE_STREAMING_VIDEO';
  /**
   * Output only. An enum for the Display & Video 360 Sensitive category content
   * classifier.
   *
   * @var string
   */
  public $sensitiveCategory;

  /**
   * Output only. An enum for the Display & Video 360 Sensitive category content
   * classifier.
   *
   * Accepted values: SENSITIVE_CATEGORY_UNSPECIFIED, SENSITIVE_CATEGORY_ADULT,
   * SENSITIVE_CATEGORY_DEROGATORY, SENSITIVE_CATEGORY_DOWNLOADS_SHARING,
   * SENSITIVE_CATEGORY_WEAPONS, SENSITIVE_CATEGORY_GAMBLING,
   * SENSITIVE_CATEGORY_VIOLENCE, SENSITIVE_CATEGORY_SUGGESTIVE,
   * SENSITIVE_CATEGORY_PROFANITY, SENSITIVE_CATEGORY_ALCOHOL,
   * SENSITIVE_CATEGORY_DRUGS, SENSITIVE_CATEGORY_TOBACCO,
   * SENSITIVE_CATEGORY_POLITICS, SENSITIVE_CATEGORY_RELIGION,
   * SENSITIVE_CATEGORY_TRAGEDY, SENSITIVE_CATEGORY_TRANSPORTATION_ACCIDENTS,
   * SENSITIVE_CATEGORY_SENSITIVE_SOCIAL_ISSUES, SENSITIVE_CATEGORY_SHOCKING,
   * SENSITIVE_CATEGORY_EMBEDDED_VIDEO, SENSITIVE_CATEGORY_LIVE_STREAMING_VIDEO
   *
   * @param self::SENSITIVE_CATEGORY_* $sensitiveCategory
   */
  public function setSensitiveCategory($sensitiveCategory)
  {
    $this->sensitiveCategory = $sensitiveCategory;
  }
  /**
   * @return self::SENSITIVE_CATEGORY_*
   */
  public function getSensitiveCategory()
  {
    return $this->sensitiveCategory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SensitiveCategoryTargetingOptionDetails::class, 'Google_Service_DisplayVideo_SensitiveCategoryTargetingOptionDetails');
