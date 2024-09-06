<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    public function actualites()
     {
         return $this->hasMany(Actualite::class);
     }

     public function evenements()
     {
         return $this->hasMany(Agenda::class);
     }

     public function contactRequests()
     {
         return $this->hasMany(Contact_request::class);
     }

     public function partnersSignup()
     {
         return $this->hasMany(Partner_signup::class);
     }

     public function volunteersSignup()
     {
         return $this->hasMany(Volunteer_signup::class);
     }

     public function officeAdresses()
     {
         return $this->hasMany(Office_adress_content::class);
     }

     public function numbers()
     {
         return $this->hasMany(Number_content::class);
     }

     public function contactContents()
     {
         return $this->hasMany(Contact_content::class);
     }

     public function partnerLogos()
     {
         return $this->hasMany(Partner_logo::class);
     }

     public function aboutContents()
     {
         return $this->hasMany(About_content::class);
     }

     public function memberContents()
     {
         return $this->hasMany(Member_content::class);
     }

     public function teamContents()
     {
         return $this->hasMany(Team_content::class);
     }

     public function partnerContents()
     {
         return $this->hasMany(Partner_content::class);
     }

     public function volunteerContents()
     {
         return $this->hasMany(Volunteer_content::class);
     }

     public function partnerThankContents()
     {
         return $this->hasMany(Partner_thanks_content::class);
     }

     public function missionContents()
     {
         return $this->hasMany(Mission_content::class);
     }

     public function jobOffers()
     {
         return $this->hasMany(Job_offers::class);
     }

     public function reviews()
     {
         return $this->hasMany(Reviews::class);
     }

     public function formules()
     {
         return $this->hasMany(Formules::class);
     }

     public function joinNetwork()
     {
         return $this->hasMany(Join_network::class);
     }

     public function globalNumber()
     {
         return $this->hasMany(Global_number_content::class);
     }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',
        ];
    }

    /**
     * Détermine si l'utilisateur est administrateur.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->is_admin;
    }
}
