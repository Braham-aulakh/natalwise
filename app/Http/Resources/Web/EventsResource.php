<?php

namespace App\Http\Resources\Web;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource
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
        $tags = $this->relationLoaded('tags') ? $this->whenLoaded('tags') : null;
        $clinic = $this->relationLoaded('clinic') ? $this->whenLoaded('clinic') : null;
        $doctor = $this->relationLoaded('doctor') ? $this->whenLoaded('doctor') : null;
        $event_category = $this->relationLoaded('event_category') ? $this->whenLoaded('event_category') : null;
        $sponsers = $this->relationLoaded('sponsers') ? $this->whenLoaded('sponsers') : null;
        return [
            "id" =>  $this->id,
            'doctor_id' => $this->doctor_id,
            'doctor_name' => $doctor ? $doctor->name : "",
            'clinic_id' => $this->clinic_id,
            'clinic_name' => $clinic ? $clinic->name : "",
            'event_category_id' => $this->event_category_id,
            'event_category_name' => $event_category ? $event_category->name :"",
            'doctor' => $doctor,
            'clinic' => $clinic,
            "tag_ids" => $tags ? TagsResource::collection($this->whenLoaded('tags', function () {
                return $this->tags;
            }))->pluck('id')->toArray() : [],
            "tags" => $tags ? TagsResource::collection($tags) : [],
            "sponsers" => $sponsers ? EventSponsersResource::collection($sponsers) : [],
            "name" =>  $this->name,
            "name_translations" => $this->getTranslations('name'),
            "description" =>  $this->description,
            "description_translations" =>  $this->getTranslations('description'),
            "slug" =>  $this->slug,
            "is_active" =>  $this->is_active,
            "is_featured" =>  $this->is_featured,
            "starts_at" =>  $this->starts_at,
            "ends_at" =>  $this->ends_at,
            "show_starts_at" =>  Carbon::parse($this->starts_at)->format('Y-m-d'),
            "show_ends_at" =>  Carbon::parse($this->ends_at)->format('Y-m-d'),
            "sponsor" =>  $this->sponsor,
            "icon" =>  $this->icon,
            "address_line_1" =>  $this->address_line_1,
            "address_line_2" =>  $this->address_line_2,
            "image" =>  $this->image,
            "created_at" =>  Carbon::parse($this->created_at)->format('Y-m-d'),
            "updated_at" =>  $this->updated_at,
        ];
    }
}
