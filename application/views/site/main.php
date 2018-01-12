<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body>
<?php $this->load->view('site/header') ?>
<div class="container-fluid main">
    <div class="container">
        <div class="row">
            <?php $this->load->view($temp, $this->data); ?>
            <?php $this->load->view('site/right') ?>

        </div>

    </div>
</div>

<?php $this->load->view('site/footer') ?>
</body>
</html>