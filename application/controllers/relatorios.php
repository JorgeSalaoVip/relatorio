<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller {

  
    public function __construct()
    {
            parent::__construct();

            $this->dataHeader =
            array(
                    'titulo' => 'Relatório para Salão de Beleza - SalãoVIP',
                    'description' => 'Relatório para salão de beleza, gestão de agenda, cadastro de clientes, controle financeiro, gestão de estoque e ferramentas de marketing',
                    'keywords' => 'Relatório para salão, sistema para salão, software salão, agendamento online, marketing para salão, site para salão',
                    'css' => array()
            );

            $this->dataFooter =
            array(
                    'js' => array(),
                    'alerta' => ''
            );
    }

    public function index()
    {

        $data = array();


        $this->load->view('relatorio-salao.php',$data);

    }

    public function gerarRelatorio() {

        exit('feffregr');

        $json = json_decode($_POST['data']);
        $dados = array();
        $sucesso = true;

        //$this->load->view("administracao/financeiro/comanda/".$json->view, $dados);

    }

    public function passo1()
    {
            foreach($_POST as $k => $v){ $$k = $v; }

            if( !salaoIgualAUrl(TS_URL) ){ 

                $this->load->library('email');
                $this->email->from(EMAIL_CONTATO, 'SalãoVIP');
                $this->email->to(EMAIL_CONTATO);
                //$this->email->to($email);
                //$this->email->cc('fernanda.greggio@salaovip.com.br');

                $this->email->subject('Salão VIP - Cadastro de Parceiro ');

                $dataEmail['titulo'] = 'Entraram em contato pelo site';
                $dataEmail['campos'] = array(
                        'Email' => $email,
                        'Salão' => $nome,
                        'Responsável' => $responsavel,
                        'Telefone' => $telefone,
                        'CPF/CNPJ' => $documento,
                        'Código Promocional' => $cod_promo
                );

                $this->email->message($this->load->view('emails/custom_email.php',$dataEmail,TRUE));
                $email2 = $this->email->send();
            } else {
                $email2 = 1;
            }

            if($email2==1){
                    $erroCode = 's010';
                    $sucesso = true;
            } else {
                    $erroCode = 'e000';
                    $sucesso = false;
            }
            echo json_encode(array('sucesso'=>$sucesso,'msg'=>getMensagemPorCodigo($erroCode)));
            exit();
    }	

    public function grava(){
            $msg = '';
            $salaoId = '';
            $erroCode = 'e010'; 
            $sucesso = false; 

            $this->load->model('saloes_model');
            $_POST['id'] = 0;
            $_POST['str_acesso'] = 'master';
            $_POST['tipo_contrato'] = 1;

            list($sucesso,$erroCode,$salaoId) = $this->saloes_model->buscarPorSlug($_POST['slug']);
            if($sucesso){
                    $sucesso = false;
                    $msg = "Já existe um estabelecimento com esse link.";
            } else {
                    $sucesso = false;
                    $_POST['tipo_contrato'] = 0;
                    $_POST['portal'] = 0;
                    list($sucesso,$erroCode,$salaoId) = $this->saloes_model->gravaAtualliza($_POST);

                    if($sucesso){
                            $this->load->model('profissionais_model');
                            $this->load->model('salao_cliente_model');

                            $dadosCliente = array(
                                'id' => 0,
                                'salao_id' => $salaoId,
                                'cliente' => 1,
                                'sms_mkt' => 1,
                                'email_mkt' => 1, 
                                'nome' => $_POST['responsavel'],
                                'email' => $_POST['email'],
                                'celular' => $_POST['telefone']
                            );
                            $this->salao_cliente_model->cadastra($dadosCliente);

                            $gravaProfissional = array(
                                    'id' => 0,
                                    'salao_id' => $salaoId,
                                    'nome' => $_POST['responsavel'],
                                    'email' => $_POST['email'],
                                    'status_agenda' => 1
                            );				
                            list($sProf,$codProf,$profId) = $this->profissionais_model->grava($gravaProfissional);

                            $this->load->model('salao_acessos_model');
                            $acessoDados = array(
                                    'salao_id' => $salaoId,
                                    'profissional_id' => $profId,
                                    'email'	 => $_POST['email'],
                                    'senha'	 => $_POST['senha'],
                                    'acesso'	 => 'master',
                                    'status'	 => 1,
                            );
                            list($sAcesso,$codAcesso,$acesso) = $this->salao_acessos_model->cadastrar($acessoDados);

                            $_POST['id'] = $salaoId;

                            foreach($_POST as $k => $v){ $$k = $v; }

                            if( !salaoIgualAUrl(TS_URL) ){ 
                                $this->load->library('email');
                                $this->email->from(EMAIL_CONTATO, 'SalãoVIP');
                                $this->email->to($email);
                                $this->email->subject('Bem-Vindo ao Sistema do SalãoVIP!');
                                $dataEmail = array(
                                        'email' => $email,
                                        'nome' => $responsavel,
                                        'salao' => $nome,
                                        'slug' => $slug,
                                );
                                $this->email->message($this->load->view('emails/bemvindo_email.php',$dataEmail,TRUE));
                                $email = $this->email->send();

                                $this->load->library('pipedrive');

                                $data = array("name" => $nome, 
                                          "80fd3bfa3cdf3bb53bc8c4cffab3ed4186331d0a" => $slug, //PÁGINA
                                );
                                $organizacao = $this->pipedrive->insert('organizations',$data);

                                $organizacao_id = isset($organizacao->data->id) ? $organizacao->data->id : 0;

                                $data = array("name" => $responsavel, 
                                                          "org_id" => $organizacao_id, 
                                                          "email" => $email,
                                                          "phone" => $telefone
                                );
                                $pessoa = $this->pipedrive->insert('persons',$data);

                                $pessoa_id = isset($pessoa->data->id) ? $pessoa->data->id : 0;

                                $data = array("title" => "Site - $nome", 
                                                          "value" => "89.90",
                                                          "org_id" => $organizacao_id,
                                                          "person_id" => $pessoa_id,
                                );
                                $negocio = $this->pipedrive->insert('deals',$data);

                                $negocio_id = isset($negocio->data->id) ? $negocio->data->id : 0;

                                $data = array("subject" => "Apresentação e Marcar Treinamento", 
                                                          "done" => "0", 
                                                          "type" => "call", 
                                                          "due_date" => date('Y-m-d', strtotime("+2 days")),
                                                          "org_id" => $organizacao_id,
                                                          "person_id" => $pessoa_id,
                                                          "deal_id" => $negocio_id,
                                );
                                $atividade = $this->pipedrive->insert('activities',$data); 
                            }
                    }
                    $msg = getMensagemPorCodigo($erroCode).$msg;
            }
            $_POST['id'] = $salaoId;
            echo json_encode(array('sucesso'=>$sucesso,'msg'=>$msg,'salao'=>$_POST));
            exit();

    }


}



