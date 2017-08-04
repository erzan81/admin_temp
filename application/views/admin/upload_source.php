
<div id="page-wrapper">





    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><span class="fa fa-upload"></span> Upload Data Sumber</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Upload Data Source / Sumber Data
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Upload Data Baru</a>
                        </li>
                        <li><a href="#edit" data-toggle="tab">Perubahan Data</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                        <br>

                            <form role="form">

                                <div class="form-group">
                                    <label>No Matching</label>
                                    <input class="form-control" readonly="true" placeholder="Generated by System">

                                </div>

                                <div class="form-group">
                                    <label>Instansi</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Type File : </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Excel (.xls)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">Excel (.csv)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">Dump File (.dmp)
                                    </label>
                                </div>
                                
                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file">
                                </div>

                                <button type="submit" class="btn btn-info"><i class="fa fa-upload"></i> Upload</button>
                                
                            </form>
                        </div>
                        <div class="tab-pane fade" id="edit">
                            <br>

                            <form role="form">

                                <div class="form-group">
                                    <label>No Matching</label>
                                    <input class="form-control" >

                                </div>

                                <div class="form-group">
                                    <label>Instansi</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Perubahan : </label>
                                    <label class="radio-inline text-info">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked><i class="fa fa-pencil"></i> Edit
                                    </label>
                                    <label class="radio-inline text-success">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2"><i class="fa fa-plus"></i> Tambah
                                    </label>
                                    <label class="radio-inline text-danger">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3"><i class="fa fa-trash-o"></i> Hapus
                                    </label>
                                </div>
                                
                                <div class="form-group">
                                    <i class="text-danger">*Note : File yang akan diupload harus bertype excel (.xls)</i>
                                </div>

                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file">
                                </div>

                                <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload Perubahan</button>
                                
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

    </div>


    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-success active">
                <div class="panel-heading">
                    History Upload Data Source
                </div>
                <div class="panel-body">
                    <div class="row">


                        <div class="col-lg-12">

                            <form role="form">
                                <h4>File.xls</h4>
                                <blockquote>
                                    <p>File.xls Berhasil Upload. Total Keselurahan Data : <b>500025</b> <a class="btn btn-info btn-xs"><span class="fa fa-search"></span> See Detail</a></p>

                                    <small class="text-success">Berhasil Upload 
                                        <cite title="Source Title">50000 Data</cite>
                                    </small>
                                    <small class="text-danger">Someone famous in
                                        <cite title="Source Title">25 Data</cite>
                                    </small>
                                </blockquote>
                                <h4>File-2.xls</h4>
                                <blockquote>
                                    <p>File-2.xls Berhasil Upload. Total Keselurahan Data : <b>500025</b> <a class="btn btn-info btn-xs"><span class="fa fa-search"></span> See Detail</a></p>

                                    <small class="text-success">Berhasil Upload 
                                        <cite title="Source Title">50000 Data</cite>
                                    </small>
                                    <small class="text-danger">Someone famous in
                                        <cite title="Source Title">25 Data</cite>
                                    </small>
                                </blockquote>

                                <button type="submit" class="btn btn-success"><i class="fa fa-refresh"></i> Proses Final</button>
                                <!-- /.col-lg-6 (nested) -->
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->
</div>