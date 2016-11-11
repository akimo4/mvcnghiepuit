<!doctype html>
<html lang="en">
<head>
    <?php echo $this->meta; ?>
    <?php echo $this->title; ?>
    <?php echo $this->css ?>
    <?php echo $this->js ?>
</head>
<body>
    <h1>Header</h1>
    <div style="width: 500px;height: 500px; background-color: red;">
        <?php require_once APPLICATION_PATH.$this->module.DS."views".DS.$this->fileView.".php"?>
    </div>
    <h1>Footer</h1>
</body>
</html>