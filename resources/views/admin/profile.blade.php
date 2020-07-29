@include('includes/header')

<div id="main-content" class="profilepage_2 blog-page">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-6 col-md-8 col-sm-12">
<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> User Profile</h2>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
<li class="breadcrumb-item">User</li>
<li class="breadcrumb-item active">Profile</li>
</ul>
</div>            

</div>
</div>

<div class="row clearfix">

<div class="col-lg-4 col-md-12">
<div class="card profile-header">
<div class="body">
<div class="profile-image"> <img src="../assets/images/user.png" class="rounded-circle" alt=""> </div>
<div>
<h4 class="m-b-0"><strong>Jessica</strong> Doe</h4>
<span>Washington, d.c.</span>
</div>
<!-- <div class="m-t-15">
<button class="btn btn-primary">Follow</button>
<button class="btn btn-outline-secondary">Message</button>
</div> 
-->
<br><br><br> 
</div>
</div>     
</div>

<div class="col-lg-5 col-md-12">
<div class="card">
<div class="body">
<ul class="nav nav-tabs-new">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Overview">Overview</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Settings">Settings</a></li>
</ul>
</div>
</div>

<div class="tab-content padding-0">

<div class="tab-pane animated fadeIn active" id="Overview">
<div class="card">
<div class="body">
<div class="card">
<div class="body">
<h6>Basic Information</h6>
<div class="row clearfix">
<div class="col-lg-12 col-md-12">
<div class="form-group"> 
<select name="title" required class="form-control">
   <!-- <option value="">Select</option> -->
   <option value="Sister">Sister</option>
   <option value="Brother">Brother</option>
   <option value="Decoaness">Decoaness</option>
   <option value="Decoan">Decoan</option>
   <option value="Pasto">Pastor</option>
 </select>
</div>
<div class="form-group">   
<input type="text" name="fname" class="form-control" placeholder="First Name">
</div>
<div class="form-group">                                                
<input type="text" name="lname" class="form-control" placeholder="Last Name">
</div>
<div class="form-group">                                                
<input type="text" name="email" class="form-control" placeholder="Email">
</div>
<div class="form-group">
<div>
<label class="fancy-radio">
<input name="gender2" value="male" type="radio" checked>
<span><i></i>Male</span>
</label>
<label class="fancy-radio">
<input name="gender2" value="female" type="radio">
<span><i></i>Female</span>
</label>
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-calendar"></i></span>
</div>
<input data-provide="datepicker" data-date-autoclose="true" name="bday" class="form-control" placeholder="Birthdate">
</div>
</div>
<div class="form-group">
<input type="text" name="unit" class="form-control" placeholder="Unit">
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">                                                
<input type="text" class="form-control"  placeholder="Phone No.">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Address">
</div>
<div class="form-group">
<input type="text" name="city" class="form-control" placeholder="City">
</div>
<div class="form-group">
<input type="text" name="state" class="form-control" placeholder="State/Province">
</div>
<div class="form-group">
<select class="form-control">
<option value="">-- Select Country --</option>
<option value="">-- Select Country --</option>
<option value="">-- Select Country --</option>

</select>
</div>
<div class="form-group">                                                
<input type="file" name="pic" class="form-control">
</div>
</div>
</div>
<button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
<button type="button" class="btn btn-default">Cancel</button>
</div>
</div>
</div>
</div>
</div>

<div class="tab-pane animated fadeIn" id="Settings">
<div class="card">
<div class="body">
<div class="row clearfix">
<div class="col-lg-12 col-md-12">
<h6>Account Data</h6>
<div class="form-group">                                                
<input type="text" class="form-control" value="JessicaDoe" disabled placeholder="Username">
</div>
<div class="form-group">
<input type="email" class="form-control" value="Jessica.info@yourdomain.com" placeholder="Email">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Phone Number">
</div>
</div>

<div class="col-lg-12 col-md-12">
<h6>Change Password</h6>
<div class="form-group">
<input type="password" class="form-control" placeholder="Current Password">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="New Password">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Confirm New Password">
</div>
</div>
</div>
<button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
<button class="btn btn-default">Cancel</button>
</div>
</div>

</div>
</div>
</div>

</div>
<br>

@include('includes/footer2')