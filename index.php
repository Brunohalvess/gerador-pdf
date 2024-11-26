<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>.: Gerador de PDF :.</title>
  <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
  <header>

    <h1 class="text-center">Gerador de <span class="badge badge-danger"> PDF</span>
    </h1>
    <p class="text-center">Informe seus dados abaixo e gere um ticket em formato PDF</p>
  </header>

  <section class="container">
    <form method="post" action="processa.php">

      <div class="row">

        <div class="col-sm-6">
          <div class="titulo">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">DADOS PESSOAIS</li>
            </ol>
          </div>

          <div class="etapa">
            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control form-control-sm" name="nome" autofocus>
            </div>
            <div class="form-group">
              <label for="genero">Informe seu Gênero</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="feminino" name="genero" id="f">
                <label class="form-check-label" for="f">
                  Feminino
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="masculino" name="genero" id="m">
                <label class="form-check-label" for="m">
                  Masculino
                </label>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="idade">Data de Nascimento</label>
                <input type="date" class="form-control form-control-sm" name="idade" maxlength="10">
              </div>
            </div>
            <div class="form-group">
              <label for="mail">E-mail</label>
              <input type="mail" class="form-control form-control-sm" name="mail" placeholder="@">
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="fone">Telefone</label>
                <input type="text" class="form-control form-control-sm" name="fone" maxlength="14" onkeyup="handlePhone(event)">
              </div>

              <div class="col-md-6">
                <label for="tipo">Tipo de Contato</label>
                <select class="form-control form-control-sm" name="tipo">
                  <option>Selecione uma opção</option>
                  <option>Celular</option>
                  <option>Fixo</option>
                  <option>Whatsapp</option>
                  <option>Recado</option>
                </select>
              </div>
            </div>
          </div>
        </div>


        <!-- SEÇÃO ENDEREÇO    -->
        <div class="col-sm-6">
          <div class="titulo">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">ENDEREÇO</li>
            </ol>
          </div>

          <div class="etapa">
            <div class="form-group row">
              <div class="col-md-7">
                <label for="cep">CEP</label>
                <input type="text" class="form-control form-control-sm" name="cep" id="cep" maxlength="8">
              </div>
              <div class="col-md-5" style="margin-top: 30px">
                <button type="button" class="btn btn-success btn-block btn-sm" onclick="pesquisacep(cep.value)">Buscar CEP</button>
              </div>
            </div>

            <div class="form-group">
              <label for="rua">Rua</label>
              <input type="text" class="form-control form-control-sm" name="rua" id="rua">
            </div>

            <div class="form-group row">
              <div class="col-md-4 mb-2">
                <label for="numero">Numero</label>
                <input type="text" class="form-control form-control-sm" name="numero">
              </div>
              <div class="col-md-8 mb-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control form-control-sm" placeholder="Opcional" name="complemento">
              </div>
            </div>

            <div class="form-group">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control form-control-sm" name="bairro" id="bairro">
            </div>
            <div class="form-group row">
              <div class="col-md-8 mb-2">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control form-control-sm" name="cidade" id="cidade">
              </div>
              <div class="col-md-4 mb-2">
                <label for="estado">Estado</label>
                <input type="text" class="form-control form-control-sm" name="estado" id="estado">
              </div>
            </div>
            </div>
          </div>

          <div class="col-sm">
            <p class="text-center">
            <button type="submit" class="btn btn-block btn-success">Gerar PDF</button>
            </p>
          </div>
        
      </div>
    </form>
  </section>

  <footer class="rodape">
    <p class="text-center">Desenvolvido para fins didáticos - 2024 StudioWebbi</p>
  </footer>

  <script src="javascript/mask.js" type="text/javascript"></script>
  <script src="javascript/cep.js" type="text/javascript"></script>
</body>

</html>