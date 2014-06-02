<div class="page-head">
    <h2>Data Tables</h2>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">DataTables</li>
    </ol>
</div>
<div class="cl-mcont">
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">
                    <h3>Basic DataTable</h3>
                </div>

                <div class="content print_code">
<div class="table-responsive">
    <table class="table table-bordered" id="datatable" >
        <thead>
        <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr class="odd gradeX">
            <td>Trident1</td>
            <td>Internet
                Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center"> 4</td>
            <td class="center"></td>
        </tr>
        <tr class="odd gradeX">
            <td>Trident2</td>
            <td>Internet
                Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center"> 4</td>
            <td class="center"></td>
        </tr>
        <tr class="odd gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center"> 4</td>
            <td class="center"></td>
        </tr>
        </tbody>
    </table>
</div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        print_code($(".print_code"));
        App.dataTables();
    });
</script>