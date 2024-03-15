<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body >
    <div class="container-fluid">
        <div class="container-fluid mb-2 mt-4"style="width: 530px;">
            <div class="alert alert-light task-list-header" role="alert" >
            <label for=""> Task List <i class="fa fa-bars icon"></i></label>
            </div>
        </div>
        <div class="container-fluid border mb-2"style="width: 470px;">
            <div class="alert alert-light ml-5 " role="alert">
                New task
            </div>
            <label for="" class="m-2">Task</label>
            <div class="input-group input mb-3">
                <input type="text" class="form-control " aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="alert alert-light ml-5 alert3" role="alert" style="width: 130px;">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Task list
            </div>
        </div>
        <div class="container-fluid border"style="width: 470px;">
            <div class="alert alert-light ml-5 " role="alert">
                Current Task
            </div>
            <table class="table">
                <tbody>
                  <tr>
                    <td>Task</td>
                  </tr>
                  <tr>
                    <td>Firt task</td>
                    <td><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></td>
                  </tr>
                  <tr>
                    <td >Second task</td>
                    <td><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>
