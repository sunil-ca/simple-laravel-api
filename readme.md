## Simple REST API using - Laravel PHP Framework

Following controller contains all the REST API methods:

      simple-laravel-api/app/Http/Controllers/usersController.php
    



#Following End-Point will return all the users with role = bar

```users?role=bar```

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
        },
        {
            "id": "2ccbf730-c52a-11e8-a1b8-13b4579bb3bc",
            "name": "cookie bars",
            "role": "bar",
            "created_at": "2018-10-01 03:29:16",
            "updated_at": "2018-10-01 03:29:16"
        },
        {
            "id": "2d938600-c52a-11e8-8fb1-d1c0b6bf1254",
            "name": "cookie bars",
            "role": "bar",
            "created_at": "2018-10-01 03:29:17",
            "updated_at": "2018-10-01 03:29:17"
        }
    ]
}
```
