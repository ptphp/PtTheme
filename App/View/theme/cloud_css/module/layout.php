<div class="container">
<div class="row">
    <div id="content" class="col-lg-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="#">UI Features</a>
                        </li>
                        <li>Elements</li>
                    </ul>
                    <div class="clearfix">
                        <h3 class="content-title pull-left">Elements</h3>
                    </div>
                    <div class="description">Common UI Elements and Features</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box border green">
                    <div class="box-title">
                        <h4><i class="fa fa-desktop"></i>Modals</h4>
                    </div>
                    <div class="box-body">
                        <pre><code id="module_code"><?php
                                echo htmlentities(<<<EOF
<div class="container">
    <div class="row">
        <div id="content" class="col-lg-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header">
                        <ul class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="#">UI Features</a>
                            </li>
                            <li>Elements</li>
                        </ul>
                        <div class="clearfix">
                            <h3 class="content-title pull-left">Elements</h3>
                        </div>
                        <div class="description">Common UI Elements and Features</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box border green">
                        <div class="box-title">
                            <h4><i class="fa fa-desktop"></i>Modals</h4>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
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
        <div class="separator"></div>
    </div>
</div>
</div>

<script>

    init_code($("#module_code"));
</script>