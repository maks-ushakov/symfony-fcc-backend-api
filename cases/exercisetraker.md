#Exercise Tracker

##Task

Build a full stack app that is functionally similar to this: https://fuschia-custard.glitch.me/.

## API

###Create a New User

`POST /api/exercise/new-user`

Request:

`username`

Response:

```json
{
    "username": "projmaks",
    "_id": "rJPZXLE-r"
}
```

###Add exercises

`POST /api/exercise/add`

Request:

`userId` *

`description` *

`duration` * (mins)

`date` (yyyy-mm-dd)

Response:

```json
{
    "username": "projmaks",
    "description": "The catalog page",
    "duration": 10,
    "_id": "rJPZXLE-r",
    "date": "Thu Jul 11 2019"
}
```

###GET users's exercise log:

`GET /api/exercise/log?{userId}[&from][&to][&limit]`

{ } = required, [ ] = optional

from, to = dates (yyyy-mm-dd);

limit = number

Response: 

```json
{
  "_id": "rJPZXLE-r",
  "username": "projmaks",
  "count": 1,
  "log": [
    {
      "description": "The catalog page",
      "duration": 10,
      "date": "Thu Jul 11 2019"
    }
  ]
}
```

