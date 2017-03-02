<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Create new employee
     * @param array $data
     *
     * @return
     */
    public static function createEmployee(array $data)
    {
        $profileImagePath = $data['profile_picture']->store('images');

        $result = self::create([
            'first_name'                   => $data['first_name'],
            'last_name'                    => $data['last_name'],
            'date_of_birth'                => $data['date_of_birth'],
            'place_of_birth'               => $data['place_of_birth'],
            'gender'                       => $data['gender'],
            'nationality'                  => $data['nationality'],
            'education'                    => $data['education'],
            'resident_address'             => $data['resident_address'],
            'contact_address'              => $data['contact_address'],
            'email_address'                => $data['email_address'],
            'mobile_phone'                 => $data['mobile_phone'],
            'id_number'                    => $data['personal_id'],
            'date_of_issue'                => $data['id_date_of_issue'],
            'place_of_issue'               => $data['id_place_of_issue'],
            'marital_status'               => $data['marital_status'],
            'tax_code_number'              => $data['tax_code'],
            'number_of_dependant'          => $data['number_of_dependant'],
            'social_insurance_book_number' => $data['social_insurance_number'],
            'labor_book_number'            => $data['labour_book_number'],
            'hospital_registration'        => $data['hospital_registration'],
            'bank'                         => $data['bank_name'],
            'bank_account_number'          => $data['bank_account_number'],
            'bank_address'                 => $data['bank_address'],
            'person_contact_emergency'     => $data['contact_emergency_name'],
            'relationship'                 => $data['contact_emergency_relationship'],
            'emergency_phone_number'       => $data['contact_emergency_number'],
            'emergency_contact_address'    => $data['contact_emergency_address'],
            'facebook'                     => $data['facebook_account'],
            'twitter'                      => $data['twitter_account'],
            'linkedin'                     => $data['linkedin_account'],
            'github'                       => $data['github_account'],
            'profile_picture'              => $profileImagePath,
            'docs_attachment_1'            => $data['certificate_file'],
            'note'                         => $data['note'],
        ]);

        return $result;
    }
}
