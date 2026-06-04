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

class GoogleAdsSearchads360V23CommonLeadFormField extends \Google\Model
{
  /**
   * Not specified.
   */
  public const INPUT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const INPUT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The user will be asked to fill in their given and family name. This field
   * cannot be set at the same time as GIVEN_NAME or FAMILY_NAME.
   */
  public const INPUT_TYPE_FULL_NAME = 'FULL_NAME';
  /**
   * The user will be asked to fill in their email address.
   */
  public const INPUT_TYPE_EMAIL = 'EMAIL';
  /**
   * The user will be asked to fill in their phone number.
   */
  public const INPUT_TYPE_PHONE_NUMBER = 'PHONE_NUMBER';
  /**
   * The user will be asked to fill in their zip code.
   */
  public const INPUT_TYPE_POSTAL_CODE = 'POSTAL_CODE';
  /**
   * The user will be asked to fill in their street address.
   */
  public const INPUT_TYPE_STREET_ADDRESS = 'STREET_ADDRESS';
  /**
   * The user will be asked to fill in their city.
   */
  public const INPUT_TYPE_CITY = 'CITY';
  /**
   * The user will be asked to fill in their region part of the address (for
   * example, state for US, province for Canada).
   */
  public const INPUT_TYPE_REGION = 'REGION';
  /**
   * The user will be asked to fill in their country.
   */
  public const INPUT_TYPE_COUNTRY = 'COUNTRY';
  /**
   * The user will be asked to fill in their work email address.
   */
  public const INPUT_TYPE_WORK_EMAIL = 'WORK_EMAIL';
  /**
   * The user will be asked to fill in their company name.
   */
  public const INPUT_TYPE_COMPANY_NAME = 'COMPANY_NAME';
  /**
   * The user will be asked to fill in their work phone.
   */
  public const INPUT_TYPE_WORK_PHONE = 'WORK_PHONE';
  /**
   * The user will be asked to fill in their job title.
   */
  public const INPUT_TYPE_JOB_TITLE = 'JOB_TITLE';
  /**
   * The user will be asked to fill in their CPF for Brazil users.
   */
  public const INPUT_TYPE_GOVERNMENT_ISSUED_ID_CPF_BR = 'GOVERNMENT_ISSUED_ID_CPF_BR';
  /**
   * The user will be asked to fill in their DNI for Argentina users.
   */
  public const INPUT_TYPE_GOVERNMENT_ISSUED_ID_DNI_AR = 'GOVERNMENT_ISSUED_ID_DNI_AR';
  /**
   * The user will be asked to fill in their DNI for Peru users.
   */
  public const INPUT_TYPE_GOVERNMENT_ISSUED_ID_DNI_PE = 'GOVERNMENT_ISSUED_ID_DNI_PE';
  /**
   * The user will be asked to fill in their RUT for Chile users.
   */
  public const INPUT_TYPE_GOVERNMENT_ISSUED_ID_RUT_CL = 'GOVERNMENT_ISSUED_ID_RUT_CL';
  /**
   * The user will be asked to fill in their CC for Colombia users.
   */
  public const INPUT_TYPE_GOVERNMENT_ISSUED_ID_CC_CO = 'GOVERNMENT_ISSUED_ID_CC_CO';
  /**
   * The user will be asked to fill in their CI for Ecuador users.
   */
  public const INPUT_TYPE_GOVERNMENT_ISSUED_ID_CI_EC = 'GOVERNMENT_ISSUED_ID_CI_EC';
  /**
   * The user will be asked to fill in their RFC for Mexico users.
   */
  public const INPUT_TYPE_GOVERNMENT_ISSUED_ID_RFC_MX = 'GOVERNMENT_ISSUED_ID_RFC_MX';
  /**
   * The user will be asked to fill in their first name. This field can not be
   * set at the same time as FULL_NAME.
   */
  public const INPUT_TYPE_FIRST_NAME = 'FIRST_NAME';
  /**
   * The user will be asked to fill in their last name. This field can not be
   * set at the same time as FULL_NAME.
   */
  public const INPUT_TYPE_LAST_NAME = 'LAST_NAME';
  /**
   * Question: "Which model are you interested in?" Category: "Auto" This field
   * is subject to a limit of 5 qualifying questions per form and cannot be used
   * if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_VEHICLE_MODEL = 'VEHICLE_MODEL';
  /**
   * Question: "Which type of vehicle are you interested in?" Category: "Auto"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_VEHICLE_TYPE = 'VEHICLE_TYPE';
  /**
   * Question: "What is your preferred dealership?" Category: "Auto" This field
   * is subject to a limit of 5 qualifying questions per form and cannot be used
   * if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PREFERRED_DEALERSHIP = 'PREFERRED_DEALERSHIP';
  /**
   * Question: "When do you plan on purchasing a vehicle?" Category: "Auto" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_VEHICLE_PURCHASE_TIMELINE = 'VEHICLE_PURCHASE_TIMELINE';
  /**
   * Question: "Do you own a vehicle?" Category: "Auto" This field is subject to
   * a limit of 5 qualifying questions per form and cannot be used if values are
   * set using custom_question_fields.
   */
  public const INPUT_TYPE_VEHICLE_OWNERSHIP = 'VEHICLE_OWNERSHIP';
  /**
   * Question: "What vehicle ownership option are you interested in?" Category:
   * "Auto" This field is subject to a limit of 5 qualifying questions per form
   * and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_VEHICLE_PAYMENT_TYPE = 'VEHICLE_PAYMENT_TYPE';
  /**
   * Question: "What type of vehicle condition are you interested in?" Category:
   * "Auto" This field is subject to a limit of 5 qualifying questions per form
   * and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_VEHICLE_CONDITION = 'VEHICLE_CONDITION';
  /**
   * Question: "What size is your company?" Category: "Business" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_COMPANY_SIZE = 'COMPANY_SIZE';
  /**
   * Question: "What is your annual sales volume?" Category: "Business" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_ANNUAL_SALES = 'ANNUAL_SALES';
  /**
   * Question: "How many years have you been in business?" Category: "Business"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_YEARS_IN_BUSINESS = 'YEARS_IN_BUSINESS';
  /**
   * Question: "What is your job department?" Category: "Business" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_JOB_DEPARTMENT = 'JOB_DEPARTMENT';
  /**
   * Question: "What is your job role?" Category: "Business" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_JOB_ROLE = 'JOB_ROLE';
  /**
   * Question: "Are you over 18 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_18_AGE = 'OVER_18_AGE';
  /**
   * Question: "Are you over 19 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_19_AGE = 'OVER_19_AGE';
  /**
   * Question: "Are you over 20 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_20_AGE = 'OVER_20_AGE';
  /**
   * Question: "Are you over 21 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_21_AGE = 'OVER_21_AGE';
  /**
   * Question: "Are you over 22 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_22_AGE = 'OVER_22_AGE';
  /**
   * Question: "Are you over 23 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_23_AGE = 'OVER_23_AGE';
  /**
   * Question: "Are you over 24 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_24_AGE = 'OVER_24_AGE';
  /**
   * Question: "Are you over 25 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_25_AGE = 'OVER_25_AGE';
  /**
   * Question: "Are you over 26 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_26_AGE = 'OVER_26_AGE';
  /**
   * Question: "Are you over 27 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_27_AGE = 'OVER_27_AGE';
  /**
   * Question: "Are you over 28 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_28_AGE = 'OVER_28_AGE';
  /**
   * Question: "Are you over 29 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_29_AGE = 'OVER_29_AGE';
  /**
   * Question: "Are you over 30 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_30_AGE = 'OVER_30_AGE';
  /**
   * Question: "Are you over 31 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_31_AGE = 'OVER_31_AGE';
  /**
   * Question: "Are you over 32 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_32_AGE = 'OVER_32_AGE';
  /**
   * Question: "Are you over 33 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_33_AGE = 'OVER_33_AGE';
  /**
   * Question: "Are you over 34 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_34_AGE = 'OVER_34_AGE';
  /**
   * Question: "Are you over 35 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_35_AGE = 'OVER_35_AGE';
  /**
   * Question: "Are you over 36 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_36_AGE = 'OVER_36_AGE';
  /**
   * Question: "Are you over 37 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_37_AGE = 'OVER_37_AGE';
  /**
   * Question: "Are you over 38 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_38_AGE = 'OVER_38_AGE';
  /**
   * Question: "Are you over 39 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_39_AGE = 'OVER_39_AGE';
  /**
   * Question: "Are you over 40 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_40_AGE = 'OVER_40_AGE';
  /**
   * Question: "Are you over 41 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_41_AGE = 'OVER_41_AGE';
  /**
   * Question: "Are you over 42 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_42_AGE = 'OVER_42_AGE';
  /**
   * Question: "Are you over 43 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_43_AGE = 'OVER_43_AGE';
  /**
   * Question: "Are you over 44 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_44_AGE = 'OVER_44_AGE';
  /**
   * Question: "Are you over 45 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_45_AGE = 'OVER_45_AGE';
  /**
   * Question: "Are you over 46 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_46_AGE = 'OVER_46_AGE';
  /**
   * Question: "Are you over 47 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_47_AGE = 'OVER_47_AGE';
  /**
   * Question: "Are you over 48 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_48_AGE = 'OVER_48_AGE';
  /**
   * Question: "Are you over 49 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_49_AGE = 'OVER_49_AGE';
  /**
   * Question: "Are you over 50 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_50_AGE = 'OVER_50_AGE';
  /**
   * Question: "Are you over 51 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_51_AGE = 'OVER_51_AGE';
  /**
   * Question: "Are you over 52 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_52_AGE = 'OVER_52_AGE';
  /**
   * Question: "Are you over 53 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_53_AGE = 'OVER_53_AGE';
  /**
   * Question: "Are you over 54 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_54_AGE = 'OVER_54_AGE';
  /**
   * Question: "Are you over 55 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_55_AGE = 'OVER_55_AGE';
  /**
   * Question: "Are you over 56 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_56_AGE = 'OVER_56_AGE';
  /**
   * Question: "Are you over 57 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_57_AGE = 'OVER_57_AGE';
  /**
   * Question: "Are you over 58 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_58_AGE = 'OVER_58_AGE';
  /**
   * Question: "Are you over 59 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_59_AGE = 'OVER_59_AGE';
  /**
   * Question: "Are you over 60 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_60_AGE = 'OVER_60_AGE';
  /**
   * Question: "Are you over 61 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_61_AGE = 'OVER_61_AGE';
  /**
   * Question: "Are you over 62 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_62_AGE = 'OVER_62_AGE';
  /**
   * Question: "Are you over 63 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_63_AGE = 'OVER_63_AGE';
  /**
   * Question: "Are you over 64 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_64_AGE = 'OVER_64_AGE';
  /**
   * Question: "Are you over 65 years of age?" Category: "Demographics" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OVER_65_AGE = 'OVER_65_AGE';
  /**
   * Question: "Which program are you interested in?" Category: "Education" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_EDUCATION_PROGRAM = 'EDUCATION_PROGRAM';
  /**
   * Question: "Which course are you interested in?" Category: "Education" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_EDUCATION_COURSE = 'EDUCATION_COURSE';
  /**
   * Question: "Which product are you interested in?" Category: "General" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PRODUCT = 'PRODUCT';
  /**
   * Question: "Which service are you interested in?" Category: "General" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_SERVICE = 'SERVICE';
  /**
   * Question: "Which offer are you interested in?" Category: "General" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_OFFER = 'OFFER';
  /**
   * Question: "Which category are you interested in?" Category: "General" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_CATEGORY = 'CATEGORY';
  /**
   * Question: "What is your preferred method of contact?" Category: "General"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PREFERRED_CONTACT_METHOD = 'PREFERRED_CONTACT_METHOD';
  /**
   * Question: "What is your preferred location?" Category: "General" This field
   * is subject to a limit of 5 qualifying questions per form and cannot be used
   * if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PREFERRED_LOCATION = 'PREFERRED_LOCATION';
  /**
   * Question: "What is the best time to contact you?" Category: "General" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PREFERRED_CONTACT_TIME = 'PREFERRED_CONTACT_TIME';
  /**
   * Question: "When are you looking to make a purchase?" Category: "General"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PURCHASE_TIMELINE = 'PURCHASE_TIMELINE';
  /**
   * Question: "How many years of work experience do you have?" Category: "Jobs"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_YEARS_OF_EXPERIENCE = 'YEARS_OF_EXPERIENCE';
  /**
   * Question: "What industry do you work in?" Category: "Jobs" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_JOB_INDUSTRY = 'JOB_INDUSTRY';
  /**
   * Question: "What is your highest level of education?" Category: "Jobs" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_LEVEL_OF_EDUCATION = 'LEVEL_OF_EDUCATION';
  /**
   * Question: "What type of property are you looking for?" Category: "Real
   * Estate" This field is subject to a limit of 5 qualifying questions per form
   * and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PROPERTY_TYPE = 'PROPERTY_TYPE';
  /**
   * Question: "What do you need a realtor's help with?" Category: "Real Estate"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_REALTOR_HELP_GOAL = 'REALTOR_HELP_GOAL';
  /**
   * Question: "What neighborhood are you interested in?" Category: "Real
   * Estate" This field is subject to a limit of 5 qualifying questions per form
   * and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PROPERTY_COMMUNITY = 'PROPERTY_COMMUNITY';
  /**
   * Question: "What price range are you looking for?" Category: "Real Estate"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PRICE_RANGE = 'PRICE_RANGE';
  /**
   * Question: "How many bedrooms are you looking for?" Category: "Real Estate"
   * This field is subject to a limit of 5 qualifying questions per form and
   * cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_NUMBER_OF_BEDROOMS = 'NUMBER_OF_BEDROOMS';
  /**
   * Question: "Are you looking for a fully furnished property?" Category: "Real
   * Estate" This field is subject to a limit of 5 qualifying questions per form
   * and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_FURNISHED_PROPERTY = 'FURNISHED_PROPERTY';
  /**
   * Question: "Are you looking for properties that allow pets?" Category: "Real
   * Estate" This field is subject to a limit of 5 qualifying questions per form
   * and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PETS_ALLOWED_PROPERTY = 'PETS_ALLOWED_PROPERTY';
  /**
   * Question: "What is the next product you plan to purchase?" Category:
   * "Retail" This field is subject to a limit of 5 qualifying questions per
   * form and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_NEXT_PLANNED_PURCHASE = 'NEXT_PLANNED_PURCHASE';
  /**
   * Question: "Would you like to sign up for an event?" Category: "Retail" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_EVENT_SIGNUP_INTEREST = 'EVENT_SIGNUP_INTEREST';
  /**
   * Question: "Where are you interested in shopping?" Category: "Retail" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_PREFERRED_SHOPPING_PLACES = 'PREFERRED_SHOPPING_PLACES';
  /**
   * Question: "What is your favorite brand?" Category: "Retail" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_FAVORITE_BRAND = 'FAVORITE_BRAND';
  /**
   * Question: "Which type of valid commercial license do you have?" Category:
   * "Transportation" This field is subject to a limit of 5 qualifying questions
   * per form and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_TRANSPORTATION_COMMERCIAL_LICENSE_TYPE = 'TRANSPORTATION_COMMERCIAL_LICENSE_TYPE';
  /**
   * Question: "Interested in booking an event?" Category: "Travel" This field
   * is subject to a limit of 5 qualifying questions per form and cannot be used
   * if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_EVENT_BOOKING_INTEREST = 'EVENT_BOOKING_INTEREST';
  /**
   * Question: "What is your destination country?" Category: "Travel" This field
   * is subject to a limit of 5 qualifying questions per form and cannot be used
   * if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_DESTINATION_COUNTRY = 'DESTINATION_COUNTRY';
  /**
   * Question: "What is your destination city?" Category: "Travel" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_DESTINATION_CITY = 'DESTINATION_CITY';
  /**
   * Question: "What is your departure country?" Category: "Travel" This field
   * is subject to a limit of 5 qualifying questions per form and cannot be used
   * if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_DEPARTURE_COUNTRY = 'DEPARTURE_COUNTRY';
  /**
   * Question: "What is your departure city?" Category: "Travel" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_DEPARTURE_CITY = 'DEPARTURE_CITY';
  /**
   * Question: "What is your departure date?" Category: "Travel" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_DEPARTURE_DATE = 'DEPARTURE_DATE';
  /**
   * Question: "What is your return date?" Category: "Travel" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_RETURN_DATE = 'RETURN_DATE';
  /**
   * Question: "How many people are you traveling with?" Category: "Travel" This
   * field is subject to a limit of 5 qualifying questions per form and cannot
   * be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_NUMBER_OF_TRAVELERS = 'NUMBER_OF_TRAVELERS';
  /**
   * Question: "What is your travel budget?" Category: "Travel" This field is
   * subject to a limit of 5 qualifying questions per form and cannot be used if
   * values are set using custom_question_fields.
   */
  public const INPUT_TYPE_TRAVEL_BUDGET = 'TRAVEL_BUDGET';
  /**
   * Question: "Where do you want to stay during your travel?" Category:
   * "Travel" This field is subject to a limit of 5 qualifying questions per
   * form and cannot be used if values are set using custom_question_fields.
   */
  public const INPUT_TYPE_TRAVEL_ACCOMMODATION = 'TRAVEL_ACCOMMODATION';
  /**
   * Answer configuration for location question. If true, campaign/account level
   * location data (state, city, business name etc) will be rendered on the Lead
   * Form. Starting V13.1, has_location_answer can only be set for "What is your
   * preferred dealership?" question, for advertisers with Location Assets setup
   * at campaign/account level.
   *
   * @var bool
   */
  public $hasLocationAnswer;
  /**
   * Describes the input type, which may be a predefined type such as "full
   * name" or a pre-vetted question like "What kind of vehicle do you have?".
   *
   * @var string
   */
  public $inputType;
  protected $singleChoiceAnswersType = GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers::class;
  protected $singleChoiceAnswersDataType = '';

  /**
   * Answer configuration for location question. If true, campaign/account level
   * location data (state, city, business name etc) will be rendered on the Lead
   * Form. Starting V13.1, has_location_answer can only be set for "What is your
   * preferred dealership?" question, for advertisers with Location Assets setup
   * at campaign/account level.
   *
   * @param bool $hasLocationAnswer
   */
  public function setHasLocationAnswer($hasLocationAnswer)
  {
    $this->hasLocationAnswer = $hasLocationAnswer;
  }
  /**
   * @return bool
   */
  public function getHasLocationAnswer()
  {
    return $this->hasLocationAnswer;
  }
  /**
   * Describes the input type, which may be a predefined type such as "full
   * name" or a pre-vetted question like "What kind of vehicle do you have?".
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FULL_NAME, EMAIL, PHONE_NUMBER,
   * POSTAL_CODE, STREET_ADDRESS, CITY, REGION, COUNTRY, WORK_EMAIL,
   * COMPANY_NAME, WORK_PHONE, JOB_TITLE, GOVERNMENT_ISSUED_ID_CPF_BR,
   * GOVERNMENT_ISSUED_ID_DNI_AR, GOVERNMENT_ISSUED_ID_DNI_PE,
   * GOVERNMENT_ISSUED_ID_RUT_CL, GOVERNMENT_ISSUED_ID_CC_CO,
   * GOVERNMENT_ISSUED_ID_CI_EC, GOVERNMENT_ISSUED_ID_RFC_MX, FIRST_NAME,
   * LAST_NAME, VEHICLE_MODEL, VEHICLE_TYPE, PREFERRED_DEALERSHIP,
   * VEHICLE_PURCHASE_TIMELINE, VEHICLE_OWNERSHIP, VEHICLE_PAYMENT_TYPE,
   * VEHICLE_CONDITION, COMPANY_SIZE, ANNUAL_SALES, YEARS_IN_BUSINESS,
   * JOB_DEPARTMENT, JOB_ROLE, OVER_18_AGE, OVER_19_AGE, OVER_20_AGE,
   * OVER_21_AGE, OVER_22_AGE, OVER_23_AGE, OVER_24_AGE, OVER_25_AGE,
   * OVER_26_AGE, OVER_27_AGE, OVER_28_AGE, OVER_29_AGE, OVER_30_AGE,
   * OVER_31_AGE, OVER_32_AGE, OVER_33_AGE, OVER_34_AGE, OVER_35_AGE,
   * OVER_36_AGE, OVER_37_AGE, OVER_38_AGE, OVER_39_AGE, OVER_40_AGE,
   * OVER_41_AGE, OVER_42_AGE, OVER_43_AGE, OVER_44_AGE, OVER_45_AGE,
   * OVER_46_AGE, OVER_47_AGE, OVER_48_AGE, OVER_49_AGE, OVER_50_AGE,
   * OVER_51_AGE, OVER_52_AGE, OVER_53_AGE, OVER_54_AGE, OVER_55_AGE,
   * OVER_56_AGE, OVER_57_AGE, OVER_58_AGE, OVER_59_AGE, OVER_60_AGE,
   * OVER_61_AGE, OVER_62_AGE, OVER_63_AGE, OVER_64_AGE, OVER_65_AGE,
   * EDUCATION_PROGRAM, EDUCATION_COURSE, PRODUCT, SERVICE, OFFER, CATEGORY,
   * PREFERRED_CONTACT_METHOD, PREFERRED_LOCATION, PREFERRED_CONTACT_TIME,
   * PURCHASE_TIMELINE, YEARS_OF_EXPERIENCE, JOB_INDUSTRY, LEVEL_OF_EDUCATION,
   * PROPERTY_TYPE, REALTOR_HELP_GOAL, PROPERTY_COMMUNITY, PRICE_RANGE,
   * NUMBER_OF_BEDROOMS, FURNISHED_PROPERTY, PETS_ALLOWED_PROPERTY,
   * NEXT_PLANNED_PURCHASE, EVENT_SIGNUP_INTEREST, PREFERRED_SHOPPING_PLACES,
   * FAVORITE_BRAND, TRANSPORTATION_COMMERCIAL_LICENSE_TYPE,
   * EVENT_BOOKING_INTEREST, DESTINATION_COUNTRY, DESTINATION_CITY,
   * DEPARTURE_COUNTRY, DEPARTURE_CITY, DEPARTURE_DATE, RETURN_DATE,
   * NUMBER_OF_TRAVELERS, TRAVEL_BUDGET, TRAVEL_ACCOMMODATION
   *
   * @param self::INPUT_TYPE_* $inputType
   */
  public function setInputType($inputType)
  {
    $this->inputType = $inputType;
  }
  /**
   * @return self::INPUT_TYPE_*
   */
  public function getInputType()
  {
    return $this->inputType;
  }
  /**
   * Answer configuration for a single choice question. Can be set only for pre-
   * vetted question fields. Minimum of 2 answers required and maximum of 12
   * allowed.
   *
   * @param GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers $singleChoiceAnswers
   */
  public function setSingleChoiceAnswers(GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers $singleChoiceAnswers)
  {
    $this->singleChoiceAnswers = $singleChoiceAnswers;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers
   */
  public function getSingleChoiceAnswers()
  {
    return $this->singleChoiceAnswers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLeadFormField::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLeadFormField');
