## P3 Peer Review

+ Reviewer's name: Sishir Yeety
+ Reviwee's name:  Sandra Anderson
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/SandiAnderson/p3>*

## 1. Interface

+ Initial impressions were very positive. Site layout is clean and understandable. I even loaded it up on my mobile device, and the interface worked well there too. I particularly liked the top banner graphic. Not sure if the reviewee actually developed that for this project, but it works really well with the interface.
+ There were no parts of the interface that I found confusing or did not work as I expected. I was a little confused on what the website did exactly, but after doing some background research on race training, I was able to figure it out. This was more an issue with me, than an issue with the project.
+ One part of the interface that I thought worked really well was how well laid out everything was. There is no
clutter or excess anywhere. There is a simple banner at the top and quick text inputs to calculate exactly what needs to be done.
+ Suggestions. The layout itself is very simple and clean, but a little bland. I think a great version 2.0 of this site would be to add a more visually appealing UI with some bootstrap dropdown bars/buttons/up+down arrows. For example, the little up/down arrows are tiny and hard to click. I also didn't like the border around everything underneath the header graphic. That with the footer line at the bottom clutters up, an otherwise, really clean interface. Also add some notes next what is required in the text fields, such as for seconds (0-60) or date should be, at least, a week in the future.

## 2. Functional testing

+ First thing I did was put all the pages through the w3validator. No errors anywhere!
+ I accessed it using Safari on my iOS device. All pages loaded and worked as expected.
+ I tried accessing the website on my computer using two different browsers; Safari and Chrome. No differences to the website between the two.
+ Tried to access the "hidden" project files on the DigitalOcean server (outside of the public folder) and it did not work. Production Server's permissions were set up properly.
+ Tried to access a URL that didn't exist, such as `url/xyz` or `url/12345` and it routed users back to the P3 homepage. No 404 error screens. Well done!
+ On the Estimator page, tried to submit without entering any data. It threw an error alert at the bottom.
+ Tried to type in negative, non-integer, symbols, and letters into the minutes/seconds fields. Properly threw error messages for user to correct their input. It also kept the invalid inputs after going through validation.
+ Tried to submit valid inputs and it showed all the inputted field values, even after submitting.
+ Repeated the process above on the planner page. Similar error messages were displayed.
+ Even tried to set a date in the `When is your race?` field to something in the past and it properly told me that it needs to be a week from the current date/time. Nice job!
+ One error I found was that, if you don't delete the prefilled `MM/DD/YYYY` text and start typing, it will keep that text. Would be nice if it automatically deletes that as you click on the text field and start typing.
+ Also tried to set the `MM` and `DD` fields to values that don't exist, and the validator properly displayed an error that it is not a valid date.
+ Tried invalid inputs, such as letters, symbols, decimals in the `MM/DD/YYYY` field and it correctly displayed errors.
+ Even tried to submit valid inputs and it showed all the inputted field values, even after submitting.
+ Basically, everything works as expected, except for one issue where with the `MM/DD/YYYY` field.

## 3. Code: Routes

+ Went through the routes file. There are 6 routes and they all make sense.
+ Tried to directly access the `/calc` route and it doesn't do anything. Makes sense because it is routing to the controller, which does the calculations, and passes it back to the views.
+ There is one piece of code that should be in a controller, but is in the routes file. It is part of the fallback route. The `return view('welcome')` part of the route can be put into a controller to make the route file look cleaner.
+ I like how ALL the methods were streamlined into one controller and cleanly organized.
+ Other than that, the project creator used the ideal Route/controller organization.

## 4. Code: Views

+ Template inheritance is properly used. Master blade and header blade file are in the layout folder.
+ Other pages are in the correct sub folders, such as the modules or racetime folder.
+ There are no separation of concerns on any view files. Everything that needed to be in blade is in blade.
+ Everything in PHP that can be done in blade was done in blade properly.
+ They did not use any syntax/techniques that were unfamiliar with me, however they seem to be more experienced with blade (especially with the amount of template inheritance that was done) than me. For example, they were able to put pretty much everything into Blade. I personally had some issues trying to format some php code into Blade and getting it to display properly.
+ They even used multi-dimensional arrays in Blade (as talked about in their readme). That was unfamiliar to me.

## 5. Code: General

+ All code looks correctly formatted, properly commented, and cleanly done.
+ All proper techniques from class were used. No inconsistencies to note from the course notes, other than some lines going above the character limit, but that was noted in the readme and didn't seem to be avoidable.
+ Comments in the controller file were very useful to me. Thanks for that!
+ The part of their code that I was found the most interesting and took me a little time to figure out was how advanced their blade templating and blade code was. As I said in the previous section, I struggled a little to try to get everything to display properly and get into sub-views. I was not familiar with some of the techniques (multi-dimensional arrays) and need a little more practice myself, but this user seems to be very proficient with it.
+ After looking through this project, I realized that I could improve my own code tremendously, especially when it comes to formatting, code clarity, and code logic. Another thing was the Blade Templating.

## 6. Misc

+ It was a pleasure to read through your code and learn a few things from someone who seems to be more proficient than I am.
+ I think you did a great job with the project and followed all the requirements properly. The only suggestions I have for improvements is a UI overhaul with bootstrap. Other than that, nice job and good luck for the rest of the semester!
