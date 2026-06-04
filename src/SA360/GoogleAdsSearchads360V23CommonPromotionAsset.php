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

class GoogleAdsSearchads360V23CommonPromotionAsset extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const DISCOUNT_MODIFIER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const DISCOUNT_MODIFIER_UNKNOWN = 'UNKNOWN';
  /**
   * 'Up to'.
   */
  public const DISCOUNT_MODIFIER_UP_TO = 'UP_TO';
  /**
   * Not specified.
   */
  public const OCCASION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const OCCASION_UNKNOWN = 'UNKNOWN';
  /**
   * New Year's.
   */
  public const OCCASION_NEW_YEARS = 'NEW_YEARS';
  /**
   * Chinese New Year.
   */
  public const OCCASION_CHINESE_NEW_YEAR = 'CHINESE_NEW_YEAR';
  /**
   * Valentine's Day.
   */
  public const OCCASION_VALENTINES_DAY = 'VALENTINES_DAY';
  /**
   * Easter.
   */
  public const OCCASION_EASTER = 'EASTER';
  /**
   * Mother's Day.
   */
  public const OCCASION_MOTHERS_DAY = 'MOTHERS_DAY';
  /**
   * Father's Day.
   */
  public const OCCASION_FATHERS_DAY = 'FATHERS_DAY';
  /**
   * Labor Day.
   */
  public const OCCASION_LABOR_DAY = 'LABOR_DAY';
  /**
   * Back To School.
   */
  public const OCCASION_BACK_TO_SCHOOL = 'BACK_TO_SCHOOL';
  /**
   * Halloween.
   */
  public const OCCASION_HALLOWEEN = 'HALLOWEEN';
  /**
   * Black Friday.
   */
  public const OCCASION_BLACK_FRIDAY = 'BLACK_FRIDAY';
  /**
   * Cyber Monday.
   */
  public const OCCASION_CYBER_MONDAY = 'CYBER_MONDAY';
  /**
   * Christmas.
   */
  public const OCCASION_CHRISTMAS = 'CHRISTMAS';
  /**
   * Boxing Day.
   */
  public const OCCASION_BOXING_DAY = 'BOXING_DAY';
  /**
   * Independence Day in any country.
   */
  public const OCCASION_INDEPENDENCE_DAY = 'INDEPENDENCE_DAY';
  /**
   * National Day in any country.
   */
  public const OCCASION_NATIONAL_DAY = 'NATIONAL_DAY';
  /**
   * End of any season.
   */
  public const OCCASION_END_OF_SEASON = 'END_OF_SEASON';
  /**
   * Winter Sale.
   */
  public const OCCASION_WINTER_SALE = 'WINTER_SALE';
  /**
   * Summer sale.
   */
  public const OCCASION_SUMMER_SALE = 'SUMMER_SALE';
  /**
   * Fall Sale.
   */
  public const OCCASION_FALL_SALE = 'FALL_SALE';
  /**
   * Spring Sale.
   */
  public const OCCASION_SPRING_SALE = 'SPRING_SALE';
  /**
   * Ramadan.
   */
  public const OCCASION_RAMADAN = 'RAMADAN';
  /**
   * Eid al-Fitr.
   */
  public const OCCASION_EID_AL_FITR = 'EID_AL_FITR';
  /**
   * Eid al-Adha.
   */
  public const OCCASION_EID_AL_ADHA = 'EID_AL_ADHA';
  /**
   * Singles Day.
   */
  public const OCCASION_SINGLES_DAY = 'SINGLES_DAY';
  /**
   * Women's Day.
   */
  public const OCCASION_WOMENS_DAY = 'WOMENS_DAY';
  /**
   * Holi.
   */
  public const OCCASION_HOLI = 'HOLI';
  /**
   * Parent's Day.
   */
  public const OCCASION_PARENTS_DAY = 'PARENTS_DAY';
  /**
   * St. Nicholas Day.
   */
  public const OCCASION_ST_NICHOLAS_DAY = 'ST_NICHOLAS_DAY';
  /**
   * Carnival.
   */
  public const OCCASION_CARNIVAL = 'CARNIVAL';
  /**
   * Epiphany, also known as Three Kings' Day.
   */
  public const OCCASION_EPIPHANY = 'EPIPHANY';
  /**
   * Rosh Hashanah.
   */
  public const OCCASION_ROSH_HASHANAH = 'ROSH_HASHANAH';
  /**
   * Passover.
   */
  public const OCCASION_PASSOVER = 'PASSOVER';
  /**
   * Hanukkah.
   */
  public const OCCASION_HANUKKAH = 'HANUKKAH';
  /**
   * Diwali.
   */
  public const OCCASION_DIWALI = 'DIWALI';
  /**
   * Navratri.
   */
  public const OCCASION_NAVRATRI = 'NAVRATRI';
  /**
   * Available in Thai: Songkran.
   */
  public const OCCASION_SONGKRAN = 'SONGKRAN';
  /**
   * Available in Japanese: Year-end Gift.
   */
  public const OCCASION_YEAR_END_GIFT = 'YEAR_END_GIFT';
  protected $collection_key = 'adScheduleTargets';
  protected $adScheduleTargetsType = GoogleAdsSearchads360V23CommonAdScheduleInfo::class;
  protected $adScheduleTargetsDataType = 'array';
  /**
   * A modifier for qualification of the discount.
   *
   * @var string
   */
  public $discountModifier;
  /**
   * Last date of when this asset is effective and still serving, in yyyy-MM-dd
   * format.
   *
   * @var string
   */
  public $endDate;
  /**
   * The language of the promotion. Represented as BCP 47 language tag.
   *
   * @var string
   */
  public $languageCode;
  protected $moneyAmountOffType = GoogleAdsSearchads360V23CommonMoney::class;
  protected $moneyAmountOffDataType = '';
  /**
   * The occasion the promotion was intended for. If an occasion is set, the
   * redemption window will need to fall within the date range associated with
   * the occasion.
   *
   * @var string
   */
  public $occasion;
  protected $ordersOverAmountType = GoogleAdsSearchads360V23CommonMoney::class;
  protected $ordersOverAmountDataType = '';
  /**
   * Percentage off discount in the promotion. 1,000,000 = 100%. Either this or
   * money_amount_off is required.
   *
   * @var string
   */
  public $percentOff;
  protected $promotionBarcodeInfoType = GoogleAdsSearchads360V23CommonPromotionBarcodeInfo::class;
  protected $promotionBarcodeInfoDataType = '';
  /**
   * A code the user should use in order to be eligible for the promotion.
   *
   * @var string
   */
  public $promotionCode;
  protected $promotionQrCodeInfoType = GoogleAdsSearchads360V23CommonPromotionQrCodeInfo::class;
  protected $promotionQrCodeInfoDataType = '';
  /**
   * Required. A freeform description of what the promotion is targeting.
   *
   * @var string
   */
  public $promotionTarget;
  /**
   * Last date of when the promotion is eligible to be redeemed, in yyyy-MM-dd
   * format.
   *
   * @var string
   */
  public $redemptionEndDate;
  /**
   * Start date of when the promotion is eligible to be redeemed, in yyyy-MM-dd
   * format.
   *
   * @var string
   */
  public $redemptionStartDate;
  /**
   * Start date of when this asset is effective and can begin serving, in yyyy-
   * MM-dd format.
   *
   * @var string
   */
  public $startDate;
  /**
   * Terms and conditions of the promotion.
   *
   * @var string
   */
  public $termsAndConditionsText;
  /**
   * URI to the terms and conditions of the promotion.
   *
   * @var string
   */
  public $termsAndConditionsUri;

  /**
   * List of non-overlapping schedules specifying all time intervals for which
   * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
   * total.
   *
   * @param GoogleAdsSearchads360V23CommonAdScheduleInfo[] $adScheduleTargets
   */
  public function setAdScheduleTargets($adScheduleTargets)
  {
    $this->adScheduleTargets = $adScheduleTargets;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdScheduleInfo[]
   */
  public function getAdScheduleTargets()
  {
    return $this->adScheduleTargets;
  }
  /**
   * A modifier for qualification of the discount.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UP_TO
   *
   * @param self::DISCOUNT_MODIFIER_* $discountModifier
   */
  public function setDiscountModifier($discountModifier)
  {
    $this->discountModifier = $discountModifier;
  }
  /**
   * @return self::DISCOUNT_MODIFIER_*
   */
  public function getDiscountModifier()
  {
    return $this->discountModifier;
  }
  /**
   * Last date of when this asset is effective and still serving, in yyyy-MM-dd
   * format.
   *
   * @param string $endDate
   */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return string
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * The language of the promotion. Represented as BCP 47 language tag.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * Money amount off for discount in the promotion. Either this or percent_off
   * is required.
   *
   * @param GoogleAdsSearchads360V23CommonMoney $moneyAmountOff
   */
  public function setMoneyAmountOff(GoogleAdsSearchads360V23CommonMoney $moneyAmountOff)
  {
    $this->moneyAmountOff = $moneyAmountOff;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMoney
   */
  public function getMoneyAmountOff()
  {
    return $this->moneyAmountOff;
  }
  /**
   * The occasion the promotion was intended for. If an occasion is set, the
   * redemption window will need to fall within the date range associated with
   * the occasion.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEW_YEARS, CHINESE_NEW_YEAR,
   * VALENTINES_DAY, EASTER, MOTHERS_DAY, FATHERS_DAY, LABOR_DAY,
   * BACK_TO_SCHOOL, HALLOWEEN, BLACK_FRIDAY, CYBER_MONDAY, CHRISTMAS,
   * BOXING_DAY, INDEPENDENCE_DAY, NATIONAL_DAY, END_OF_SEASON, WINTER_SALE,
   * SUMMER_SALE, FALL_SALE, SPRING_SALE, RAMADAN, EID_AL_FITR, EID_AL_ADHA,
   * SINGLES_DAY, WOMENS_DAY, HOLI, PARENTS_DAY, ST_NICHOLAS_DAY, CARNIVAL,
   * EPIPHANY, ROSH_HASHANAH, PASSOVER, HANUKKAH, DIWALI, NAVRATRI, SONGKRAN,
   * YEAR_END_GIFT
   *
   * @param self::OCCASION_* $occasion
   */
  public function setOccasion($occasion)
  {
    $this->occasion = $occasion;
  }
  /**
   * @return self::OCCASION_*
   */
  public function getOccasion()
  {
    return $this->occasion;
  }
  /**
   * The amount the total order needs to be for the user to be eligible for the
   * promotion.
   *
   * @param GoogleAdsSearchads360V23CommonMoney $ordersOverAmount
   */
  public function setOrdersOverAmount(GoogleAdsSearchads360V23CommonMoney $ordersOverAmount)
  {
    $this->ordersOverAmount = $ordersOverAmount;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMoney
   */
  public function getOrdersOverAmount()
  {
    return $this->ordersOverAmount;
  }
  /**
   * Percentage off discount in the promotion. 1,000,000 = 100%. Either this or
   * money_amount_off is required.
   *
   * @param string $percentOff
   */
  public function setPercentOff($percentOff)
  {
    $this->percentOff = $percentOff;
  }
  /**
   * @return string
   */
  public function getPercentOff()
  {
    return $this->percentOff;
  }
  /**
   * Barcode info used to generate promotion barcode for user to be eligible for
   * the promotion.
   *
   * @param GoogleAdsSearchads360V23CommonPromotionBarcodeInfo $promotionBarcodeInfo
   */
  public function setPromotionBarcodeInfo(GoogleAdsSearchads360V23CommonPromotionBarcodeInfo $promotionBarcodeInfo)
  {
    $this->promotionBarcodeInfo = $promotionBarcodeInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPromotionBarcodeInfo
   */
  public function getPromotionBarcodeInfo()
  {
    return $this->promotionBarcodeInfo;
  }
  /**
   * A code the user should use in order to be eligible for the promotion.
   *
   * @param string $promotionCode
   */
  public function setPromotionCode($promotionCode)
  {
    $this->promotionCode = $promotionCode;
  }
  /**
   * @return string
   */
  public function getPromotionCode()
  {
    return $this->promotionCode;
  }
  /**
   * QR code info used to generate promotion QR code for user to be eligible for
   * the promotion.
   *
   * @param GoogleAdsSearchads360V23CommonPromotionQrCodeInfo $promotionQrCodeInfo
   */
  public function setPromotionQrCodeInfo(GoogleAdsSearchads360V23CommonPromotionQrCodeInfo $promotionQrCodeInfo)
  {
    $this->promotionQrCodeInfo = $promotionQrCodeInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPromotionQrCodeInfo
   */
  public function getPromotionQrCodeInfo()
  {
    return $this->promotionQrCodeInfo;
  }
  /**
   * Required. A freeform description of what the promotion is targeting.
   *
   * @param string $promotionTarget
   */
  public function setPromotionTarget($promotionTarget)
  {
    $this->promotionTarget = $promotionTarget;
  }
  /**
   * @return string
   */
  public function getPromotionTarget()
  {
    return $this->promotionTarget;
  }
  /**
   * Last date of when the promotion is eligible to be redeemed, in yyyy-MM-dd
   * format.
   *
   * @param string $redemptionEndDate
   */
  public function setRedemptionEndDate($redemptionEndDate)
  {
    $this->redemptionEndDate = $redemptionEndDate;
  }
  /**
   * @return string
   */
  public function getRedemptionEndDate()
  {
    return $this->redemptionEndDate;
  }
  /**
   * Start date of when the promotion is eligible to be redeemed, in yyyy-MM-dd
   * format.
   *
   * @param string $redemptionStartDate
   */
  public function setRedemptionStartDate($redemptionStartDate)
  {
    $this->redemptionStartDate = $redemptionStartDate;
  }
  /**
   * @return string
   */
  public function getRedemptionStartDate()
  {
    return $this->redemptionStartDate;
  }
  /**
   * Start date of when this asset is effective and can begin serving, in yyyy-
   * MM-dd format.
   *
   * @param string $startDate
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return string
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /**
   * Terms and conditions of the promotion.
   *
   * @param string $termsAndConditionsText
   */
  public function setTermsAndConditionsText($termsAndConditionsText)
  {
    $this->termsAndConditionsText = $termsAndConditionsText;
  }
  /**
   * @return string
   */
  public function getTermsAndConditionsText()
  {
    return $this->termsAndConditionsText;
  }
  /**
   * URI to the terms and conditions of the promotion.
   *
   * @param string $termsAndConditionsUri
   */
  public function setTermsAndConditionsUri($termsAndConditionsUri)
  {
    $this->termsAndConditionsUri = $termsAndConditionsUri;
  }
  /**
   * @return string
   */
  public function getTermsAndConditionsUri()
  {
    return $this->termsAndConditionsUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPromotionAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPromotionAsset');
