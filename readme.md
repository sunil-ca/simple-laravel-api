# Simple REST API using - Laravel PHP Framework

Following controller contains all the REST API methods:

      simple-laravel-api/app/Http/Controllers/usersController.php
    



### Following End-Point will return all the users with role = bar

```GET  /users?role=bar```

The response:
```
{
    "msg": "List of Users.",
    "user": [
        {
            "id": "24e07fe0-c52a-11e8-bad8-997dffa08900",
            "name": "cookie bars",
            "role": "bar",
            "created_at": "2018-10-01 03:29:03",
            "updated_at": "2018-10-01 03:29:03"
        },
        {
            "id": "2ac73620-c52a-11e8-9a68-798871eb53d1",
            "name": "cookie bars",
            "role": "bar",
            "created_at": "2018-10-01 03:29:13",
            "updated_at": "2018-10-01 03:29:13"
        }
    ]
}
```

### Following End-Point will create a user object

```POST  /users```

```
{
  "name": "java beans 5",
  "role": "foo"
}
```

The response:
```
{
    "msg": "User Created.",
    "user": {
        "id": "c1c66270-c536-11e8-bd76-8d7bde90dcaa",
        "name": "java beans 5",
        "role": "foo",
        "updated_at": "2018-10-01 04:59:20",
        "created_at": "2018-10-01 04:59:20"
    }
}
```
