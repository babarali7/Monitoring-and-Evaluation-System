@extends('layouts.app-master')

@section('content')

<?php
$type = array(
          1 => "GCT",
          2 => "GPI",
          3 => "GTVC",
          4 => "SVTI",
          5 => "HO", 
          6 => "EMP - EXC",
          7 => "SDC",
          8 => "NMD",
          9 =>  "OTHER"
      );

$district_name = array();

foreach ($districts as $ds) {
    $district_name[$ds->id] = $ds->name; 
}

      ?>
    
<div class="content">
    <div class="container-fluid"> 

        @include('layouts.partials.messages')

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                    <i class="material-icons">contacts</i>
                    </div>
                    <h4 class="card-title">Add Institute</h4>
                </div>
                
                <form method="POST" action="{{ route('institute.store') }}" id="add_ins">
                    @csrf
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <select class="selectpicker" data-live-search="true" data-style="btn btn-primary btn-round" title="Select District" searchable="Search here.." name="district" id="district">
                                <option disabled selected>Select District</option>
                                @foreach($districts as $ds)
                                    <option value="<?=$ds->id;?>"> <?=$ds->name;?> </option>
                                @endforeach   

                            </select>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="row">
                            <label class="col-form-label">Institute Name</label>
                            <div class="form-group col-md-9">
                            <input type="text" name="ins_name" class="form-control" id="ins_name">
                            </div>
                        </div>              
                        </div>
                        

                        <div class="col-md-2">
                        <div class="row">
                            <label class="col-form-label">DDO Code</label>
                            <div class="form-group col-md-7">
                            <input type="text" name="ddo_code" class="form-control" id="ddo">
                            </div>
                        </div>   
                        </div>

                        <div class="col-md-3">
                        
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="latitude" placeholder="Latitude(Y Axis)">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="longitude" placeholder="Longitude(X Axis)">
                            </div>
                            </div>
                            
                        </div>
                        
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <select class="selectpicker" data-live-search="true" data-style="btn btn-primary btn-round" title="Select Type" name="type" id="type_c">
                            <option disabled selected>Select Type</option>
                            <option value="1">GCT</option>
                            <option value="2">GPI</option>
                            <option value="3">GTVC</option>
                            <option value="4">SVTI</option>
                            <option value="5">HO</option>
                            <option value="6">EMP-EXC</option>
                            <option value="7">SDC</option>
                            <option value="8">NMD</option>
                            </select>
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Date of Establishment</label>
                            <div class="form-group col-md-5">
                            <input type="text" name="date_of_establishment" class="form-control datepicker" id="date_of_establishment">
                            </div>
                        </div>              
                        </div>

                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Total Building Area</label>
                            <div class="form-group col-md-6">
                            <input type="text" name="tot_building_area" class="form-control" id="tot_building_area">
                            </div>
                        </div>              
                        </div>
                        

                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Covered Area</label>
                            <div class="form-group col-md-6">
                            <input type="text" name="covered_area" class="form-control" id="covered_area">
                            </div>
                        </div>   
                        </div>

                    
                    
                    </div> 

                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <select class="selectpicker" data-live-search="true" data-style="btn btn-primary btn-round" title="Institute Gender" name="ins_gender" id="ins_gender">
                            <option disabled selected>Institute Gender</option>
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                            <option value="BOTH">BOTH</option>
                            </select>
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Technologies Offered</label>
                            <div class="form-group col-md-6">
                            <input type="text" name="technology_offered" class="form-control" id="technology_offered">
                            </div>
                        </div>              
                        </div>
                        

                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Total Teaching Staff</label>
                            <div class="form-group col-md-6">
                            <input type="text" name="tot_teaching_staff" class="form-control" id="tot_teaching_staff">
                            </div>
                        </div>   
                        </div>


                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Non Teaching Staff</label>
                            <div class="form-group col-md-6">
                            <input type="text" name="tot_managerial_staff" class="form-control" id="tot_managerial_staff">
                            </div>
                        </div>   
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <select class="selectpicker" data-live-search="true" data-style="btn btn-primary btn-round" title="Building Status" name="building_status" id="building_status">
                            <option disabled selected>Building Status</option>
                            <option value="RENTED">RENTED</option>
                            <option value="OWN">OWN</option>                
                            </select>
                        </div>
                        </div>
                        
                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Trades Offered</label>
                            <div class="form-group col-md-6">
                            <input type="text" name="trades_offered" class="form-control" id="trades_offered">
                            </div>
                        </div>   
                        </div>
                        
                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Number of Labs</label>
                            <div class="form-group col-md-5">
                            <input type="text" name="no_of_labs" class="form-control" id="no_of_labs">
                            </div>
                        </div>              
                        </div>
                        

                        <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label">Number of Classrooms</label>
                            <div class="form-group col-md-4">
                            <input type="text" name="no_of_classrooms" class="form-control" id="no_of_classrooms">
                            </div>
                        </div>   
                        </div>                      
                    </div> 

                    </div>
                    <div class="card-footer">
                    <input type="hidden" name="ins_id" id="ins_id">
                        <input type="submit" class="btn btn-rose" value="Save" id="save">
                        <button type="button" class="btn btn-fill" id="reset" onClick="resetValues();" style="display: none"> Cancel </button>
            
                    </div>
                </form> 
            
                </div>
            </div>
        
            <!-- List goes here -->
            
            <div id="list" class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">List of All Institutes </h4>
                  </div>
                  <div class="card-body">
                    <div class="toolbar">
                    </div>
                    <div class="material-datatables">
                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>DDO Code</th>
                            <th>District</th>
                            <th>Type</th>
                            <th>Gender</th>
                            <th class="disabled-sorting text-right">Actions</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>DDO Code</th>
                            <th>District</th>
                            <th>Type</th>
                            <th>Gender</th>
                            <th class="text-right">Actions</th>
                          </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($institute as $ins)
                            <tr class="r-{{$ins->inst_id}}">
                                <td> {{ $ins->inst_name }} </td>
                                <td> {{ $ins->ddo_code }} </td>
                                <td> {{ $district_name[$ins->districts_id] }} </td>
                                <td> {{ $type[$ins->type] }} </td>
                                <td> {{ $ins->ins_gender }} </td>
                                <td> 
                                    @can('institute.index')
                                    <a onClick='getInfo({{ $ins->inst_id }});' class='btn btn-link btn-info btn-just-icon' data-toggle='modal' data-target='#noticeModal'><i class='material-icons'>dvr</i>
                                    @endcan
                                    <a onClick='updateInfo({{ $ins->inst_id }});' class='btn btn-link btn-warning btn-just-icon edit'> <i class='fa fa-edit'></i> </a>   
                                     {{-- <a href='delete_ins/{{ $ins->inst_id }}' onclick='return confirm(\"Are you sure you want to delete ?\");' class='btn btn-link btn-danger btn-just-icon remove'><i class='material-icons'>close</i></a> --}}
                                     {!! Form::open(['method' => 'DELETE','route' => ['institute.destroy', $ins->inst_id],'style'=>'display:inline', 'onClick'=>'return confirm("Are you sure you want to delete ?");']) !!}
                                     {!! Form::button('<i class="material-icons">close</i>', ['type' => 'submit', 'class' => 'btn btn-link btn-danger btn-just-icon remove']) !!}
                                     {!! Form::close() !!}
                                </td>                            
                            </tr>    
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- end content-->
                </div>
                <!--  end card  -->
            </div> <!-- end col-md-12 -->       
        </div>

    </div>
</div>



    <!-- notice modal -->
    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-notice">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="material-icons">close</i>
              </button>
            </div>
            <div class="modal-body model-info">               
                <h3 class="ins_name title text-center text-primary"> </h3>
                <div class="table-responsive">
                    <table class="table">                                   
                        <tbody>
                            <tr>
                            <th> District </th>
                            <td class="district"> </td>
                            <th> DDO Code </th>
                            <td class="ddo"> </td>
                            <th> Date of Establishment </th>
                            <td class="date_of_establishment">  </td>
                            <th> INS Type </th>
                            <td class="type_c">  </td>
                            </tr>
                            <tr> 
                            <th> Total Building Area </th>
                            <td class="tot_building_area"> </td>
                            <th> Covered Area </th>
                            <td class="covered_area"> </td>
                            <th> Trades Offered </th>
                            <td class="trades_offered"> </td>
                            <th> Technologies Offered </th>
                            <td class="technology_offered"> </td>
                            </tr>
                            <tr> 
                            <th> Institue Gender </th>
                            <td class="ins_gender"> </td>
                            <th> Building Status </th>
                            <td class="building_status"> </td>
                            <th> Teaching Staff </th>
                            <td class="tot_teaching_staff"> </td>
                            <th> Non Teaching Staff </th>
                            <td class="tot_managerial_staff"> </td>
                            </tr>
                            <tr>
                            <th> Coordinates </th>
                            <td> <span class="latitude"></span>, <span class="longitude"> </span> </td>
                            <th colspan="2"> Number of Labs</th>
                            <td class="no_of_labs"> </td>
                            <th colspan="2"> Number of Classrooms</th>
                            <td class="no_of_classrooms"> </td>
                            </tr>  
                        </tbody>                        
                    </table>
                </div> 
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Close !</button>
            </div>
          </div>
        </div>
    </div>


@endsection


@section('scripts')

<script type="text/javascript">

function getInfo(id) {
     
     var type = new Array("","GCT","GPI","GTVC","SVTI","HO", "EMP - EXC","SDC","NMD","OTHER");
     
     var getdis = "";

     var titl = "";

          $.ajax({
                          url: "/institute/approve/"+id,
                          type: "get",
                          dataType:"json",
                          success: function(data) 
                          {
                             
                                $(".ins_name").html(data.inst_name);
                                $(".ddo").html(data.ddo_code);
                                $(".type_c").html(type[data.type]);
                                 getdis = data.districts_id;
                                $(".ins_id").html(data.inst_id);
                                $(".building_status").html(data.building_status);
                                $(".tot_building_area").html(data.tot_building_area);
                                $(".covered_area").html(data.covered_area);
                                $(".trades_offered").html(data.trades_offered);
                                $(".ins_gender").html(data.ins_gender);
                                $(".technology_offered").html(data.technology_offered);
                                $(".tot_teaching_staff").html(data.tot_teaching_staff);
                                $(".tot_managerial_staff").html(data.tot_managerial_staff);
                                $(".no_of_classrooms").html(data.no_of_classrooms);
                                $(".no_of_labs").html(data.no_of_labs);
                                $(".latitude").html(data.latitude);
                                $(".longitude").html(data.longitude);
                                $(".date_of_establishment").html(data.date_of_establishment);
                        
                                titl = $('#district option[value="'+getdis+'"]').text();
                                       $(".district").html(titl);
                         
                          }
                         
                  });

}


function updateInfo(id) {
          
          topFunction();
  
          $('#datatables tr').removeClass("table-info");
          $(".r-"+id).addClass("table-info");
  
                  
            $.ajax({
                              url: "/institute/approve/"+id,
                              type: "get",
                              dataType:"json",
                              success: function(data) 
                              {
                                  
                                 

                                //  alert(data.inst_name);
                                  $("#ins_name").val(data.inst_name);
                                  $("#ddo").val(data.ddo_code);
                                  $("#type_c").val(data.type);
                                  $("#district").val(data.districts_id);
                                  $("#ins_id").val(data.inst_id);
  
                                  $("#building_status").val(data.building_status);
                                  $("#tot_building_area").val(data.tot_building_area);
                                  $("#covered_area").val(data.covered_area);
                                  $("#trades_offered").val(data.trades_offered);
                                  $("#ins_gender").val(data.ins_gender);
                                  $("#technology_offered").val(data.technology_offered);
                                  $("#tot_teaching_staff").val(data.tot_teaching_staff);
                                  $("#tot_managerial_staff").val(data.tot_managerial_staff);
                                  $("#no_of_labs").val(data.no_of_labs);
                                  $("#no_of_classrooms").val(data.no_of_classrooms);
                                  $("#latitude").val(data.latitude);
                                  $("#longitude").val(data.longitude);
                                  
                                  var dateAr = data.date_of_establishment.split('-');
                                  var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];

                                  $('#date_of_establishment').val(newDate); 
                                
                                  $('.selectpicker').selectpicker('refresh');
                                  $("#save").val("UPDATE");
                                  $("#reset").show();
  
                                      
                              }
                             
                      });
             
       
            }
            
            
    function resetValues() {
         // alert("reset clicked");
         $("#add_ins input").val("");
         $("#save").val("save");
         $("#reset").hide();
         $('#datatables tr').removeClass("table-info");
         $('.selectpicker').selectpicker('val', '');
         $('.selectpicker').selectpicker('refresh');

    }


  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;2
  }
        

</script>    

<style type="text/css">
      
    html {
      scroll-behavior: smooth;
    }

  </style>

@endsection