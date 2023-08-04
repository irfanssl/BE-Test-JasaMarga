## Requirement to run the project
1. PHP minimum version 8.0
2. Composer
3. or use all in one php package like : XAMPP (PHP, MySql, Apache). make sure XAMPP minimum version : 8.0
4. attention please :
    please make sure to enable php gd extension, because this project require package from https://docs.laravel-excel.com/3.1/getting-started/installation.html.

    if you are using xampp, here's how to enable it :
    - open your xampp control panel
    - click config button on apache 
    - choose PHP (php.ini)
    - and search for ;extension=gd
    - remove ; sign
    - and save it
    - restart xampp control panel


## Step by step how to run 
1. open this project with your favorite code editor, e.g VSCode
2. run : composer install
3. copy .env.example and rename it .env
4. run : php artisan migrate
5. run : php artisan jwt:secret
6. run : php artisan serve
7. open postman to start exploring endpoint
8. postman endpoint attached : BE-Test-JasaMarga.json


## Available endpoints
1. Register
endpoint : 127.0.0.1:8000/api/auth/register
method : POST
required parameter :
- fullname
- username
- password
and the result simmilar like this :
{
    "message": "Register successfully"
}


2. Login
endpoint : 127.0.0.1:8000/api/auth/login
method : POST
required parameter :
- username
- password
and the result simmilar like this :
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2OTExNjE0NzUsImV4cCI6MTY5MTE2NTA3NSwibmJmIjoxNjkxMTYxNDc1LCJqdGkiOiJXU1FFdnVUZ0hNWEJtbjNsIiwic3ViIjoiMTAiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.0bvLBpRMipNen3P_aHYBdqeGTiVrClT0l9YSklLz74s",
    "token_type": "bearer",
    "expires_in": 3600
}


3. Me
endpoint : 127.0.0.1:8000/api/auth/me
method : POST
required parameter :
- Bearer token
and the result simmilar like this :
{
    "id": 2,
    "fullname": "irfan susilo",
    "username": "irfancoba",
    "last_login": null,
    "created_by": null,
    "updated_by": null,
    "created_at": "2023-08-04T06:31:54.000000Z",
    "updated_at": "2023-08-04T06:31:54.000000Z"
}


4. Refresh
endpoint : 127.0.0.1:8000/api/auth/refresh
method : POST
required parameter :
- Bearer token
and the result simmilar like this :
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvcmVmcmVzaCIsImlhdCI6MTY5MTEzMjM3NiwiZXhwIjoxNjkxMTM2MDI0LCJuYmYiOjE2OTExMzI0MjQsImp0aSI6ImZKUDdMcWpIVnY4S0laa2YiLCJzdWIiOiIyIiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.E6ATiTVZ7SzDwbSc9j49wNac3QMhK38xwfLbC4BBTxE",
    "token_type": "bearer",
    "expires_in": 3600
}


5. Logout
endpoint : 127.0.0.1:8000/api/auth/logout
method : POST
required parameter :
- Bearer token
and the result simmilar like this :
{
    "message": "Successfully logged out"
}


5. Import user
endpoint : 127.0.0.1:8000/api/auth/import/user
method : POST
required parameter :
- Bearer token
- File
and the result simmilar like this :
{
    "message": "Import Success",
    "code": 200
}


6. Read all ruas
endpoint : 127.0.0.1:8000/api/auth/ruas?page=2
method : POST
required parameter :
- Bearer token

and the result simmilar like this :
{
    "code": 200,
    "message": null,
    "data": {
        "current_page": 2,
        "data": [
            {
                "id": 11,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:20:10.000000Z",
                "updated_at": "2023-08-04T15:20:10.000000Z",
                "ruas_coordinates": []
            },
            {
                "id": 12,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:23:52.000000Z",
                "updated_at": "2023-08-04T15:23:52.000000Z",
                "ruas_coordinates": []
            },
            {
                "id": 13,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:24:34.000000Z",
                "updated_at": "2023-08-04T15:24:34.000000Z",
                "ruas_coordinates": []
            },
            {
                "id": 14,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:25:23.000000Z",
                "updated_at": "2023-08-04T15:25:23.000000Z",
                "ruas_coordinates": []
            },
            {
                "id": 15,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:25:57.000000Z",
                "updated_at": "2023-08-04T15:25:57.000000Z",
                "ruas_coordinates": []
            },
            {
                "id": 16,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:27:02.000000Z",
                "updated_at": "2023-08-04T15:27:02.000000Z",
                "ruas_coordinates": []
            },
            {
                "id": 17,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:27:26.000000Z",
                "updated_at": "2023-08-04T15:27:26.000000Z",
                "ruas_coordinates": [
                    {
                        "id": 1,
                        "ruas_id": 17,
                        "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                        "created_by": "10",
                        "updated_by": "10",
                        "created_at": "2023-08-04T15:27:26.000000Z",
                        "updated_at": "2023-08-04T15:27:26.000000Z"
                    },
                    {
                        "id": 2,
                        "ruas_id": 17,
                        "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                        "created_by": "10",
                        "updated_by": "10",
                        "created_at": "2023-08-04T15:27:26.000000Z",
                        "updated_at": "2023-08-04T15:27:26.000000Z"
                    },
                    {
                        "id": 3,
                        "ruas_id": 17,
                        "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                        "created_by": "10",
                        "updated_by": "10",
                        "created_at": "2023-08-04T15:27:26.000000Z",
                        "updated_at": "2023-08-04T15:27:26.000000Z"
                    }
                ]
            },
            {
                "id": 18,
                "ruas": "sdas",
                "km_awal": "112",
                "km_akhir": "123",
                "status": 0,
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:28:17.000000Z",
                "updated_at": "2023-08-04T15:28:17.000000Z",
                "ruas_coordinates": [
                    {
                        "id": 4,
                        "ruas_id": 18,
                        "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                        "created_by": "10",
                        "updated_by": "10",
                        "created_at": "2023-08-04T15:28:17.000000Z",
                        "updated_at": "2023-08-04T15:28:17.000000Z"
                    },
                    {
                        "id": 5,
                        "ruas_id": 18,
                        "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                        "created_by": "10",
                        "updated_by": "10",
                        "created_at": "2023-08-04T15:28:17.000000Z",
                        "updated_at": "2023-08-04T15:28:17.000000Z"
                    },
                    {
                        "id": 6,
                        "ruas_id": 18,
                        "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                        "created_by": "10",
                        "updated_by": "10",
                        "created_at": "2023-08-04T15:28:17.000000Z",
                        "updated_at": "2023-08-04T15:28:17.000000Z"
                    }
                ]
            }
        ],
        "first_page_url": "http://127.0.0.1:8000/api/auth/ruas?page=1",
        "from": 11,
        "last_page": 2,
        "last_page_url": "http://127.0.0.1:8000/api/auth/ruas?page=2",
        "links": [
            {
                "url": "http://127.0.0.1:8000/api/auth/ruas?page=1",
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/auth/ruas?page=1",
                "label": "1",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/auth/ruas?page=2",
                "label": "2",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://127.0.0.1:8000/api/auth/ruas",
        "per_page": 10,
        "prev_page_url": "http://127.0.0.1:8000/api/auth/ruas?page=1",
        "to": 18,
        "total": 18
    }
}



5. Read one ruas
endpoint : 127.0.0.1:8000/api/auth/ruas/17
method : GET
required parameter :
- Bearer token
and the result simmilar like this :
{
    "code": 200,
    "message": null,
    "data": {
        "id": 17,
        "ruas": "sdas",
        "km_awal": "112",
        "km_akhir": "123",
        "status": 0,
        "created_by": "10",
        "updated_by": "10",
        "created_at": "2023-08-04T15:27:26.000000Z",
        "updated_at": "2023-08-04T15:27:26.000000Z",
        "ruas_coordinates": [
            {
                "id": 1,
                "ruas_id": 17,
                "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:27:26.000000Z",
                "updated_at": "2023-08-04T15:27:26.000000Z"
            },
            {
                "id": 2,
                "ruas_id": 17,
                "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:27:26.000000Z",
                "updated_at": "2023-08-04T15:27:26.000000Z"
            },
            {
                "id": 3,
                "ruas_id": 17,
                "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
                "created_by": "10",
                "updated_by": "10",
                "created_at": "2023-08-04T15:27:26.000000Z",
                "updated_at": "2023-08-04T15:27:26.000000Z"
            }
        ]
    }
}


6. Create ruas
endpoint : 127.0.0.1:8000/api/auth/ruas
method : POST
required parameter :
- Bearer token
- km_awal
- km_akhir
- status
optional parameter :
- coordinates
and the result simmilar like this :
{
    "code": 200,
    "message": "Create success",
    "data": {
        "ruas": "sdas",
        "km_awal": 112,
        "km_akhir": "123",
        "status": 0,
        "created_by": 10,
        "updated_by": 10,
        "updated_at": "2023-08-04T15:28:17.000000Z",
        "created_at": "2023-08-04T15:28:17.000000Z",
        "id": 18,
        "coordinates": {
            "ruas_id": 18,
            "coordinates": "{\"lat\":37.772,\"lng\":-122.214}",
            "created_by": 10,
            "updated_by": 10,
            "updated_at": "2023-08-04T15:28:17.000000Z",
            "created_at": "2023-08-04T15:28:17.000000Z",
            "id": 6
        }
    }
}


6. Update ruas
endpoint : 127.0.0.1:8000/api/auth/ruas/12
method : PUT
required parameter :
- Bearer token
- km_awal
- km_akhir
- status
optional parameter :
- coordinates
and the result simmilar like this :
{
    "code": 200,
    "message": "Update success",
    "data": {
        "id": 12,
        "ruas": "sdas",
        "km_awal": "112",
        "km_akhir": "123",
        "status": 0,
        "created_by": "10",
        "updated_by": "10",
        "created_at": "2023-08-04T15:23:52.000000Z",
        "updated_at": "2023-08-04T15:43:56.000000Z"
    }
}


7. Delete ruas
endpoint : 127.0.0.1:8000/api/auth/ruas/10
method : DELETE
required parameter :
- Bearer token

and the result simmilar like this :
{
    "code": 200,
    "message": "Delete success",
    "data": {
        "id": 10,
        "ruas": "sdas",
        "km_awal": "112",
        "km_akhir": "123",
        "status": 0,
        "created_by": "10",
        "updated_by": "10",
        "created_at": "2023-08-04T15:15:53.000000Z",
        "updated_at": "2023-08-04T15:15:53.000000Z"
    }
}