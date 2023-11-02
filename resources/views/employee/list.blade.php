<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel project</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>

    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">project for the practice</div>
        </div>
    </div>
    <div class="container py-3">
        <div class="d-flex justify-content-between py-3">
            <div class="h5">Employees</div>
            <div>
                <a href="{{route('employees.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-scriped">
                    
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                        
                    </tr> 


                    <tr>
                        <td>1</td>
                        <td><img src="image\Ellipse 14.png" alt="" style="width: 50px;"></td>
                        <td>Shamm</td>
                        <td>ved2gmail.com</td>
                        <td>Noida</td>
                        
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="image\Ellipse 14.png" alt="" style="width: 50px;"></td>
                        <td>Daam</td>
                        <td>daam09982gmail.com</td>
                        <td>Greater Noida</td>
                        
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="image\Ellipse 14.png" alt="" style="width: 50px;"></td>
                        <td>Dand</td>
                        <td>dand452gmail.com</td>
                        <td>Dehli</td>
                        
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="image\Ellipse 14.png" alt="" style="width: 50px;"></td>
                        <td>Ved</td>
                        <td>ved132gmail.com</td>
                        <td>Mumbai</td>
                        
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    </table>
            </div>

        </div>
    </div>




</body>

</html>