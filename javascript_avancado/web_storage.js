/*
localstorage - os dados continuam lá, mesmo fechando o navegador.
sessionStorage - a diferença que quando o navegador é fechado as informações perdem.

 */

/*inserindo dados no localstorage*/
localstorage.setItem("Nome", "Lucas Emanuel");
/*obtendo o dado do localstorage*/
localstorage.getItem("Nome");
/*removendo*/
localstorage.removeItem("Nome");
/*pra adicionar pode ser assim também*/
localstorage.nome = "Joao";