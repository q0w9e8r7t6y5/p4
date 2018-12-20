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

+ No divergences made from the guides.

## Notes for instructor

+ Nothing important to note. This is a proof of concept of the 4 CRUD operations and a simple ordering system. It shows a few basic capabilities of the system.
+ Instead of implementing an auth system, I decided to go a simpler route by adding users to the customers table. This means that when you go to order, please make sure to pick the name that was just entered in.
+ The orderlist page shows all open orders and the users page shows all users. If I had more time, I would've definitely added in the auth system and added more capability, such as editing orders by the customer and a hidden admin panel where orders can be marked complete and then deleted. I would've added the ability to order multiple items at once and add sides, such as drinks and stuff.
+ In P3, it was suggested that I add some padding on the left; so for P4, I actually did that (you can probably see the old commit in the git history), but then the w3c validator was throwing all kinds of errors. Once that was removed, every page was error-free. That's why I did not put the left margin padding in. 
