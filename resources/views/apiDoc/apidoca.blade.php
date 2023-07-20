<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background: black">

<div class="d-flex align-items-start p-3">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Settings
        </button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile users
        </button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Status
        </button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Create Status
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">delete and update status
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Show tasks
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Create update delete
            tasks
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourth"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Show comments
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifth"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Create update delete
            comments
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixth"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Create update delete
            projects
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventh"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Create update delete
            task-comments
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eigth"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Create update delete
            avatar
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-nine"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">comments & task & user
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tenth"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">description task
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eleventh"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">project add user
        </button>

        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-twel"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">csrf
        </button>

        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thi"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">find user
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-the"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">favorite
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourh"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">information task
        </button>
        <button class="nav-link" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthteenth"
                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">photo task
        </button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
             tabindex="0">
            <div class="alert alert-info" role="alert">
                основной домен:
                <pre style="background: white">
                http://127.0.0.1:8000/apidoca
            </pre>
            </div>


        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
             tabindex="0">
            <div class="alert alert-info" role="alert">
                <button class="btn btn-primary">GET</button>
                Запрос всех пользователей
                <pre style="background: white">
                    http://127.0.0.1:8000/api/users
                </pre>
                <pre style="background: white">
                    {
                    "response": {
                        "success": true,
                        "users": {
                        "data": [
                                    {
                                        "id": 1,
                                        "name": "admin",
                                        "email": "admin@softui.com",
                                        "phone": null,
                                        "location": null,
                                        "about_me": null,
                                        "created_at": "2023-06-05T17:18:36.000000Z",
                                        "updated_at": "2023-06-05T17:18:36.000000Z"
                                    },
                                    {
                                    "id": 2,
                                    "name": "bvbvbvbvbudw",
                                    "email": "batmansila1234@gmail.com",
                                    "phone": null,
                                    "location": null,
                                    "about_me": null,
                                    "created_at": "2023-06-05T17:20:11.000000Z",
                                    "updated_at": "2023-06-05T17:20:11.000000Z"
                                    }
                                ]
                            }
                        }
                    }
                </pre>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
             tabindex="0">
            <div class="alert alert-info" role="alert">
                All status
                <pre style="background: white">
                        {
                            "response": {
                            "success": true,
                            "status": {
                                "data": [
                                    {
                                        "id": 1,
                                        "name": "working",
                                        "is_active": 1
                                    },
                                    {
                                        "id": 2,
                                        "name": "done",
                                        "is_active": 1
                                    }
                                ]
                            }
                        }
                    }
                    </pre>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="alert alert-info" role="alert">
                <button class="btn btn-success">POST</button>
                Запрос создания статусов

                <p>Набор параметров:</p>
                <pre style="background: white">
                {
                    "name": "processing",
                    "is_active": 1
                }
            </pre>
                <p>RESPONSE:</p>
                <pre style="background: white">
                                http://127.0.0.1:8000/api/status
                {
                    "response": {
                        "success": true,
                        "status": {
                            "data": {
                            "name": "processing",
                            "is_active": 1,
                            "id": 3
                            }
                        }
                    }
                }
            </pre>
            </div>


        </div>
        <div class="tab-pane fade" id="v-pills-first" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="alert alert-info" role="alert">
                <button class="btn btn-success">POST</button>
                Запрос удаление статусов

                <p>Набор параметров:</p>
                <pre style="background: white">
                http://127.0.0.1:8000/api/deleteId=3
            </pre>
                <p>RESPONSE:</p>
                <pre style="background: white">
                    'delete status num.3'
            </pre>
            </div>
            <div class="alert alert-info" role="alert">
                <button class="btn btn-success">POST</button>
                Запрос update статусов

                <p>Набор параметров:</p>
                <pre style="background: white">
                    http://127.0.0.1:8000/api/status?id=3 если ид 3 будет, происходит update, если нет - добавление
                {
                    "name": "processing",
                    "is_active": 1
                }
            </pre>
                <p>RESPONSE:</p>
                <pre style="background: white">
                    'delete status num.3'
            </pre>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="alert alert-info" role="alert">
                <button class="btn btn-primary">GET</button>
                Запрос show tasks

                <p>Набор параметров:</p>
                <pre style="background: white">
                http://127.0.0.1:8000/api/task
                </pre>
            </div>
            <div class="alert alert-info" role="alert">
                <p>RESPONSE:</p>
                <pre style="background: white">
                    {
                        "response": {
                        "success": true,
                        "tasks": {
                            "data": [
                                {
                                    "id": 1,
                                    "name": "dwadwadaw",
                                    "user_id": 1,
                                    "status_id": 2,
                                    "created_at": "2023-06-09T20:19:26.000000Z",
                                    "updated_at": "2023-06-09T20:19:26.000000Z"
                                },
                                {
                                    "id": 2,
                                    "name": "bvbvbvbva",
                                    "user_id": 1,
                                    "status_id": 1,
                                    "created_at": "2023-06-10T17:48:21.000000Z",
                                    "updated_at": "2023-06-11T18:50:29.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "dwadaaaaaaaaaaaaa",
                                    "user_id": 1,
                                    "status_id": 1,
                                    "created_at": "2023-06-11T18:53:01.000000Z",
                                    "updated_at": "2023-06-11T18:53:01.000000Z"
                                }
                                ]
                            }
                        }
                    }
            </pre>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос create статусов

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/task
                </pre>
                    <pre style="background: white">
                    {
                        "name": "dwadwadaw",
                        "user_id": 1,
                        "status_id": 2,
                    },
                </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
                {
                    "response": {
                        "success": true,
                        "task": {
                            "data": {
                                "name": "test",
                                "user_id": 1,
                                "status_id": 2,
                                "created_at": "2023-06-13 17:06:33",
                                "updated_at": "2023-06-13 17:06:33",
                                "id": 8
                            }
                        }
                    }
                }
            </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос update tasks

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/task?id={id}
                </pre>
                    <pre style="background: white">
                    {
                        "name": "update task",
                        "user_id": 1,
                        "status_id": 2
                    }
                    </pre>
                </div>

                <div class="alert alert-info" role="alert">
                    <p>Response:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "task": {
                                    "data": {
                                        "id": 8,
                                        "name": "update task",
                                        "user_id": 1,
                                        "status_id": 2,
                                        "created_at": "2023-06-13 17:06:33",
                                        "updated_at": "2023-06-13 17:18:19"
                                    }
                                }
                            }
                        }
                </pre>
                    or
                    <pre style="background: white">
                        "no tasks"
                    </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос delete статусов

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/task?deleteId={deleteId}
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE</p>
                    <pre style="background: white">
                        "delete task"
                    </pre>
                    or
                    <pre style="background: white">
                        "no tasks"
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-fourth" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-primary">GET</button>
                    Запрос show статусов

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/comment
                </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
{
    "response": {
        "success": true,
        "comments": {
            "data": [
                {
                    "id": 1,
                    "description": "its a just commentss",
                    "user_id": 1,
                    "created_at": "2023-06-09T20:20:04.000000Z",
                    "updated_at": "2023-06-11T18:26:29.000000Z"
                },
                {
                    "id": 2,
                    "description": "1231231231",
                    "user_id": 2,
                    "created_at": "2023-06-09T22:10:58.000000Z",
                    "updated_at": "2023-06-09T22:10:58.000000Z"
                },
                {
                    "id": 6,
                    "description": "php is very coold",
                    "user_id": 1,
                    "created_at": "2023-06-11T18:20:34.000000Z",
                    "updated_at": "2023-06-11T18:20:34.000000Z"
                },
                {
                    "id": 7,
                    "description": "php is very coold",
                    "user_id": 1,
                    "created_at": "2023-06-11T18:21:57.000000Z",
                    "updated_at": "2023-06-11T18:21:57.000000Z"
                },
                {
                    "id": 8,
                    "description": "php is very coold",
                    "user_id": 1,
                    "created_at": "2023-06-11T18:25:13.000000Z",
                    "updated_at": "2023-06-11T18:25:13.000000Z"
                },
                {
                    "id": 9,
                    "description": "php is very coold",
                    "user_id": 1,
                    "created_at": "2023-06-11T18:26:19.000000Z",
                    "updated_at": "2023-06-11T18:26:19.000000Z"
                }
            ]
        }
    }
}
            </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-fifth" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос create comments

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/comment
                </pre>
                    <pre style="background: white">
               {
                    "description": "its a just commentsdwadwas",
                    "user_id": 1,
                    "created_at":"2023-06-24 17:43:01" ,
                    "updated_at": "2023-06-24 17:43:01",
                    "task_id":40
                }
                </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "comment": {
                                    "data": {
                                        "description": "its a just commentss",
                                        "user_id": 1,
                                        "updated_at": "2023-06-13T17:48:21.000000Z",
                                        "created_at": "2023-06-13T17:48:21.000000Z",
                                        "id": 10
                                    }
                                }
                            }
                        }
            </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос update comments

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/comment?id={id}
                </pre>
                    <pre style="background: white">
                {
                    "description": "update comment",
                    "user_id": 1
                }
                    </pre>
                </div>

                <div class="alert alert-info" role="alert">
                    <p>Response:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "comment": {
                                    "data": {
                                        "id": 10,
                                        "description": "update comment",
                                        "user_id": 1,
                                        "created_at": "2023-06-13T17:48:21.000000Z",
                                        "updated_at": "2023-06-13T17:50:12.000000Z"
                                    }
                                }
                            }
                        }
                </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос delete статусов

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/comment?deleteId={deleteId}
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE</p>
                    <pre style="background: white">
                        "delete comment""
                    </pre>
                    or
                    <pre style="background: white">
                        "no comment"
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-sixth" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-primary">GET</button>
                    Запрос show project

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://127.0.0.1:8000/api/projects?user_id=1
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "tasks": {
                                    "data": [
                                        {
                                            "id": 27,
                                            "project": "testdwadwa",
                                            "creator_id": 1
                                        },
                                        {
                                            "id": 28,
                                            "project": "dwadwad",
                                            "creator_id": 1
                                        }
                                    ]
                                }
                            }
                        }
            </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос create comments

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://127.0.0.1:8000/api/projects
                    </pre>
                    <pre style="background: white">
                {
                    "project": "testdwadwa",
                    "creator_id": 1
                }
                    </pre>
                </div>

                <div class="alert alert-info" role="alert">
                    <p>Response:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "project": {
                                    "data": {
                                        "project": "testdwadwa",
                                        "creator_id": 1,
                                        "id": 29
                                    }
                                }
                            }
                        }
                </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос update project

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/project?id={project id}
                    </pre>
                    <pre>
                                {
                                    "project": "testdwadwadwda",
                                    "creator_id": 1
                                }

                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE</p>
                    <pre style="background: white">
                        {
    "response": {
        "success": true,
        "project": {
            "data": {
                "id": 28,
                "project": "testdwadwadwda",
                "creator_id": 1
            }
        }
    }
}
                    </pre>

                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос delete project

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/project?deleteId={deleteId}
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE</p>
                    <pre style="background: white">
                        "delete done"
                    </pre>
                    or
                    <pre style="background: white">
                        "delete not done"
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-seventh" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос create comments

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/comment
                </pre>
                    <pre style="background: white">
                {
                    "description": "its a just commentss",
                    "user_id": 1
                }
                </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "comment": {
                                    "data": {
                                        "description": "its a just commentss",
                                        "user_id": 1,
                                        "updated_at": "2023-06-13T17:48:21.000000Z",
                                        "created_at": "2023-06-13T17:48:21.000000Z",
                                        "id": 10
                                    }
                                }
                            }
                        }
            </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос update comments

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/comment?id={id}
                </pre>
                    <pre style="background: white">
                {
                    "description": "update comment",
                    "user_id": 1
                }
                    </pre>
                </div>

                <div class="alert alert-info" role="alert">
                    <p>Response:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "comment": {
                                    "data": {
                                        "id": 10,
                                        "description": "update comment",
                                        "user_id": 1,
                                        "created_at": "2023-06-13T17:48:21.000000Z",
                                        "updated_at": "2023-06-13T17:50:12.000000Z"
                                    }
                                }
                            }
                        }
                </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос delete статусов

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/comment?deleteId={deleteId}
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE</p>
                    <pre style="background: white">
                        "delete comment""
                    </pre>
                    or
                    <pre style="background: white">
                        "no comment"
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-eigth" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-primary">GET</button>
                    Запрос show avatar

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://127.0.0.1:8000/api/avatarLoad?user_id={user_id}
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
                        {
                            "user_id": "1",
                            "avatar": "avatars/8OtCeL0eFWYMQZfOk7kKYFMjmET6hQpP97drsYAa.png"
                        }
                    </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос send avatar

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                http://127.0.0.1:8000/api/avatar?id={id}
                </pre>
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-nine" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-primary">GET</button>
                    Запрос show comment task user

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://127.0.0.1:8000/api/commenttaskuser
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
{
    "response": {
        "success": true,
        "data": {
            "comments": [
                {
                    "id": 45,
                    "description": "test",
                    "user_id": 1,
                    "created_at": "2023-06-24T17:43:01.000000Z",
                    "updated_at": "2023-06-24T17:43:01.000000Z"
                },
                {
                    "id": 46,
                    "description": "вцфвцфвф",
                    "user_id": 1,
                    "created_at": "2023-06-24T18:03:04.000000Z",
                    "updated_at": "2023-06-24T18:03:04.000000Z"
                },
                {
                    "id": 47,
                    "description": "dwadwa",
                    "user_id": 1,
                    "created_at": "2023-06-25T14:19:48.000000Z",
                    "updated_at": "2023-06-25T14:19:48.000000Z"
                }
            ],
            "taskComment": [
                {
                    "id": 42,
                    "task_id": 38,
                    "comment_id": 45
                },
                {
                    "id": 43,
                    "task_id": 38,
                    "comment_id": 46
                },
                {
                    "id": 44,
                    "task_id": 39,
                    "comment_id": 47
                }
            ],
            "user": [
                {
                    "id": 1,
                    "name": "admin",
                    "email": "admin@softui.com",
                    "phone": null,
                    "location": null,
                    "about_me": null,
                    "created_at": "2023-06-05T17:18:36.000000Z",
                    "updated_at": "2023-06-05T17:18:36.000000Z"
                },
                {
                    "id": 2,
                    "name": "bvbvbvbvbudw",
                    "email": "batmansila1234@gmail.com",
                    "phone": null,
                    "location": null,
                    "about_me": null,
                    "created_at": "2023-06-05T17:20:11.000000Z",
                    "updated_at": "2023-06-05T17:20:11.000000Z"
                },
                {
                    "id": 3,
                    "name": "dwada",
                    "email": "dwad@gmail.com",
                    "phone": null,
                    "location": null,
                    "about_me": null,
                    "created_at": "2023-06-18T19:29:35.000000Z",
                    "updated_at": "2023-06-18T19:29:35.000000Z"
                },
                {
                    "id": 4,
                    "name": "вцфвфц",
                    "email": "dwadwaD@hmi.com",
                    "phone": null,
                    "location": null,
                    "about_me": null,
                    "created_at": "2023-06-22T14:40:26.000000Z",
                    "updated_at": "2023-06-22T14:40:26.000000Z"
                },
                {
                    "id": 5,
                    "name": "dwdwad",
                    "email": "dwadwa@gmail.com",
                    "phone": null,
                    "location": null,
                    "about_me": null,
                    "created_at": "2023-06-22T16:37:04.000000Z",
                    "updated_at": "2023-06-22T16:37:04.000000Z"
                }
            ]
        }
    }
}
            </pre>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="v-pills-tenth" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-primary">GET</button>
                    Запрос show description

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://127.0.0.1:8000/api/description-task?task={task id}
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
                        {
                            "response": {
                                "success": true,
                                "tasks": {
                                    "description": {
                                        "id": 8,
                                        "description": "dwadwada",
                                        "task_id": 38
                                    }
                                }
                            }
                        }
                    </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос send description

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://127.0.0.1:8000/api/description-task?task={task id}
                    </pre>

                    <pre>
                        {
                            "description": "dwadwada",
                            "task_id": 40
                        }
                    </pre>
                    response:
                    <pre>
                        "Task description updated/created successfully"
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-eleventh" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-primary">GET</button>
                    Запрос show project add user

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://localhost:8000/api/projectadduser?project_id={ project id }&user_id= {user id}
                    </pre>
                </div>
                <div class="alert alert-info" role="alert">
                    <p>RESPONSE:</p>
                    <pre style="background: white">
                    {
                        "response": {
                            "success": true,
                            "comments": {
                                "data": [
                                    {
                                        "id": 1,
                                        "name": "admin",
                                        "email": "admin@softui.com",
                                        "phone": null,
                                        "location": null,
                                        "about_me": null,
                                        "created_at": "2023-06-05T17:18:36.000000Z",
                                        "updated_at": "2023-06-05T17:18:36.000000Z"
                                    }
                                ],
                                "roles": [
                                    {
                                        "id": 33,
                                        "project_id": 28,
                                        "user_id": 1,
                                        "access_level": "teamlead"
                                    }
                                ]
                            }
                        }
                    }
                    </pre>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос create project add user

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://localhost:8000/api/projectadduser?project_id=28&user_id=1
                    </pre>

                    <pre>
                {
                "project_id": 28 ,
                "user_id": 1,
                "access_level": "teamlead"
            }
                    </pre>
                    response:
                    <pre>
                     {
                        "response": {
                            "success": true,
                            "comment": {
                                "data": {
                                    "id": 33,
                                    "project_id": 28,
                                    "user_id": 1,
                                    "access_level": "teamlead"
                                }
                            }
                        }
                    }
                    </pre>
                </div>

                <div class="alert alert-info" role="alert">
                    <button class="btn btn-success">POST</button>
                    Запрос delete project user add

                    <p>Набор параметров:</p>
                    <pre style="background: white">
                        http://localhost:8000/api/projectadduser?deleteId= [ id ]
                    </pre>
                    response:
                    <pre>
                        'delete comment'
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-twel" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info">
                    <pre>http://127.0.0.1:8000/api/csrf-cookie</pre>
                    response
                    <pre>{
    "csrfToken": null
}</pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-thi" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info">
                    <pre>http://127.0.0.1:8000/api/findUser?name=admin</pre>
                    response
                    <pre>
[
    {
        "id": 1,
        "name": "admin",
        "email": "admin@softui.com",
        "phone": null,
        "location": null,
        "about_me": null,
        "created_at": "2023-06-05T17:18:36.000000Z",
        "updated_at": "2023-06-05T17:18:36.000000Z"
    }
]
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-the" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info">
                    <pre>http://127.0.0.1:8000/api/favorite/toggle?user_id={ user id }&project_id={ project id }</pre>
                    response
                    <pre>
{
    "favoriteExists": false
}
                    </pre>
                </div>

                <div class="alert alert-info">
                    <p>add/delete to favorite</p>
                    <pre>
                        http://127.0.0.1:8000/api/favorite
                        params:
                        {
                            "user_id": 1,
                            "project_id": 28
                        }
                    </pre>
                    <p>response:</p>
                    <pre>
                        {
    "message": "Project added to favorites."
}
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-fourh" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info">
                    <button class="btn btn-primary">GET</button>
                    <pre>http://127.0.0.1:8000/api/information-task</pre>
                    response
                    <pre>
{
    "response": {
        "success": true,
        "status": {
            "data": [
                {
                    "id": 76,
                    "task_id": 70,
                    "user_assigned": 1,
                    "deadline": "2023-06-29",
                    "complexity": 1,
                    "user": {
                        "id": 1,
                        "name": "admin",
                        "email": "admin@softui.com",
                        "phone": null,
                        "location": null,
                        "about_me": null,
                        "created_at": "2023-06-05T17:18:36.000000Z",
                        "updated_at": "2023-06-05T17:18:36.000000Z"
                    }
                }
            ]
        }
    }
}
                    </pre>
                </div>

                <div class="alert alert-info">
                    <button class="btn btn-success">POST</button>

                    <p>change info </p>
                    <pre>
                    http://127.0.0.1:8000/api/information-task
                        params:
{
    "task_id": 69,
    "user_assigned":6,
    "deadline":"2023-07-29",
    "complexity":3
}
                    </pre>
                    <p>response:</p>
                    <pre>
        $response = [
            'response' => [
                'success' => true,
                'comment' => [
                    'data' => $comment ?? null,
                ],
            ],
        ];
                    </pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-fifthteenth" role="tabpanel" aria-labelledby="v-pills-settings-tab"
             tabindex="0">
            <div class="d-flex gap-2">
                <div class="alert alert-info">
                    <pre>http://127.0.0.1:8000/api/task-photo-get?task_id= { task_id }</pre>
                </div>

                <div class="alert alert-info">
                    <p>Response</p>
                    <pre style="background: white">
                        {
                            "id": 10,
                            "task_id": 70,
                            "photo": "photos/nfYvGGpdZPoeUHFsbjD6i1KKsaPs1f5FWyxdnHQr.png"
                        }
                    </pre>
                </div>
            </div>

                <div class="alert alert-info">
                    <div class="alert alert-info">
                        <pre>http://127.0.0.1:8000/api/task-photo-get?task_id= { task_id }&photo= { file } </pre>
                    </div>
                    <p>Response</p>
                    <pre style="background: white">
                        return response()->json([
                            'success' => true,
                            'message' => 'Photo uploaded successfully',
                            'path' => $pathWithoutPublic,
                            'task_id' => $taskId,
                        ], 200);
                    </pre>
                </div>
        </div>

    </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                crossorigin="anonymous"></script>
</body>
</html>
