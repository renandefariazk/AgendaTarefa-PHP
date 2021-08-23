<!--
session_start();
if(isset($_SESSION["login"]) || empty($_SESSION["login"])){
    header("Location:http://localhost/TarefasPHP");
}
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/tarefas.css">
    <title>CalendarioTarefas</title>
</head>
<body class="bodyContainer">
    <header class="header">
        <h1 class="logoFrase">Tarefas</h1>
    </header>
    <main class="main">
        <section class="calendarioContainer">
            <div class="mesCalendarioContainer">
                <div data-mes="Janeiro" class="mesCalendario"></div>
                <div data-mes="Fevereiro" class="mesCalendario"></div>
                <div data-mes="Maio" class="mesCalendario"></div>
                <div data-mes="Marco" class="mesCalendario"></div>
            </div>
            <div class="mesCalendarioContainer mesContainerCenter">
                <div data-mes="Abril" class="mesCalendario"></div>
                <div data-mes="Junho" class="mesCalendario"></div>
                <div data-mes="Julho" class="mesCalendario"></div>
                <div data-mes="Agosto" class="mesCalendario"></div>
            </div>
            <div class="mesCalendarioContainer">
                <div data-mes="Setembro" class="mesCalendario"></div>
                <div data-mes="Outubro" class="mesCalendario"></div>
                <div data-mes="Novembro" class="mesCalendario"></div>
                <div data-mes="Dezembro" class="mesCalendario"></div>
            </div>
        </section>
    </main>
    <section class="modal modalOff">
        <div class="modalContainer">
            <div class="modalCalendarioContainer">
                <div class="modalTitulo">
                    <p class="modalTituloText"></p>
                </div>
                <div class="modalCalendarioDias"></div>
            </div>
        </div>
    </section>
    <script src="public/js/tarefas.js"></script>
</body>
</html>