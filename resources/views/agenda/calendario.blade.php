@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agendamento</h1>
@stop

@section('content')

  <!-- dark mode -->
  
 <!-- <div class="toggle">
    <input id="switch" type="checkbox" name="theme">
    <label for="switch">Toggle</label>
  </div> -->

<!-- -------- -->

<body>
  <div id="container">
      <div id="header">
        <div id="monthDisplay"></div>

        <div>
          <button id="backButton">Voltar</button>
          <button id="nextButton">Próximo</button>
        </div>
          
      </div>

      <div id="weekdays">
        <div>Domingo</div>
        <div>Segunda-feira</div>
        <div>Terça-feira</div>
        <div>Quarta-feira</div>
        <div>Quinta-feira</div>
        <div>Sexta-feira</div>
        <div>Sábado</div>
      </div>


      <!-- div dinamic -->
      <div id="calendar" ></div>

   
  </div>

  <div id="newEventModal">
    <h2>Fazer Agendamento</h2>

    <input id="eventTitleInput" placeholder="Event Title"/>

    <button id="saveButton"> Salvar</button>
    <button id="cancelButton">Cancelar</button>
  </div>

  <div id="deleteEventModal">
    <h2>Agendado</h2>

    <div id="eventText"></div><br>


    <button id="deleteButton">Deletar</button>
    <button id="closeButton">Fechar</button>
  </div>

  <div id="modalBackDrop"></div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
      <!-- arquivos style -->
  <link href="http://localhost/adm/public/vendor/adminlte/dist/css/style.css" rel="stylesheet">
  <link href="http://localhost/adm/public/vendor/adminlte/dist/css/darkMode.css" rel="stylesheet">
@stop

@section('js')
  <script> console.log('Hi!'); </script>    
  <script src="http://localhost/adm/public/vendor/adminlte/dist/js/darkMode.js"></script>
  <script src="http://localhost/adm/public/vendor/adminlte/dist/js/main.js"></script>
  
@stop