<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Controle Financeiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<style>
    
@import url("https://fonts.googleapis.com/css2?family=Varela+Round&display=swap");

body {
  background-color: #4800f1;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 30vh;
  max-height: 50vh;
  margin: 0;
  font-family: "Varela Round", sans-serif;
  color: #d1c4e9;
}

.container {
  display: grid;
  grid-template-columns: 1fr 1.5fr 2fr;
  padding: 10px;
  gap: 10px;
  width: 95vw;
}

h1 {
  letter-spacing: 1px;
  color: #ffffff;
}

.title {
  color: #ffffff;
}

h3 {
  padding-top: 10px;
  margin: 0;
}

.montante {
  color: #757575;
}

.item {
  padding: 15px;
  background-color: #e76f0c;
  border-radius: 10px;
}

h4 {
  margin: 0;
  text-transform: uppercase;
  border-bottom: 1px solid #bbb;
  padding-bottom: 10px;
}

.inc-exp-container {
  flex-direction: column;
  background-color: #fff;
  box-shadow: var(--box-shadow);
  padding: 20px;
  display: flex;
  justify-content: space-between;
  margin: 20px 0;
}

.inc-exp-container > div {
  flex: 1;
  text-align: left;
}

.inc-exp-container > div:first-of-type {
  border-bottom: 1px solid #dedede;
}

.din {
  font-size: 20px;
  letter-spacing: 1px;
  margin: 5px 0;
}

.din.positivo {
  color: #2ecc71;
}

.din.negativo {
  color: #c0392b;
}

label {
  display: inline-block;
  margin: 10px 0;
}

input[type="text"],
input[type="number"] {
  border: 1px solid #dedede;
  border-radius: 2px;
  display: block;
  font-size: 16px;
  margin: 10px 0 10px;
  padding: 10px;
  width: 95%;
}

.btn {
  cursor: pointer;
  background-color: #0f0f0f;
  box-shadow: var(--box-shadow);
  color: #fff;
  border: 0;
  display: block;
  font-size: 18px;
  margin: 10px 0 10px;
  padding: 10px;
  width: 100%;
  border-radius: 10px;
}

.btn:focus,
.delete-btn:focus {
  outline: 0;
}

.transacoes {
  list-style-type: none;
  padding: 0;
  margin-bottom: 40px;
}

.transacoes li {
  background-color: #ffffff;
  box-shadow: var(--box-shadow);
  color: #212121;
  display: flex;
  justify-content: space-between;
  position: relative;
  padding: 10px;
  margin: 2px 30px 0px 0px;
  border-radius: 2px;
}

.transacoes li.positivo {
  border-right: 7px solid #2ecc71;
}

.transacoes li.negativo {
  border-right: 7px solid #c0392b;
}

.delete-btn {
  cursor: pointer;
  background-color: #ff5722;
  border: 0;
  color: #fff;
  font-size: 20px;
  line-height: 20px;
  padding: 10px 10px;
  position: absolute;
  top: 50%;
  right: -14%;
  transform: translate(-100%, -50%);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.transacoes li:hover .delete-btn {
  opacity: 1;
}

@media screen and (max-width: 900px) {
  .container {
    grid-template-columns: 1fr;
  }
}

</style>



<body>
  <h1 class="h1 bg-info" >Controle Financeiro</h1>

  <div class="container">
    <div class="item">
      <h4>Saldo</h4>

      <h1 id="balanco" class="balanco">R$0.00</h1>

      <div class="inc-exp-container">
        <div>
          <h3 class="montante">Receitas</h3>
          <p id="din-positivo" class="din positivo">+ R$0.00</p>
        </div>

        <div>
          <h3 class="montante">Despesas</h3>
          <p id="din-negativo" class="din negativo">- R$0.00</p>
        </div>
      </div>
    </div>

    <div class="item">
      <h4>Adicionar transação</h4>

      <form id="form">
        <div class="form-control">
          <label for="descricao">
            <h3>Descrição</h3>
          </label>
          <input autofocus type="text" id="descricao" placeholder="Descrição da transação" />
        </div>

        <div class="form-control">
          <label for="montante">
            <h3>Valor R$</h3>
          </label>
          <input type="number" id="montante" placeholder="Valor da transação em R$" />
          <small>(-) negativo para despesas</small>
        </div>

        <button class="btn btn-primary">Adicionar</button>
      </form>
    </div>

    <div class="item">
      <h4>Transações</h4>

      <ul id="transacoes" class="transacoes">
        <!-- <li class="positivo">
          Salário <span>R$5000</span><button class="delete-btn">X</button>
        </li>
        <li class="negativo">
          Aluguel <span>-R$800</span><button class="delete-btn">X</button>
        </li> -->
      </ul>
    </div>
  </div>

  <script src="./controle.js"></script>
</body>

</html>