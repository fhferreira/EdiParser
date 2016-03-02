<?php
namespace EdiParser\Arquivo;

class DetalheCV extends LinhaAbstract
{

    /**
     * @var array
     */
    protected $posicoes = array(
        'dtVendaAjuste' => array('i' => 38, 't' => 8, 'type' => 'date'),
        'valor' => array('i' => 46, 't' => 14, 'type' => 'currency'),
        'tid' => array('i' => 73, 't' => 20),
        'parcela' => array('i' => 60, 't' => 2),
        'totalParcelas' => array('i' => 62, 't' => 2),
        'codigoAutorizacao' => array('i' => 67, 't' => 6),
        'nsuDoc' => array('i' => 93, 't' => 6),

    );

    /**
     * @var
     */
    protected $dtVendaAjuste;
    /**
     * @var
     */
    protected $valor;
    /**
     * @var
     */
    protected $tid;
    /**
     * @var
     */
    protected $parcela;
    /**
     * @var
     */
    protected $totalParcelas;
    /**
     * @var
     */
    protected $codigoAutorizacao;
    /**
     * @var
     */
    protected $nsuDoc;

    /**
     * @return mixed
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * @param mixed $parcela
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;
    }

    /**
     * @return mixed
     */
    public function getTotalParcelas()
    {
        return $this->totalParcelas;
    }

    /**
     * @param mixed $totalParcelas
     */
    public function setTotalParcelas($totalParcelas)
    {
        $this->totalParcelas = $totalParcelas;
    }

    /**
     * @return mixed
     */
    public function getCodigoAutorizacao()
    {
        return $this->codigoAutorizacao;
    }

    /**
     * @param mixed $codigoAutorizacao
     */
    public function setCodigoAutorizacao($codigoAutorizacao)
    {
        $this->codigoAutorizacao = $codigoAutorizacao;
    }

    /**
     * @return mixed
     */
    public function getNsuDoc()
    {
        return $this->nsuDoc;
    }

    /**
     * @param mixed $nsuDoc
     */
    public function setNsuDoc($nsuDoc)
    {
        $this->nsuDoc = $nsuDoc;
    }

    /**
     * @return mixed
     */
    public function getDtVendaAjuste()
    {
        return $this->dtVendaAjuste;
    }

    /**
     * @param \DateTime $dtVendaAjuste
     * @return $this
     */
    public function setDtVendaAjuste(\DateTime $dtVendaAjuste)
    {
        $this->dtVendaAjuste = $dtVendaAjuste;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param $tid
     * @return $this
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
        return $this;
    }


}