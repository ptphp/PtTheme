<div class="page-head">
    <h2>Form</h2>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Basic</li>
    </ol>
</div>
<div class="cl-mcont">
    <div class="row">
        <div class="col-sm-8 col-md-8">
            <div class="block-flat">
                <div class="header">
                    <h3>Basic Form</h3>
                </div>
                <div class="content print_code">
<form role="form">
    <div class="form-group">
        <label>Email address</label> <input type="email" placeholder="Enter email" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label> <input type="password" placeholder="Password" class="form-control">
    </div>
    <div class="checkbox">
        <label> <input type="checkbox" class="icheck"> Remember me </label> </div>
    <button class="btn btn-primary" type="submit">Submit</button>
    <button class="btn btn-default">Cancel</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        print_code($(".print_code"));
    });
</script>

