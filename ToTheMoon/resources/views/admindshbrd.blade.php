
<html lang="en">
<head>
    <title>Admin Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{url('css/styles.css')}}" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</head>
<body>
    <div id="wrapper" >

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ route('index') }}">
                        To The Moon
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Destinations</a>
                </li>
                <li>
                    <a href="#">Users</a>
                </li>
                <li>
                    <a href="#">Sales</a>
                </li>
                <li>
                    <a href="{{ route('signout') }}">Logout</a>
                </li>
            </ul>
        </div>

<div class="container">
     <div class="row">
        <div class="col-lg-11">
                <h2>Admin Index</h2>
        </div>
        
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" id="listTable">
 <thead>
 <tr>
 <th>ID</th>
 <th>Image</th>
 <th>Destination</th>
  <th>Price</th>
 <th width="280px">Action</th>
 </tr>
 </thead> 
 <tbody>
        @foreach ($destination as $list)
            <tr id="{{ $list->id }}">
            	<td>{{ $list->id }}</td>
                <td><img src="{{ url('public/uploads/'.$list->mainimg) }}"
                style="height: 100px; width: 150px;"></td>
                <td>{{ $list->destination }}</td>
                <td>{{ $list->price }}</td>
                <td><a data-id="{{ $list->id }}" class="btn btn-primary btnEdit">Edit</a>
                <a data-id="{{ $list->id }}" class="btn btn-danger btnDelete">Delete</button>
                </td>
            </tr>
        @endforeach
 </tbody>
    </table>
    <div class="d-flex justify-content-center">
    {!! $destination->links() !!}
        <div class="col-lg-1">
            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#addModal">Add</a>
        </div>
<!-- Add list Modal -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 
    <!-- list Modal content-->
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New list</h4>
      </div>
   <div class="modal-body">
 <form id="addlist" name="try" action="{{ route('registeradventure.custom') }}"   method="POST" enctype="multipart/form-data">
 @csrf
 
                            @csrf
                            <div class="form-group mb-3">
                                <div class="form-group mb-3">
                                <input type="text" placeholder="destination" id="destination" class="form-control"
                                    name="destination" required autofocus>
                                @if ($errors->has('destination'))
                                <span class="text-danger">{{ $errors->first('destination') }}</span>
                                @endif
                            </div>
                                <input type="file" placeholder="image" id="mainimg" class="form-control" name="mainimg"
                                    required autofocus>
                                @if ($errors->has('mainimg'))
                                <span class="text-danger">{{ $errors->first('mainimg') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="description" id="description" class="form-control"
                                    name="description" required autofocus>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="video" id="video" class="form-control"
                                    name="video" required autofocus>
                                @if ($errors->has('video'))
                                <span class="text-danger">{{ $errors->first('video') }}</span>
                                @endif
                            </div>
                            
                           <div class="form-group mb-3">
                            <input type="file" name="tourspots1" id="tourspots1" class="form-control" placeholder="Input tourspot picture 3" >
                            @if ($errors->has('tourspots1'))
                            <span class="text-danger">{{ $errors->first('tourspots1') }}</span>
                            @endif
                            </div>
                            </div>
                           <div class="form-group mb-3">
                            <input type="file" name="tourspots2" id="tourspots2" class="form-control" placeholder="Input tourspot picture 2" >
                            @if ($errors->has('tourspots2'))
                            <span class="text-danger">{{ $errors->first('tourspots2') }}</span>
                            @endif
                            </div>
                            <div class="form-group mb-3">
                            <input type="file" name="tourspots3" id="tourspots3" class="form-control" placeholder="Input tourspot picture 3" >
                            @if ($errors->has('tourspots3'))
                            <span class="text-danger">{{ $errors->first('tourspots3') }}</span>
                            @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="fooddescription" id="fooddescription" class="form-control"
                                    name="fooddescription" required autofocus>
                                @if ($errors->has('fooddescription'))
                                <span class="text-danger">{{ $errors->first('fooddescription') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                            <input type="file" name="foodimg1" id="foodimg1" class="form-control" placeholder="Input food picture 1" >
                            @if ($errors->has('foodimg1'))
                            <span class="text-danger">{{ $errors->first('foodimg1') }}</span>
                            @endif
                            </div>
                            <div class="form-group mb-3">
                            <input type="file" name="foodimg2" id="foodimg2" class="form-control" placeholder="Input food picture 2" >
                            @if ($errors->has('foodimg2'))
                            <span class="text-danger">{{ $errors->first('foodimg2') }}</span>
                            @endif
                            </div>
                            <div class="form-group mb-3">
                            <input type="file" name="foodimg3" id="foodimg3" class="form-control" placeholder="Input food picture 3" >
                            @if ($errors->has('foodimg3'))
                            <span class="text-danger">{{ $errors->first('foodimg3') }}</span>
                            @endif
                            </div>
                            <div class="form-group mb-3">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Input price" >
                            @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                            </div>
 <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
 </form>
   </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div> 
<!-- Update list Modal -->
<div id="updateModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 
    <!-- list Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update list</h4>
      </div>
   <div class="modal-body">
 <form id="updatelist" name="updatelist" action="{{ route('registeradventure.custom') }}" method="post">
 <input type="hidden" name="hdnlistId" id="hdnlistId"/>
 @csrf
<div class="form-group">
 <label for="txtProduct">product:</label>
 <input type="text" class="form-control" id="txtProduct" placeholder="Enter Product" name="txtProduct">
 </div>
 <div class="form-group">
 <label for="txtPrice">price:</label>
 <input type="text" class="form-control" id="txtPrice" placeholder="Enter Price" name="txtPrice">
 </div>
 <label for="txtImage">Image:</label>
 <input type="text" class="form-control" id="txtImage" placeholder="SelectImage" name="txtImage">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
 
<script>
  $(document).ready(function () {
 //Add the list  
 $("#addlist").validate({
 rules: {
 destination: "required",
 description: "required",
 mainimg: "required",
 tourspots1: "required",
 tourspots2: "required",
 tourspots3: "required",
 foodimg1: "required",
 foodimg2: "required",
 foodimg3: "required",
 video: "required",
 fooddesription: "required",
 price: "required",
 },
 messages: {
 },
 
 submitHandler: function(form) {
   var form_action = $("#addlist").attr("action");
   $.ajax({
   data: new FormData(this),
   url: form_action,
   type: "POST",
   dataType: 'json',
   success: function (data) {
   var list = '<tr id="'+data.id+'">';
   list += '<td>' + data.id + '</td>';
   list += '<td>' + data.destination + '</td>';
   list += '<td>' + data.description + '</td>';
   list += '<td>' + data.mainimg + '</td>';
   list += '<td>' + data.tourspots1 + '</td>';
   list += '<td>' + data.tourspots2 + '</td>';
   list += '<td>' + data.tourspots3 + '</td>';
   list += '<td>' + data.foodimg1 + '</td>';
   list += '<td>' + data.foodimg2 + '</td>';
   list += '<td>' + data.foodimg3 + '</td>';
   list += '<td>' + data.video + '</td>';
   list += '<td>' + data.fooddescription + '</td>';
   list += '<td>' + data.price + '</td>';
   list += '<td><a data-id="' + data.id + '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' + data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
   list += '</tr>';            
   $('#listTable tbody').prepend(list);
   $('#addlist')[0].reset();
   $('#addModal').modal('hide');
   },
   error: function (data) {
   }
   });
 }
 });
  
 
    //When click edit list
    $('body').on('click', '.btnEdit', function () {
      var list_id = $(this).attr('data-id');
      $.get('product/' + list_id +'/edit', function (data) {
          $('#updateModal').modal('show');
          $('#updatelist #hdnlistId').val(data.id); 
          $('#updatelist #txtFirstName').val(data.item);
          $('#updatelist #txtLastName').val(data.price);
          $('#updatelist #txtImage').val(data.imgname);
          
      })
   });
    // Update the list
 $("#updatelist").validate({
 rules: {
 txtProduct: "required",
 txtPrice: "required",
 txtImage: "required"
 
 },
 messages: {
 },
 
 submitHandler: function(form) {
   var form_action = $("#updatelist").attr("action");
   $.ajax({
   data: $('#updatelist').serialize(),
   url: form_action,
   type: "POST",
   dataType: 'json',
   success: function (data) {
   var list = '<td>' + data.id + '</td>';
   list += '<td>' + data.item + '</td>';
   list += '<td>' + data.price + '</td>';
   list += '<td>' + data.imgname + '</td>';
   list += '<td><a data-id="' + data.id + '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' + data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
   $('#listTable tbody #'+ data.id).html(list);
   $('#updatelist')[0].reset();
   $('#updateModal').modal('hide');
   },
   error: function (data) {
   }
   });
 }
 }); 
 
   //delete list
 $('body').on('click', '.btnDelete', function () {
      var list_id = $(this).attr('data-id');
      $.get('destination/' + list_id +'/delete', function (data) {
          $('#listTable tbody #'+ list_id).remove();
      })
   }); 
 
});   
</script>
</div>
</body>