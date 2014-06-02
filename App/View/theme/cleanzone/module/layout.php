<div class="page-head">
    <h2>布局</h2>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">元素</a></li>
        <li class="active">布局</li>
    </ol>
</div>

<div class="cl-mcont">
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">
                    <h3>Module Page</h3>
                </div>
                <div class="content">
                <pre><code id="module_code"><?php
echo htmlentities(<<<EOF
<div class="page-head">
    <h2>Module Page</h2>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Module</a></li>
        <li class="active">Page</li>
    </ol>
</div>
<div class="cl-mcont">
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">
                    <h3>Module Page</h3>
                </div>
                <div class="content print_code">

                </div>
            </div>
        </div>
    </div>
</div>
EOF
);
?></code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="print_code">
    <div class="cl-mcont">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="block-flat">
                    <div class="header">
                        <h3 class="visible-sm visible-md">Col 4</h3>
                        <h3 class="visible-lg">Col 2</h3>
                        <h3 class="visible-xs">Col 12</h3>
                    </div>
                    <div class="content">
                        <p><b>This article</b><span class="hidden-lg"> is just an example of what we can do with bootstrap.</span>
                            <span class="hidden-md hidden-sm hidden-lg"> Grid System allows you to use some responsive helpers classes to hide or show depending of the device size.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 pull-left">
                <div class="block-flat">
                    <div class="header">
                        <h3>Col 12</h3>
                    </div>
                    <div class="content">
                        <p><b>This article</b> is just an example of what we can do with bootstrap.
                            Grid System allows you to use some responsive helpers classes to hide or show depending of the device size.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    print_code($(".print_code"));
    init_code($("#module_code"));
</script>

