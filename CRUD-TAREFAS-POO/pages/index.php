<?php 
    include_once '../includes/header.php';
    include_once '../php_action/db_connect.php';

    session_start();

?>

<main class="flex flex-col gap-7justify-center items-center p-4 w-2/4">
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="flex gap-0 mb-9">
        <input type="text" name="todo" id="todo" placeholder="todo" class="outline-none bg-gray-200 py-3 px-6 shadow-lg focus:bg-blue-700 focus:text-white duration-300">
        <button type="submit" name="btn-criar" class="bg-gray-100  py-3 px-6 shadow-lg hover:bg-green-600 duration-300">✔</button>
    </form>

    <?php 
        if (isset($_POST['btn-criar'])) {
            $todo = mysqli_escape_string($connect, $_POST['todo'] );
            $sql = "INSERT INTO listadetarefas(nome) VALUES ('$todo') ";

            if(mysqli_query($connect, $sql)) {
                // Recarregar a página após a criação da tarefa
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Erro ao criar a tarefa: " . mysqli_error($connect);
            }
        }
        
        $sql = "SELECT * FROM listadetarefas";
        $resultado = mysqli_query($connect, $sql);

    while ($dados = mysqli_fetch_array($resultado)) {
        # code...        
    ?>
    <div class="bg-blue-700 shadow-lg p-4 text-lg text-white font-semibold w-2/4 mb-2 hover:scale-110 duration-500">
        <?php echo $dados['nome'];?>
    </div>
    <?php 
    }
    ?>
</main>

<?php 
    include_once '../includes/footer.php';
    ?>