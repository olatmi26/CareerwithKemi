<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Career
 *
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobList[] $jobs
 * @property-read int|null $jobs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SkillBank[] $skillBanks
 * @property-read int|null $skill_banks_count
 * @method static \Database\Factories\CareerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Career newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Career newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Career query()
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Career whereUpdatedAt($value)
 */
	class Career extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CareerFocus
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $careerKeyArea
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CareerFocusFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus query()
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus whereCareerKeyArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareerFocus whereUserId($value)
 */
	class CareerFocus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Competency
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $competenciesList
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CompetencyFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Competency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Competency whereCompetenciesList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competency whereUserId($value)
 */
	class Competency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $currency
 * @property string $symbol
 * @property int|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereValue($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Education
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $degreeObtainWithCourse
 * @property string|null $schoolAttended
 * @property \Illuminate\Support\Carbon|null $YearGraduated
 * @property string|null $gradeObtain
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\EducationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education query()
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereDegreeObtainWithCourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereGradeObtain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereSchoolAttended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereYearGraduated($value)
 */
	class Education extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Experience
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $companyName
 * @property string|null $positionHeld
 * @property \Illuminate\Support\Carbon|null $fromYear
 * @property \Illuminate\Support\Carbon|null $toYear
 * @property bool $isCurrentJob
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ExperienceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience query()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereFromYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereIsCurrentJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience wherePositionHeld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereToYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereUserId($value)
 */
	class Experience extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobList
 *
 * @property int $id
 * @property int|null $career_id
 * @property string|null $jobTitle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Career|null $Career
 * @method static \Database\Factories\JobListFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|JobList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobList query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobList whereCareerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobList whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobList whereUpdatedAt($value)
 */
	class JobList extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobResponsibility
 *
 * @property int $id
 * @property int|null $experience_id
 * @property string|null $responsibility
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Experience|null $experience
 * @method static \Database\Factories\JobResponsibilityFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereExperienceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereResponsibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereUpdatedAt($value)
 */
	class JobResponsibility extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KeyAchievement
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $achievementList
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\KeyAchievementFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement query()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement whereAchievementList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyAchievement whereUserId($value)
 */
	class KeyAchievement extends \Eloquent {}
}

namespace App\Models\Lookups{
/**
 * App\Models\Lookups\City
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $state_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Lookups\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models\Lookups{
/**
 * App\Models\Lookups\Country
 *
 * @property int $id
 * @property string|null $sortname
 * @property string|null $name
 * @property int|null $phonecode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lookups\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhonecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSortname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models\Lookups{
/**
 * App\Models\Lookups\State
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lookups\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\Lookups\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MediaHandle
 *
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MediaHandleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaHandle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaHandle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaHandle query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaHandle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaHandle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaHandle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaHandle whereUpdatedAt($value)
 */
	class MediaHandle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProfessionalAffiliation
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $body
 * @property string|null $bodyFullName
 * @property \Illuminate\Support\Carbon|null $dateObtained
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ProfessionalAffiliationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation whereBodyFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation whereDateObtained($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalAffiliation whereUserId($value)
 */
	class ProfessionalAffiliation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProfileSummary
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $summary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ProfileSummaryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileSummary whereUserId($value)
 */
	class ProfileSummary extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Recognition
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $recognitionList
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\RecognitionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition whereRecognitionList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recognition whereUserId($value)
 */
	class Recognition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Referee
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $refFullName
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\RefereeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Referee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Referee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Referee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Referee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Referee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Referee whereRefFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Referee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Referee whereUserId($value)
 */
	class Referee extends \Eloquent {}
}

namespace App\Models\Services{
/**
 * App\Models\Services\Payment
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $resume_build_id
 * @property int|null $AmountPaid
 * @property bool $paymentStatus
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Services\ResumeBuild|null $resumeBuild
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Services\ResumeBuild[] $resumeBuilds
 * @property-read int|null $resume_builds_count
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\Services\PaymentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereResumeBuildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models\Services{
/**
 * App\Models\Services\ResumeBuild
 *
 * @property int $id
 * @property string|null $orderID
 * @property string|null $name
 * @property int $resume_type_id
 * @property int $user_id
 * @property bool|null $completed
 * @property bool|null $asDownload
 * @property bool|null $paymentSuccessful
 * @property \Illuminate\Support\Carbon|null $datePurchased
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Services\ResumeType $resumeType
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\Services\ResumeBuildFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereAsDownload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereDatePurchased($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereOrderID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild wherePaymentSuccessful($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereResumeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeBuild whereUserId($value)
 */
	class ResumeBuild extends \Eloquent {}
}

namespace App\Models\Services{
/**
 * App\Models\Services\ResumeType
 *
 * @property int $id
 * @property string|null $type
 * @property string|null $description
 * @property string|null $featureImage
 * @property int|null $cost
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Services\ResumeBuild[] $resumeBuild
 * @property-read int|null $resume_build_count
 * @method static \Database\Factories\Services\ResumeTypeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType whereFeatureImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResumeType whereUpdatedAt($value)
 */
	class ResumeType extends \Eloquent {}
}

namespace App\Models\Services{
/**
 * App\Models\Services\Revenue
 *
 * @property int $id
 * @property int|null $Income
 * @property int|null $Expenses
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Services\RevenueFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue query()
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue whereExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue whereIncome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revenue whereUpdatedAt($value)
 */
	class Revenue extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SkillBank
 *
 * @property int $id
 * @property int|null $career_id
 * @property string|null $skill
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Career|null $career
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\SkillBankFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank query()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank whereCareerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank whereSkill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillBank whereUpdatedAt($value)
 */
	class SkillBank extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Skills
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $skill_bank_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SkillBank|null $skillBank
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\SkillsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Skills newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skills newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skills query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skills whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skills whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skills whereSkillBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skills whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skills whereUserId($value)
 */
	class Skills extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SocialHandle
 *
 * @property int $id
 * @property int $user_id
 * @property int $media_handle_id
 * @property string|null $socialLinkUrl
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MediaHandle $mediaHandle
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\SocialHandleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle whereMediaHandleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle whereSocialLinkUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialHandle whereUserId($value)
 */
	class SocialHandle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Training
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $trainingCoursesList
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\TrainingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Training newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Training newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Training query()
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereTrainingCoursesList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereUserId($value)
 */
	class Training extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $firstName
 * @property string|null $middleName
 * @property string|null $surName
 * @property string $phoneN0
 * @property string $phoneN02
 * @property string|null $ResidentialAddress
 * @property int|null $city_id
 * @property int|null $state_id
 * @property int|null $country_id
 * @property string|null $photo
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneN0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneN02($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereResidentialAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

