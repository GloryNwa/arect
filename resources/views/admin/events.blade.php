@include ('includes/header')

    

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Events</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>App
                            <li class="breadcrumb-item active">Events</li>
                        </ul>
                    </div>      
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-11">
                    <div class="card">

                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-blue"style="background:#007bff;color:white">
                                        <tr>
                                            <th>Title</th>
                                            <th>Subject</th>
                                            <th>Address</th>
                                            <th>Schedule Date</th>
                                            <th>Schedule Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <tr>
                                        <td>Conference</td>
                                            <td>Mobile World Congress</td>
                                            <td>No:23 Billings Way</td>
                                            <td>14 July 2020</td>
                                            <td>11:10 pm</td>
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
        </div>
    </div>
    
</div>


<!-- Default Size -->
<div class="modal animated jello" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" rows="4" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@include('includes/footerr')
