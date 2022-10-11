<?php include 'include/headadmin.php'; ?>
<?php include 'include/templete_admin.php'; ?>



<style>

    table tr, table th,table td 
    {
    border-color: black;
    font-size: .95em;
    }

    table
    {
        border-color: black;
    }

    input
    {
        text-align: center;
        border-radius: 10px;
        margin-right: 150px;
    }

    button
    {
        padding-right: 0px;
        border-radius: 10px;
        background: transparent;
        margin-right: 150px;
        border-color: lightblue;
        color: black;
        background-color: grey;
    }

    .zoom 
    {
      padding: 5px;
      background: transparent;
      transition: transform .2s;
    }

    .zoom:hover 
    {
      -ms-transform: scale(1.5);
      -webkit-transform: scale(1.5); 
      transform: scale(1.5); 
    }

</style>

	<div id="page-wrapper" >
		<div class="panel-body">
            <center><h1>User Management</h1></center>
            <div style="text-align: right;">
                <br><br><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" size="70"><button class="zoom">search</button>
            </div>
                           <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                     <div style="border-radius: 50px;">
                                        <br><table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;padding-bottom: 20PX;">SR.NO.</th>
                                                    <th style="text-align: center;padding-bottom: 20PX;">User ID</th>
                                                    <th style="text-align: center;padding-bottom: 20PX;">Employee Name</th>
                                                    <th style="text-align: center;padding-bottom: 20PX;">Email ID</th>
                                                    <th style="text-align: center;padding-bottom: 20PX;">Mobile No.</th>
                                                    <th style="text-align: center;padding-bottom: 20PX;">Action</th>
                                                </tr>

                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                            </div>                
                                        <script>
                                                function myFunction() {
                                                  var input, filter, table, tr, td, i, txtValue;
                                                  input = document.getElementById("myInput");
                                                  filter = input.value.toUpperCase();
                                                  table = document.getElementById("myTable");
                                                  tr = table.getElementsByTagName("tr");
                                                  for (i = 0; i < tr.length; i++) {
                                                    td = tr[i].getElementsByTagName("td")[0];
                                                    if (td) {
                                                      txtValue = td.textContent || td.innerText;
                                                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                        tr[i].style.display = "";
                                                      } else {
                                                        tr[i].style.display = "none";
                                                      }
                                                    }       
                                                  }
                                                }
                                        </script>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>    

<?php include 'include/footer.php'; ?>