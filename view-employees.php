<link rel="stylesheet" href="./assets/plugins/jQuery-flag/build/css/intlTelInput.css">
<script src="./assets/plugins/jQuery-flag/build/js/intlTelInput.js"></script>
<?php
$page_yy = 1;
require_once("modules/database/autoload.php");
$conn = get_connection();
//$query = "SELECT * FROM employees WHERE isManager=1 or (id in (SELECT reporting_manager from employees where reporting_manager!=0) )";
$query = "SELECT * FROM employees ";
$q = $conn->prepare($query);
$q->bind_param("");
$res = $q->execute();
$stmt = $q;
$meta = $stmt->result_metadata();
while ($field = $meta->fetch_field()) {
    $parameters[] = &$row[$field->name];
}
call_user_func_array(array($stmt, 'bind_result'), $parameters);
while ($stmt->fetch()) {
    foreach ($row as $key => $val) {
        $x[$key] = $val;
    }
    $results[] = $x;
}

function getStatus($name)
{
    $conn = get_connection();
    $query = "SELECT * FROM datafields WHERE type='$name'";
    $q = $conn->prepare($query);
    $q->bind_param("");
    $res = $q->execute();
    $stmt = $q;
    $meta = $stmt->result_metadata();
    while ($field = $meta->fetch_field()) {
        $parameters[] = &$row[$field->name];
    }
    call_user_func_array(array($stmt, 'bind_result'), $parameters);
    while ($stmt->fetch()) {
        foreach ($row as $key => $val) {
            $x[$key] = $val;
        }
        $results[] = $x;
    }
    return $results;
}

?>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.3/js/intlTelInput.min.js"></script>
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<style>
    .dfedd {
        width: 100% !important;
    }
    .dataTables_wrapper {
        min-height: .01% !important;
        overflow-x: auto !important;
    }
</style>
<style type="text/css">
    .editbtn, .deletebtn {
        width: 200px !important;
    }

    .vwempl__ {

    }

    .vwempl__ .panel {
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
    }

    .vwempl__ .panel a {
        text-decoration: none;
    }

    .vwempl__ .panel-heading {
        padding-left: 20px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .vwempl__ .btn-primary {
        font-size: 12px;
    }

    .vwempl__ table {
        font-size: 13px;
    }

    .vwempl__ table tr td .label {
        border: none;
    }

    .vwempl__ table tr td button {
        padding: 1px 5px;
        float: left;
        margin-right: 10px;
    }

    .vwempl__ table tr td button i {
        font-size: 14px;
    }

    .tabs_block_inner input {
        width: 100%;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
    }

    .tabs_block_inner label {
        display: block;
        font-weight: 400;
        margin-top: 20px;
    }

    .wizard {
        margin: 20px auto;
        background: #fff;
    }

    .wizard .nav-tabs {
        position: relative;
        margin: 0px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
        background: none;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }

    .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: #fff;
        border: 2px solid #e0e0e0;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }

    span.round-tab i {
        color: #555555;
    }

    .wizard li.active span.round-tab {
        background: #fff;
        border: 2px solid #5bc0de;
        padding-top:10px;
    }

    .wizard li.active span.round-tab i {
        color: #5bc0de;
    }

    span.round-tab:hover {
        color: #333;
        border: 2px solid #333;
    }

    .wizard .nav-tabs > li {
        width: 16%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #5bc0de;
        transition: 0.1s ease-in-out;
    }

    .list-inline {
        padding-left: 0;
        margin-left: -5px;
        list-style: none;
        margin-top: 40px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #5bc0de;
    }

    .wizard .nav-tabs > li a {
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 5px;
    }

    .wizard h3 {
        margin-top: 0;
    }

    @media ( max-width: 585px ) {

        .wizard {
            width: 90%;
            height: auto !important;
        }

        span.round-tab {
            font-size: 16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }
    }

    #exampleModal_employment .modal-dialog {
        width: 1000px;
        margin: 30px auto;
    }

    #exampleModal_employment22 .modal-dialog {
        width: 600px;
        margin: 30px auto;
    }

    #exampleModal_employment22 h2 {
        font-size: 20px;
        text-align: center;
        letter-spacing: 1px;
        margin-bottom: 40px;
    }

    #exampleModal_employment22 .tabs_block_inner select {
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
    }

    #exampleModal_employment22 .tabs_block_inner label {
        display: block;
        font-weight: 800;
        margin-top: 4px;
    }

    li.active span.round-tab:before {
        content: "Step";
        position: absolute;
        display: block;
        font-size: 10px;
        text-align: center;
        margin-left: 22px;
        margin-top: 12px;
        top:-25px;

    }

    .padding-fix{
        padding : 4px;
    }
    .make-right{
        float:right;
        position: relative;
        top:-35px;
    }

    li.active span.round-tab h2 {
        font-size: 20px;
    }

    .date_details {
        margin: 30px 15px;
    }

    .date_details h2 {
        font-size: 25px;
        margin-bottom: 10px;
        padding: 0px;
    }

    .date_details ul {
        margin: 0px;
        padding: 0px;
        list-style: none;
    }

    .date_details ul li {
        width: 32%;
        display: inline-block;
        margin-bottom: 10px;
    }

    .date_details ul li span {
        display: block;
        font-weight: 800;
    }

    #exampleModal_employment22_d .modal-dialog {
        width: 1000px;
        margin: 30px auto;
    }
.employee-header{
    padding:5px !important;
    text-align:center;
}

.data-btn{
    width:95px;
    margin-right:10px;
}

.iti-flag {background-image: url("./assets/plugins/jQuery-flag/build/img/flags.png");}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
  .iti-flag {background-image: url("./assets/plugins/jQuery-flag/build/img/flags@2x.png");}

  tr.employment > th {
      padding: 8px !important;
  }

  .action-icons{
      padding: 0 5px;
  }
}

</style>
<script>
    function resetFormBase() {
        $("form.add_employee").each(function (g, l) {
            $(l).find("input,select,textarea").val("");
        });
        $(".profill :input").each((g, l) => {
            $(l).val("");
        });
        $(`.prevedut`).children().remove();
        $(`.prevemt`).children().remove();
        window.prevedu = 0;
        window.prevem = 0;


        nextstep = (1).toString();
        console.log(nextstep);
        $(".tabb").hide();
        $(".tabb#step" + (nextstep)).show();
        $("[role='presentation']").removeClass("active").addClass("disabled");
        $("[role='presentation'][step=" + nextstep + "]").removeClass("disabled").addClass("active");
    }
    function resetForm() {
        window.actionsafivd="ADD";
        $(".ae_title").text("Add Employee");
        resetFormBase()
    }
    function resetForm1() {
        window.actionsafivd="EDIT";
        $(".ae_title").text("Edit Employee Details");
        resetFormBase()
    }
</script>

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper vwempl__">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--  <div class="header-icon">
            <i class="fa fa-users"></i>
         </div> -->
        <!--  <div class="header-title">
            <h1>Customer</h1>
            <small>Customer List</small>
         </div> -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading" style="background:none">
                        <div class="btn-group" id="buttonexport">
                            <a href="#">
                                <h4>View Employees</h4>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="btn-group">
                            <div class="buttonexport" id="buttonlist">
                                <!--    <a class="btn btn-add" href="add-customer.html"> <i class="fa fa-plus"></i> Add Customer
                                   </a>   -->
                            </div>
                            <!--  <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button> -->
                            <ul class="dropdown-menu exp-drop" role="menu">
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});">
                                        <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                </li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                        <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON
                                        (ignoreColumn)</a>
                                </li>
                                <li><a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                        <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (with
                                        Escape)</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                        <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                </li>
                                <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});">
                                        <img src="assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                        <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                </li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});">
                                        <img src="assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});">
                                        <img src="assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                </li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                        <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                </li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});">
                                        <img src="assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});">
                                        <img src="assets/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                </li>
                                <li>
                                    <a href="#"
                                       onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                        <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="" style="float: right;">
                        <a href="#">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal_employment" onclick="resetForm()">Add Employee
                            </button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal_employment22">Data Fields
                            </button>
                        </a>
                        </div>
                        <br>

                        <script language="JavaScript" src="https://code.jquery.com/jquery-1.12.4.js"
                                type="text/javascript"></script>
                        <script language="JavaScript"
                                src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"
                                type="text/javascript"></script>
                        <script language="JavaScript"
                                src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"
                                type="text/javascript"></script>
                        <script language="JavaScript"
                                src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"
                                type="text/javascript"></script>
                        <script language="JavaScript"
                                src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"
                                type="text/javascript"></script>

                        <link rel="stylesheet" type="text/css"
                              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
                        <link rel="stylesheet" type="text/css"
                              href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css"/>
                        <link rel="stylesheet" type="text/css"
                              href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"/>


                        <div class="">

                            <div class="row">

                                <div class="col-md-12" style="margin-top: 20px;">

                                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap"
                                           cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Employee Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Department</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Country</th>
                                            <th>Manager's Name</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                    </table>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function MyString(val) {
                if (arguments.length === 0) {
                    return "";
                } else if (typeof val === "undefined") {
                    return "";
                } else if (val === null) {
                    return "";
                } else if (typeof val === "boolean") {
                    return val ? "true" : "false";
                } else if (typeof val === "number") {
                    // super complex rules
                } else if (typeof val === "string") {
                    return val;
                } else {
                    return val.toString();
                    // return MyString(ToPrimitive(val, prefer string))
                }
            }
            function editEmployee(eqq) {
                resetForm1();
                window.currenemmmpid=$(eqq).attr("sid");
                console.log($(eqq)[0]);
                $.post("modules/employee/display.php", {employid: $(eqq).attr("sid")}, e => {
                    e = JSON.parse(e);
                    tt = e.data[0];
                    for (ff in tt) {
                        //$(`.profile_modal`).find(`input[name='${ff}']`).val(tt[ff]);
                        $(`input[name='${ff}']`).val(tt[ff]);
                    }
                    window.prevem = 0;
                    window.prevedu = 0;
                    $(".prevemt").html("");
                    $(e.employment).each((i, o) => {
                        window.prevem += 1;
                        string = `<tr class="add_employment_role">
    <td>${window.prevem}</td>
    <td><input type="text" name="prev_company_position" class="table_div company_name" value="${o.company_name}"></td>
      <td><input type="text" name="prev_company_position" class="table_div department" value="${o.department}"></td>
        <td><input type="text" name="prev_company_position" class="table_div job_title" value="${o.job_title}"></td>
            <td><input type="date" name="prev_company_position" class="table_div start_date" onchange="calc(this)" value="${o.start_date}"></td>
              <td><input type="date" name="prev_company_position" class="table_div end_date" onchange="calc(this)" value="${o.end_date}"></td>
                <td><input type="number" readonly name="prev_company_position" class="table_div exp_years" value="${o.years_of_experience}"></td></tr>`;
                        $(".prevemt").append(string);
                    });

                    $(".prevedut").html("");

                    $(e.education).each((l, f) => {
                        window.prevedu += 1;
                        string = `<tr class="add_edu_row">
    <td>${window.prevedu}</td>
    <td><input type="text" name="prev_company_position" class="table_div iname" value="${f.institution}"></td>
      <td><input type="text" name="prev_company_position" class="table_div course" value="${f.course}"></td>
        <td><input type="date" name="prev_company_position" class="table_div  enrollment_date" value="${f.enrollment_date}"></td>
            <td><input type="date" name="prev_company_position" class="table_div completion_date" value="${f.completition_date}"></td></tr>`;
                        $(".prevedut").append(string);
                    });

                });
            }

            function showd(e) {
                console.log("dsfdsf", e);
                $.post("modules/employee/display.php", {employid: e}, e => {
                    e = JSON.parse(e);
                    tt = e.data[0];
                    for (ff in tt) {
                        $(`p#${ff}`).text(tt[ff]);
                    }
                });
            }

            $.get("modules/employee/employees.php", {}, function (e) {
                data1 = [];
                for (let g in e) {
                    d = e[g];
                    console.log("ID",d);
                    data1.push({
                        "Employee Id": MyString(d["emp_id"]),
                        "First Name": MyString(d["first_name"]),
                        "Last Name": MyString(d["last_name"]),
                        "Department": MyString(d["name"]),
                        "Email": MyString(d["email"]),
                        "Phone": MyString(d["phone"]),
                        "Country": MyString(d["country"]),
                        "Manager Name": "Manager",
                        "Action": `<button data-toggle="modal"
                                    data-target="#exampleModal_employment"  class='btn btn-primary edit_em editbtn' onclick='editEmployee(this)' sid='${d["id"]}'>edit</button> ` +
                            `<button class='btn btn-danger delete_em deletebtn'  onclick='delete_em("${d["emp_id"]}")' >delete</button>` +
                            `<button class='btn btn-green bg-green ' style='float: right;color:white;' onclick="showd('${d["id"]}')" data-toggle='modal' data-target='#exampleModal_employment22_d'>More</button>`
                    });
                }
                window.employeesdatar5 = e;
                $('#example').DataTable({
                    "processing": true,
                    "info": true,
                    "stateSave": true,
                    data: data1,
                    "columns": [
                        {"data": "Employee Id"},
                        {"data": "First Name"},
                        {"data": "Last Name"},
                        {"data": "Department"},
                        {"data": "Email"},
                        {"data": "Phone"},
                        {"data": "Country"},
                        {"data": "Manager Name"},
                        {"data": "Action"},
                    ]
                });


            });
            $(document).ready(function () {
                $("#preloader").hide();
            });


        </script>
        <!-- customer Modal1 -->
        <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-header-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="col-md-4 form-group">
                                            <label class="control-label">Customer Name:</label>
                                            <input type="text" placeholder="Customer Name" class="form-control">
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-4 form-group">
                                            <label class="control-label">Email:</label>
                                            <input type="email" placeholder="Email" class="form-control">
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-4 form-group">
                                            <label class="control-label">Mobile</label>
                                            <input type="number" placeholder="Mobile" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label">Address</label><br>
                                            <textarea name="address" rows="3"></textarea>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label">type</label>
                                            <input type="text" placeholder="type" class="form-control">
                                        </div>
                                        <div class="col-md-12 form-group user-form-group">
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                                <button type="submit" class="btn btn-add btn-sm">Save</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- Modal -->
        <!-- Customer Modal2 -->
        <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-header-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3>
                            <i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <div class="col-md-12 form-group user-form-group">
                                            <label class="control-label">Delete Customer</label>
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                <button type="submit" class="btn btn-add btn-sm">YES</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
</div>


<!-- exampleModal_employment22 -->
<div class="modal fade profile_edit" id="exampleModal_employment22" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Data Fields</h4>
            </div>
            <div class="modal-body">
                <div class="row">


                    <div class="col-md-5 tabs_block_inner">
                        <select id="datafields">
                            <option value='Gender'>Gender</option>
                            <option value='Maritial status'>Maritial status</option>
                            <option value='Race'>Race</option>
                            <option value='Religion'>Religion</option>
                            <option value='Immigration Status'>Immigration Status</option>
                            <option value='Background Check required'>Background Check required</option>
                            <option value='Employment Type'>Employment Type</option>
                            <option value='Job Title'>Job Title</option>
                            <option value='Department'>Department</option>
                            <option value='Education Level'>Education Level</option>
                            <option value='System Access Authority Level'>System Access Authority Level</option>
                        </select>
                    </div>

                    <div class="col-md-7 tabs_block_inner">
                    <button  type="button" class="btn btn-primary df_save pull-right data-btn">Save</button>
                        <button type="button" class="btn btn-primary pull-right bulk_add data-btn">Bulk Add</button>
                        <button type="button" class="btn btn-primary pull-right bulk_delete data-btn"
                                >Bulk
                            Delete
                        </button>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">




                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-4"> <h4>Male </h4> </div>
                    <div class="col-md-4">  </div>
                    <div class="col-md-4"> <h4><a href=""> <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;
                <i class="fa fa-trash-o" aria-hidden="true"></i></a></h4> </div>
                </div>
                <div class="row">
                    <div class="col-md-4"> <h4>Female </h4> </div>
                    <div class="col-md-4">  </div>
                    <div class="col-md-4"> <h4><a href=""> <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;
                <i class="fa fa-trash-o" aria-hidden="true"></i></a></h4> </div>
                </div>
                <div class="row">
                    <div class="col-md-4"> <h4>Male </h4> </div>
                    <div class="col-md-4">  </div>
                    <div class="col-md-4"> <h4><a href=""> <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;
                <i class="fa fa-trash-o" aria-hidden="true"></i></a></h4> </div>
                </div> -->

                <div class="row">
                    <div class="col-md-12" style="margin-top: 20px;">
                        <table class="table dataTable df_tablex">

                            </tbody>
                        </table>


                        <style type="text/css">
                            .prevemt2 tr td {
                                padding: 7px;
                                text-align: center;
                            }
                        </style>


                    </div>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-12">
                        <button class="btn-primary btn fielddfbtn pull-right pull-right" style="margin-left: 10px;" type="button">Add Gender</button>
                        
                    </div>
                    <div class="col-sm-12" style="margin-top: 20px;">
                        <table class="new_df">

                            </tbody>
                        </table>
                        
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        function delte_inse(t) {
            $(t).closest("tr").remove();
            //@ will hide save button here 
        }

        function delte_row(t) {
            $($(t).closest("tr")).removeClass("update").addClass("delete").hide();
        }

        function edit_fd(t) {
            $($(t).closest("tr").find("input")[1]).prop("readonly", false);
            $($(t).closest("tr").find("input")[1]).focus();
        }

        $(".df_save").click(function (e) {
            let inserts = [];
            let deletes = [];
            let updates = [];
            $(".add_df_input").each((e, l) => {
                inserts.push($(l).val());
            });
            $(".df_existing.update").each((e, l) => {
                updates.push({
                    id: $(l).attr("iden"),
                    value: $(l).find(".dfedd").val()
                });
            });
            $(".df_existing.delete").each((e, l) => {
                deletes.push({
                    id: $(l).attr("iden"),
                    value: $(l).find(".dfedd").val()
                });
            });

            $.post("modules/datafields/add_fields.php", {
                TOPIC: $("#datafields").val(),
                INSERTS: JSON.stringify(inserts),
                DELETES: JSON.stringify(deletes),
                UPDATES: JSON.stringify(updates)
            }, e => {

                alert("Changes Done");
                window.document.location.reload();
            });
        });

        function delete_row(e) {

            window.temp1 = e;
        }

        $(document).ready(function () {
            let topic = $("#datafields").val();
            $.post("modules/datafields/get_fields.php", {topic: topic}, e => {
                console.log(e);
                e.data.forEach(p => {
                    let template = `<tr class="df_existing update" iden="${p.id}">
    <td class="text-center"><input type="checkbox" name=""></td>
    <td><input class="dfedd" readonly value="${p.name}"></td>
    <td class="text-center"><a href="#"><i class="fa fa-pencil" aria-hidden="true" onclick="edit_fd(this)"></i> </a></td>
    <td class="text-center"><a href="#"><i class="fa fa-trash-o" aria-hidden="true" onclick="delte_row(this)"></i> </a></td>
  </tr>`;
                    $(".df_tablex").append(template);
                });
            });
        });

        $("#datafields").change(function (e) {
            $(".df_tablex").find("tr").remove();
            $(".new_df").find("tr").remove();
            let topic = $("#datafields").val();
            $.post("modules/datafields/get_fields.php", {topic: topic}, e => {
                e.data.forEach(p => {
                    let template = `<tr class="df_existing update" iden="${p.id}">
    <td class="text-center"><input type="checkbox" name=""></td>
    <td><input class="dfedd" readonly value="${p.name}"></td>
    <td class="text-center"><a href="#"><i class="fa fa-pencil" aria-hidden="true" onclick="edit_fd(this)"></i> </a></td>
    <td class="text-center"><a href="#"><i class="fa fa-trash-o" aria-hidden="true" onclick="delte_row(this)"></i> </a></td>
  </tr>`;
                    $(".df_tablex").append(template);
                });
            });
            $(".fielddf").text(topic);
            $(".fielddfbtn").text("Add " + topic);
        });
        $(".fielddfbtn").click(function (e) {
            let add_template = `<tr class="add_df insert"><td ></td>
                   <td><input type="text" name="" class="add_df_input"></td>
                   <td class="text-center"><a href="#" style="color: red"><i onclick="delte_inse(this)" class="fa fa-times" aria-hidden="true"></i> </a></td></tr>`;
            $(".new_df").append(add_template);
        });
        $(".bulk_add").click(function () {
            let inserts = [];
            $(".add_df_input").each((e, l) => {
                inserts.push($(l).val());
            });
            if (inserts.length == 0) {
                alert("No changes");
                return;
            }
            $.post("modules/datafields/add_fields.php", {
                TOPIC: $("#datafields").val(),
                INSERTS: JSON.stringify(inserts),
                DELETES: JSON.stringify([]),
                UPDATES: JSON.stringify([])
            }, e => {
                alert("Changes Done");
                window.document.location.reload();
            });
        });

        $(".bulk_delete").click(function () {
            let deletes = [];
            $(".df_existing").each((e, l) => {
                let input = ($(l).find("input[type='checkbox']"))[0];
                if (input.checked) {
                    deletes.push({
                        id: $(l).attr("iden"),
                        value: $(l).find(".dfedd").val()
                    });
                }
            });
            if (deletes.length == 0) {
                alert("No changes");
                return;
            }
            $.post("modules/datafields/add_fields.php", {
                TOPIC: $("#datafields").val(),
                INSERTS: JSON.stringify([]),
                DELETES: JSON.stringify(deletes),
                UPDATES: JSON.stringify([])
            }, e => {
                alert("Changes Done");
                window.document.location.reload();
            });
        });

    </script>

</div>


<!-- Add employee modal -->


<div class="modal fade profile_edit profile_modal" id="exampleModal_employment" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title ae_title"></h4>
            </div>
            <div class="modal-body">

                <section>
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active" step="1">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <h2>1</h2>
                            </span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled" step="2">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <h2>2</h2>
                            </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled" step="3">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <h2>3</h2>
                            </span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled" step="4">
                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab"
                                       title="Complete">
                            <span class="round-tab">
                                <h2>4</h2>
                            </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled" step="5">
                                    <a href="#complete2" data-toggle="tab" aria-controls="complete" role="tab"
                                       title="Complete">
                            <span class="round-tab">
                                <h2>5</h2>
                            </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled" step="6">
                                    <a href="#complete3" data-toggle="tab" aria-controls="complete" role="tab"
                                       title="Complete">
                            <span class="round-tab">
                               <h2>6</h2>
                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form role="form">
                            <div class="tab-content">
                                <div class="tab-pane active tabb" role="tabpanel" id="step1" style="display: block;">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane  active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                                            <h2 style="    text-align: center;  font-size: 20px; letter-spacing: 1px;">
                                                Profile</h2>

                                            <div class="row profile_block profill" check="1">




                                                <div class="row">
                                                    <style>
                                                        .hi{
                                                            width:33%
                                                        }
                                                        .hey{
                                                            width:32%
                                                        }
                                                    </style>

                                                    <div class="col-md-4 tabs_block_inner hi" style="margin-left: 1%;">
                                                        <label>First Name</label>
                                                        <input type="text" name="first_name" required="required" aria-required="true" data-error="Please enter first name" field_signature="1938669551">
                                                    </div>

                                                    <div class="col-md-4 tabs_block_inner hi">
                                                        <label>Last Name</label>
                                                        <input type="text" name="last_name" required="required" aria-required="true" data-error="Please enter last name" field_signature="3389759488">
                                                    </div>
                                                    <div class="col-md-6 tabs_block_inner hey">
                                                        <label>Date of Birth</label>
                                                        <input type="date" name="date_of_birth" required="" aria-required="true">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <style>
                                                        .hghg{
                                                            width:33%
                                                        }
                                                        .vyvy{
                                                            width:32%
                                                        }
                                                    </style>
                                                    <div class="col-md-4 tabs_block_inner hghg" style="margin-left: 1%;">
                                                        <label>Employee Id</label>
                                                        <input type="text" name="emp_id" required="required" aria-required="true" data-error="Please enter employee id" field_signature="1584437011">
                                                    </div>

                                                    <div class="col-md-4 tabs_block_inner hghg">
                                                        <label>Gender</label>
                                                        <select type="text" name="emp_id" class="form-control" required="required" aria-required="true" field_signature="2635273470">
                                                            <?php
                                                            foreach (getStatus("Gender") as $key => $value) {
                                                                ?>
                                                                <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option> <?php
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>


                                                    <div class="col-md-4 tabs_block_inner vyvy">
                                                        <label>Martial Status</label>
                                                        <select type="text" name="emp_id" class="form-control" required="required" aria-required="true" field_signature="2635273470">
                                                            <?php
                                                            foreach (getStatus("Maritial Status") as $key => $value) {
                                                                ?>
                                                                <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option> <?php
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>






                                                </div>


                                                <div class="col-md-6 tabs_block_inner">
                                                    <label>Email</label>
                                                    <input type="email" name="email" required="required" aria-required="true" data-error="Please enter email" field_signature="1029417091">
                                                </div>



                                                <div class="col-md-6 tabs_block_inner" style="display: none;">
                                                    <label>Contact Number</label>
                                                    <input class="form-control" type="tel" id="phone" field_signature="1794903826">
                                                </div>
                                                <script>
                                                    $(document).ready(function() {$("#phone").intlTelInput();});
                                                </script>
                                                <div class="col-md-6 tabs_block_inner">
                                                    <label>Contact Number</label>
                                                    <input type="number" name="phone" required="required" aria-required="true" data-error="Please enter contact number" field_signature="466116101">
                                                </div>


                                            </div>

                                        </div>


                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-primary next-step nextt" step="1">
                                                Next
                                            </button>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane tabb" role="tabpanel" id="step2">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane  active" id="profile" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <h2 style="    text-align: center;  font-size: 20px; letter-spacing: 1px;">
                                                Personal Details</h2>
                                            <form method="post" name="profile" id="form_id_prof" novalidate="novalidate"
                                                  class="add_employee">
                                                <div class="row profile_block" check="2">



                                                    <div class="col-md-12 tabs_block_inner">
                                                        <label>Address Line 1</label>
                                                        <input type="text" name="address_line_1"
                                                               required="required"
                                                               aria-required="true">
                                                    </div>


                                                    <div class="col-md-12 tabs_block_inner">
                                                        <label>Address Line 2</label>
                                                        <input type="text" name="address_line_2"
                                                               required="required"
                                                               aria-required="true">
                                                    </div>


                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Country</label>
                                                        <select type="text" name="country_employment"
                                                                required="required" aria-required="true" class="form-control">
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and
                                                                Herzegovina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British
                                                                Indian Ocean Territory
                                                            </option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic
                                                            </option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                Islands
                                                            </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo,
                                                                The Democratic Republic of The
                                                            </option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic
                                                            </option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                                (Malvinas)
                                                            </option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern
                                                                Territories
                                                            </option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard
                                                                Island and Mcdonald Islands
                                                            </option>
                                                            <option value="Holy See (Vatican City State)">Holy See
                                                                (Vatican City State)
                                                            </option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic
                                                                Republic of
                                                            </option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">
                                                                Korea, Democratic People's Republic of
                                                            </option>
                                                            <option value="Korea, Republic of">Korea, Republic of
                                                            </option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao
                                                                People's Democratic Republic
                                                            </option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                                Jamahiriya
                                                            </option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of">
                                                                Macedonia, The Former Yugoslav Republic of
                                                            </option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia,
                                                                Federated States of
                                                            </option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of
                                                            </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana
                                                                Islands
                                                            </option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian
                                                                Territory, Occupied
                                                            </option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation
                                                            </option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and
                                                                Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                                Miquelon
                                                            </option>
                                                            <option value="Saint Vincent and The Grenadines">Saint
                                                                Vincent and The Grenadines
                                                            </option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and
                                                                Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia and Montenegro">Serbia and
                                                                Montenegro
                                                            </option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands">
                                                                South Georgia and The South Sandwich Islands
                                                            </option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan
                                                                Mayen
                                                            </option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic
                                                            </option>
                                                            <option value="Taiwan, Province of China">Taiwan, Province
                                                                of China
                                                            </option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania,
                                                                United Republic of
                                                            </option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands
                                                            </option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United
                                                                States Minor Outlying Islands
                                                            </option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands,
                                                                British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                            </option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner" style="height:90px;">
                                                        <label>Postal Code</label>
                                                        <input type="text" name="postal_code"
                                                               required="required"
                                                               aria-required="true">
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Religion </label>
                                                        <select type="text" name="religion" value="Religion" required="required"
                                                                aria-required="true" class="form-control">
                                                            <?php
                                                            foreach (getStatus("Religion") as $key => $value) {
                                                                ?>
                                                                <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option> <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Race </label>
                                                        <select type="text" name="race" value="Race" required=""
                                                                class="form-control"
                                                                aria-required="true">
                                                            <?php
                                                            foreach (getStatus("Race") as $key => $value) {
                                                                ?>
                                                                <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option> <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>




                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Nationality</label>
                                                        <select type="text" name="nationality" value="Nationality"
                                                                class="form-control"
                                                                required=""
                                                                aria-required="true">
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and
                                                                Herzegovina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British
                                                                Indian Ocean Territory
                                                            </option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic
                                                            </option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                Islands
                                                            </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo,
                                                                The Democratic Republic of The
                                                            </option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic
                                                            </option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                                (Malvinas)
                                                            </option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern
                                                                Territories
                                                            </option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard
                                                                Island and Mcdonald Islands
                                                            </option>
                                                            <option value="Holy See (Vatican City State)">Holy See
                                                                (Vatican City State)
                                                            </option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic
                                                                Republic of
                                                            </option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">
                                                                Korea, Democratic People's Republic of
                                                            </option>
                                                            <option value="Korea, Republic of">Korea, Republic of
                                                            </option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao
                                                                People's Democratic Republic
                                                            </option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                                Jamahiriya
                                                            </option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of">
                                                                Macedonia, The Former Yugoslav Republic of
                                                            </option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia,
                                                                Federated States of
                                                            </option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of
                                                            </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana
                                                                Islands
                                                            </option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian
                                                                Territory, Occupied
                                                            </option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation
                                                            </option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and
                                                                Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                                Miquelon
                                                            </option>
                                                            <option value="Saint Vincent and The Grenadines">Saint
                                                                Vincent and The Grenadines
                                                            </option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and
                                                                Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia and Montenegro">Serbia and
                                                                Montenegro
                                                            </option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands">
                                                                South Georgia and The South Sandwich Islands
                                                            </option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan
                                                                Mayen
                                                            </option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic
                                                            </option>
                                                            <option value="Taiwan, Province of China">Taiwan, Province
                                                                of China
                                                            </option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania,
                                                                United Republic of
                                                            </option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands
                                                            </option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United
                                                                States Minor Outlying Islands
                                                            </option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands,
                                                                British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                            </option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    <script>
                                                        var chn = function (g) {
                                                            let min = $(g).val();
                                                            $("[name='date_passport_expire']").attr("min", min);
                                                        }
                                                    </script>


                                                    <div class="col-md-6 tabs_block_inner" style="height: 90px;">
                                                        <label>NRIC / Passport No.</label>
                                                        <input type="text" name="passport_no"
                                                               value="NRIC / Passport No." required=""
                                                               aria-required="true">
                                                    </div>


                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Date of Passport Issue</label>
                                                        <input type="date" name="date_passport_issue" required=""
                                                               aria-required="true"
                                                               onchange="chn(this)">
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Date of Passport Expiry</label>
                                                        <input type="date" name="date_passport_expire" required=""
                                                               aria-required="true">
                                                    </div>


                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Immigration Status </label>
                                                        <select name="immigration_status"
                                                                class="country form-control select_country"
                                                                id="select_countries">
                                                            <?php
                                                            foreach (getStatus("Immigration Status") as $key => $value) {
                                                                ?>
                                                                <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option> <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>



                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-default prev-step prev" step="2">
                                                Previous
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-primary next-step nextt" step="2">
                                                Next
                                            </button>
                                        </li>
                                    </ul>
                                </div>



                                <div class="tab-pane tabb" role="tabpanel" id="step3">

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane  active" id="profile" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <h2 style="    text-align: center;  font-size: 20px; letter-spacing: 1px;">
                                                Current Employment
                                                Details</h2>
                                            <form method="post" name="profile" id="form_id_prof" novalidate="novalidate"
                                                  class="add_employee">
                                                <div class="row profile_block" check="3">

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Date of Hire</label>
                                                        <input type="date" name="date_of_hire" required=""
                                                               aria-required="true">
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Employment Type </label>
                                                        <input type="text" name="employment_type"
                                                               value="Employment Type" required=""
                                                               aria-required="true">
                                                    </div>


                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Job Title</label>
                                                        <select type="text" name="job_title" value="Job Title"
                                                                required=""
                                                                aria-required="true" class="form-control">
                                                            <?php
                                                            foreach (getStatus("Job Title") as $key => $value) {
                                                                ?>
                                                                <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option> <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Department </label>
                                                        <select name="department_id" value="Department"
                                                                required="required" class="form-control"
                                                        >

                                                        </select>

                                                    </div>
                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Reporting Manager </label>
                                                        <select type="text" name="reporting_manager"
                                                                value="Reporting Manager" required=""
                                                                aria-required="true" class="form-control">
                                                            <option value="0">NIL</option>

                                                            <?php

                                                            foreach ($results as $key => $value) {
                                                                $id = $value["id"];
                                                                $name = $value["first_name"] . " " . $value["last_name"];
                                                                echo "<option value='$id'>$name</option>";
                                                            }

                                                            ?>


                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner" style="height:90px;">
                                                        <label>Division / Cost Centre </label>
                                                        <input type="text" name="division_center"
                                                               value="Division / Cost Centre" required=""
                                                               aria-required="true">
                                                    </div>


                                                    <div class="col-md-6 tabs_block_inner" >
                                                        <label>Resignation Date </label>
                                                        <input type="date" name="resignation_date" value=""
                                                               required=""
                                                               aria-required="true">
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label>Years of Experience </label>
                                                        <input type="text" name="experience_years"
                                                               value="Years of Experience" required=""
                                                               aria-required="true">
                                                    </div>

                                                    <div class="col-md-6 tabs_block_inner">
                                                        <label> S$ Salary </label>
                                                        <input type="number" name="experience_years" value=""
                                                               required=""
                                                               aria-required="true">

                                                    </div>


                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-default prev-step prev" step="3">
                                                Previous
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-primary btn-info-full next-step nextt"
                                                    step="3">Next
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane tabb" role="tabpanel" id="step4">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane  active" id="profile" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <h2 style="text-align: center;font-size: 20px; letter-spacing: 1px;">
                                                Employment History</h2>
                                            <button style="margin:10px 0" class="btn-primary btn prevem pull-right" type="button">Add Row</button>

                                            <table>
                                                <thead>
                                                <tr class="employment">
                                                    <th>SN.</th>
                                                    <th>Company Name</th>
                                                    <th>Department</th>
                                                    <th>Job Title</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Years of Experience</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody class="prevemt"></tbody>
                                            </table>

                                            <style>
                                                .table_div {
                                                    width: 122px;
                                                }

                                                table, td, th {
                                                    border: 1px solid #ddd;
                                                    text-align: left;
                                                }

                                                table {
                                                    border-collapse: collapse;
                                                    width: 100%;
                                                }

                                                th, td {
                                                    padding: 15px;
                                                }
                                            </style>


                                        </div>


                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-default prev-step prev" step="4">
                                                Previous
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-primary btn-info-full next-step nextt"
                                                    step="4">
                                                Next
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane tabb" role="tabpanel" id="step5">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane  active" id="profile" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <h2 style="    text-align: center;  font-size: 20px; letter-spacing: 1px;">
                                                Education
                                                Details</h2>
                                            <button style="margin:10px 0" type="button" class="prevedu btn btn-primary pull-right">Add Row</button>

                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>SN.</th>
                                                    <th>Institution Name</th>
                                                    <th>Course</th>
                                                    <th>Enrollment Date</th>
                                                    <th>Completion Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody class="prevedut">

                                                </tbody>
                                            </table>


                                        </div>

                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-default prev-step prev" step="5">
                                                Previous
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-primary btn-info-full next-step nextt"
                                                    step="5">
                                                Next
                                            </button>
                                        </li>
                                    </ul>

                                </div>
                                <div class="tab-pane tabb" role="tabpanel" id="step6">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane  active" id="profile" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <h2 style="    text-align: center;  font-size: 20px; letter-spacing: 1px;">
                                                System Access
                                                Authority Level</h2>
                                            <form method="post" name="profile" id="form_id_prof" novalidate="novalidate"
                                                  class="add_employee">
                                                <div class="row profile_block">
                                                    <div class="col-md-6 tabs_block_inner" style="margin-bottom: 50px;">
                                                        <label>Password</label>
                                                        <input type="password" name="password"
                                                               class="form-control select_country"
                                                               id="select_countries">
                                                    </div>
                                                    <div class="modal-footer col-md-12">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal" step="6">Close
                                                        </button>
                                                        <button type="button" class="btn btn-secondary prev"
                                                                step="6">Previous
                                                        </button>
                                                        <button type="button" class="btn btn-primary" id="form_values"
                                                                onclick="submitAddEmployee()">Add Employee
                                                        </button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>


                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </section>


            </div>
        </div>
    </div>
</div>
<button type='button' data-toggle='modal' data-target='#view_employee' id="oidlfki"></button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script>



    function getFormData($form) {
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};
        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }

    $(".add-form").on("submit", function (g) {
        g.preventDefault();
        e.stopImmediatePropagation();
    });

    function submitAddEmployee() {
        let formdata = {};
        $("form.add_employee").each(function (e, l) {
            let current = (getFormData($(l)));
            for (let y in current) {
                formdata[y] = current[y];
            }
        });
        $(".profill :input").each((e, l) => {
            formdata[l.getAttribute("name")] = $(l).val();
        });
        let employ_history = [];
        $(".prevemt").children().each((e, l) => {
            employ_history.push({
                company_name: $(l).find(".company_name").val(),
                department: $(l).find(".department").val(),
                job_title: $(l).find(".job_title").val(),
                start_date: $(l).find(".start_date").val(),
                end_date: $(l).find(".end_date").val(),
                years_of_experience: $(l).find(".exp_years").val(),
            });
        });
        let edu_history = [];
        $(".prevedut").children().each((e, l) => {
            edu_history.push({
                institution: $(l).find(".iname").val(),
                course: $(l).find(".course").val(),
                enrollment_date: $(l).find(".enrollment_date").val(),
                completition_date: $(l).find(".completion_date").val()
            });
        });
        sending = {data: formdata, edu: JSON.stringify(edu_history), emp: JSON.stringify(employ_history)};
        try {
            delete sending.data.null;
        } catch (g) {
            console.log(g)
        }

        console.log(sending);
        if (window.actionsafivd=="ADD") {
            url="modules/employee/add_employee.php";
        } else {
            url="modules/employee/edit_employee.php";
            sending["targg"]=window.currenemmmpid;
        }
        $.post(url, {
            type: "request",
            action: "add",
            data: JSON.stringify(sending)
        }, function (e) {
            console.log(e);
            if (e.success) {
                if (actionsafivd=="ADD") {
                    alert("Added Employee Successfully");
                } else {
                    alert("Employee updated");
                }
                window.document.location.reload(true);
            } else {
                alert(`Couldn't ${actionsafivd} Employee\n" + e.message`);
            }
        });
    }

    $(document).ready(function () {
        try {
            $('.nav-tabs > li a[title]').tooltip();
        } catch (e) {
            console.log(e);
        }
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            var $target = $(e.target);
            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });
        $(".next-step").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);
        });
        $(".prev-step").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);
        });
    });
    
    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

    function calc(d) {
        console.log(d);
        let start_date = $(d).parent().parent().find(".start_date").val();
        let end_date = $(d).parent().parent().find(".end_date").val();
        //s1 = moment(start_date);
        s2 = moment(end_date);
        console.log(moment.duration(s2 - s1).years());
        window.ed = [s1, s2];
        $(d).parent().parent().find(".exp_years").val(s2.diff(s1, "years", true).toFixed(2));
    }

    window.prevem = 0;
    $(".prevem").click(
        function () {
            window.prevem += 1;
            string = `<tr class="add_employment_role">
    <td>${window.prevem}</td>
    <td><input type="text" name="prev_company_position" class="table_div company_name"></td>
      <td><input type="text" name="prev_company_position" class="table_div department"></td>
        <td><input type="text" name="prev_company_position" class="table_div job_title"></td>
            <td><input type="date" name="prev_company_position" class="table_div start_date" onchange="calc(this)"></td>
              <td><input type="date" name="prev_company_position" class="table_div end_date" onchange="calc(this)"></td>
                <td><input type="number" readonly name="prev_company_position" class="table_div exp_years"></td></tr>
                <td><div style="text-aign:center">
                    <span id="empHstryEdit" class="action-icons hstryEdit"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                    <span id="empHstryDelete" class="action-icons hstryDelete"><i class="fa fa-trash" aria-hidden="true"></i></span>
                    </div></td>
                `;
            $(".prevemt").append(string);
        }
    );

    window.prevedu = 0;
    $(".prevedu").click(
        function () {
            window.prevedu += 1;
            string = `<tr class="add_edu_row">
    <td>${window.prevedu}</td>
    <td><input type="text" name="prev_company_position" class="table_div iname"></td>
      <td><input type="text" name="prev_company_position" class="table_div course"></td>
        <td><input type="date" name="prev_company_position" class="table_div  enrollment_date"></td>
            <td><input type="date" name="prev_company_position" class="table_div completion_date"></td></tr>
            <td><div style="text-aign:center">
                    <span id="empEducnEdit" class="action-icons edcnEdit"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                    <span id="empEducnDelete" class="action-icons edcnDelete"><i class="fa fa-trash" aria-hidden="true"></i></span>
                    </div></td>
            `;
            $(".prevedut").append(string);
        }
    );
    window.document.body.style.height = window.screen.height + "px";

    function delete_em(id) {
        console.log(id);
        if (confirm("Do you want to delete the employee")) {
            $.post("modules/employee/delete_employee.php", {id_delete_employee: id}, e => {
                console.log(e);
                alert("Employee Deleted");
                window.document.location.reload();
            })
        }
    }

</script>
<script>
    $(".nav-tabs a[data-toggle=tab]").on("click", function (e) {
        e.preventDefault();
        return false;
    });
    $(".nextt").off();
    $(".nextt").click(function (e) {
        let step = (e.target.getAttribute("step"));
        let elems = [];
        $("[check=" + step + "]").find(":input").each(
            function (e, l) {
                elems.push(l);
            }
        );
        console.log("here");
        let hh = false;
        for (let i = 0; i < elems.length; i++) {
            let l = elems[i];
            break;
            if (!l.checkValidity()) {
                hh = true;
                l.reportValidity();
                return;
                break;
            }
        }
        if (hh) {
            return;
        }
        nextstep = (Number(step) + 1).toString();
        $(".tabb").hide();
        $(".tabb#step" + (nextstep)).show();
        $("[role='presentation']").removeClass("active").addClass("disabled");
        $("[role='presentation'][step=" + nextstep + "]").removeClass("disabled").addClass("active");

    });
    $(".prev").off();
    $(".prev").click(function (e) {
        let step = (e.target.getAttribute("step"));
        nextstep = (Number(step) - 1).toString();
        console.log(nextstep);
        $(".tabb").hide();
        $(".tabb#step" + (nextstep)).show();
        $("[role='presentation']").removeClass("active").addClass("disabled");
        $("[role='presentation'][step=" + nextstep + "]").removeClass("disabled").addClass("active");
    });
    $(document).ready(function () {
        $(".profill").wrap("<form class='addd'></form>");
    });


</script>
<!-- Finish Add employee modal END-->


<style>
    .dtr-details {
        width: 100% !important;
    }

</style>


<div class="modal fade " id="view_employee" tabindex="-1" role="dialog"
     aria-labelledby="" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>

<script>
    $.get("modules/employee/get_departments.php", {}, e => {
        e = JSON.parse(e);
        for (let u in e) {
            $("[name='department_id']").append(`<option value='${e[u].id}'>${e[u].name}</option>`);
        }
    });

    function openviewModal(id) {
        window.sdlufigyyi = id;
        $("#oidlfki").click();
    }
</script>


<div class="modal fade profile_edit" id="exampleModal_employment22_d">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-primary employee-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Employee Details</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="date_details">
                        <style>
                            .underlin {
                                text-decoration: underline;
                            }
                        </style>
                        <h3 class="underlin">Profile</h3>
                        <ul>
                            <li><span>First Name</span>
                                <p id="first_name">-</p></li>
                            <li><span>Last  Name</span>
                                <p id="last_name">-</p></li>
                            <li><span>Date of Birth</span>
                                <p id="date_of_birth">-</p></li>
                            <li><span>Employee Id</span>
                                <p id="emp_id">-</p></li>
                            <li><span>Gender</span>
                                <p id="gender">-</p></li>
                            <li><span>Maritial Status</span>
                                <p id="maritial_status">-</p></li>
                            <li><span>Email</span>
                                <p id="email">-</p></li>
                            <li><span>Country Code</span>
                                <p id="country_code">-</p></li>
                            <li><span>Contact Number</span>
                                <p id="phone">-</p></li>




                        </ul>

                    </div>


                    <div class="date_details">
                        <h3 class="underlin">Personal Details</h3>
                        <ul>
                            <li><span>Address Line 1</span>
                                <p id="address_line_1">-</p></li>
                            <li><span>Address Line 2</span>
                                <p id="address_line_2">-</p></li>
                            <li class=""><span>City</span>
                                <p id="city">-</p></li>
                            <li class=""><span>State</span>
                                <p id="state">-</p></li>
                            <li><span>Country</span>
                                <p id="country">-</p></li>
                            <li><span>Postal Code</span>
                                <p id="postal_code">-</p></li>
                            <li><span>Religion</span>
                                <p id="religion">-</p></li>
                            <li><span>Race</span>
                                <p id="race"></p>-</li>
                            <li><span>Nationality</span>
                                <p id="nationality">-</p></li>
                            <li><span>NRIC / Passport No.</span>
                                <p id="passport_no">-</p></li>
                            <li><span>Date of Passport Issue</span>
                                <p id="date_of_passport_issue">-</p></li>
                            <li><span>Date of Passport Expiry</span>
                                <p id="date_of_passport_expiry">-</p></li>
                            <li><span>Immigration Status</span>
                                <p id="immigration_status">-</p></li>

                        </ul>

                    </div>


                    <div class="date_details">
                        <h3 class="underlin">Current Employment Details</h3>
                        <ul>
                            <li><span>Date of Hire</span>
                                <p id="date_of_hire">-</p></li>
                            <li><span>Employment Type</span>
                                <p id="employment_type">-</p></li>
                            <li><span>Job Title</span>
                                <p id="job_title">-</p></li>
                            <li><span>Department</span>
                                <p id="name">-</p></li>
                            <li><span>Reporting Manager</span>
                                <p id="reporting_manager">-</p></li>
                            <li><span>Division / Cost Centre</span>
                                <p id="division_center">-</p></li>
                            <li><span>Resignation Date</span>
                                <p id="resignation_date">-</p></li>
                            <li><span>Years of Experience</span>
                                <p id="experience_years">-</p></li>
                            <li><span>S$ Salary</span>
                                <p id="salary">-</p></li>

                        </ul>

                    </div>


                    <div class="date_details hidden">
                        <h3 class="underlin">Employment History</h3>
                        <ul>
                            <li><span>SN.   </span> Sabir Khan</li>
                            <li><span>Company Name  </span> Last Name</li>
                            <li><span>Department</span> Date of Birth</li>
                            <li><span>Job Title </span> 343453</li>
                            <li><span>Start Date    </span> Sabir.pahat@gmail.com</li>
                            <li><span>End Date  </span> Sabir Khan</li>
                            <li><span>Years of Experience</span> Sabir Khan</li>


                        </ul>

                    </div>
                    <div class="date_details hidden">
                        <h3>Education Details</h3>
                        <ul>
                            <li><span>SN.   </span> Sabir Khan</li>
                            <li><span>Institution Name    </span> Last Name</li>
                            <li><span>Course</span> Date of Birth</li>
                            <li><span>Enrollment Date    </span> 343453</li>
                            <li><span>Completion Date   </span> Sabir.pahat@gmail.com</li>
                        </ul>
                    </div>

                    <!-- <div class="date_details">
                        <h3 class="underlin">System Access Authority Level</h3>
                        <ul>
                            <li><span>Password </span>
                                <p id="password">********</p></li>
                        </ul>
                    </div> -->
                </div>

                <button type="button" class="btn btn-primary df_save hidden">Save</button>
            </div>

        </div>
    </div>
</div>
<style>
    .dfedd {
        border: none;
    }
    .error {
        color:red;
    }
</style>
<script>
    (function() {$(".profill").wrapInner(`<form action="#" id="form1"></form>`);})();
</script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
<script>
    window.form1=$("#form1").validate({});
</script>