<?php
namespace EdiParser\Arquivo;

class DetalheRO extends LinhaAbstract
{
    /**
     * @var array
     */
    protected $posicoes = array(
            'numeroRO'=>array('i'=>12,'t'=>7),
            'tipoDeTransacao'=>array('i'=>24,'t'=>2),
            'dtPrevPagamento'=> array('i'=>32,'t'=>6,'type'=>'smalldate'),
            'valorBruto'=>array('i'=>44,'t'=>14,'type'=>'currency'),
            'valorComissao'=>array('i'=>58,'t'=>14,'type'=>'currency'),
            'valorRejeitado'=>array('i'=>72,'t'=>14,'type'=>'currency'),
            'valorLiquido'=> array('i'=>86,'t'=>14,'type'=>'currency'),
            'statusPagamento' => array('i'=>123,'t'=>2),
            'quantidadeCVs' => array('i'=>125,'t'=>6),
            'origemDoAjuste' => array('i'=>146,'t'=>2),
            'dtCaptura' =>array('i'=>140,'t'=>6,'type'=>'smalldate'),
            'codigoBandeira' => array('i'=>185,'t'=>3),
            'taxaDeComissao' => array('i'=>210,'t'=>4,'type'=>'currency'),
            'tarifa' => array('i'=>214,'t'=>5,'type'=>'currency'),
            'IdentificadorProduto'=> array('i'=>233,'t'=>3),
    );

    /**
     * @var array
     */
    protected $msgAjuste = array(
            '01' => 'Acerto de correção monetária',
            '02' => 'Acerto de data de pagamento',
            '03' => 'Acerto de taxa de comissão',
            '04' => 'Acerto de valores não processados',
            '05' => 'Acerto de valores não recebidos',
            '06' => 'Acerto de valores não reconhecidos',
            '07' => 'Acerto de valores negociados',
            '08' => 'Acerto de valores processados indevidamente',
            '09' => 'Acerto de lançamento não compensado em conta-corrente',
            '10' => 'Acerto referente valores contestados',
            '11' => 'Acerto temporário de valores contestados',
            '12' => 'Acertos diversos',
            '13' => 'Acordo de cobrança',
            '14' => 'Acordo jurídico',
            '15' => 'Aplicação de multa Programa Monitoria Chargeback',
            '16' => 'Bloqueio de valor por ordem judicial',
            '17' => 'Cancelamento da venda',
            '18' => 'Cobrança de tarifa operacional',
            '19' => 'Cobrança mensal Lynx Comércio',
            '20' => 'Cobrança Plano Cielo',
            '21' => 'Contrato de caução',
            '22' => 'Crédito de devolução do cancelamento - banco emissor',
            '23' => 'Crédito EC - referente contestação portador',
            '24' => 'Crédito por cancelamento rejeitado - Cielo',
            '25' => 'Processamento do débito duplicado - Visa Pedágio',
            '26' => 'Débito por venda realizada sem a leitura do chip',
            '27' => 'Débito por venda rejeitada no sistema - Cielo',
            '28' => 'Débito referente à contestação do portador',
            '29' => 'Estorno de acordo jurídico',
            '30' => 'Estorno de contrato de caução',
            '31' => 'Estorno de acordo de cobrança',
            '32' => 'Estorno de bloqueio de valor por ordem judicial',
            '33' => 'Estorno de cancelamento de venda',
            '34' => 'Estorno de cobrança de tarifa operacional',
            '35' => 'Estorno de cobrança mensal Lynx Comércio',
            '36' => 'Estorno de cobrança Plano Cielo',
            '37' => 'Estorno de débito venda sem a leitura do Chip',
            '38' => 'Estorno de incentivo comercial',
            '39' => 'Estorno de Multa Programa Monitoria Chargeback',
            '40' => 'Estorno de rejeição ARV',
            '41' => 'Estorno de reversão de duplicidade do pagamento - ARV',
            '42' => 'Estorno de tarifa de cadastro',
            '43' => 'Estorno de extrato no papel',
            '44' => 'Estorno de processamento duplicado de débito - Visa Pedágio',
            '45' => 'Incentivo comercial',
            '46' => 'Incentivo por venda de Recarga',
            '47' => 'Regularização de rejeição ARV',
            '48' => 'Reversão de duplicidade do pagamento - ARV',
            '49' => 'Tarifa de cadastro',
            '50' => 'Tarifa de extrato no papel',
            '51' => 'Aceleração de débito de antecipação',
            '52' => 'Débito por descumprimento de cláusula contratual',
            '53' => 'Débito por cancelamento de venda',
            '54' => 'Débito por não reconhecimento de compra',
            '55' => 'Débito por venda com cartão com validade vencida',
            '56' => 'Débito por não reconhecimento de compra',
            '57' => 'Débito por cancelamento e/ou devolução dos serviços',
            '58' => 'Débito por transação irregular',
            '59' => 'Débito por não entrega da mercadoria',
            '60' => 'Débito por serviço não prestado',
            '61' => 'Débito efetuado por venda sem código de autorização',
            '62' => 'Débito efetuado por venda com número de cartão inválido',
            '63' => 'Débito por cópia de CV e/ou documento não atendido',
            '64' => 'Débito por venda efetuada com autorização negada',
            '65' => 'Débito por envio de CV e/ou documento ilegível',
            '66' => 'Débito por venda efetuada sem leitura de chip',
            '67' => 'Débito por venda em outra moeda',
            '68' => 'Débito por venda processada incorretamente',
            '69' => 'Débito por cancelamento de venda',
            '70' => 'Débito por crédito em duplicidade',
            '71' => 'Débito por documentos solicitados e não recebidos',
            '72' => 'Débito por envio de CV e/ou documento incorreto',
            '73' => 'Débito por envio de CV e/ou documento fora do prazo',
            '74' => 'Débito por não reconhecimento de despesa',
            '75' => 'Débito por documentação solicitada incompleta',
            '76' => 'Débito por estabelecimento não possui CV e/ou Doc.',
            '77' => 'Programa de monitoria de chargeback',
            '78' => 'Serviços Score',
            '79' => 'Reagendamento do débito de antecipação',
            '80' => 'Ajuste do débito de cessão'
    );

    /**
     * @var array
     */
    protected $bandeiras = array(
        0 => "",
        "001" => "VISA",
        "002" => "Mastercard",
        "006" => "SoroCred",
        "007" => "ELO",
        "009" => "Diners",
        "011" => "Agiplan",
        "015" => "Banescard",
        "023" => "Cabal",
        "029" => "Credsystem",
        "035" => "Esplanada",
        "064" => "Credz",
    );

    /**
     * @var array
     */
    protected $produtos = array(
        "001" => "Agiplan crédito à vista",
        "002" => "Agiplan parcelado loja",
        "003" => "Banescard crédito à vista",
        "004" => "Banescard parcelado loja",
        "005" => "Esplanada crédito à vista",
        "006" => "Credz crédito à vista",
        "007" => "Esplanada parcelado loja",
        "008" => "Credz parcelado loja",
        "009" => "Elo Crediário",
        "010" => "Mastercard crédito à vista",
        "011" => "Maestro",
        "012" => "Mastercard parcelado loja",
        "013" => "Elo Construcard",
        "014" => "Elo Agro Débito",
        "015" => "Elo Agro Custeio",
        "016" => "Elo Agro Investimento",
        "017" => "Elo Agro Custeio + Débito",
        "018" => "Elo Agro Investimento + Débito",
        "019" => "Discover crédito à vista",
        "020" => "Diners crédito à vista",
        "021" => "Diners parcelado loja",
        "022" => "Agro Custeio + Electron",
        "023" => "Agro Investimento + Electron",
        "024" => "FCO Investimento",
        "025" => "Agro Electron",
        "026" => "Agro Custeio",
        "027" => "Agro Investimento",
        "028" => "FCO Giro",
        "033" => "JCB",
        "036" => "Saque com cartão de Débito VISA",
        "037" => "Flex Car Visa Vale",
        "038" => "Credsystem crédito à vista",
        "039" => "Credsystem parcelado loja",
        "040" => "Visa crédito à vista",
        "041" => "Visa Electron Débito à vista",
        "042" => "Visa Pedágio",
        "043" => "Visa Parcelado Loja",
        "044" => "Visa Electron Pré-Datado",
        "045" => "Alelo Refeição (Bandeira Visa/Elo)",
        "046" => "Alelo Alimentação (Bandeira Visa/Elo)",
        "058" => "Elo Cultura",
        "059" => "Alelo Auto",
        "061" => "Sorocred crédito à vista",
        "062" => "Sorocred parcelado loja",
        "064" => "Visa Crediário",
        "065" => "Alelo Refeição (Bandeira Elo)",
        "066" => "Alelo Alimentação (Bandeira Elo)",
        "067" => "Visa Capital de Giro",
        "068" => "Visa crédito Imobiliário",
        "069" => "Cultura Visa Vale",
        "070" => "Elo crédito",
        "071" => "Elo Débito a Vista",
        "072" => "Elo Parcelado Loja",
        "079" => "Pagamento Carn? Visa Electron",
        "080" => "Visa crédito Conversor de Moeda*Produtos disponíveis em Abril/2014",
        "081" => "Elo crédito Especializado***C?digos referentes aos cartões Construcard, Minha Casa Melhor, Producard e Moveiscard",
        "089" => "Elo crédito Imobiliário",
        "091" => "Mastercard crédito Especializado***C?digos referentes aos cartões Construcard, Minha Casa Melhor, Producard e Moveiscard",
        "094" => "Banescard Débito",
        "096" => "Cabal crédito à vista",
        "097" => "Cabal Débito",
        "098" => "Cabal parcelado loja",
        "342" => "Master Pedágio**Produtos disponíveis em Julho/2014",
        "377" => "Elo Carnê**Produtos disponíveis em Julho/2014",
        "378" => "Master Carnê**Produtos disponíveis em Julho/2014",
        "380" => "Mastercard crédito Conversor de Moeda*Produtos disponíveis em Abril/2014",
    );

    /**
     * @param $codigoBandeira
     * @return mixed
     */
    public function getBandeira($codigoBandeira)
    {
        return $this->bandeiras[$codigoBandeira];
    }

    /**
     * @var
     */
    protected $numeroRO;

    /**
     * @return mixed
     */
    public function getNumeroRO()
    {
        return $this->numeroRO;
    }

    /**
     * @param mixed $numeroRO
     */
    public function setNumeroRO($numeroRO)
    {
        $this->numeroRO = $numeroRO;
    }

    /**
     * @var
     */
    protected $IdentificadorProduto;

    /**
     * @return mixed
     */
    public function getIdentificadorProduto()
    {
        return $this->IdentificadorProduto;
    }

    /**
     * @param mixed $IdentificadorProduto
     */
    public function setIdentificadorProduto($IdentificadorProduto)
    {
        $this->IdentificadorProduto = $IdentificadorProduto;
    }

    /**
     * @param null $IdentificadorProduto
     * @return mixed
     */
    public function getIdentificadorProdutoDesc($IdentificadorProduto = null)
    {
        return $this->produtos[$IdentificadorProduto ? $IdentificadorProduto : $this->IdentificadorProduto];
    }

    /**
     * @var
     */
    protected $quantidadeCVs;

    /**
     * @return mixed
     */
    public function getQuantidadeCVs()
    {
        return $this->quantidadeCVs;
    }

    /**
     * @param mixed $quantidadeCVs
     */
    public function setQuantidadeCVs($quantidadeCVs)
    {
        $this->quantidadeCVs = $quantidadeCVs;
    }

    /**
     *
     */
    const TRANSACAO_VENDA = 1;
    /**
     *
     */
    const TRANSACAO_AJUSTE_CREDITO = 2;
    /**
     *
     */
    const TRANSACAO_AJUSTE_DEBITO = 3;
    /**
     *
     */
    const TRANSACAO_PACOTE_CIELO = 4;
    /**
     *
     */
    const TRANSACAO_REAGENDAMENTO = 5;

    /**
     *
     */
    const PAGAMENTO_AGENDADO = 0;
    /**
     *
     */
    const PAGAMENTO_PAGO = 1;
    /**
     *
     */
    const PAGAMENTO_ENVIADO_BANCO = 2;
    /**
     *
     */
    const PAGAMENTO_A_CONFIRMAR = 3;


    /**
     * @var array
     */
    protected $detalhesCV = array();


    /**
     * @var
     */
    protected $tipoDeTransacao;
    /**
     * @var
     */
    protected $statusPagamento;
    /**
     * @var
     */
    protected $valorBruto;
    /**
     * @var
     */
    protected $valorComissao;
    /**
     * @var
     */
    protected $valorRejeitado;
    /**
     * @var
     */
    protected $valorLiquido;
    /**
     * @var
     */
    protected $dtPrevPagamento;
    /**
     * @var
     */
    protected $dtCaptura;

    /**
     * @var
     */
    protected $origemDoAjuste;

    /**
     * @var
     */
    protected $tarifa;
    /**
     * @var
     */
    protected $taxaDeComissao;

    /**
     * @var
     */
    protected $codigoBandeira;

    /**
     * @return mixed
     */
    public function getCodigoBandeira()
    {
        return $this->codigoBandeira;
    }

    /**
     * @param mixed $codigoBandeira
     */
    public function setCodigoBandeira($codigoBandeira)
    {
        $this->codigoBandeira = $codigoBandeira;
    }

    /**
     * @param DetalheCV $detalheCV
     */
    public function addDetalheCV(DetalheCV $detalheCV)
    {
        $this->detalhesCV[] = $detalheCV;
    }

    /**
     * @return mixed
     */
    public function getTipoDeTransacao()
    {
        return $this->tipoDeTransacao;
    }

    /**
     * @param $tipoDeTransacao
     * @return $this
     * @throws \Exception
     */
    public function setTipoDeTransacao($tipoDeTransacao)
    {
        $tipoDeTransacao = (int)$tipoDeTransacao;
        if (!in_array($tipoDeTransacao, array(self::TRANSACAO_AJUSTE_CREDITO, self::TRANSACAO_AJUSTE_DEBITO,
                                             self::TRANSACAO_PACOTE_CIELO, self::TRANSACAO_REAGENDAMENTO,
                                             self::TRANSACAO_VENDA))) {
            throw new \Exception("Tipo de transação '$tipoDeTransacao' inválido");
        }
        
        $this->tipoDeTransacao = $tipoDeTransacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusPagamento()
    {
        return $this->statusPagamento;
    }

    /**
     * @param $statusPagamento
     * @return $this
     * @throws \Exception
     */
    public function setStatusPagamento($statusPagamento)
    {
        $statusPagamento = (int)$statusPagamento;
        if (!in_array($statusPagamento, array(self::PAGAMENTO_A_CONFIRMAR, self::PAGAMENTO_AGENDADO,
                self::PAGAMENTO_ENVIADO_BANCO, self::PAGAMENTO_PAGO))) {
            throw new \Exception("Status do Pagamento '$statusPagamento' inválido");
        }
        
        $this->statusPagamento = $statusPagamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorBruto()
    {
        return $this->valorBruto;
    }

    /**
     * @param $valorBruto
     * @return $this
     */
    public function setValorBruto($valorBruto)
    {
        $this->valorBruto = $valorBruto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorComissao()
    {
        return $this->valorComissao;
    }

    /**
     * @param $valorComissao
     * @return $this
     */
    public function setValorComissao($valorComissao)
    {
        $this->valorComissao = $valorComissao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorRejeitado()
    {
        return $this->valorRejeitado;
    }

    /**
     * @param $valorRejeitado
     * @return $this
     */
    public function setValorRejeitado($valorRejeitado)
    {
        $this->valorRejeitado = $valorRejeitado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorLiquido()
    {
        return $this->valorLiquido;
    }

    /**
     * @param $valorLiquido
     * @return $this
     */
    public function setValorLiquido($valorLiquido)
    {
        $this->valorLiquido = $valorLiquido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtPrevPagamento()
    {
        return $this->dtPrevPagamento;
    }

    /**
     * @param \DateTime $dtPrevPagamento
     * @return $this
     */
    public function setDtPrevPagamento(\DateTime $dtPrevPagamento)
    {
        $this->dtPrevPagamento = $dtPrevPagamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtCaptura()
    {
        return $this->dtCaptura;
    }

    /**
     * @param \DateTime $dtCaptura
     * @return $this
     */
    public function setDtCaptura(\DateTime $dtCaptura)
    {
        $this->dtCaptura = $dtCaptura;
        return $this;
    }

    /**
     * @return array
     */
    public function getDetalhesCV()
    {
        return $this->detalhesCV;
    }

    /**
     * @return mixed
     */
    public function getOrigemDoAjuste()
    {
        return $this->origemDoAjuste;
    }

    /**
     * @param $origemDoAjuste
     * @return $this
     */
    public function setOrigemDoAjuste($origemDoAjuste)
    {
        $this->origemDoAjuste = $origemDoAjuste;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAjuste()
    {
        return (trim($this->getOrigemDoAjuste()) != '');
    }

    /**
     * @return string
     */
    public function getMsgAjuste()
    {
        if (!$this->isAjuste()) {
            return '';
        }
        return $this->msgAjuste[$this->getOrigemDoAjuste()];
    }

    /**
     * @return mixed
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * @param $tarifa
     * @return $this
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxaDeComissao()
    {
        return $this->taxaDeComissao;
    }

    /**
     * @param $taxaDeComissao
     * @return $this
     */
    public function setTaxaDeComissao($taxaDeComissao)
    {
        $this->taxaDeComissao = $taxaDeComissao;
        return $this;
    }

    /*
    public $schema = array(
        array( "propriedade" => "tipo_registro", "ini" => "001", "fim" => "001", "tamanho" => "1" , "tipo" => "Num.", "descricao" => "Tipo de Registro Constante “1” - Identifi ca o tipo de registro detalhe do RO."),
        array( "propriedade" => "estabelecimento", "ini" => "002", "fim" => "011", "tamanho" => "10", "tipo" => "Num.", "descricao" => "Estabelecimento Submissor Número do estabelecimento e/ou fi lial onde a venda foi realizada."),
        array( "propriedade" => "numero_RO", "ini" => "012", "fim" => "018", "tamanho" => "7" , "tipo" => "Num.", "descricao" => "Número RO Número do resumo de operação ou número do lote. Contêm informações referentes a um grupo de vendas em uma determinada data."),
        array( "propriedade" => "parcela", "ini" => "019", "fim" => "020", "tamanho" => "2" , "tipo" => "Alfa", "descricao" => "Parcela No caso de venda parcelada, será formatado com o número da parcela que está sendo liberado na data do envio do arquivo. No caso de venda à vista, será formatado com brancos."),
        array( "propriedade" => "filler", "ini" => "021", "fim" => "021", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Filler “/” = para vendas parceladas. “a” = aceleração das parcelas. “ “ = demais situações."),
        array( "propriedade" => "plano", "ini" => "022", "fim" => "023", "tamanho" => "2" , "tipo" => "Alfa", "descricao" => "Plano No caso de venda parcelada, será formatado com o maior número de parcelas encontradas naquele grupo de vendas. Se o RO tiver vendas em 03, 04 ou 06 parcelas, será preenchido com 06. Se for uma aceleração de parcelas, será formatado com a maior parcela acelerada. Exemplo: (posições 019 a 023) 02A02 - indica a aceleração da parcela 02 até a 02, ou seja, somente uma parcela. 03A08 - indica a aceleração da parcela 03 até a parcela 08 do plano da venda, ou seja, foram aceleradas 06 parcelas.No caso de venda à vista, será formatado com brancos."),
        array( "propriedade" => "tipo_transacao", "ini" => "024", "fim" => "025", "tamanho" => "2" , "tipo" => "Num.", "descricao" => "Tipo de Transação Código que identifi ca a transação - vide Tabela II."),
        array( "propriedade" => "data_apresentacao", "ini" => "026", "fim" => "031", "tamanho" => "6" , "tipo" => "ShortDate", "descricao" => "Data de apresentação AAMMDD - Data em que o RO/Lote de vendas foi transmitido para a Cielo."),
        array( "propriedade" => "data_prevista_pagamento", "ini" => "032", "fim" => "037", "tamanho" => "6" , "tipo" => "ShortDate", "descricao" => "Data prevista de pagamento AAMMDD - Data prevista de pagamento. Na recuperação, pode ser atualizada após o processamento da transação ou ajuste."),
        array( "propriedade" => "data_envio_banco", "ini" => "038", "fim" => "043", "tamanho" => "6" , "tipo" => "ShortDate", "descricao" => "Data de envio para o banco AAMMDD - Data em que o arquivo de pagamento foi enviado ao banco. Na recuperação, pode ser atualizada após o processamento da transação ou ajuste."),
        array( "propriedade" => "sinal_valor_bruto", "ini" => "044", "fim" => "044", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Sinal do valor bruto “+” identifi ca valor a crédito. “-” identifi ca valor a débito."),
        array( "propriedade" => "valor_bruto_somatorio", "ini" => "045", "fim" => "057", "tamanho" => "13", "tipo" => "Decimal", "descricao" => "Valor bruto (*) Somatória dos valores de venda para EC/lote."),
        array( "propriedade" => "sinal_comissao", "ini" => "058", "fim" => "058", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Sinal da comissão “+” identifi ca valor a crédito. “-” identifi ca valor a débito."),
        array( "propriedade" => "valor_comissao", "ini" => "059", "fim" => "071", "tamanho" => "13", "tipo" => "Decimal", "descricao" => "Valor da comissão (*) Valor da comissão descontada sobre as vendas."),
        array( "propriedade" => "sinal_valor_rejeitado", "ini" => "072", "fim" => "072", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Sinal do valor rejeitado “+” identifi ca valor a crédito. “-” identifi ca valor a débito."),
        array( "propriedade" => "valor_rejeitado", "ini" => "073", "fim" => "085", "tamanho" => "13", "tipo" => "Decimal", "descricao" => "Valor rejeitado (*) Se houver rejeição, será preenchido com a somatória das transações rejeitadas."),
        array( "propriedade" => "sinal_valor_liquido", "ini" => "086", "fim" => "086", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Sinal do valor líquido “+” identifi ca valor a crédito. “-” identifi ca valor a débito."),
        array( "propriedade" => "valor_liquido", "ini" => "087", "fim" => "099", "tamanho" => "13", "tipo" => "Decimal", "descricao" => "Valor líquido (*) Valor das vendas deduzido o valor da comissão."),
        array( "propriedade" => "codigo_banco", "ini" => "100", "fim" => "103", "tamanho" => "4" , "tipo" => "Num ", "descricao" => "Banco Código do banco no qual foi feito o pagamento."),
        array( "propriedade" => "agencia_codigo", "ini" => "104", "fim" => "108", "tamanho" => "5" , "tipo" => "Num ", "descricao" => "Agência Código da agência na qual foi feito o pagamento."),
        array( "propriedade" => "conta_corrente", "ini" => "109", "fim" => "122", "tamanho" => "14", "tipo" => "Alfa", "descricao" => "Conta-corrente Conta-corrente na qual foi feito o pagamento."),
        array( "propriedade" => "status_pagamento", "ini" => "123", "fim" => "124", "tamanho" => "02", "tipo" => "Num ", "descricao" => "Status do pagamento Identifi ca a situação em que se encontram os créditos enviados ao banco na data da geração do arquivo - vide tabela III. Na recuperação, o status é atualizado de acordo com o envio e retorno de confi rmação de pagamento por parte do banco."),
        array( "propriedade" => "quantidade_cvs", "ini" => "125", "fim" => "130", "tamanho" => "6" , "tipo" => "Num ", "descricao" => "Quantidade de CVs aceitos Quantidades de vendas aceitas no RO."),
        array( "propriedade" => "identificador_produto", "ini" => "131", "fim" => "132", "tamanho" => "2" , "tipo" => "Num ", "descricao" => "Identifi cador do Produto (Até 28/02/2014) A partir de 10/11/2013, o Identifi cador do produto passa a ser enviado nas posições 233-235 com três caracteres. Após 28/02/2014, desconsidere a informação enviada nesta posição, 131-132, com apenas dois caracteres."),
        array( "propriedade" => "quantidade_cvs_rejeitados", "ini" => "133", "fim" => "138", "tamanho" => "6" , "tipo" => "Num.", "descricao" => "Quantidades de CVs rejeitados Quantidade de vendas rejeitadas no RO."),
        array( "propriedade" => "identificador_revenda", "ini" => "139", "fim" => "139", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Identifi cador de revenda/aceleração Identifi ca as ocorrências de manutenção em transações parceladas na loja: “R” - Revenda; “A” - Aceleração; “ “ - Brancos. "),
        array( "propriedade" => "data_captura", "ini" => "140", "fim" => "145", "tamanho" => "6" , "tipo" => "ShortDate", "descricao" => "Data da captura de transação AAMMDD - Data em que a transação foi capturada na agenda fi nanceira da Cielo. Na recuperação, pode ser atualizada após o processamento da transação ou ajuste."),
        array( "propriedade" => "origem_ajuste", "ini" => "146", "fim" => "147", "tamanho" => "2" , "tipo" => "Alfa", "descricao" => "Origem do ajuste Identifi ca o tipo de ajuste - Tabela V. Preenchido se o tipo de transação: 03 = Ajuste débito; 02 = Ajuste crédito; 04 = Ajuste aluguel."),
        array( "propriedade" => "valor_complementar", "ini" => "148", "fim" => "160", "tamanho" => "13", "tipo" => "Decimal", "descricao" => "Valor complementar Valor do saque quando o produto for igual a “36” ou valor do Agro Electron para transações dos produtos “22”, “23” ou “25” apresentados na Tabela IV."),
        array( "propriedade" => "identificador_produto", "ini" => "161", "fim" => "161", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Identifi cador de produto fi nanceiro Identifi cador de antecipação do RO: “ “ - Não antecipado; “A” - Antecipado na Cielo - ARV; “C” - Antecipado no banco - Cessão de Recebíveis. "),
        array( "propriedade" => "numero_operacao_financeira", "ini" => "162", "fim" => "170", "tamanho" => "9" , "tipo" => "Num ", "descricao" => "Número da operação financeira Identifi ca o número da operação fi nanceira apresentada no registro tipo 5 - campo 12 ao 20, associada ao RO antecipado/cedido na Cielo ou no banco. É o mesmo número apresentado no registro tipo 5 no arquivo de ARV ou Cessão de Recebíveis. Conterá zeros caso o RO não tenha sido antecipado."),
        array( "propriedade" => "sinal_valor_bruto_antecipado", "ini" => "171", "fim" => "171", "tamanho" => "1" , "tipo" => "Alfa", "descricao" => "Sinal do valor Bruto Antecipado “+” identifi ca valor a crédito. “-” identifi ca valor a débito."),
        array( "propriedade" => "valor_bruto_antecipado", "ini" => "172", "fim" => "184", "tamanho" => "13", "tipo" => "Decimal", "descricao" => "Valor bruto Antecipado (*) Valor bruto antecipado, fornecido quando RO for antecipado/cedido. Será preenchido com zero quando não houver antecipação. O valor bruto antecipado corresponde ao valor liquido RO."),
        array( "propriedade" => "codigo_bandeira", "ini" => "185", "fim" => "187", "tamanho" => "3" , "tipo" => "Num ", "descricao" => "Código da Bandeira Código da Bandeira - vide tabela VI."),
        array( "propriedade" => "numero_unico_RO", "ini" => "188", "fim" => "209", "tamanho" => "22", "tipo" => "Num.", "descricao" => "Número Único do RO Número Único de identifi cação do RO formatado da seguinte forma: Primeira parte (fi xa) - 15 posições fi xas: identifi ca o resumo mantendo o seu histórico na Cielo; Segunda parte (variável) - 07 posições variáveis: Identifi ca as alterações realizadas no RO.210 213 4 Num. Taxa de Comissão (*) Percentual de comissão aplicado no valor da transação."),
        array( "propriedade" => "tarifa_cobrada", "ini" => "214", "fim" => "218", "tamanho" => "5" , "tipo" => "Num ", "descricao" => "Tarifa (*) (**) Tarifa cobrada por transação."),
        array( "propriedade" => "taxa_garantia", "ini" => "219", "fim" => "222", "tamanho" => "4" , "tipo" => "Num.", "descricao" => "Taxa de garantia (*) (**) Percentual de desconto aplicado sobre transações Electron Pré-Datado."),
        array( "propriedade" => "meio_captura", "ini" => "223", "fim" => "224", "tamanho" => "2" , "tipo" => "Alfa", "descricao" => "Meio de Captura Vide tabela VII.Caso a venda tenha sido reprocessada por algum motivo, o sistema enviará o meio de captura 06: Meio de captura manual; neste caso desconsiderar o valor informado no número lógico do terminal. Campo não disponível para vendas a débito no arquivo de pagamento diário e segunda parcela em diante das vendas parceladas no arquivo pagamento diário e recuperado."),
        array( "propriedade" => "numero_logico", "ini" => "225", "fim" => "232", "tamanho" => "8" , "tipo" => "Alfa", "descricao" => "Número lógico do terminal Número lógico do terminal onde foi efetuada a venda. Quando o meio de captura for igual a 06, desconsiderar o número lógico do terminal, pois este será um número interno da Cielo."),
        array( "propriedade" => "identificador_produto_vide_tabela", "ini" => "233", "fim" => "235", "tamanho" => "3" , "tipo" => "Num.", "descricao" => "Identifi cador do Produto Código que identifi ca o produto - vide tabela IV. Desde 10/11/2013."),
        array( "propriedade" => "uso_cielo", "ini" => "236", "fim" => "250", "tamanho" => "15", "tipo" => "Alfa", "descricao" => "Uso Cielo Uso Cielo."),
    );
    */
}
