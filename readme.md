# Simple REST API using - Laravel PHP Framework

### Following controller contains all the REST API methods:

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

### Following End-Point will retrieve a user object by its ID

```GET /users/ffea3120-c531-11e8-ace2-c551d5c1623a```

The response:
```
{
    "msg": "User Informaion.",
    "user": {
        "name": "java beans 4",
        "role": "foo"
    }
}
```

### Search End-Point - user name search

```GET /search/bar```

The response:
```
{
    "msg": "Searh Results",
    "users": [
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

## To test this REST API - Postman has been used

Create User:
![image](https://user-images.githubusercontent.com/31904334/46275955-a9a20280-c52c-11e8-9886-ce00446d6443.png)


Get User By ID:
![image](https://user-images.githubusercontent.com/31904334/46275866-5a5bd200-c52c-11e8-95f9-f3d2f4db2e9a.png)


