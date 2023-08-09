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

namespace Google\Service\MapsPlaces;

class GoogleMapsPlacesV1Place extends \Google\Collection
{
  protected $collection_key = 'types';
  protected $addressComponentsType = GoogleMapsPlacesV1PlaceAddressComponent::class;
  protected $addressComponentsDataType = 'array';
  /**
   * @var string
   */
  public $adrFormatAddress;
  protected $attributionsType = GoogleMapsPlacesV1PlaceAttribution::class;
  protected $attributionsDataType = 'array';
  /**
   * @var string
   */
  public $businessStatus;
  /**
   * @var bool
   */
  public $curbsidePickup;
  protected $currentOpeningHoursType = GoogleMapsPlacesV1PlaceOpeningHours::class;
  protected $currentOpeningHoursDataType = '';
  protected $currentSecondaryOpeningHoursType = GoogleMapsPlacesV1PlaceOpeningHours::class;
  protected $currentSecondaryOpeningHoursDataType = 'array';
  /**
   * @var bool
   */
  public $delivery;
  /**
   * @var bool
   */
  public $dineIn;
  protected $displayNameType = GoogleTypeLocalizedText::class;
  protected $displayNameDataType = '';
  protected $editorialSummaryType = GoogleTypeLocalizedText::class;
  protected $editorialSummaryDataType = '';
  /**
   * @var string
   */
  public $formattedAddress;
  /**
   * @var string
   */
  public $googleMapsUri;
  /**
   * @var string
   */
  public $iconBackgroundColor;
  /**
   * @var string
   */
  public $iconMaskBaseUri;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $internationalPhoneNumber;
  protected $locationType = GoogleTypeLatLng::class;
  protected $locationDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $nationalPhoneNumber;
  protected $openingHoursType = GoogleMapsPlacesV1PlaceOpeningHours::class;
  protected $openingHoursDataType = '';
  protected $plusCodeType = GoogleMapsPlacesV1PlacePlusCode::class;
  protected $plusCodeDataType = '';
  /**
   * @var string
   */
  public $priceLevel;
  public $rating;
  /**
   * @var bool
   */
  public $reservable;
  protected $reviewsType = GoogleMapsPlacesV1Review::class;
  protected $reviewsDataType = 'array';
  protected $secondaryOpeningHoursType = GoogleMapsPlacesV1PlaceOpeningHours::class;
  protected $secondaryOpeningHoursDataType = 'array';
  /**
   * @var bool
   */
  public $servesBeer;
  /**
   * @var bool
   */
  public $servesBreakfast;
  /**
   * @var bool
   */
  public $servesBrunch;
  /**
   * @var bool
   */
  public $servesDinner;
  /**
   * @var bool
   */
  public $servesLunch;
  /**
   * @var bool
   */
  public $servesVegetarianFood;
  /**
   * @var bool
   */
  public $servesWine;
  /**
   * @var bool
   */
  public $takeout;
  /**
   * @var string[]
   */
  public $types;
  /**
   * @var int
   */
  public $userRatingCount;
  /**
   * @var int
   */
  public $utcOffsetMinutes;
  protected $viewportType = GoogleGeoTypeViewport::class;
  protected $viewportDataType = '';
  /**
   * @var string
   */
  public $websiteUri;
  /**
   * @var bool
   */
  public $wheelchairAccessibleEntrance;

  /**
   * @param GoogleMapsPlacesV1PlaceAddressComponent[]
   */
  public function setAddressComponents($addressComponents)
  {
    $this->addressComponents = $addressComponents;
  }
  /**
   * @return GoogleMapsPlacesV1PlaceAddressComponent[]
   */
  public function getAddressComponents()
  {
    return $this->addressComponents;
  }
  /**
   * @param string
   */
  public function setAdrFormatAddress($adrFormatAddress)
  {
    $this->adrFormatAddress = $adrFormatAddress;
  }
  /**
   * @return string
   */
  public function getAdrFormatAddress()
  {
    return $this->adrFormatAddress;
  }
  /**
   * @param GoogleMapsPlacesV1PlaceAttribution[]
   */
  public function setAttributions($attributions)
  {
    $this->attributions = $attributions;
  }
  /**
   * @return GoogleMapsPlacesV1PlaceAttribution[]
   */
  public function getAttributions()
  {
    return $this->attributions;
  }
  /**
   * @param string
   */
  public function setBusinessStatus($businessStatus)
  {
    $this->businessStatus = $businessStatus;
  }
  /**
   * @return string
   */
  public function getBusinessStatus()
  {
    return $this->businessStatus;
  }
  /**
   * @param bool
   */
  public function setCurbsidePickup($curbsidePickup)
  {
    $this->curbsidePickup = $curbsidePickup;
  }
  /**
   * @return bool
   */
  public function getCurbsidePickup()
  {
    return $this->curbsidePickup;
  }
  /**
   * @param GoogleMapsPlacesV1PlaceOpeningHours
   */
  public function setCurrentOpeningHours(GoogleMapsPlacesV1PlaceOpeningHours $currentOpeningHours)
  {
    $this->currentOpeningHours = $currentOpeningHours;
  }
  /**
   * @return GoogleMapsPlacesV1PlaceOpeningHours
   */
  public function getCurrentOpeningHours()
  {
    return $this->currentOpeningHours;
  }
  /**
   * @param GoogleMapsPlacesV1PlaceOpeningHours[]
   */
  public function setCurrentSecondaryOpeningHours($currentSecondaryOpeningHours)
  {
    $this->currentSecondaryOpeningHours = $currentSecondaryOpeningHours;
  }
  /**
   * @return GoogleMapsPlacesV1PlaceOpeningHours[]
   */
  public function getCurrentSecondaryOpeningHours()
  {
    return $this->currentSecondaryOpeningHours;
  }
  /**
   * @param bool
   */
  public function setDelivery($delivery)
  {
    $this->delivery = $delivery;
  }
  /**
   * @return bool
   */
  public function getDelivery()
  {
    return $this->delivery;
  }
  /**
   * @param bool
   */
  public function setDineIn($dineIn)
  {
    $this->dineIn = $dineIn;
  }
  /**
   * @return bool
   */
  public function getDineIn()
  {
    return $this->dineIn;
  }
  /**
   * @param GoogleTypeLocalizedText
   */
  public function setDisplayName(GoogleTypeLocalizedText $displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param GoogleTypeLocalizedText
   */
  public function setEditorialSummary(GoogleTypeLocalizedText $editorialSummary)
  {
    $this->editorialSummary = $editorialSummary;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getEditorialSummary()
  {
    return $this->editorialSummary;
  }
  /**
   * @param string
   */
  public function setFormattedAddress($formattedAddress)
  {
    $this->formattedAddress = $formattedAddress;
  }
  /**
   * @return string
   */
  public function getFormattedAddress()
  {
    return $this->formattedAddress;
  }
  /**
   * @param string
   */
  public function setGoogleMapsUri($googleMapsUri)
  {
    $this->googleMapsUri = $googleMapsUri;
  }
  /**
   * @return string
   */
  public function getGoogleMapsUri()
  {
    return $this->googleMapsUri;
  }
  /**
   * @param string
   */
  public function setIconBackgroundColor($iconBackgroundColor)
  {
    $this->iconBackgroundColor = $iconBackgroundColor;
  }
  /**
   * @return string
   */
  public function getIconBackgroundColor()
  {
    return $this->iconBackgroundColor;
  }
  /**
   * @param string
   */
  public function setIconMaskBaseUri($iconMaskBaseUri)
  {
    $this->iconMaskBaseUri = $iconMaskBaseUri;
  }
  /**
   * @return string
   */
  public function getIconMaskBaseUri()
  {
    return $this->iconMaskBaseUri;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setInternationalPhoneNumber($internationalPhoneNumber)
  {
    $this->internationalPhoneNumber = $internationalPhoneNumber;
  }
  /**
   * @return string
   */
  public function getInternationalPhoneNumber()
  {
    return $this->internationalPhoneNumber;
  }
  /**
   * @param GoogleTypeLatLng
   */
  public function setLocation(GoogleTypeLatLng $location)
  {
    $this->location = $location;
  }
  /**
   * @return GoogleTypeLatLng
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setNationalPhoneNumber($nationalPhoneNumber)
  {
    $this->nationalPhoneNumber = $nationalPhoneNumber;
  }
  /**
   * @return string
   */
  public function getNationalPhoneNumber()
  {
    return $this->nationalPhoneNumber;
  }
  /**
   * @param GoogleMapsPlacesV1PlaceOpeningHours
   */
  public function setOpeningHours(GoogleMapsPlacesV1PlaceOpeningHours $openingHours)
  {
    $this->openingHours = $openingHours;
  }
  /**
   * @return GoogleMapsPlacesV1PlaceOpeningHours
   */
  public function getOpeningHours()
  {
    return $this->openingHours;
  }
  /**
   * @param GoogleMapsPlacesV1PlacePlusCode
   */
  public function setPlusCode(GoogleMapsPlacesV1PlacePlusCode $plusCode)
  {
    $this->plusCode = $plusCode;
  }
  /**
   * @return GoogleMapsPlacesV1PlacePlusCode
   */
  public function getPlusCode()
  {
    return $this->plusCode;
  }
  /**
   * @param string
   */
  public function setPriceLevel($priceLevel)
  {
    $this->priceLevel = $priceLevel;
  }
  /**
   * @return string
   */
  public function getPriceLevel()
  {
    return $this->priceLevel;
  }
  public function setRating($rating)
  {
    $this->rating = $rating;
  }
  public function getRating()
  {
    return $this->rating;
  }
  /**
   * @param bool
   */
  public function setReservable($reservable)
  {
    $this->reservable = $reservable;
  }
  /**
   * @return bool
   */
  public function getReservable()
  {
    return $this->reservable;
  }
  /**
   * @param GoogleMapsPlacesV1Review[]
   */
  public function setReviews($reviews)
  {
    $this->reviews = $reviews;
  }
  /**
   * @return GoogleMapsPlacesV1Review[]
   */
  public function getReviews()
  {
    return $this->reviews;
  }
  /**
   * @param GoogleMapsPlacesV1PlaceOpeningHours[]
   */
  public function setSecondaryOpeningHours($secondaryOpeningHours)
  {
    $this->secondaryOpeningHours = $secondaryOpeningHours;
  }
  /**
   * @return GoogleMapsPlacesV1PlaceOpeningHours[]
   */
  public function getSecondaryOpeningHours()
  {
    return $this->secondaryOpeningHours;
  }
  /**
   * @param bool
   */
  public function setServesBeer($servesBeer)
  {
    $this->servesBeer = $servesBeer;
  }
  /**
   * @return bool
   */
  public function getServesBeer()
  {
    return $this->servesBeer;
  }
  /**
   * @param bool
   */
  public function setServesBreakfast($servesBreakfast)
  {
    $this->servesBreakfast = $servesBreakfast;
  }
  /**
   * @return bool
   */
  public function getServesBreakfast()
  {
    return $this->servesBreakfast;
  }
  /**
   * @param bool
   */
  public function setServesBrunch($servesBrunch)
  {
    $this->servesBrunch = $servesBrunch;
  }
  /**
   * @return bool
   */
  public function getServesBrunch()
  {
    return $this->servesBrunch;
  }
  /**
   * @param bool
   */
  public function setServesDinner($servesDinner)
  {
    $this->servesDinner = $servesDinner;
  }
  /**
   * @return bool
   */
  public function getServesDinner()
  {
    return $this->servesDinner;
  }
  /**
   * @param bool
   */
  public function setServesLunch($servesLunch)
  {
    $this->servesLunch = $servesLunch;
  }
  /**
   * @return bool
   */
  public function getServesLunch()
  {
    return $this->servesLunch;
  }
  /**
   * @param bool
   */
  public function setServesVegetarianFood($servesVegetarianFood)
  {
    $this->servesVegetarianFood = $servesVegetarianFood;
  }
  /**
   * @return bool
   */
  public function getServesVegetarianFood()
  {
    return $this->servesVegetarianFood;
  }
  /**
   * @param bool
   */
  public function setServesWine($servesWine)
  {
    $this->servesWine = $servesWine;
  }
  /**
   * @return bool
   */
  public function getServesWine()
  {
    return $this->servesWine;
  }
  /**
   * @param bool
   */
  public function setTakeout($takeout)
  {
    $this->takeout = $takeout;
  }
  /**
   * @return bool
   */
  public function getTakeout()
  {
    return $this->takeout;
  }
  /**
   * @param string[]
   */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /**
   * @return string[]
   */
  public function getTypes()
  {
    return $this->types;
  }
  /**
   * @param int
   */
  public function setUserRatingCount($userRatingCount)
  {
    $this->userRatingCount = $userRatingCount;
  }
  /**
   * @return int
   */
  public function getUserRatingCount()
  {
    return $this->userRatingCount;
  }
  /**
   * @param int
   */
  public function setUtcOffsetMinutes($utcOffsetMinutes)
  {
    $this->utcOffsetMinutes = $utcOffsetMinutes;
  }
  /**
   * @return int
   */
  public function getUtcOffsetMinutes()
  {
    return $this->utcOffsetMinutes;
  }
  /**
   * @param GoogleGeoTypeViewport
   */
  public function setViewport(GoogleGeoTypeViewport $viewport)
  {
    $this->viewport = $viewport;
  }
  /**
   * @return GoogleGeoTypeViewport
   */
  public function getViewport()
  {
    return $this->viewport;
  }
  /**
   * @param string
   */
  public function setWebsiteUri($websiteUri)
  {
    $this->websiteUri = $websiteUri;
  }
  /**
   * @return string
   */
  public function getWebsiteUri()
  {
    return $this->websiteUri;
  }
  /**
   * @param bool
   */
  public function setWheelchairAccessibleEntrance($wheelchairAccessibleEntrance)
  {
    $this->wheelchairAccessibleEntrance = $wheelchairAccessibleEntrance;
  }
  /**
   * @return bool
   */
  public function getWheelchairAccessibleEntrance()
  {
    return $this->wheelchairAccessibleEntrance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleMapsPlacesV1Place::class, 'Google_Service_MapsPlaces_GoogleMapsPlacesV1Place');
