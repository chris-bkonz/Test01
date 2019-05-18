<?php declare(strict_types=1);
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', '1');

class Supplier
{
    /**
     * @var string
     */
    private $name;

    /**
     * Supplier constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

class Product
{
    /**
     * Properties
     */

    /**
     * @var string
     */
    private $articleNumber;

    /**
     * @var string
     */
    private $name; // property

    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * Der Konstruktor wird immer EINMAL bei der Inititalisierung
     * ausgeführt (new Product())
     */
    public function __construct($articleNumber)
    {
        $this->articleNumber = $articleNumber;
    }

    public function setName($nameParam) // method
    {
        /**
         * 1. $nameParam ist "aspein"
         * 2. Methode cleanString wird aufgerufen mit Parameter $string = "aspein"
         * 3. "Aspein" wird von cleanString zurückgegeben
         * 4. "Aspein" wird $this->name, also dem property $name zugewiesen
         */
        $this->name = $this->cleanString($nameParam);
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @param string $articleNumber
     */
    public function setArticleNumber(string $articleNumber): void
    {
        $this->articleNumber = $articleNumber;
    }

    /**
     * @return Supplier
     */
    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }

    /**
     * @param Supplier $supplier
     */
    public function setSupplier(Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }

    private function cleanString($string)
    {
        return ucfirst($string);
    }
}

$myArticleNumber = 'AN-20454';

$supplier = new Supplier('BAYER');

$product01 = new Product($myArticleNumber);
$product02 = new Product('AN-20455');

$product01->setName('aspein');
$product01->setSupplier($supplier);

/**
 * 1. $product01 ist vom Typ Product
 * 2. $product01->getSupplier() gibt ein Object vom Typ Supplier zurück
 * 3. $product01->getSupplier()->getName() gibt den Namen vom Typ string zurück (Supplier::getName())
 */
echo $product01->getSupplier()->getName();

