<div class="container">
    <footer>
        <?php
            echo "<b>Usuário logado: </b>" . $dados['user']['nome'];
        ?>
        <hr>
        <div class="logo_img">
            <small><p>Conade - Copyright &copy; <?php echo date('Y'); ?> </p></small>
        </div>
    </footer>
</div>

<script src="<?=JS?>"></script>

</body>
</html>