<!DOCTYPE html>
<html lang="pt-br">

<style>
.container-email {
  font-family: "Rubik", sans-serif;
  border: 3px solid #c22f4ad7;
  width: 100%;
  max-width: 800px;
  justify-self: center;
  padding: 20px 30px;
  border-radius: 10px;
  color: #363636ff;
  box-shadow: 1px 1px 25px 10px rgba(229, 16, 16, 0.1);

  p{
    margin: 0;
    font-weight: 600;
  }

  .greating{
    font-size: 3.5em;
  }

  .text-1 {
    font-size: 1.3em;
    margin-bottom: 25px;
  }
  .text-2 {
    font-size: 1em;
    margin-bottom: 12px;
  }

  .nome, .assunto, .mensagem{
    margin-bottom: 10px;
    font-size: 1.1em;
  }

  .text-color {
    color: #c22f4a;
    font-weight: bold;
  }

  .image{
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 60px;
    img {
      width: 250px;
      justify-self: center;
    }
  }
}
</style>

<body>
  <div class="container-email">
    <h1 class="greating">Olá, <span class="text-color">Adriano</span>!</h1>
    <p class="text-1">Recebemos seu email e em breve entraremos em contato.</p>
    <p class="text-2">Por favor confira os dados abaixo:</p>
    <p class="nome"><span class="text-color">Nome</span>: Adriano de Paula Lima</p>
    <p class="assunto"><span class="text-color">Assunto</span>: Dúvida</p>
    <p class="mensagem"><span class="text-color">Mensagem</span>: Gostaria de saber mais sobre os serviços disponíveis</p>

    <div class="image">
      <img src="images/logo.jpeg" alt="Logo TalkConect">
    </div>
  </div>
</body>

</html>