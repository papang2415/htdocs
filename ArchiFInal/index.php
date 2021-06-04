<!DOCTYPE html>
<html>

<head>
    <title>CRUD USING AJAX</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">
        <h2 class="mt-4">SIMPLE CRUD APP</h2>
        <div class="box">

            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div> 

<div class="user_data">
    <button type="button" class="btn btn-primary showaddButton" data-toggle="modal" data-target="#addModal">Add Data</button>
    <table>
        <thead>
            <th scope="col" >Username</th>
            <th scope="col">Password</th>;
            <th scope="col">Action</th>
        </thead>    
        <tbody class="tbody">
        </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" name="id" class="id" value="">
                    <div class="input-group ">
                        <label style="font-family:tahoma;">Username</label>&nbsp;&nbsp;
                        <input type="text" name="username" class="name" value="">
                    </div><br>
                    <div class="input-group">
                        <label style="font-family:tahoma;">Password</label>&nbsp;&nbsp;
                        <input type="text" name="password" class="password" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="hidden" class="editID">
                <button type="button" class="btn btn-primary updateButton">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content d-block">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <form method="post">
                    <input type="hidden" name="id" class="id" value="">
                    <div class="input-group">
                        <label style="font-family:tahoma;">Username</label>&nbsp;
                        <input type="text" name="username" class="addname" value="">
                    </div><br>
                    <div class="input-group">
                        <label style="font-family:tahoma;">Password</label>&nbsp;
                        <input type="text" name="password" class="addpassword" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addButton">Add Data</button>
            </div>
        </div>
    </div>
</div>

    

</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "get",
            url: "http://192.168.0.17:8081/WebtoWeb/fetch.php",
            dataType: "json",
            success: function(data) {
                $.each(data, function(i, user) {

                    var rows = "<tr>" +
                        "<td>" + user.username + "</td>" +
                        "<td>" + user.password + "</td>" +
                        "<input type='hidden' value=" + user.id + ">" +'\xa0\xa0'+
                        "<td>" + "<a type='button' data-toggle='modal' data-target='#exampleModal' class='btn btn-warning editBtn'>" + "\xa0 Edit \xa0 " + "</a>"+ '\xa0\xa0\xa0\xa0\xa0' +
                        "<input type='hidden' value=" + user.id + ">" + 
                        "<a type='button' class='btn btn-danger deleteBtn'>" + "Delete" + "</a>" +
                        "</td>" +
                        "</tr>";
                    $('.tbody').prepend(rows);
                });
            }
        });
        $(document).on('click', '.deleteBtn', function() {
            var id = $(this).prev().val()
            console.log(id);
            $.ajax({
                type: "post",
                data: {
                    delete_id: id
                },

                url: "http://192.168.0.17:8081/WebtoWeb/fetch.php",
                success: function(data) {
                    alert('deleted successfully')
                    location.reload();
                }
            });
        })
        $(document).on('click', '.editBtn', function() {
            $('.editID').val($(this).parent().prev().val())
        })
        $(document).on('click', '.updateButton', function() {

            var id = $('.editID').val();
            var newName = $('.name').val();
            var newPass = $('.password').val();
            // console.log(id);
            $.ajax({
                type: "post",
                data: {
                    update_id: id,
                    name: newName,
                    pass: newPass
                },
                url: "http://192.168.0.17:8081/WebtoWeb/fetch.php",
                success: function(data) {
                    alert('Updated Successfully')
                    location.reload();
                }
            });
        })
        $(document).on('click', '.addButton', function() {
            var addName = $('.addname').val();
            var addPass = $('.addpassword').val();
            console.log(addPass);
            $.ajax({
                type: "post",
                data: {
                    addNewname: addName,
                    addNewpass: addPass
                },
                url: "http://192.168.0.17:8081/WebtoWeb/fetch.php",
                success: function(data) {
                    alert('Data Added Successfully')
                    location.reload();
                }
            });
        })
    });
</script>

</html>