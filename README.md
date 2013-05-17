# Simple REST-ful Web Service Script

Since REST is all about sending request to a server . Each request has to things request format(GET,POST,PUT,DELETE) and
request link (url of service).

REST provides a clean , human readable interface .

One can easily understand the purpose of a webservice by simply looking at the url & request pattern.

## BASIC REST Description


*method: GET
link::  http://www.localhost.com/items

returns all the items in database.

Response: {["id":"",...],[...],[..]}


*method: GET
link:: http://www.localhost.com/items/3

returns 3rd item in database

Response: {"id":3,"name":"dsf"}


*method: POST
link:: http://www.localhost.com/item

Would create a new Item into database 

Response: {"status":"successful"}


*method: PUT
link:: http://www.localhost.com/item

Would update an Item into database 

Response: {"status":"successful"}


*method: DELETE
link:: http://www.localhost.com/item

Would delete an Item from database 

Response: {"status":"successful"}


## Example

*Method: GET 
link: http://localhost.com/get.php?id=2
Response: {"id":"2","name":"idibosh","address":"asdsd","email":"idibosh@gmail.com"}

*Method: POST
link: http://localhost.com/post.php

curl command: curl -X POST http://localhost.com/post.php -d name=Myname -d address=MyAddress -d email=MyEmail

Response: {"status":"successful"} or {"status":"failure"}


*Method: PUT
link: http://localhost.com/put.php
curl command: curl -X PUT http://localhost.com/put.php -d id=2 name=Myname -d address=MyAddress -d email=MyEmail

Response: {"status":"successful"} or {"status":"failure"}

*Method: DELETE
link: http://localhost.com/delete.php
curl command: curl -X DELETE http://localhost.com/delete.php -d id=

Response: {"status":"successful"} or {"status":"failure"}


## Contributor

* Md. Maksud Alam Chowdhury <mc65799@gmail.com>
Department of Computer Science & Engineering
Bangladesh University of Engineering & Technology

