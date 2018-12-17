# Project 3
+ By: *Sishir Yeety*
+ Production URL: <http://p3.sy-dwa15.me>

## Outside resources

1. Bootstrap Theme: <https://bootswatch.com/spacelab>
2. Laravel Validation/request example: <https://www.youtube.com/watch?v=qBtujLPbNas>
3. View redirections: <https://stackoverflow.com/questions/41559163/header-may-not-contain-more-than-a-single-header-new-line-detected-on-return-vi>
4. Redirect with messages/variables: <https://stackoverflow.com/questions/24389726/laravel-redirecting-user-to-another-page-with-messages>
5. Redirect inside views: <https://laravel.io/forum/11-28-2014-how-to-use-return-redirect-inside-view>
6. Validation example: <https://laravel.io/forum/12-11-2015-how-to-implement-laravel-request-validation>
7. Send variable from one controller to another: <https://stackoverflow.com/questions/51305825/how-to-pass-a-variable-from-one-controller-to-another-laravel>
8. Showing POST values on same page: <https://stackoverflow.com/questions/14595810/use-post-to-get-input-values-on-the-same-page>
9. Array into comma'd values: <https://stackoverflow.com/questions/4762972/how-to-comma-separate-the-values-of-an-array-for-display>
10. Print array: <https://stackoverflow.com/questions/5528097/how-can-i-print-all-the-values-of-an-array>
11. Check if array is empty: <https://stackoverflow.com/questions/2216052/how-to-check-whether-an-array-is-empty-using-php>
12. Make header redirect to home page: <
https://stackoverflow.com/questions/34081841/how-to-redirect-to-a-route-in-laravel-5-by-using-href-tag-if-im-not-using-blade>
13. Custom 404 error page: <https://medium.com/@johann.pardanaud/create-a-default-error-page-with-laravel-ac2b0596290b>
14. Blade templating: <https://laravel.com/docs/5.7/blade>


## 3 Unique inputs

1. Multiple individual text boxes (names, email, phone number)
2. Multiple groups of radio buttons (type, rice, beans, veggies)
3. Dropdown menu to specify meat/tofu selection
4. One large group of checkboxes (toppings)
5. Text area (bottom of order page) for special instructions

## Packages

1. Only used one package - barryvdh/laravel-debugbar <https://github.com/barryvdh/laravel-debugbar>

## Code style divergences

1. No code style divergences from the guidelines. Used phpstorm's reformat code
function to check.
2. A few lines of code on some pages went beyond the 80 characters because
of the injection of php with HTML.

## Notes for instructor

1. Same as p2, but in Laravel. Used given feedback to improve it
2. If you run w3validation off the local server, script tags have to be ommited because
they contain code for the debug toolbar. Throws everything off.
3. Added custom 404 error page. Can test it by going to a directory that doesn't exist.
