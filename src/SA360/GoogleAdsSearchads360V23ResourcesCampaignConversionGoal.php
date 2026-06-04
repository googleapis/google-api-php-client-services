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

class GoogleAdsSearchads360V23ResourcesCampaignConversionGoal extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CATEGORY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CATEGORY_UNKNOWN = 'UNKNOWN';
  /**
   * Default category.
   */
  public const CATEGORY_DEFAULT = 'DEFAULT';
  /**
   * User visiting a page.
   */
  public const CATEGORY_PAGE_VIEW = 'PAGE_VIEW';
  /**
   * Purchase, sales, or "order placed" event.
   */
  public const CATEGORY_PURCHASE = 'PURCHASE';
  /**
   * Signup user action.
   */
  public const CATEGORY_SIGNUP = 'SIGNUP';
  /**
   * Software download action (as for an app).
   */
  public const CATEGORY_DOWNLOAD = 'DOWNLOAD';
  /**
   * The addition of items to a shopping cart or bag on an advertiser site.
   */
  public const CATEGORY_ADD_TO_CART = 'ADD_TO_CART';
  /**
   * When someone enters the checkout flow on an advertiser site.
   */
  public const CATEGORY_BEGIN_CHECKOUT = 'BEGIN_CHECKOUT';
  /**
   * The start of a paid subscription for a product or service.
   */
  public const CATEGORY_SUBSCRIBE_PAID = 'SUBSCRIBE_PAID';
  /**
   * A call to indicate interest in an advertiser's offering.
   */
  public const CATEGORY_PHONE_CALL_LEAD = 'PHONE_CALL_LEAD';
  /**
   * A lead conversion imported from an external source into Google Ads.
   */
  public const CATEGORY_IMPORTED_LEAD = 'IMPORTED_LEAD';
  /**
   * A submission of a form on an advertiser site indicating business interest.
   */
  public const CATEGORY_SUBMIT_LEAD_FORM = 'SUBMIT_LEAD_FORM';
  /**
   * A booking of an appointment with an advertiser's business.
   */
  public const CATEGORY_BOOK_APPOINTMENT = 'BOOK_APPOINTMENT';
  /**
   * A quote or price estimate request.
   */
  public const CATEGORY_REQUEST_QUOTE = 'REQUEST_QUOTE';
  /**
   * A search for an advertiser's business location with intention to visit.
   */
  public const CATEGORY_GET_DIRECTIONS = 'GET_DIRECTIONS';
  /**
   * A click to an advertiser's partner's site.
   */
  public const CATEGORY_OUTBOUND_CLICK = 'OUTBOUND_CLICK';
  /**
   * A call, SMS, email, chat or other type of contact to an advertiser.
   */
  public const CATEGORY_CONTACT = 'CONTACT';
  /**
   * A website engagement event such as long site time or a Google Analytics
   * (GA) Smart Goal. Intended to be used for GA, Firebase, GA Gold goal
   * imports.
   */
  public const CATEGORY_ENGAGEMENT = 'ENGAGEMENT';
  /**
   * A visit to a physical store location.
   */
  public const CATEGORY_STORE_VISIT = 'STORE_VISIT';
  /**
   * A sale occurring in a physical store.
   */
  public const CATEGORY_STORE_SALE = 'STORE_SALE';
  /**
   * A lead conversion imported from an external source into Google Ads, that
   * has been further qualified by the advertiser (marketing/sales team). In the
   * lead-to-sale journey, advertisers get leads, then act on them by reaching
   * out to the consumer. If the consumer is interested and may end up buying
   * their product, the advertiser marks such leads as "qualified leads".
   */
  public const CATEGORY_QUALIFIED_LEAD = 'QUALIFIED_LEAD';
  /**
   * A lead conversion imported from an external source into Google Ads, that
   * has further completed a chosen stage as defined by the lead gen advertiser.
   */
  public const CATEGORY_CONVERTED_LEAD = 'CONVERTED_LEAD';
  /**
   * The conversion origin has not been specified.
   */
  public const ORIGIN_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The conversion origin is not known in this version.
   */
  public const ORIGIN_UNKNOWN = 'UNKNOWN';
  /**
   * Conversion that occurs when a user visits a website or takes an action
   * there after viewing an ad.
   */
  public const ORIGIN_WEBSITE = 'WEBSITE';
  /**
   * Conversions reported by an offline pipeline which collects local actions
   * from Google-hosted pages (for example, Google Maps, Google Place Page, etc)
   * and attributes them to relevant ad events.
   */
  public const ORIGIN_GOOGLE_HOSTED = 'GOOGLE_HOSTED';
  /**
   * Conversion that occurs when a user performs an action through any app
   * platforms.
   */
  public const ORIGIN_APP = 'APP';
  /**
   * Conversion that occurs when a user makes a call from ads.
   */
  public const ORIGIN_CALL_FROM_ADS = 'CALL_FROM_ADS';
  /**
   * Conversion that occurs when a user visits or makes a purchase at a physical
   * store.
   */
  public const ORIGIN_STORE = 'STORE';
  /**
   * Conversion that occurs on YouTube.
   */
  public const ORIGIN_YOUTUBE_HOSTED = 'YOUTUBE_HOSTED';
  /**
   * Conversions that occur through Floodlight tag.
   */
  public const ORIGIN_FLOODLIGHT = 'FLOODLIGHT';
  /**
   * The biddability of the campaign conversion goal.
   *
   * @var bool
   */
  public $biddable;
  /**
   * Immutable. The campaign with which this campaign conversion goal is
   * associated.
   *
   * @var string
   */
  public $campaign;
  /**
   * The conversion category of this campaign conversion goal.
   *
   * @var string
   */
  public $category;
  /**
   * The conversion origin of this campaign conversion goal.
   *
   * @var string
   */
  public $origin;
  /**
   * Immutable. The resource name of the campaign conversion goal. Campaign
   * conversion goal resource names have the form: `customers/{customer_id}/camp
   * aignConversionGoals/{campaign_id}~{category}~{origin}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Search Ads 360 biddability of the campaign conversion goal.
   *
   * @var bool
   */
  public $searchAds360Biddable;

  /**
   * The biddability of the campaign conversion goal.
   *
   * @param bool $biddable
   */
  public function setBiddable($biddable)
  {
    $this->biddable = $biddable;
  }
  /**
   * @return bool
   */
  public function getBiddable()
  {
    return $this->biddable;
  }
  /**
   * Immutable. The campaign with which this campaign conversion goal is
   * associated.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * The conversion category of this campaign conversion goal.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DEFAULT, PAGE_VIEW, PURCHASE,
   * SIGNUP, DOWNLOAD, ADD_TO_CART, BEGIN_CHECKOUT, SUBSCRIBE_PAID,
   * PHONE_CALL_LEAD, IMPORTED_LEAD, SUBMIT_LEAD_FORM, BOOK_APPOINTMENT,
   * REQUEST_QUOTE, GET_DIRECTIONS, OUTBOUND_CLICK, CONTACT, ENGAGEMENT,
   * STORE_VISIT, STORE_SALE, QUALIFIED_LEAD, CONVERTED_LEAD
   *
   * @param self::CATEGORY_* $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return self::CATEGORY_*
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * The conversion origin of this campaign conversion goal.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WEBSITE, GOOGLE_HOSTED, APP,
   * CALL_FROM_ADS, STORE, YOUTUBE_HOSTED, FLOODLIGHT
   *
   * @param self::ORIGIN_* $origin
   */
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /**
   * @return self::ORIGIN_*
   */
  public function getOrigin()
  {
    return $this->origin;
  }
  /**
   * Immutable. The resource name of the campaign conversion goal. Campaign
   * conversion goal resource names have the form: `customers/{customer_id}/camp
   * aignConversionGoals/{campaign_id}~{category}~{origin}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Search Ads 360 biddability of the campaign conversion goal.
   *
   * @param bool $searchAds360Biddable
   */
  public function setSearchAds360Biddable($searchAds360Biddable)
  {
    $this->searchAds360Biddable = $searchAds360Biddable;
  }
  /**
   * @return bool
   */
  public function getSearchAds360Biddable()
  {
    return $this->searchAds360Biddable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignConversionGoal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignConversionGoal');
