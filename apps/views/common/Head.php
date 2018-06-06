<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- StyleSheets -->
    <?php include 'StylesInclude.php'; ?>

    <script src="<?= _PUBLIC . '/js/formChecker.js'; ?>"></script>

    <title><?php echo (isset($title) && !empty($title)) ? $title : $ini->projectName; ?></title>
</head>
<body>