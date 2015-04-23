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
        $this->load->model('relatorio');
        $this->load->model('usuario');
        $sucesso = true;
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        
        $questaoA = $_POST["a"];  // array 
        $questaoB = $_POST["b"];
        $questaoC = $_POST["c"];
        $questaoD = $_POST["d"];
        $questaoE = $_POST["e"];  // array
        $outros = $_POST["outros"];
            
        $usuario = array(
            "nome" => $nome,
            "email" => $email,
            "telefone" => $telefone
        );
        
        if($id = $this->usuario->gravar($usuario)) {
            $relatorio = array(
                "user_id" => $id,
                "QA" => implode(',', $questaoA),
                "QB" => $questaoB,
                "QC" => $questaoC,
                "QD" => $questaoD,
                "QE" => implode(',', $questaoE),
                "outro" => $outros
            );
            
            if($idrelatorio = $this->relatorio->gravar($relatorio)) {
                $sucesso = true;
            } else {
                $sucesso = false;
            }
        } else {
            $sucesso = false;
        }
        
        
        echo json_encode(array('sucesso'=>$sucesso, 'dados'=> ''));
        exit();
    }

    
}



