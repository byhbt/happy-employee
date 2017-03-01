<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEmployee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'                     => 'required',
            'last_name'                      => 'required',
            'date_of_birth'                  => '',
            'place_of_birth'                 => '',
            'gender'                         => 'in:male,female',
            'nationality'                    => '',
            'education'                      => '',
            'resident_address'               => '',
            'contact_address'                => '',
            'email_address'                  => '',
            'mobile_phone'                   => '',
            'personal_id'                    => '',
            'id_date_of_issue'               => '',
            'id_place_of_issue'              => 'required',
            'martial_status'                 => 'in:marriage,single',
            'tax_code'                       => '',
            'number_of_dependant'            => '',
            'social_insurance_number'        => '',
            'labour_book_number'             => '',
            'hospital_registration'          => '',
            'bank_name'                      => '',
            'bank_account_number'            => '',
            'bank_address'                   => '',
            'contact_emergency_name'         => '',
            'contact_emergency_relationship' => '',
            'contact_emergency_number'       => '',
            'contact_emergency_address'      => '',
            'facebook_account'               => '',
            'twitter_account'                => '',
            'linkedin_account'               => '',
            'github_account'                 => '',
            'profile_picture'                => '',
            'certificate_file'               => '',
            'note'                           => '',
        ];
    }
}
