# Bangla Date Converter for WordPress

A PHP snippet to convert English dates to Bangla in WordPress, designed for use in a theme's `functions.php` file.

## Features
- Converts English numbers (0-9) to Bangla numerals (০-৯).
- Translates English month names (e.g., "January") to Bangla (e.g., "জানুয়ারী").
- Converts English day names (short: "Sat", full: "Saturday") to Bangla (e.g., "শনি", "শনিবার").
- Case-insensitive replacements for months and days.
- Error handling for empty or invalid inputs.
- Applies filters to WordPress date functions: `the_date`, `get_the_date`, `the_time`, `get_the_time`, `the_modified_date`, `get_the_modified_date`.

## Advantages
- Localizes dates for Bangla-speaking WordPress users.
- Simple integration into any WordPress theme’s `functions.php`.
- Lightweight and robust with no external dependencies.
- Flexible for various date formats.

## Installation
1. Open your theme’s `functions.php` file (e.g., `wp-content/themes/your-theme/functions.php`).
2. Copy the contents of `bangla-date-converter.php` from this repository.
3. Paste it at the end of `functions.php` and save.

## Usage
- Dates displayed by WordPress (e.g., post dates, modified dates) will automatically convert to Bangla.
- Example: "Monday, 15 April 2025" becomes "সোমবার, ১৫ এপ্রিল ২০২৫".

## Requirements
- WordPress (any recent version).
- PHP 5.3 or higher.

## Customization
- Edit the `$bangla_numbers`, `$bangla_months`, `$bangla_days_short`, or `$bangla_days_full` arrays in the code to adjust translations.
- Modify the `add_filter` calls to target specific WordPress date outputs.

## License
[MIT License](LICENSE) (or specify your preferred license).

## Contributing
Fork this repository, submit issues, or send pull requests to improve the code!
