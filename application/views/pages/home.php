<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            Home
        </li>
    </ol>
</nav>

<?php if (isset($_SESSION['success'])){ ?>
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
<?php
}?>

