<?php
namespace EdiParser\Arquivo;

class Trailer extends LinhaAbstract
{
	/**
	 * @var array
     */
	protected $posicoes = array(
            'totalDeRegistros'=>array('i'=>2,'t'=>11)
    );

	/**
	 * @var
     */
	protected $totalDeRegistros;

	/**
	 * @return mixed
     */
	public function getTotalDeRegistros()
    {
        return $this->totalDeRegistros;
    }

	/**
	 * @param $totalDeRegistros
	 * @return $this
     */
	public function setTotalDeRegistros($totalDeRegistros)
    {
        $this->totalDeRegistros = (int)$totalDeRegistros;
        return $this;
    }
}
