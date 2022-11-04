<?php // Template Name: ZEND ?>

<?php 

set_include_path('/home/topbrasiltur5/public_html/netsar/includes');


/* 
# TRATA OS CAMPOS ===================================================
*/

function set_nomeDestino ($nome_destino) {
  $nome_destino = ( !isset($nome_destino) ) ? 'Nao Preenchido' : $nome_destino;
  return $nome_destino;
}

function set_dataEmbarque ($data_embarque) {
  $data_embarque = ( !isset($data_embarque) ) ? '00/00/000' : $data_embarque;
  return $data_embarque;
}

function set_qtdAdultos ($qtd) {
  $qtd = count($qtd);
  $qtd = ( !isset($qtd) ) ? 0 : $qtd;
  return $qtd;
}

function set_qtdCriancas ($qtd) {
  $qtd = count($qtd);
  $qtd = ( !isset($qtd) ) ? 0 : $qtd;
  return $qtd;
}

function set_comentarios ($comentarios) {
  $comentarios = ( !isset($comentarios) ) ? 'Nao Preenchido' : $comentarios;
  return $comentarios;
}


function set_nomeCompleto ($nomeCompleto) {
  $nomeCompleto = ( !isset($nomeCompleto) ) ? 'Nao Preenchido' : $nomeCompleto;
  return $nomeCompleto;
}

function set_primeiroNome ($nomeCompleto) {
  $nomeCompleto = $nomeCompleto;
  $primeiroNome = explode(' ', $nomeCompleto);

  return $primeiroNome[0];
}

function set_ultimoNome ($nomeCompleto) {
  $nomeCompleto = $nomeCompleto;
  $ultimoNome = explode(' ', $nomeCompleto);

  return end($ultimoNome);
}

function set_sexo ($sexo) {
  $sexo = ( !isset($sexo) ) ? 'Nao Preenchido' : $sexo;
  return $sexo;
}

function set_ddi ($ddi) {
  $ddi = ( !isset($ddi) ) ? '(55)' : $ddi;
  return $ddi;
}

function set_ddd ($telefone) {
  $ddd = $telefone;
  $ddd = str_replace(  ')', '', str_replace('(', '', $ddd) );
  $ddd = explode(' ', $ddd);

  return $ddd[0];
}

function set_telefone ($telefone) {
  $tel = $telefone;
  $tel = str_replace(  ')', '', str_replace('(', '', $tel) );
  $tel = explode(' ', $tel);
  
  return $tel[1];
}

function set_email ($email) {
  $email = ( !isset($email) ) ? 'nao@informado.com' : $email;
  return $email;
}

/* 
# RECEBE OS CAMPOS ===================================================
*/

$nome = ( isset($_POST['nome_completo']) ) ? $_POST['nome_completo'] : $_POST['nome'];
$cel = ( isset($_POST['celular']) ) ? $_POST['celular'] : $_POST['tel'];
$destino = ( isset($_POST['pacote_para']) ) ? $_POST['pacote_para'] : $_POST['destino'];
$complA = ( isset($nomesAdulto) ) ? 'Nomes Adulto: '. $nomesAdulto : '';
$complC = ( isset($nomesCrianca) ) ? 'Nomes Criança: '. $nomesCrianca : '';


$nome_destino     = set_nomeDestino ( $_POST['pacote_para'] ); //Vindo fo Formulario
$data_embarque  = set_dataEmbarque( $_POST['data'] ); //Vindo fo Formulario FOMRATO
$qtd_adultos    = set_qtdAdultos( $_POST['nome_adulto'] );
$qtd_crianca    = set_qtdCriancas( $_POST['nome_crianca'] );
$comentarios    = set_comentarios( $_POST['observacoes'] );
$comentarios = $comentarios . ' ' . $complA . ' ' .$complC . '<hr>' .iconv('UTF-8', 'ISO-8859-1', $msgHTML);

$nomeCompleto   = set_nomeCompleto( $nome ); //Vindo fo Formulario (string)
$primeiroNome   = set_primeiroNome( $nome ); //Vindo fo Formulario (string)
$ultimoNome     = set_ultimoNome( $nome ); //Vindo fo Formulario (string)
$sexo       = null; //M ou F (string)
$ddi      = null; // FORMATO (DDI)(DDD)XXXX-XXXX (string)
$ddd_telefone     = set_ddd( $cel ); // FORMATO (DDI)(DDD)XXXX-XXXX (string)
$telefone     = set_telefone( $cel ); // FORMATO (DDI)(DDD)XXXX-XXXX (string)
$email      = set_email( $_POST['email'] ); //Vindo fo Formulario joao@ig.com.br (string)



/* ================================================================ */



//sset_include_path ( get_include_path . PATH_SEPARATOR . '../includes');

require_once('Zend/Soap/Client.php');
require_once 'vo/AbrirFACViaWebSiteClienteRQ.php';
require_once 'vo/RegistrarClienteRQ.php';

ini_set ( "soap.wsdl_cache_enabled", "0" );


// define o endereco do WSDL ( nesse exemplo e assim pq esta na pasta acima) 
$wsdl_url = 'http://topbrasil.netsar.com/webservices/ModuloCliente.php?wsdl';
// instancia o cliente
$client = new Zend_Soap_Client ( $wsdl_url , array('encoding'=>'ISO-8859-1'));

// pedir para resposavel pela agncia de viagem criar usuario e senha 
$auth = new Autenticacao();
$auth->usuario = "sitetopbrasil"; 
$auth->senha = "topbra19";

$solicitacaoCliente = "<P>Consulta pelo site: TopBrasilTur</P><P>Destino:".$nome_destino."</P><P>Data Embarque:".$data_embarque."</P><P>Numero ADT:".$pc."</P><P>Numero de CHD:".$cpc."</P><P>OBS:".$comentarios."</P>";

//$solicitacaoCliente = iconv("ISO-8859-1", "UTF-8", $solicitacaoCliente);


$rqFac = new AbrirFACViaWebSiteClienteRQ();
$rqFac->autenticacao = $auth;


$rq = new RegistrarClienteRQ();
$rq->autenticacao = $auth;




//Dados do Cliente
$rq->nomeCompleto   = iconv('UTF-8', 'ISO-8859-1', $nomeCompleto); //Vindo fo Formulario (string)
$rq->primeiroNome   = iconv('UTF-8', 'ISO-8859-1', $primeiroNome); //Vindo fo Formulario (string)
$rq->ultimoNome     = iconv('UTF-8', 'ISO-8859-1', $ultimoNome); //Vindo fo Formulario (string)
$rq->sexo           = 'M'; //M ou F (string)
$rq->telefone       = "(55)(".$ddd_telefone.")".$telefone; // FORMATO (DDI)(DDD)XXXX-XXXX (string)
$rq->email          = $email;//Vindo fo Formulario joao@ig.com.br (string)


$rq->idConsultor  = 60; //60; //1 codigo do consultor, resposavel deve nos dizer, ai passaremos o codigo correto, 1 e apenas um exemplo (INTEIRO)
$rqFac->idConsultor  = 60; //60; //1 codigo do consultor, resposavel deve nos dizer, ai passaremos o codigo correto, 1 e apenas um exemplo (INTEIRO)
$rq->idOrigem  = 1; //1 codigo do consultor, resposavel deve nos dizer, ai passaremos o codigo correto, 1 e apenas um exemplo (INTEIRO)

//Dados e Regra do Pedido
$rqFac->destino             = iconv('UTF-8', 'ISO-8859-1', $nome_destino); //Vindo fo Formulario
$rqFac->dataEmbarque         = $data_embarque; //Vindo fo Formulario FOMRATO
$rqFac->solicitacaoCliente  = iconv('UTF-8', 'ISO-8859-1', $solicitacaoCliente); // verificar valor acima

$rqFac->tipoSolicitacao     = "L"; //L = Vendas Lazer, C = Vendas Corporativas
$rqFac->processStatusNumber = 12; // Numero Ž com base na FILA que ir‡ cair no SISTEMA do cliente PADRAO 2 = ANDAMENTO
$rqFac->avisoAtendimento    = "S"; // Nao abrir POP-UP
$rqFac->comentarioFAC       = "FAC aberta pelo site: topbrasiltur.com.br";
$rqFac->justificativaCliente  = "";
$rqFac->qtd_adt = ( isset($pc) ) ? $pc : 0;
$rqFac->qtd_chd = ( isset($cpc) ) ? $cpc : 0;
$rqFac->comentarioFAC = $comentarios;

try {



$idCliente = $client->registrarCliente($rq );

$rqFac->idCliente = $idCliente;
$fac = $client->abrirFACViaWebSiteCliente($rqFac);

  

} catch ( Exception $e ) {
    echo "<h2>Erro:</h2>";
    echo "<h3>$wsdl_url </h3><pre>";
  echo $e->getMessage() . "<br>";
}
  
  
?>


