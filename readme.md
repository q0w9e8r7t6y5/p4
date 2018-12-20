# Project 4
+ By: *Sishir Yeety*
+ Production URL: <http://p4.sy-dwa15.me>

## Database

Primary tables:
  + `customers`
  + `orders`

Pivot table:
  + `customer_order`

## CRUD
*Describe what action I need take in order to see an example of all 4 CRUD operations in your app. I've filled this out with examples from the Foobooks app - delete this and replace with your own info. If one operation is performed multiple times (e.g. Read), you only need to provide 1 example.*

__Create__
  + Visit <http://p4.sy-dwa15.me>
  + Fill out form
  + Click *Submit*
  + This takes you to order page. Under drop-down box `Username`, you should see the newly created user (create #1)
  + Then fill out the order page and submit at the bottom.
  + Then go to <http://p4.sy-dwa15.me/orderlist> (create #2)
  + There you will see your order listed

__Read__
  + Visit <http://p4.sy-dwa15.me/orderlist> see a listing of all orders from the orders table (read #1)
  + Or visit <http://p4.sy-dwa15.me/edit> to see a listing all registered users from the customers table (read #2)

__Update__
  + Visit <http://p4.sy-dwa15.me/edit>; choose the edit/delete button next to one of the users
  + Click the edit link on the right of the table, and make some edit to form
  + Click *Save changes*
  + Observe changes on the updated page

__Delete__
  + Visit <http://p4.sy-dwa15.me/edit>; choose the edit/delete button next to one of the users
  + Click the delete link on the right of the table
  + Confirm delete by pressing the button
  + You will now not see the user anymore on the user table that's populated to <http://p4.sy-dwa15.me/edit>.

## Outside resources

1. Bootstrap Theme: <https://bootswatch.com/spacelab>
2. Migrations: <https://laravel.com/docs/5.7/migrations>
3. Form to Controller Method: <https://stackoverflow.com/questions/38129346/laravel-5-2-getting-form-fields-in-controller-method>
4. Random Order Number Generation Code: <https://stackoverflow.com/questions/38359833/laravel-5-2-generate-random-number-and-save-to-database>
5. PHP Random Function that was used: <http://php.net/manual/en/function.rand.php>

## Code style divergences
*List any divergences from PSR-1/PSR-2 and course guidelines on code style*

## Notes for instructor
*Any notes for me to refer to while grading; if none, omit this section*
