<?php

namespace App\Http\ViewComposers;

use Illuminate\view\view;
use App\Models\ContactInfo;

class contactInfoComposer {
  public function compose (View $view) {
    $contactInfo = ContactInfo::first();

    $view->with('contactInfo', $contactInfo);
  }
}