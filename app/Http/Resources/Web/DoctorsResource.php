<?php

namespace App\Http\Resources\Web;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorsResource extends JsonResource
{
    public static $wrap = null;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $doctor_settings = $this->relationLoaded('doctor_settings') ? $this->whenLoaded('doctor_settings') : null;
        $doctor_categories = $this->relationLoaded('doctor_categories') ? $this->whenLoaded('doctor_categories') : null;
        $doctor_experiences = $this->relationLoaded('doctor_experiences') ? $this->whenLoaded('doctor_experiences') : null;
        $doctor_certifications = $this->relationLoaded('doctor_certifications') ? $this->whenLoaded('doctor_certifications') : null;
        $doctor_broadcasts = $this->relationLoaded('doctor_broadcasts') ? $this->whenLoaded('doctor_broadcasts') : null;
        $doctor_podcasts = $this->relationLoaded('doctor_podcasts') ? $this->whenLoaded('doctor_podcasts') : null;
        $doctor_events = $this->relationLoaded('doctor_events') ? $this->whenLoaded('doctor_events') : null;
        $doctor_posts = $this->relationLoaded('doctor_posts') ? $this->whenLoaded('doctor_posts') : null;
        $doctor_archives = $this->relationLoaded('doctor_archives') ? $this->whenLoaded('doctor_archives') : null;
        $doctor_reviews = $this->relationLoaded('doctor_reviews') ? $this->whenLoaded('doctor_reviews') : null;
        $pricing_plan = $this->relationLoaded('pricing_plan') ? $this->whenLoaded('pricing_plan') : null;
        $country = $this->relationLoaded('country') ? $this->whenLoaded('country') : null;
        $state = $this->relationLoaded('state') ? $this->whenLoaded('state') : null;
        $city = $this->relationLoaded('city') ? $this->whenLoaded('city') : null;
        $languages = $this->relationLoaded('languages') ? $this->whenLoaded('languages') : null;
        $appointment_schedules = $this->relationLoaded('appointment_schedules') ? $this->whenLoaded('appointment_schedules') : null;
        $tags = $this->relationLoaded('tags') ? $this->whenLoaded('tags') : null;
        $user = $this->relationLoaded('user') ? $this->whenLoaded('user') : null;
        $clinic = $this->relationLoaded('clinic') ? $this->whenLoaded('clinic') : null;
        if ($doctor_reviews) {
            $rating = $doctor_reviews->avg('rating');
            if (!$rating) {
                $rating = 0;
            } else {
                $rating = round($rating, 2);
            }
        } else {
            $rating = 0;
        }
        return [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "clinic_id" => $this->clinic_id,
            "clinic_name" => $clinic->name ?? '',
            "country_id" => $this->country_id,
            "country_name" => $country ? $country->name : "",

            "state_id" => $this->state_id,
            "state_name" => $state ? $state->name : "",
            "city_id" => $this->city_id,
            "city_name" => $city ? $city->name : "",
            "distance" => $this->distance,

            "name" => $this->name,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "description" => $this->description,
            "description_translations" =>  $this->getTranslations('description'),
            "experience" => $this->experience,
            "speciality" => $this->speciality,
            "address_line_1" => $this->address_line_1,
            "address_line_2" => $this->address_line_2,
            "user_name" => $this->user_name,
            "zip_code" => $this->zip_code,
            "is_approved" => $this->is_approved,
            "approved_at" => $this->approved_at,
            "is_active" => $this->is_active,
            "is_online" => $this->is_online,
            "is_premium" => $this->is_premium,
            "is_featured" => $this->is_featured,

            'prefix' => $this->prefix,
            'suffix' => $this->suffix,
            'home_phone' => $this->home_phone,
            'cell_phone' => $this->cell_phone,
            'job_title' => $this->job_title,
            'company' => $this->company,
            'website' => $this->website,
            'email' => $this->email,

            'billing_address_line_1' => $this->billing_address_line_1,
            'billing_address_line_2' => $this->billing_address_line_2,
            'billing_country_id' => $this->billing_country_id,
            'billing_state_id' => $this->billing_state_id,
            'billing_city_id' => $this->billing_city_id,
            'billing_zip_code' => $this->billing_zip_code,

            'shipping_address_line_1' => $this->shipping_address_line_1,
            'shipping_address_line_2' => $this->shipping_address_line_2,
            'shipping_country_id' => $this->shipping_country_id,
            'shipping_state_id' => $this->shipping_state_id,
            'shipping_city_id' => $this->shipping_city_id,
            'shipping_zip_code' => $this->shipping_zip_code,

            'work_address_line_1' => $this->work_address_line_1,
            'work_address_line_2' => $this->work_address_line_2,
            'work_country_id' => $this->work_country_id,
            'work_state_id' => $this->work_state_id,
            'work_city_id' => $this->work_city_id,
            'work_zip_code' => $this->work_zip_code,
            'is_special' => $this->is_special,

            "icon" => $this->icon,
            "image" => $this->image,
            "cover_image" => $this->cover_image,
            "rating" => $rating,
            "pricing_plan_name" => $pricing_plan->name ?? "",
            "doctor_modules" => $pricing_plan ? $pricing_plan->doctor_modules()->pluck('pricing_plan_modules.module_code')->toArray() : [],
            "doctor_settings" => $doctor_settings ? DoctorSettingsResource::collection($this->whenLoaded('doctor_settings', function () {
                return $this->doctor_settings;
            }))->pluck('value', 'name')->toArray() : [],
            "doctor_category_ids" => $doctor_categories ? DoctorCategoriesResource::collection($this->whenLoaded('doctor_categories', function () {
                return $this->doctor_categories;
            }))->pluck('id')->toArray() : [],
            "doctor_categories" => $doctor_categories ? DoctorCategoriesResource::collection($doctor_categories) : [],
            "doctor_experiences" => $doctor_experiences ? DoctorExperiencesResource::collection($doctor_experiences) : [],
            "doctor_certifications" => $doctor_certifications ? $doctor_certifications : [],
            "doctor_broadcasts" => $doctor_broadcasts ? BroadcastsResource::collection($doctor_broadcasts) : [],
            "doctor_podcasts" => $doctor_podcasts ? BroadcastsResource::collection($doctor_podcasts) : [],
            "doctor_events" => $doctor_events ? EventsResource::collection($doctor_events) : [],
            "doctor_posts" => $doctor_posts ? PostsResource::collection($doctor_posts) : [],
            "doctor_archives" => $doctor_archives ? ArchivesResource::collection($doctor_archives) : [],
            "doctor_reviews" => $doctor_reviews ? DoctorReviewsResource::collection($doctor_reviews) : [],
            "appointment_types" => $appointment_schedules ? AppointmentSchedulesResource::collection($appointment_schedules)->keyBy('appointment_type.type') : [],
            "appointment_schedules" => $appointment_schedules ? AppointmentSchedulesResource::collection($appointment_schedules) : [],

            "language_ids" => $languages ? AllLanguagesResource::collection($this->whenLoaded('languages', function () {
                return $this->languages;
            }))->pluck('id')->toArray() : [],
            "tag_ids" => $tags ? TagsResource::collection($this->whenLoaded('tags', function () {
                return $this->tags;
            }))->pluck('id')->toArray() : [],
            "tags" => $tags ? TagsResource::collection($tags) : [],
            "user" => $user,

            "created_at" => Carbon::parse($this->created_at)->format('Y-m-d h:i:s'),
            "updated_at" => $this->updated_at,
        ];
    }
}
