<?php
namespace EdiParser\Arquivo;

class Header extends LinhaAbstract
{
	/**
	 * @var array
     */
	protected $posicoes = array(
        'estabelecimentoMatriz'=>array('i'=>2,'t'=>10),
        'dtProcessamento'=>array('i'=>12,'t'=>8,'type'=>'date'),
        'sequencia'=>array('i'=>36,'t'=>7),
        'opcaoDeExtrato' => array('i'=>48,'t'=>2)
    );

	/**
	 * @var
     */
	protected $estabelecimentoMatriz;
	/**
	 * @var
     */
	protected $dtProcessamento;
	/**
	 * @var
     */
	protected $sequencia;
	/**
	 * @var
     */
	protected $opcaoDeExtrato;

	/**
	 *
     */
	const EXTRATO_VENDA_COM_CV_MAIS_PARCELADO_FUTURO =3;
	/**
	 *
     */
	const EXTRATO_PAGAMENTO_COM_CV = 4;

	/**
	 * @return mixed
     */
	public function getEstabelecimentoMatriz()
    {
        return $this->estabelecimentoMatriz;
    }

	/**
	 * @param $estabelecimentoMatriz
	 * @return $this
     */
	public function setEstabelecimentoMatriz($estabelecimentoMatriz)
    {
        $this->estabelecimentoMatriz = $estabelecimentoMatriz;
        return $this;
    }

	/**
	 * @return mixed
     */
	public function getDtProcessamento()
    {
        return $this->dtProcessamento;
    }

	/**
	 * @param \DateTime $dtProcessamento
	 * @return $this
     */
	public function setDtProcessamento(\DateTime $dtProcessamento)
    {
        $this->dtProcessamento = $dtProcessamento;
        return $this;
    }

	/**
	 * @return mixed
     */
	public function getSequencia()
    {
        return $this->sequencia;
    }

	/**
	 * @param $sequencia
	 * @return $this
     */
	public function setSequencia($sequencia)
    {
        $this->sequencia = $sequencia;
        return $this;
    }

	/**
	 * @return mixed
     */
	public function getOpcaoDeExtrato()
    {
        return $this->opcaoDeExtrato;
    }

	/**
	 * @param $opcaoDeExtrato
	 * @return $this
	 * @throws \Exception
     */
	public function setOpcaoDeExtrato($opcaoDeExtrato)
    {
        $opcaoDeExtrato = (int)$opcaoDeExtrato;
        if (!in_array($opcaoDeExtrato, array(self::EXTRATO_PAGAMENTO_COM_CV/*, self::EXTRATO_VENDA_COM_CV_MAIS_PARCELADO_FUTURO*/))) {
            throw new \Exception("Opção de extrato '$opcaoDeExtrato' inválida");
        }
        
        $this->opcaoDeExtrato = $opcaoDeExtrato;
        return $this;
    }
}
