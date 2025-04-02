<?php
function convert_to_bangla_date($date) {
    // Return empty string if input is empty
    if (empty($date)) {
        return '';
    }

    // Define conversion arrays
    $english_numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $bangla_numbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    
    $english_months = [
        'January', 'February', 'March', 'April', 'May', 'June', 
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    $bangla_months = [
        'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন',
        'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'
    ];
    
    $english_days_short = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
    $bangla_days_short = ['শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র'];
    
    $english_days_full = [
        'Saturday', 'Sunday', 'Monday', 'Tuesday', 
        'Wednesday', 'Thursday', 'Friday'
    ];
    $bangla_days_full = [
        'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 
        'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
    ];

    try {
        // Convert the date string
        $converted = $date;
        
        // Replace numbers
        $converted = str_replace($english_numbers, $bangla_numbers, $converted);
        
        // Replace months (case-insensitive)
        $converted = str_ireplace($english_months, $bangla_months, $converted);
        
        // Replace days (both short and full, case-insensitive)
        $converted = str_ireplace($english_days_short, $bangla_days_short, $converted);
        $converted = str_ireplace($english_days_full, $bangla_days_full, $converted);
        
        return $converted;
    } catch (Exception $e) {
        // Return original date if conversion fails
        return $date;
    }
}

// Filter function with additional error checking
function bdc_filter_the_date($the_date) {
    if (!is_string($the_date)) {
        return $the_date; // Return original if not a string
    }
    
    return convert_to_bangla_date($the_date);
}

// Add WordPress filters only if function exists (for WordPress compatibility)
if (function_exists('add_filter')) {
    add_filter('the_date', 'bdc_filter_the_date', 10, 1);
    add_filter('get_the_date', 'bdc_filter_the_date', 10, 1);
    add_filter('the_time', 'bdc_filter_the_date', 10, 1);
    add_filter('get_the_time', 'bdc_filter_the_date', 10, 1);
    add_filter('the_modified_date', 'bdc_filter_the_date', 10, 1);
    add_filter('get_the_modified_date', 'bdc_filter_the_date', 10, 1);
}
