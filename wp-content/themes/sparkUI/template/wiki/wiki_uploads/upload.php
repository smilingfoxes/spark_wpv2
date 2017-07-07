<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传wiki参数</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="<?php echo esc_url(self_admin_url('Spark-uploads.php')); ?>" class="form-horizontal" method="get">
    <div class="form-group">
        <div class="col-sm-10">
            源文件名: <input type="text" class="form-control" name="name" placeholder="xxx.txt">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            分隔符: <input type="text" class="form-control" name="separator" placeholder="|">
        </div>
    </div>
    <div class="form-group">
        <div class=" col-sm-10">
            <button type="submit" class="btn btn-default" >提交</button>
        </div>
    </div>
</form>
</body>
</html>