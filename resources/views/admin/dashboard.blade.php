@include('admin.include/header')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>    

                   
                </div>
            </div>
            <div class="row clearfix w_social3">
                <div class="col-lg-6 col-md-6 col-xs-6">
                <div class="card instagram-widget">
                <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-briefcase" style="color:black"></i> </div>
                            <div class="content">
                                <div class="text">Newly Employees</div>
                                <h5 class="number">22</h5>
                            </div>
                          
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <div class="card instagram-widget">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-users" style="color:black"></i> </div>
                            <div class="content">
                                <div class="text">All ICM Staff</div>
                                <h5 class="number">22</h5>
                            </div>
                          
                        </div>
                    </div>
                    </div>
                </div>
              

				
                <!-- <div class="col-lg-6 col-md-6 col-xs-6">
                    <div class="card text-center">
                        <div class="body">
						<div class="card profile-header">
                        <div class="body">
                            <div class="profile-image"> <img src="../assets/images/user.png" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0"><strong>Jessica</strong> Doe</h4>
                                <span>Washington, d.c.</span>
                            </div>
                            <div class="m-t-15">
                                <button class="btn btn-primary">Follow</button>
                                <a href="{{route('profile')}}"><button class="btn btn-outline-secondary">Edit Profile</button></a>
                            </div>                            
                        </div>
                    </div>
                        </div>
                    </div>                    
				</div> -->
				
                <!-- <div class="col-lg-6 col-md-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2> Latest Events Updates</h2>
                            <hr>
                            <div class="card">
                        <div class="body">
                        
                            <div class="event-name row">
                                <div class="col-2 text-center">
                                    <h4>09<span>Dec</span><span>2018</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>Repeating Event</h6>
                                    <p>Before there were tech conferences, there was Disrupt.</p>
                                    <address><i class="fa fa-map-marker"></i> 44 Shirley Ave. West Chicago, IL 60185</address>
                                </div>
                            </div> -->
                            <!-- <hr> -->
                        
                            <!-- <div class="event-name row">
                                <div class="col-2 text-center">
                                    <h4>28<span>Dec</span><span>2018</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>Google</h6>
                                    <p>Google Hardware and Pixel 2 Launch</p>
                                    <address><i class="fa fa-map-marker"></i> 514 S. Magnolia St. Orlando, FL 32806</address>
                                </div>
							</div> -->
				
						<!-- </div>
						
					</div>
				<button class="btn btn-outline-secondary"><a href="/all/events"style="color:#c8c8c8">View all Events</a></button>
                        </div>
                        
                    </div>
                </div>                
            </div> -->

            <div class="row clearfix">
                <div class="col-lg-8 col-md-8">
                    <div class="card">
                  
                        <div class="header">
                        <h2 style="margin-left:15px !important">Line Manager Feedback</h2>
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-blue"style="background:#007bff;color:white">
                                        <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Month</th>
                                        
                                        <th>Performance</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                                        <tr>
                                        <td>Erin Gonzales</td>
                                            
                                            <td><span>Android Developer</span></td>
                                            <td><span>July</span></td>
                                            <td><span class="badge badge-danger">Weak</span></td>
                                            <!-- <td><span class="sparkbar">2,-5,3,-6,-4,8,-1</span></td> -->
                                            <td>
                                               <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                           </td>
                                        </tr>
                                        <tr>
                                        <td>Edwin Lawrence</td>
                                            
                                            <td><span>Android Developer</span></td>
                                            <td><span>July</span></td>
                                            <td><span class="badge badge-default">Good</span></td>
                                            <!-- <td><span class="sparkbar">2,-5,3,-6,-4,8,-1</span></td> -->
                                            <td>
                                               <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                           </td>
                                        </tr>
                                        <td>Erin Gonzales</td>
                                            
                                            <td><span>Android Developer</span></td>
                                            <td><span>July</span></td>
                                            <td><span class="badge badge-success">Exeptional</span></td>
                                            <!-- <td><span class="sparkbar">2,-5,3,-6,-4,8,-1</span></td> -->
                                            <td>
                                               <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                           </td>
                                        </tr>
                                        <td>Erin Gonzales</td>
                                            
                                            <td><span>Android Developer</span></td>
                                            <td><span>July</span></td>
                                            <td><span class="badge badge-primary">Exellent</span></td>
                                            <!-- <td><span class="sparkbar">2,-5,3,-6,-4,8,-1</span></td> -->
                                            <td>
                                               <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                           </td>
                                          
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                       
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="header">
                            <h2>ToDo List</h2>
                        </div>
                        <div class="body todo_list">
                            <ul class="list-unstyled">
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>New Employee intro</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 3:00 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Send email to CEO</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>New Joing Employee Welcome kit</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small><a href="#">John Smith</a> Designer</small><br>
                                        <small><a href="#">Hossein Shams</a> Developer</small><br>
                                        <small><a href="#">Maryam Amiri</a> SEO</small><br>
                                        <small><a href="#">Mike Litorus</a> iOS Developer</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Birthday Wish</span>
                                    </label>
                                    <div class="m-l-35">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>


           
            
            
        </div>
    </div>
    
</div>
@include ('admin.include/footer')