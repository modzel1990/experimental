<DOCTYPE html>
<html>
<head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="LESS/form.css">
        <script src="js/form.js"></script>
        <!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
                <div class="form-group">
                    <label class="control-label">Contact Name</label>
                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Contact Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="100" type="text" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                        <label class="control-label">Contact Number</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Contact Number" />
                    </div>
                    <div class="form-group">
                            <label class="control-label">E-mail Address</label>
                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter E-mail Address" />
                        </div>
                        <div class="form-group">
                                <label class="control-label">Company Address</label>
                                <input maxlength="100" type="text" class="form-control" placeholder="Enter Company Address" />
                            </div>
                            <div class="form-group">
                                    <label class="control-label">Collection Address(if different site)</label>
                                    <input maxlength="100" type="text" class="form-control" placeholder="Enter Collection Address" />
                                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>
                <div class="form-group">
                    <label class="control-label">Service(s) required (Please tick)</label><br>
                    <input type="checkbox" name="opt1" value="Asset Recovery" />Asset Recovery
                    <input type="checkbox" name="opt2" value="Recycling"/>Recycling
                    <input type="checkbox" name="opt3" value="Disposal"/>Disposal
                    <input type="checkbox" name="opt4" value="Resale"/>Resale
                    <input type="checkbox" name="opt5" value="Decommissioning"/>Decommissioning
                    <input type="checkbox" name="opt6" value="Data Erasure"/>Data Erasure
                    <input type="checkbox" name="opt7" value="Data Destruction"/>Data Destruction<br>
                    <input type="checkbox" name="opt8" value="Degaussing"/>Degaussing
                    <input type="checkbox" name="opt9" value="Refurbishment"/>Refurbishment
                    <input type="checkbox" name="opt10" value="Test and Clean"/>Test and Clean
                    <input type="checkbox" name="opt11" value="Cash rebate"/>Cash rebate
                    <input type="checkbox" name="opt12" value="Data Centre Relocation"/>Data Centre Relocation
                    <input type="checkbox" name="opt13" value="Bin Collection"/>Bin Collection<br>
                </div>
                <div class="form-group">
                    <label class="control-label">Equipment to be collected</label><br>
                    <input maxlength="200" type="text" class="form-control" placeholder="Equipment such as: 50 Laptops, 100 Hard Drives, 30 Mobile Phones etc."  />
                </div>
                <div class="form-group">
                        <label class="control-label">Potential weight of equipment(if known)</label><br>
                        <input maxlength="200" type="text" class="form-control" placeholder="Weight..."  />
                    </div>
                 <div class="form-group">
                            <label class="control-label">Do you know if your waste is hazardous? (Tick if yes)</label><br>
                            <input type="checkbox" name="yes" value="yes" /> Yes<br>
                    </div>
                    <div class="form-group">
                            <label class="control-label">Do you have any potential restrictions on site? (Please list)</label><br>
                            <textarea name="restrictions" rows="8" cols="60"></textarea><br>
                    </div>
                    <div class="form-group">
                            <label class="control-label">Upload any attachments</label><br>
                            <p>NEED TO ADD OPTION TO UPLOAD FILES</p>
                    </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <div class="form-group">
                        <label class="control-label">Are there any further details you wish to include?</label><br>
                        <textarea name="restrictions" rows="8" cols="60"></textarea><br>
                    </div>
                <button class="btn btn-success btn-lg pull-right" type="submit">Submit Collection Request</button>
            </div>
        </div>
    </div>
</form>
</div>
</body>

</html>